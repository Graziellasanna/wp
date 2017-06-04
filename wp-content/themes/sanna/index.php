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
        <h1>Contattaci</h1>
        <h3>Ti terremo informato</h3>
    </div>
</div>
<form>
 <div class="col-lg-12">
     <div class="form-group">
    <label for="exampleInputEmail1">Indirizzo email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Per favore, scrivi qui la tua email" required>
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Per favore, scrivi qui la tua password" required>
  </div>
</div>

<div class="col-md-6">
    <label for="exampleInputPassword1">Lascia un messaggio</label>
    <textarea class="form-control" rows="3" required></textarea>
    <div class="row">
    <div class="col-lg-12 text-center">
    <button type="submit" class="btn btn-primary btn">Invia</button>
    </div> 
    </div>
</div>
</form>
</div>
</div>
<?php get_footer(); ?>