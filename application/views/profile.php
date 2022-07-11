<!DOCTYPE html>
<html>
<head>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</head>

<style>
    

.nav-link{
    padding: 8px;
    color: #fff;
    font-weight: 400;
}
.navbar-dark .navbar-nav .nav-link.active, 
.navbar-dark .navbar-nav .show>.nav-link {
    color: #333;
    background-color: #F0F0F0;
    border-radius: 8px;
}
.navbar-dark .navbar-nav .nav-link {
    color: rgba(255,255,255, 1);
}

/*list view Css Starts*/



</style>

<body>




  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/">Administration</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav menu">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url(); ?>index.php/">Blogs <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/">View Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Home/profile">Profile</a>
      </li>

      
    </ul>
  </div>

  <div style="float: right;" class="nav-item">
  <a class="nav-link" href="<?php echo base_url(); ?>index.php/Home/logout">logout</a>
</div>
</nav>





<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-12">
          <hr>
            <h2><i class="glyphicon glyphicon-user"></i> User Details </h2>
         </div>   

         
            <div class="row">
                <div class="col-md-12">
                  <?php
                  foreach ($profile->result() as $row) { ?>

                    <div class="col-md-3">
                      <label>Name</label> :
                       <strong><?php echo $row->name; ?></strong>

                    </div>

                    <div class="col-md-3">
                      <label>Email</label> :
                       <strong><?php echo $row->email; ?></strong>

                    </div>

                    <div class="col-md-3">
                      <label>Mobile</label> :
                       <strong><?php echo $row->mobile; ?></strong>

                    </div>

                 <?php } ?>


                </div>
                
            </div>
      

    </div>
</div>
</body>
</html>
