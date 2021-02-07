

<?php include dirname(__DIR__) . '/bootstrap/navbar.php'; ?>
<form action="makeuser.php" method="post">
<div class="container">
				<div class="row justify-content-center">
					<div class="col-6">
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
        <label for="username">Username</label>
          <input type="username" class="form-control" name="username" placeholder="Enter username" required>
    </div>
    <div class="form-group">
        <label for="surname">Surname</label>
          <input type="surname" class="form-control" name="surname" placeholder="Enter surname" required>
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
             </div>
</div>

</div>
</form>




<?php include dirname(__DIR__) . '/bootstrap/footer.php'; ?>