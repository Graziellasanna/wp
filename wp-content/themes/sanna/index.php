<?php get_header(); ?>
  <div class="row">
    <div class="col-md-12 welcome">
        <h1><?php bloginfo('name') ?></h1>
        <h4><?php bloginfo('description') ?></h4>
    </div>
</div>
</div>
</div>
<div class="row text-center" id="contact">
        <h2>Contattaci</h2>
        <h3>Ti terremo informato</h3>
</div>
<div class="row form-row"></div>
<form>
  <div class="col-md-6">
    <div class="form-group">
    <label for="exampleInputEmail1">Indirizzo email </label>
    <input type="email" class="form-control input-lg" id="exampleInputPassword1" placeholder="Scrivi la tua email" name="email" required>
        </div>
     <div class="form-group">
          <label for="exampleInputPassword1">Nome utente</label>
          <input type="email" class="form-control input-lg" id="exampleInputPassword1" placeholder="Scrivi il nome utente" name="email" required>
        </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Per favore, scrivi qui la tua password" required>
  </div>
</div>


    <div class="col-md-6">
        <label for="exampleInputPassword1">Lascia un commento, grazie</label>
        <textarea class="form-control input-lg"></textarea>
  </div>   
    <div class="col-lg-12">
    <div class="text-center bnt-container" ">
    <button type="submit" class="btn btn-default">Invia</button>
    </div>  
</div>
</form>
</div>
</div>
<?php get_footer(); ?>