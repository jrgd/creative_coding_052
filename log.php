#!/usr/bin/php
<?php


// week number and year
$timestamp = time();
$day_ = date("l");
$week_n =  date("W");
$year_n = date("Y");

$file_name = "{$year_n}-{$week_n}-log.txt";
$file_path = "./logs/{$file_name}";

array_shift($argv); // pop out the first eleemnt of the array
$arguments_string = implode(' ', $argv); // concatenation
$text_log = "[{$timestamp}] {$arguments_string}\n";

echo $file_name.": ".$text_log;

if(file_exists($file_path)) {
  $existing_log_content = file_get_contents($file_path);
  $updated_log_content = $text_log.$existing_log_content; // most recent on top  
} else {
  $updated_log_content = $text_log; // most recent on top  
}

file_put_contents($file_path, $updated_log_content);