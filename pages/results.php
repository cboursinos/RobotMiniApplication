<?php
$result = file_get_contents("/");
$basicData = json_decode($basicData, true);
$basicData = ["title" => "Results Title"];
//if the page is missing rase 404 - for this Demo we set just a dummy value
if (empty($basicData))
{
    Return404();
}

// Generate texts ------------------------------------------------------------------------------------------------------
$head_text = "";
$body_text = "";


$description_en = "Test Description";

//create here dynamic your title
$title = "Dynamic Title";

$photo_url = "images/logo.png";
$page_url = "/";

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
$body_text .= "<div class=\"container\"><div class=\"row\"><div class=\"col-lg-12 text-left\">
<a href='".$settings['website']."/".$lang."'><img class=\"pull-right\" src=\"/images/logo.png\"></a>
<h1>".$title."</h1><h2>".$description."</h2><div class=\"row\">";
$body_text .= "<h2>".$basicData['title']."</h2>";
$body_text .= "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
 recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";
$body_text .= "</div></div></div></div>";