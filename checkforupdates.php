<?php

require_once('config.php');

if(isset($_GET['key']) && $_GET['key'] == $api_key){
  die(json_encode(array('isError' => '0', 'code' => '1', 'message' => 'An update is available', 'size' => '5000'))); 
} else {
  die(json_encode(array('isError' => '0', 'code' => '-1', 'message' => 'invalid API key', 'size' => '0')));
}
?>