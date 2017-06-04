<?php get_header(); ?>
      <div class="row">
        <div class="col-md-12 welcome">
          <h1><?php blog_info(name) ?></h1>
          <h4><?php blog_info(description) ?></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center" id="contact">
    <h1>Contattaci</h1>
    <h2>Ti terremo informato</h2>
  </div>
  <div class="row form-row">
    <form>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Insert your name" name="name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control input-lg" id="exampleInputPassword1" placeholder="Insert your email" name="email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone number</label>
          <input type="number" class="form-control input-lg" id="exampleInputPassword1" placeholder="Insert your phone number" required>
        </div>

      </div>
      <div class="col-md-6">
        <label for="exampleInputPassword1">Inserisci un commento</label>
        <textarea class="form-control input-lg"></textarea>
      </div>
      <div class="col-md-12">
        <div class="text-center btn-container">
          <button type="submit" class="btn btn-default btn-lg">Invia</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<?php get_footer(); ?>