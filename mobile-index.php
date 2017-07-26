
<?php
include ("mobile-header-home.php");
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

                <center><h4 class="modal-title" style="text-align:center;">Request for Siteplan, Floor Plan and Prices or call <a href="tel:+65 6844 5845">+65 6844 5845</a></h4></center>
            </div>
            <div class="modal-body">
                <form method="post" action="request-mobile.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name *" name="name" style="border:1px #ccc solid;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact Number *" name="telephone" style="border:1px #ccc solid;">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address *" name="email" style="border:1px #ccc solid;">
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
      
      <div class="hero-holder" style="right:0; bottom:30px;">
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
  </main> <!-- end main wrapper -->     <!-- Footer -->
    <footer class="footer">
      <div class="bottom-footer bg-white">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 copyright text-center">
              <span>
                &copy; 2017 Symphony Suites | Made by <a href="https://i-media.com.sg">iMedia Consulting</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </footer> <!-- end footer -->



  </main> <!-- end main wrapper -->

  <!-- jQuery Scripts -->

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>  
  <script type="text/javascript" src="js/scripts.js"></script>
    
</body>
</html>