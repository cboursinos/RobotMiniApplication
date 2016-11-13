<?php

function Return404(){
    global $settings;
    http_response_code(404);
    include("pages/404.php");
    include("view/html.php");
    exit;
}

function Return301($new_url){
    global $settings;
    http_response_code(301);
    include("pages/301.php");
    exit;
}

function Return302($new_url){
    global $settings;
    http_response_code(302);
    include("pages/302.php");
    exit;
}

function Debug($element){
    print "<pre>";
    print_r($element);
    print "</pre>";
}

function CheckForOldId($id){
    // if you have ids that changing create here a check for the redirection
    return false;
}

function GetRedirectUrl($id){
    $redirect_url = '';
    return $redirect_url;
}