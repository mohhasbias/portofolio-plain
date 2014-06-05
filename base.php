<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy="scroll" data-target="#navigation" data-offset="100">

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

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
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#about-me">Tentang saya</a></li>
          <li><a href="#expertise">Keahlian</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#experience">Pengalaman</a></li>
          <li><a href="#education">Pendidikan</a></li> 
          <li><a href="#contact-me">Hubungi saya</a></li>  
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

  <div class="wrap container" role="document">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 class="text-center">
            <?php echo of_get_option('full_name'); ?>
          </h1>
          <p class="text-center lead">
            <?php echo of_get_option('main_occupation'); ?>
          </p>
          <p class="text-center text-muted">
            <em><?php echo of_get_option('motto'); ?></em>
          </p>
        </div>
      </div>
    </div>
    
    <section id="about-me" class="row">
      <aside class="section-title col-lg-3">
        <h2>Tentang saya</h2>
      </aside>
      <article class="section-content col-lg-6">
        <div class="pull-left col-lg-3">
          <img class="img-circle" src="<?php echo of_get_option('profile_picture'); ?>" width=110 alt="profile-picture"/>
        </div>
        <p><?php echo of_get_option('about_me'); ?></p>
      </article>
      <div class="contact-info col-lg-3">
        <ul class="list-inline">
          <li id="facebook_link">
            <a href="http://www.facebook.com/mohhasbias">
              <span class="icon-stack">
                <i class="icon-circle icon-facebook-color icon-stack-base"></i>
                <i class="icon-facebook icon-light"></i>
              </span>
            </a>
          </li>
          <li id="twitter_link">
            <a href="http://www.twitter.com/m_hasbi_as">
              <span class="icon-stack">
                <i class="icon-circle icon-twitter-color icon-stack-base"></i>
                <i class="icon-twitter icon-light"></i>
              </span>
            </a>
          </li>
          <li id="linkedin_link">
            <a href="http://www.linkedin.com/pub/moh-hasbi-assidiqi/29/a3/995">
              <span class="icon-stack">
                <i class="icon-circle icon-linkedin-color icon-stack-base"></i>
                <i class="icon-linkedin icon-light"></i>
              </span>
            </a>
          </li>
          <li id="googleplus_link">
            <a href="#">
              <span class="icon-stack">
                <i class="icon-circle icon-google-plus-color icon-stack-base"></i>
                <i class="icon-google-plus icon-light"></i>
              </span>
            </a>
          </li>
          <li id="rss_link">
            <a href="#">
              <span class="icon-stack">
                <i class="icon-circle icon-rss-color icon-stack-base"></i>
                <i class="icon-rss icon-light"></i>
              </span>
            </a></li>
        </ul>
        <ul class="icons-ul contact-info">
          <li>
            <i class="icon-li icon-comments-alt icon-2x pull-left"></i>
            <p class="text-muted">+628 969 499 1125</p>
          </li>
          <li>
            <i class="icon-li icon-map-marker icon-2x pull-left"></i>
            <p class="text-muted">Surabaya, Indonesia</p>
          </li>
          <li>
            <i class="icon-li icon-envelope icon-2x pull-left"></i>
            <p class="text-muted">mohhasbias@gmail.com</p>
          </li>
        </ul>
      </div>
    </section>
    <br/>
    <section id="expertise" class="row">
      <aside class="section-title col-lg-3">
        <h2>Keahlian</h2>
      </aside>
      <div class="section-content col-lg-6">
        <article>
          <p>
            Alhamdulillah, saya sudah membuat tema wordpress selama 1 tahun. 
            Selama waktu tersebut, saya belajar banyak tentang pembuatan tema wordpress meliputi pembuatan widget-nya. 
            Saya juga belajar tentang implementasi AJAX pada tema wordpress yang digunakan untuk mereduksi ukuran situs sehingga lebih cepat dibuka oleh user. 
            Saya juga menggunakan banyak plugin JQuery untuk mempercepat proses pembuatan dimana saya tidak perlu membuat semuanya dari nol.
          </p>
        </article>
      </div>
      <div class="col-lg-3">
        <div class="row">
            <?php 
              $skill_list = array(
                  array(
                    'skill_name' => 'Wordpress Theme',
                    'skill_level' => 3
                  ),
                  array(
                    'skill_name' => 'jQuery Plugin',
                    'skill_level' => 3
                  ),
                  array(
                    'skill_name' => 'jQuery AJAX',
                    'skill_level' => 3
                  ),
                  array(
                    'skill_name' => 'Mobile/Responsive Design',
                    'skill_level' => 3
                  ));
            ?>
            <?php for($i = 0; $i < count($skill_list); $i++): ?>
              <p class="col-lg-6"><?php echo $skill_list[$i]['skill_name']; ?></p>
              <ul class="list-inline">
                <?php $num_star = $skill_list[$i]['skill_level']; ?>
                <?php for($j = 0; $j < $num_star; $j++): ?>
                  <li><i class="icon-star"></i></li>
                <?php endfor; ?>
                <?php for($j = 0; $j < 5 - $num_star; $j++): ?>
                  <li><i class="icon-star-empty"></i></li>
                <?php endfor; ?>
              </ul>
            <?php endfor; ?>
        </div>
      </div>
    </section>
    <br/>
    <?php
        $work_list = array();
        $work_list[0] = array(
            'url' => 'http://rr.id1945.com/wp',
            'img_src' => get_bloginfo('template_directory') . '/assets/img/murahgrosir.png',
            'img_alt' => 'murahgrosir desktop',
            'description' => 
                "Redesign <a href='http://murahgrosir.com'>MurahGrosir.com</a><br/>" .
                "Desktop version (HTML, CSS, JS)<br/>" .
                "Highlight: Lazy Load Image Slider"
          );

        $work_list[1] = array(
          'url' => 'http://rr.id1945.com/wp',
            'img_src' => get_bloginfo('template_directory') . '/assets/img/murahgrosir-smartphone.png',
            'img_alt' => 'murahgrosir smartphone',
            'description' => 
                "Redesign <a href='http://murahgrosir.com'>MurahGrosir.com</a><br/>" .
                "Smartphone version (HTML, CSS, JS)<br/>" .
                "Highlight: Foundation 5"
          );     
      ?>
    <section id="portfolio" class="row">
      <aside class="section-title col-lg-3">
        <h2>Portfolio</h2>
      </aside>
      <?php for($i = 0; $i < count($work_list); $i++): ?>
        <article class="section-content col-lg-3">
          <a href="<?php echo $work_list[$i]['url']; ?>" class="thumbnail">
            <img src="<?php echo $work_list[$i]['img_src']; ?>" alt="<?php echo $work_list[$i]['img_alt']; ?>"/>
          </a>
          <div class="caption text-center">
            <p>
              <?php echo $work_list[$i]['description']; ?>
            </p>
          </div>
        </article> 
      <?php endfor; ?>     
    </section>
    <br/>
    <?php
      $tuts_list = array();
      $tuts_list[0] = array(
        'url' => '#',
        'img_src' => '',
        'img_alt' => 'Flash AS3 Memory Card Game',
        'description' => 'Membuat memory card game menggunakan Flash AS3'
        );
    ?>
    <section id="tutorials" class="row">
      <aside class="section-title col-lg-3">
        <h2>Tutorials</h2>
      </aside>
      <?php for($i = 0; $i < count($tuts_list); $i++): ?>
        <article class="section-content col-lg-3">
          <a href="<?php echo $tuts_list[0]['url']; ?>" class="thumbnail">
          <img src="<?php echo $tuts_list[0]['img_src']; ?>" alt="<?php echo $tuts_list[0]['img_alt']; ?>"/>
          </a>
          <div class="caption text-center">
            <p>
              <?php echo $tuts_list[0]['description']; ?>
            </p>  
          </div>
        </article>  
      <?php endfor; ?>
    </section>
    <section id="experience" class="row">
      <aside class="section-title col-lg-3">
        <h2>Pengalaman</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2012 - Sekarang</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pengajar Pelatihan Dosen Akademi Komunitas<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">November 2012</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pembuatan Game Edukasi untuk Anak-Anak Berjudul "Citrik" sebagai Kerjasama dengan PLN<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">September 2012</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pengajar pada Pelatihan International untuk Negara Ketiga sebagai Kerjasama dengan JICA<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2011 - Sekarang</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Pengajar pada Pelatihan untuk Guru SMK<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2008 - Sekarang</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Dosen Program Studi Teknologi Multimedia Broadcasting<br/>
              <span class="text-muted">Politeknik Elektronika Negeri Surabaya</span>
            </p>
          </header>
        </article>
      </div>
    </section>
    <br/>
    <section id="education" class="row">
      <aside class="section-title col-lg-3">
        <h2>Pendidikan</h2>
      </aside>
      <div class="section-content col-lg-9">
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2008 - 2011</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Institut Teknologi Sepuluh Nopember<br/>
              <span class="text-muted">Teknik Elektro - Telematika</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2003 - 2008</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              Institut Teknologi Sepuluh Nopember<br/>
              <span class="text-muted">Teknik Informatika</span>
            </p>
          </header>
        </article>
        <article class="row">
          <div class="col-lg-2">
            <p><span class="label label-primary">2000 - 2003</span></p>
          </div>
          <header class="col-lg-10">
            <p>
              SMU Negeri 1 Jember<br/>
              <span class="text-muted">Jurusan IPA</span>
            </p>
          </header>
        </article>
      </div>
    </section>
    <hr>
    <section id="contact-me" class="row">
      <aside class="section-title col-lg-3">
        <h2>Hubungi saya</h2>
      </aside>
      <div class="col-lg-6">
        <form role="form">
          <input type="text" class="form-control" name="name" placeholder="Nama">
          <br/>
          <input type="email" class="form-control" name="email" placeholder="Email">
          <br/>
          <textarea rows="8" class="form-control" name="message" placeholder="Pesan"></textarea>
          <input type="hidden" name="recipient_mail" value="mohhasbias@gmail.com">
          </br>
          <input class="btn btn-primary" name="submit" type="submit" value="KIRIM PESAN">
        </form>
      </div>
    </section>
    <br/>
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
