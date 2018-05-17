<div class="container">
  <!-- Trigger the modal with a button
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- Title -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-lock" style="color: #005500;"></span> Login</h4>
        </div>
        <div class="modal-body">
          <!-- Login info -->
          <form>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="username" class="form-inline" id="username"/>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="passward" class="form-inline" id="pwd"/>
            </div>
            <button type="button" class="btn btn-link">Forgot password or username?</button>
          </form>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#signup">Create a Account</button>
          <button type="button" class="btn btn-default">Login</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>