<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->siteTitle();?></title>
    <link rel="stylesheet" href="<?=PUTANJA?>css/foundation.css">
    <link rel="stylesheet" href="<?=PUTANJA?>css/app.css">
    <?=$this->content ('head'); ?>
  </head>
  <body>
    <?= $this->content('body');?>


    <script src="<?=PUTANJA?>js/vendor/jquery.js"></script>
    <script src="<?=PUTANJA?>js/vendor/what-input.js"></script>
    <script src="<?=PUTANJA?>js/vendor/foundation.js"></script>
    <script src="<?=PUTANJA?>js/app.js"></script>
  </body>
</html>
