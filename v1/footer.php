<footer class="footer footer-dark pt-6 position-relative">
  <div class="footer-content">
    <div class="container">
      <div class="row"> 
        <!-- Footer widget 1 -->
        <div class="col-md-3 col-sm-6 order-sm-1">
          <div class="widget address"> <a href="index.php" class="footer-logo mb-3 d-block"> 
            <!-- SVG Logo Start --> 
            <?php
                if(isset($_SESSION['email']))  echo '<a href="./account.php">
                <img src="bdesign/images/logo.png" >
            </a>';
                else echo '<a href="./login.php">
                <img src="bdesign/images/logo.png" >
            </a>';
            ?>
           
            <!-- SVG Logo End --> 
            </a>
            <p></p>
          </div>
        </div>
        <!-- Footer widget 2 -->
        <div class="col-md-2 col-sm-4 order-sm-3">
          <div class="widget">
            <h6>Quick LInks</h6>
            <ul class="nav flex-column">
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
            </ul>
          </div>
        </div>
        <!-- Footer widget 3 -->
        <div class="col-md-2 col-sm-4 order-sm-4">
          <div class="widget">
            <h6>Company</h6>
            <ul class="nav flex-column primary-hover">
              <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php">Terms & Conditions</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Privacy & Policy</a></li>
              <li class="nav-item"><a class="nav-link" href="#">FAQs</a></li>
            </ul>
          </div>
        </div>
        <!-- Footer widget 4 -->
        <div class="col-md-2 col-sm-4 order-sm-5">
          <div class="widget">
            <h6>Support</h6>
            <ul class="nav flex-column primary-hover">
              <li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Knowledge Base</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php">Forum</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Terms of Use</a></li>
            </ul>
          </div>
        </div>
        <!-- Footer widget 5 -->
        <div class="col-md-3 col-sm-6 order-sm-2">
          <div class="widget address">
            <ul class="list-unstyled">
              <li class="media mb-3"><i class="fas fa-map-marked-alt mr-3 display-8"></i>216 Coburn Shahi Road Mumbai, Near Center Road, IL 54785. </li>
              <li class="media mb-3"><i class="mr-3 display-8 fas fa-headphones-alt"></i> (547) 457-5757 </li>
              <li class="media mb-3"><i class="mr-3 display-8 far fa-envelope"></i> help@Vtravel.com</li>
              <li class="media mb-3"><i class="mr-3 display-8 far fa-clock"></i>
                <p>Mon - Fri: <strong>09:00 - 21:00</strong> <br>
                  Sat & Sun: <strong>Closed</strong></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divider mt-3"></div>
  <!--footer copyright -->
  <div class="footer-copyright py-3">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center py-3 text-md-left"> 
        <!-- copyright text -->
        
      </div>
    </div>
  </div>
</footer>