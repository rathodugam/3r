<!--Start footer-->
  <footer>
    <div class="main_footer">
      <div class="container">
        <article class="row">
          <aside class="col-md-3">
            <div class="logo_footer">
              <a href="index.php"><img src="images/logo.png" alt=""></a>
              <div class="address">
                <ul>
                  <li class="address_icon">19-21 Hatton Garden, <br>London, EC1N 8BA</li>
                  <li class="phone_icon"><a href="tel:0203 8806650">0203 8806650</a></li>
                  <li class="mail_icon"><a href="mailto:hello@3rexcellence.com">hello@3rexcellence.com</a></li>
                </ul>
              </div>
            </div>
          </aside>
          <aside class="col-md-3">
            <div class="footer_link">
              <h4>Usefull Links </h4>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="blog.php">Blogs</a></li>
              </ul>
            </div>
          </aside>
          <aside class="col-md-3">
            <div class="footer_link">
              <h4>Information </h4>
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms Condition</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="case-studies.php">Case Studies</a></li>
                <li><a href="resources.php">Resources</a></li>
              </ul>
            </div>
          </aside>
          <aside class="col-md-3">
            <div class="social_links">
              <h4>Folow Us on</h4>
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </aside>
        </article>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <p>Copyright 2019 3rexcellence.com | All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <!--Start footer--> 
</div>
<!-- Setup of JS --> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
<!-- Setup of bootstrap JS --> 
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type="text/javascript" src="https://orangemediaco.co.uk/wp-content/themes/twentyseventeen/assets/js/jquery.scrollTo.js?ver=2.1.2"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>
 $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".main_header").addClass("Fixed");
    }else{
      $(".main_header").removeClass("Fixed");
    }
});

 $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 400) {
        $(".main_header").addClass("Fixed_head");
    }else{
      $(".main_header").removeClass("Fixed_head");
    }
});

jQuery(document).ready(function(){
 var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$");
        jQuery('.navbar-nav li a').each(function(){
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                jQuery(this).addClass('active');
            }
        });
});

  $('.logo_slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  arrows:false,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay:true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
  
function scroll_to_div(div_id)
{
 $('html,body').animate(
 {
  scrollTop: $("#"+div_id).offset().top
 },
 'slow');
}

</script>
</body>
</html>