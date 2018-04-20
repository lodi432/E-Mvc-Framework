<?php

 class Input {
   public static function sanitize ($diry){
     return htmlentities($diry,ENT_QUOTES,"UTF-8");
   }
   public static function get($input){
     if (isset($_POST[$input])){
       return self::sanitize($_POST[$input]);
     }else if(isset($_GET[$input])){
      return self::sanitize($_GET[$input]);
     }
   }
 }
