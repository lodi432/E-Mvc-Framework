<?php

define ('DEBUG', true);
define ('DB_NAME','dbwrapper'); //database name
define ('DB_USER','root'); //database user
define ('DB_PASSWORD',''); //database user
define ('DB_HOST','127.0.0.1'); //database host ***use IP Address to avoid DNS lookup
define('DEFAULT_CONTROLLER', 'Home'); // default controller if there isn't one defined in the url
define ('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller use this layout

define ('PUTANJA', '/Emvc/'); //set this to '/' for a live server
define ('SITE_TITLE','E-MVC Framework'); //this will be used if no site title is set
