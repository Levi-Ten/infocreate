<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- Button trigger modal -->
<!-- <form action="log.php" method="post"> -->
   
<div class="row">
    <div class="col">
<button type="button" class="btn btn-secondary ml-2 btn-sm btn-lg btn-block" data-toggle="modal" 
data-target="#modal_1">Sign in</button>

</div>
</div>
 <!-- <div class="col">
 <a href="register2.php" type="button" class="btn btn-primary">I have account</a>
</div> -->
  
<!-- Modal -->
  
<form action="login.php" method="post">
<div class="modal fade form" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" 
            aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content special">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Sign in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php if(isset($_SESSION['error']['message'])) : ?>
          <?php foreach($_SESSION['error']['message'] as $error) : ?>
            <div class="alert alert-danger"><?=$error?></div>
          <?php endforeach; ?>
        <?php endif; ?>

      <div class="modal-body">
  <div class="block">
      <div class="form-group">
          <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
      </div>
    <div class="form-group">
        <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password" required>
    </div>
      <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">Check me out</label>
        </div>
      </div>
        <button type="submit" class="btn btn-success btn-block">Sign in</button>
  </div>
      </div>
      </form>
      <div class="modal-footer">
        
      <a href="pagea.php" class="btn btn-primary btn-jg" role = "button" aria-pressed = "true">Create account</a>
     <button type="button" class="btn btn-secondary" data-dismiss="modal" href = >Close</button>

    </div>
  </div>
</div>
        
     
      </div>
    </div>
  </div>
</div>

<?php 
if (isset($_SESSION['error']['message'])) {
    unset($_SESSION['error']['message']);
     

  }
 ?>

