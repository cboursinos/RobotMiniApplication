<?php
require_once("db.class.php");
include("settings.php");
include("slugify.php");
include("functions.php");

//$db = new \Robot\DB($settings['db_settings']);

// Basic URL splitting (result is $url & $parameters) ------------------------------------------------------------------
$url = str_replace("/?", "?", $_SERVER['REQUEST_URI']);
$url = $redirect_url = explode("/", $url);
array_shift($url);
if (strpos($url[0], "?")>0){
    $querystring = explode("?", $url[0]);
    $url[0] = $querystring[0];
} else {
    $querystring = explode("?", $url[1]);
    $url[1] = $querystring[0];
}

parse_str($querystring[1], $parameters);

// Language detection --------------------------------------------------------------------------------------------------
$lang = filter_var($url[0], FILTER_SANITIZE_STRING);
if ($lang=="") {$lang = "en";}

// Basic routing -------------------------------------------------------------------------------------------------------
$element = filter_var($url[1], FILTER_SANITIZE_STRING);

switch ($element){
    case "results":
        $page = "results";
        $id = filter_var($url[2], FILTER_SANITIZE_NUMBER_INT);
        $id = 1;
        if(CheckForOldId($id)){
            Return302(GetRedirectUrl($id));
        }
        break;
    default:
        $page = "information";
        break;
}

include("pages/".$page.".php");

include("view/html.php");