<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy="scroll" data-target="#navigation" data-offset="100">

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <div class="wrap container" role="document">
    <div class="row">
      <div class="col-lg-12">
        <nav id="navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php site_url(); ?>">Moh Hasbi Assidiqi</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li><a href="#about-me">About me</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#education">Education</a></li> 
                <li><a href="#contact-me">Contact me</a></li>  
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
      </div>
    </div>
    <div class="jumbotron">
      <h1 class="text-center">Moh Hasbi Assidiqi</h1>
      <p class="text-center">Web Developer</p>
      <h2 class="text-center">
        <small>Membuat Indonesia lebih baik melalui web yang sederhana dan mudah digunakan.</small>
      </h2>
    </div>
    <hr>
    <section id="about-me" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">About me</h2>
      </aside>
      <article class="section-content col-lg-6">
        <div class="pull-left col-lg-3">
          <img class="img-circle" src="/wordpress/assets/img/manten-square.jpg" width=110 alt="profile-picture"/>
        </div>
        <p>I love creating things. I enjoy the process of creating a things. putting full attention to its detail.
        it is so fascinating.</p>
      </article>
      <div class="contact-info col-lg-3">
        <ul class="list-inline">
          <li id="facebook_link"><a href=""><img src="http://pixeldizajn.com/perfectcvwp/wp-content/themes/PerfectCV/img/icons/facebook.png" alt=""></a></li>
          <li id="twitter_link"><a href=""><img src="http://pixeldizajn.com/perfectcvwp/wp-content/themes/PerfectCV/img/icons/twitter.png" alt="" style=""></a></li>
          <li id="linkedin_link"><a href=""><img src="http://pixeldizajn.com/perfectcvwp/wp-content/themes/PerfectCV/img/icons/linkedin.png" alt=""></a></li>
          <li id="googleplus_link"><a href=""><img src="http://pixeldizajn.com/perfectcvwp/wp-content/themes/PerfectCV/img/icons/google-plus.png" alt=""></a></li>
          <li id="rss_link"><a href="http://pixeldizajn.com/perfectcvwp/feed/"><img src="http://pixeldizajn.com/perfectcvwp/wp-content/themes/PerfectCV/img/icons/rss.png" alt=""></a></li>
        </ul>
        <ul class="list-unstyled">
          <li>
            <span class="glyphicon glyphicon-phone"></span> 
            <span class="text-muted">+62 81 231 532 562</span>
          </li>
          <li>
            <span class="glyphicon glyphicon-map-marker"></span> 
            <span class="text-muted">Surabaya, Indonesia</span>
          </li>
          <li>
            <span class="glyphicon glyphicon-envelope"></span> 
            <span class="text-muted">mohhasbias@gmail.com</span>
          </li>
        </ul>
      </div>
    </section>
    <br/>
    <section id="portfolio" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Portfolio</h2>
      </aside>
      <article class="section-content col-lg-3">
        <a href="http://rr.id1945.com/wp" class="thumbnail">
          <img src="/wordpress/assets/img/murahgrosir.png" alt="murahgrosir" width=200>
          <div class="caption text-center">
            <p>Online Store Themes</p>
          </div>
        </a>
      </article>      
    </section>
    <br/>
    <section id="expertise" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Expertise</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <p class="col-lg-5">
            I have developed wordpress theme for 1 year. In that year i learned a lot about creating wordpress theme. Including creating its widget. I also learning about implementing AJAX in a wordpress theme to reduce load size in effect of faster web experience. I also use jQuery plugins to fasten the development cycle in which i don't have to reinvent the wheel.
          </p>
          <div class="col-lg-7">
            <p class="text-right pull-left col-lg-4">Wordpress Theme</p>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              </div>
            </div>
            <p class="text-right pull-left col-lg-4">JQuery Plugin</p>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              </div>
            </div>
            <p class="text-right pull-left col-lg-4">AJAX</p>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              </div>
            </div>
            <p class="text-right pull-left col-lg-4">Mobile / Responsive</p>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>
    <br/>
    <section id="experience" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Experience</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">2012 - Present</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>Trainer of Community College Lecturer</h3>
            <h4 class="text-muted">Electronic Engineering Polytechnic Institute of Surabaya</h4>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">November 2012</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>Development of Educational Game for Kids entitled "Citrik" in Cooperation with PLN</h3>
            <h4 class="text-muted">Electronic Engineering Polytechnic Institute of Surabaya</h4>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">September 2012</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>Trainer of The Third Country International Training Program</h3>
            <h4 class="text-muted">Electronic Engineering Polytechnic Institute of Surabaya</h4>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">2011 - Present</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>Trainer of Vocational School Teacher</h3>
            <h4 class="text-muted">Electronic Engineering Polytechnic Institute of Surabaya</h4>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">2008 - Present</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>Lecturer of Multimedia Broadcasting Technology Department</h3>
            <h4 class="text-muted">Electronic Engineering Polytechnic Institute of Surabaya</h4>
          </header>
        </article>
      </div>
    </section>
    <br/>
    <section id="education" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Education</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">2008 - 2011</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>Institut Teknologi Sepuluh Nopember</h3>
            <h4 class="text-muted">Teknik Elektro - Telematika</h4>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">2003 - 2008</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>Institut Teknologi Sepuluh Nopember</h3>
            <h4 class="text-muted">Teknik Informatika</h4>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-3">
            <h3><span class="label label-info">2000 - 2003</span></h3>
          </div>
          <header class="col-lg-9">
            <h3>SMU Negeri 1 Jember</h3>
            <h4 class="text-muted">Jurusan IPA</h4>
          </header>
        </article>
      </div>
    </section>
    <hr>
    <section id="contact-me" class="row">
      <aside class="section-title col-lg-3">
        <h2 class="text-right">Contact me</h2>
      </aside>
      <div class="col-lg-6">
        <form role="form">
          <input type="text" class="form-control" name="name" placeholder="Name">
          <br/>
          <input type="email" class="form-control" name="email" placeholder="Email">
          <br/>
          <textarea rows="8" class="form-control" name="message" placeholder="Message"></textarea>
          <input type="hidden" name="recipient_mail" value="mohhasbias@gmail.com">
          </br>
          <input class="btn btn-primary" name="submit" type="submit" value="SEND THE MESSAGE">
        </form>
      </div>
    </section>
    <br/>
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
