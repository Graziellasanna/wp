<?php get_header(); ?>
<div class="row">
    <div class="col-md-12 welcome">
        <h1><?php bloginfo('name') ?></h1>
        <h4><?php bloginfo('description') ?></h4>
    </div>
</div>
</div>
</div>
<div class="row" id="contact">
    <div class="col-lg-12 text-center">
        <h2>Contattaci</h2>
        <h3>Ti terremo informato</h3>
    </div>
</div>
<div class="row" id="contact"></div>
<form class="form-contats">
  <div class="col-md-6">
    <label for="exampleInputEmail1">Indirizzo email </label>
     <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
    <input name="email" type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Per favore, scrivi  la email" required>
     </div>
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Per favore, scrivi qui la tua password" required>
  </div>
</div>

<div class="col-md-6">
    <label for="exampleInputPassword1">Lascia un commento, grazie.</label>
    <textarea class="form-control" placeholder="Please, write a message" row="3"></textarea>
  </div>   
    <div class="col-lg-12 text-center">
    <button type="submit" class="btn btn-default">Invia</button>
    </div>  
</div>
</form>
</div>
</div>
<?php get_footer(); ?>