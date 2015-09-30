<footer id="footer">
  <div>
    <!-- <section class="footer-info">
      <h5>Info</h5>
      <ul>
        <li><a href="pricing.php">Pricing</a></li>
        <li><a href="vault.php">WHY</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </section>
    <section class="footer-company">
      <h5>Company</h5>
      <ul>
        <li><a href="about.php">About Us</a></li>
        <li><a href="#">Management</a></li>
        <li><a href="#">Board of Directors</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </section>

    <section class="footer-legal">
      <h5>Legal</h5>
      <ul>
        <li><a href="#">SLA</a></li>
        <li><a href="terms.php">Terms of Use</a></li>
        <li><a href="privacy.php">Privacy Policy</a></li>
      </ul>
    </section>

    <section class="footer-social">
      <h5>Stay in Touch</h5>
      <ul class="inline-list">
        <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
      </ul>
      <h6>Stay Updated</h6>
      <form class="newsletter">
        <div class="email">
          <input type="text" placeholder="Enter you email&hellip;" />
        </div>
        <div class="envelope">
          <button class="secondary postfix"><i class="fa fa-envelope"></i></button>
        </div>
      </form>
    </section>

    <section class="footer-contact">
      <h5>Call Us</h5>
      <a href="tel:8554282858"><i class="fa fa-phone"></i>&nbsp;855-428-2858</a>
      <small>Mon-Fri 8am-6pm PST</small>
      <img class="logo" src="img/AV_logo.png" alt="logo"/>
      <small>Member <a href="#">ICTA</a> | <a href="#">JVC</a></small>

    </section> -->

  </div>

  <hr>

  <!-- <div class="trust-logos">

    <div>
      <img src="img/bbb_accredited_business.png" alt="BBB Accredited Business"/>
    </div>
    <div>
      <script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.anthemvault.com&amp;size=L&amp;use_flash=YES&amp;use_transparent=YES&amp;lang=en"></script>
      <a href="http://www.symantec.com/ssl-certificates" target="_blank">
        <img src="img/norton_secure.png" alt="Norton Secured"/>
      </a>
    </div>
    <div>
      <img src="img/JVC2_vectorwhite.png" alt="Jewelers Vigilance Committee logo"/>
    </div>
    <div>
      <img src="img/icta.png" alt="ICTA logo"/>
    </div>

    <div class="hidden-for-medium-down seal">
      <img class="trusted" src="img/trusted_secured.png" alt="logo"/>
    </div>

  </div> -->

  <section class="bottom-bar text-center">
      <small>&copy; <?php echo date("Y"); ?> Anthem Vault Inc. All rights reserved.</small>
  </section>

</footer>



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
<script src="bower_components/foundation/js/foundation/foundation.topbar.js"></script>
<script src="bower_components/foundation/js/foundation/foundation.dropdown.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    console.log( "Volume off" );
    //Sound off
    // $(".sound").click(function(){
    //   // audio.muted = true;
    //   // audio.volume = 0;
    //   alert("Volume off");
    // });

    $( ".sound" ).on( "click", function() {
      console.log( "Volume off" );
    });

    function soundMute(){
      //sound off
      console.log( "Volume off" );
    }
  });
</script>

</body>
</html>
