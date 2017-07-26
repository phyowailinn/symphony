<?php 

function isMobile() {

    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

}

// If the user is on a mobile device, redirect them

if(isMobile()){

    header("Location: mobile-index.php");

}

?>

<?php
include ("header-home.php");
?>
<style>
h4
{
color:#fff;
}
input[type="text"],
input[type="email"]
{
background:#ccc;
}
.modal-content
{
background:#5d5e5e;
color:#fafafa;
}
.modal-header
{
border-bottom:1px #777 solid;
}
body
{
overflow:hidden;
}
#nav-trigger
{
display:none;
}

.navbar-nav > li > a {
  color: #fff;
}
.navbar-nav > li > a:hover {
 color: #22eaf6;
}
.social-icons.nobase.dark a {
{
color:#fff;
}
.social-icons.nobase.dark a:hover
{
 color: #22eaf6; !important;
}

</style>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <center><img src="img/logo2.png" /></center><br />

                <center><h4 class="modal-title" style="text-align:center;"> Thank you for the enquiry.<br />
Please fill detail of your interest.</h4></center>
            </div>
            <div class="modal-body">
                <form method="post" action="mail.php">
 <div class="form-group">
                  <input type="hidden" name="name" value="<?php echo isset($_POST)?$_POST['name']:null ?>">
                  <input type="email" class="form-control" placeholder="Confirm Email Address *" name="email" style="border:1px #ccc solid;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Property" name="property" style="border:1px #ccc solid;" value="Symphony Suite" disabled="disabled">
                    </div>
                    <div class="form-group">
                    <select name="level" id="level" class="form-control">
                  <option value="Just Exploring My Options">Just Exploring My Option</option>
                  <option value="Keen On Getting An Unit">Keen On Getting An Unit</option>
                  <option value="Arrange For Showflat Appointment">Arrange For Showflat Appointment</option>
                  <option value="Ready To Place A Cheque">Ready To Place A Cheque</option>
                  </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Interest in Unit Type" name="unit" style="border:1px #ccc solid;">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" name="comment" id="comment" rows="8"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" value="Submit" style="background:#55c5d1;">Submit</button> 
                    <div style="float:right;"><button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:15px; font-weight:bold; color:#fff;">Proceed to the Site</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
 <main class="main-wrapper oh">
    <!-- Hero Slider -->
    <section class="section-wrap nopadding gradient-overlay pl-80">
      
      <div class="hero-holder" style="right:0;">
       <img src="img/logo2.png" style="padding-bottom:20px;" style="vertical-align:middle;">
      </div>

      <div id="flexslider-hero" class="flexslider fullscreen-img">
        <ul class="slides container-full-height">
          <li>
            <img src="img/portfolio/hero_1.jpg" alt="">
            <div class="img-holder" style="background-image: url(img/portfolio/hero_1.jpg)"></div>
          </li>
          <li>
            <img src="img/portfolio/hero_2.jpg" alt="">
            <div class="img-holder" style="background-image: url(img/portfolio/hero_2.jpg)"></div>
          </li>
          <li>
            <img src="img/portfolio/hero_3.jpg" alt="">
            <div class="img-holder" style="background-image: url(img/portfolio/hero_3.jpg)"></div>
          </li>
        </ul>
      </div>

    </section> <!-- end hero slider -->
  </main> <!-- end main wrapper -->  
  <script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
  <?php
include ("footer.php");
?>