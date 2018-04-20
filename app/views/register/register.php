<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="grid-container">


    <div class="grid-x grid-padding-x">
  <div class="large-4 large-offset-4 cell centered">
    <form class="log-in-form" action="" method="post">
      <span class="[success alert secondary] [round radius] label float-center text-center"><?=$this->displayErrors ?></span>

      <h4 class="text-center">Registracija</h4>
      <label>Ime
        <input type="text" id="fname" name="fname" value="<?=$this->post['fname']?>">
      </label>
      <label>Prezime
        <input type="text" id="lname" name="lname" value="<?=$this->post['lname']?>">
      </label>
      <label>Email
        <input type="email" id="email" name="email" value="<?=$this->post['email']?>" >
      </label>
      <label>Username
        <input type="text" id="username" name="username" value="<?=$this->post['username']?>" >
      </label>
      <label>Lozinka
        <input type="password" id="password" name="password" value="<?=$this->post['password']?>" >
      </label>
      <label>Lozinka ponovno
        <input type="password" id="confirm" name="confirm" value="<?=$this->post['confirm']?>" >
      </label>
      <p><input type="submit" class="button expanded" value="Registriraj se"></input></p>

    </form>

  </div>
</div>


</div>
<?php $this->end(); ?>
