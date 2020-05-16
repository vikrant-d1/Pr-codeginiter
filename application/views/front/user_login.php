

<!-- about section service -->
<section id="login">
 <div class="conatiner">
     <div class="row">
         <div class="col-md-4 mr-auto ml-auto">
         <?php if($this->session->flashdata('errors')){?>
         <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
           
             <div class="card login_wrapper">
                 <div class="card-body">
                  <h4>LogIn</h4>
                  <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>front/login" class="login" id="loginform">
                <div class="form-group">
                    <label for="userName">Username</label>
                    <input type="text" name="username" class="form-control" id="userName">
                  
                </div>
                <div class="form-group">
                    <label for="userpassword">Password</label>
                    <input type="password" name="password" class="form-control" id="userpassword">
                </div>
               
                <button type="submit" name="loginForm" class="btn btn-primary">Login</button>
                </form>
                
                 </div>
             </div>
         </div>
     </div>
 </div>
</section> 
<!-- End Section -->