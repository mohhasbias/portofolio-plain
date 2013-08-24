<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy="scroll" data-target="#navigation">

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      // get_template_part('templates/header-top-navbar');
    } else {
      // get_template_part('templates/header');
    }
  ?>


  <div class="wrap container" role="document">
    <div class="row">
      <div class="col-lg-12">
        <nav id="navigation" class="navbar navbar-default" role="navigation">
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
              <li><a href="#about">About me</a></li>
              <li><a href="#portofolio">Portfolio</a></li>
              <li><a href="#expertise">Expertise</a></li>
              <li><a href="#experience">Experience</a></li>
              <li><a href="#education">Education</a></li> 
              <li><a href="#contact">Contact me</a></li>  
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
    <div class="intro row">
      <div class="col-lg-12">
        <h1 class="text-center">Moh Hasbi Assidiqi</h1>
        <p class="lead text-center">Web Developer</p>
        <h2 class="text-center"><small>
          Pengrajin kode web. Membuat Indonesia lebih baik melalui web yang berkualitas.
        </small></h2>
      </div>
      <hr>
    </div><!-- /.intro -->
    <section id="about" class="row">
      <aside class="col-lg-3">
        <h2>About me</h2>
      </aside>
      <article class="col-lg-6">
        <img class="pull-left img-circle" src="/wordpress/assets/img/manten-square.jpg" width=84 alt="profile-picture"/>
        <p>I love to create things. I enjoy the process of creating a things. putting full attention to its detail.
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
      </div>
    </section>
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
