<?php
/**
* Helpers for the template file.
*/
$va->data['header'] = '<h1>Header: Varg</h1>';
$va->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$va->data['footer'] = '<p>Footer: &copy; VARG by Cecilia Zhang (cecilia.zhang@hotmail.se)</p>';


/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $va = CVarg::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($va->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($va->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($va->request, true)) . "</pre>";
  return $html;
}


/**
* Helpers for theming, available for all themes in their template files and functions.php.
* This file is included right before the themes own functions.php
*/

/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return CLydia::Instance()->request->base_url . trim($url, '/');
}

/**
* Return the current url.
*/
function current_url() {
  return CLydia::Instance()->request->current_url;
}