<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<form  class="form-control" action= "<?=PUTANJA?>register/login" method="post">


    <span class="[success alert secondary] [round radius] label float-center text-center"><?=$this->displayErrors ?></span>

  <div class="form-icons">

    <h4>Login</h4>

    <div class="input-group ">
      <span class="input-group-label">
        <i class="fa fa-user"></i>
      </span>
      <input class="input-group-field" type="text" name="username" id="username" placeholder="Username">
    </div>

    <div class="input-group">
      <span class="input-group-label">
        <i class="fa fa-envelope"></i>
      </span>
      <input class="input-group-field" type="text" placeholder="Email">
    </div>

    <div class="input-group">
      <span class="input-group-label">
        <i class="fa fa-key"></i>
      </span>
      <input class="input-group-field" type="password" name="password" id="password" placeholder="Password">
    </div>
    <div class="input-group-c2">
      <label for ="remember_me">
      Remember me

      <input class="input-group-c2" type="checkbox" name="remember_me" id="remember_me" value="on" placeholder="Remember Me"></label>
    </div>
  </div>
 <input type="submit" value="Login" class="button expanded">
 Not a member?
  <a href="<?=PUTANJA?>register/register" >Sign Up</a>

</form>



<?php $this->end(); ?>
