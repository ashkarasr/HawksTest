<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
	img {width:100%;}
</style>

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>

                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="post" action="<?php echo base_url(); ?>index.php/Home/user_registration">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="FullName" name="FullName" placeholder="Full Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="MobileNo" name="MobileNo" placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="inputState" name="genter" class="form-control">
                                    <option value="Male"> Male</option>
                                    <option value="Female"> Female</option>
                                    <option value="Others"> Others</option>
                                  </select>
                        </div>

                        <div class="form-group col-md-6">
                            <input id="pass" name="pass" placeholder="Password" class="form-control" required="required" type="text">
                        </div>

                        <div class="form-group col-md-6">
                            <input id="repass" name="repass" placeholder="Conform Password" class="form-control" required="required" type="text">
                        </div>


                        <div class="form-group col-md-12">
                                  <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-danger">Submit</button>
                        <button type="button" style="margin-left: 30px; " class="btn btn-danger"><a style="text-decoration: none;     color: #ffffff !important;" href="<?php echo base_url(); ?>index.php/Home/login">Already Registration</a></button>

                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
