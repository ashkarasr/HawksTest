<!DOCTYPE html>
<html>
<head>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.tiny.cloud/1/ddpuv77hw9pmb8z1w634pynv77uqdd4c5yabfjddf8wpn8ev/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>


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
            <h2><i class="glyphicon glyphicon-user"></i>Update Blogs </h2>
         </div>   

         
            <div class="row">
                <div class="col-md-12">

                    <?php
                    foreach ($edit->result() as $row) { ?>
                      <form enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Home/update_blog" method="post">

                        <div class="form-group">
                          <input type="text" class="form-control" name="blog_title" id="blog_title" value="<?php echo $row->title; ?>" placeholder="Title">
                          <input type="hidden" class="form-control" value="<?php echo $row->id; ?>" name="blog_id" id="blog_id" placeholder="Title">
                      </div>

                      <div class="form-group">
                          <textarea class="form-control" placeholder="Blog here..." name="desc" id="desc"><?php echo $row->description; ?>
                          </textarea>
                      </div>

                      <div class="form-group">
                <img width="100px" height="100px" src="<?php echo base_url();?>images/<?php echo $row->imagpath; ?>" id="im">    

                          <input type="file" class="form-control" name="file" placeholder="Title">
                      </div>

                      <!-- <button type="submit" class="btn btn-primary">Add Blog</button> -->
                      <div class="col-md-6 margin" >
                          <input class="btn btn-success" type="submit" name="Update" id="Update" value="Update">
                      </div>


                  </form>

<?php } ?>
                </div>
                
            </div>
            <br>
    </div>
</div>
</body>
</html>


