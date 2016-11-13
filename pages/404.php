<?php

// Generate texts ------------------------------------------------------------------------------------------------------
$head_text = "";
$body_text = "";

$title = "Title Site You have ".$settings['title'];
$description = "404 - NOT FOUND";

$photo_url = "logo of your site";
$page_url = $settings['website']."/".$lang;

// Generate tags -------------------------------------------------------------------------------------------------------
$head_text .= "<title>".$title."</title>
<meta name=\"description\" content=\"".$description."\">
<meta name=\"keywords\" content=\"".$title."\">
<meta property=\"og:title\" content=\"".$title."\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"".$page_url."\" />
<meta property=\"og:image\" content=\"".$photo_url."\" />
<meta property=\"og:site_name\" content=\"".$settings['title']."\" />
<meta property=\"og:description\" content=\"".$description."\" />
<meta property=\"fb:app_id\" content=\"".$settings['fb_app_id']."\" />
<link rel=\"schema.DC\" href=\"http://purl.org/dc/elements/1.1/\" />
<meta name=\"DC.title\" content=\"".$title."\" />
<meta name=\"DC.identifier\" content=\"".$page_url."\" />
<meta name=\"DC.description\" content=\"".$description."\" />
<meta name=\"DC.subject\" content=\"".$title."\" />
<meta name=\"DC.language\" scheme=\"utf-8\" content=\"en\" />
<link rel=\"image_src\" href=\"".$photo_url."\" />
<link href=\"".$page_url."\" rel=\"canonical\">
<meta name=\"twitter:url\" content=\"".$page_url."\">
<meta name=\"twitter:title\" content=\"".$title."\">
<meta name=\"twitter:description\" content=\"".$description."\">
<meta name=\"twitter:image\" content=\"".$photo_url."\">";

// Generate body -------------------------------------------------------------------------------------------------------
$body_text .= "<div class=\"container\">
<div class=\"row\"><div class=\"col-lg-12 text-left\">
<a href='".$settings['website']."/".$lang."'><img class=\"pull-right\" src=\"/images/logo.png\"></a>
<h1>".$settings['title']."</h1><h2>".$description."</h2>";
$body_text .= "</div></div></div>";