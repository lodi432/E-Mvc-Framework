<?php

 function dnd ($data) {
   echo '<pre>';
   var_dump($data);
   echo '</pre>';
   die ();
 }

function sanitize ($diry) {
  return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
}