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
          <li><a href="#tutorials">Tutorials</a></li>
          <li><a href="#experience">Pengalaman</a></li>
          <li><a href="#education">Pendidikan</a></li>   
        </ul>
        <ul class="nav navbar-nav navbar-right">
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
            <a href="https://plus.google.com/100050003724417817575">
              <span class="icon-stack">
                <i class="icon-circle icon-google-plus-color icon-stack-base"></i>
                <i class="icon-google-plus icon-light"></i>
              </span>
            </a>
          </li>
          <li id="rss_link">
            <a href="<?php bloginfo('rss2_url'); ?>">
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
            <p class="text-muted">mohhasbias[at]gmail.com</p>
          </li>
        </ul>
      </div>
    </section>
    <br/>
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
            'skill_name' => 'Responsive Design',
            'skill_level' => 3
          ));
    ?>
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
        <?php for($i = 0; $i < count($skill_list); $i++): ?>
          <div class="row">
          <span class="col-lg-4"><small><?php echo $skill_list[$i]['skill_name']; ?></small></span>
          <ul class="list-inline col-lg-8">
            <?php $num_star = $skill_list[$i]['skill_level']; ?>
            <?php for($j = 0; $j < $num_star; $j++): ?>
              <li><i class="icon-star"></i></li>
            <?php endfor; ?>
            <?php for($j = 0; $j < 5 - $num_star; $j++): ?>
              <li><i class="icon-star-empty"></i></li>
            <?php endfor; ?>
          </ul>
          </div>
        <?php endfor; ?>
      </div>
    </section>
    <br/>
    <?php
        $work_list = array();
        $work_list[] = array(
            'url' => '#',
            'img_src' => get_bloginfo('template_directory') . '/assets/img/murahgrosir.png',
            'img_alt' => 'murahgrosir desktop',
            'description' => 
                "<p class='text-center'>Redesigned <a href='http://murahgrosir.com'>MurahGrosir.com</a><br/>" .
                "Desktop version<br/>" . 
                "(HTML, CSS, JS)<br/></p>" .
                "Highlight:</br>" .
                "<ul>" .
                "<li>Lazy Load Image Slider</li>" .
                "<li>Ajax Pagination</li>" .
                "<li>On-the-fly Image Cropping</li>" .
                "</ul>"
          );

        $work_list[] = array(
          'url' => '#',
          'img_src' => get_bloginfo('template_directory') . '/assets/img/murahgrosir-smartphone.png',
          'img_alt' => 'murahgrosir smartphone',
          'description' => 
              "<p class='text-center'>Redesigned <a href='http://murahgrosir.com'>MurahGrosir.com</a><br/>" .
              "Smartphone version<br/>". 
              "(HTML, CSS, JS)<br/></p>" .
              "Highlight: " .
              "<ul>" .
              "<li>Foundation 5 WP Accordion</li>" .
              "<li>Foundation 5 WP Topbar</li>" .
              "</ul>"
          );

        $work_list[] = array(
          'url' => '#',
          'img_src' => get_bloginfo('template_directory') . '/assets/img/tukugampang.png',
          'img_alt' => 'tuku gampang',
          'description' =>
            "<p class='text-center'>Optimized Page Speed of <a href='http://tukugampang.com'>TukuGampang.com</a></p>" .
            "Highligh: From <strong>E</strong> score to <strong>B</strong> score"
          );  

        $work_list[] = array(
          'url' => '#',
          'img_src' => 'http://img.youtube.com/vi/vpKx9CSbXf8/mqdefault.jpg',
          'img_alt' => 'Petualangan citrik',
          'description' => 
              "<p class='text-center'>Coordinated the making of <a href='http://www.youtube.com/watch?v=vpKx9CSbXf8'>Petualangan Citrik</a><br/>" .
              "(Coordinator, Technical Consultant)<br/></p>" .
              "Highlight: " .
              "<ul>" .
              "<li>Workflow Control</li>" .
              "<li>Iterative SDLC (Scrum Inspired SDLC)</li>" .
              "</ul>"
          );  

        $work_list[] = array(
          'url' => '#',
          'img_src' => 'http://img.youtube.com/vi/FdK0n47NSSs/mqdefault.jpg',
          'img_alt' => 'citrik grandprix',
          'description' =>
              "<p class='text-center'>Coordinator of the making of <a href='http://www.youtube.com/watch?v=FdK0n47NSSs'>Citrik Grandprix</a><br/>" .
              "(Coordinator, Technical Consultant)<br/></p>" .
              "Highlight: " .
              "<ul>" .
              "<li>Iterative Development</li>" .
              "<li>Kiosk Development</li>" .
              "</ul>"
          ); 
      ?>
    <section id="portfolio" class="row">
      <aside class="section-title col-lg-3">
        <h2>Portfolio</h2>
      </aside>
      <div class="section-content col-lg-9">
        <div class="row">
          <?php
            $num_item_per_row = 4;
            $column_size = 12 / $num_item_per_row;
          ?>
          <?php for($i = 0; $i < count($work_list); $i++): ?>
            <article class="col-lg-<?php echo $column_size;?>">
              <div class="thumbnail">
                <a href="<?php echo $work_list[$i]['url']; ?>">
                  <img src="<?php echo $work_list[$i]['img_src']; ?>" alt="<?php echo $work_list[$i]['img_alt']; ?>"/>
                </a>
                <div class="caption">
                  <small><?php echo $work_list[$i]['description']; ?></small>
                </div>
              </div>
            </article> 
            <?php if($i % $num_item_per_row == ($num_item_per_row-1)): ?>
              </div>
              <div class="row">
            <?php endif; ?>
          <?php endfor; ?>   
        </div>
      </div>    
    </section>
    <br/>
    <?php
      $tuts_list = array();
      $tuts_list[] = array(
        'url' => 'http://www.youtube.com/playlist?list=PLG7SgYmwIxMmREQy7YgYnOIvSHaPOiUcg',
        'img_src' => 'http://img.youtube.com/vi/Q_6oG7S7vd8/mqdefault.jpg',
        'img_alt' => 'Flash AS3 Memory Card Game',
        'description' => 'Membuat memory card game menggunakan Flash AS3'
        );
      
      $tuts_list[] = array(
        'url' => 'http://www.youtube.com/playlist?list=PLG7SgYmwIxMlKOcgEBdIU-DLcbbJXMWfI',
        'img_src' => 'http://img.youtube.com/vi/sZY97xe_GWw/mqdefault.jpg',
        'img_alt' => 'Primitive Modeling',
        'description' => 'Primitive modeling menggunakan Blender'
        );

      $tuts_list[] = array(
        'url' => 'http://www.youtube.com/playlist?list=PLG7SgYmwIxMkplOGeOyXMThu5rQpanG0f',
        'img_src' => 'http://img.youtube.com/vi/n_5hojhoYFk/mqdefault.jpg',
        'img_alt' => 'Polygon Modeling',
        'description' => 'Polygon Modeling menggunakan Blender'
        );

      $tuts_list[] = array(
        'url' => 'http://www.youtube.com/playlist?list=PLG7SgYmwIxMlb1LanMqQrbN3CJdT_XqwQ',
        'img_src' => 'http://img.youtube.com/vi/PKWd-eavKq4/mqdefault.jpg',
        'img_alt' => 'Blender Modifiers',
        'description' => 'Mengenal modifiers pada Blender'
        );
    ?>
    <section id="tutorials" class="row">
      <aside class="section-title col-lg-3">
        <h2>Tutorials</h2>
      </aside>
      <div class="section-content col-lg-9">
        <div class="row">
          <?php for($i = 0; $i < count($tuts_list); $i++): ?>
            <article class="col-lg-3">
              <a href="<?php echo $tuts_list[$i]['url']; ?>" class="thumbnail">
              <img src="<?php echo $tuts_list[$i]['img_src']; ?>" alt="<?php echo $tuts_list[$i]['img_alt']; ?>"/>
              </a>
              <div class="caption text-center">
                <small>
                  <?php echo $tuts_list[$i]['description']; ?>
                </small>  
              </div>
            </article>  
            <?php if($i % 4 == 3): ?>
              </div>
              <div class="row">
            <?php endif; ?>
          <?php endfor; ?>
        </div>
      </div>
    </section>
    <?php
      $exp_list = array();
      $exp_list[] = array(
        'period' => '2008 - Sekarang',
        'activity' => 'Dosen Program Studi Teknik Multimedia Broadcasting <br/>' .
          '(Animasi 2D, Animasi 3D, Visual Programming, Programming Multimedia)',
        'institution' => 'Politeknik Elektronika Negeri Surabaya'
        );

      $exp_list[] = array(
        'period' => 'November 2013',
        'activity' => 'Pembuatan Game Edukasi Anak-Anak "Citrik Grandprix" bekerjasama dengan CSR PLN Jawa Timur',
        'institution' => 'Politeknik Elektronika Negeri Surabaya'
        );

      $exp_list[] = array(
        'period' => 'September 2013',
        'activity' => 'Ketua Tim Kajian "Digital Classroom" untuk Direktorat Pembinaan SMK Kementrian Pendidikan dan Kebudayaan',
        'institution' => 'Politeknik Elektronika Negeri Surabaya'
        );

      $exp_list[] = array(
        'period' => '2012 - 2013',
        'activity' => 'Pengajar Pelatihan Dosen Akademi Komunitas',
        'institution' => 'Politeknik Elektronika Negeri Surabaya'
        );

      $exp_list[] = array(
        'period' => '2011 - 2013',
        'activity' => 'Pengajar pada Pelatihan untuk Guru SMK',
        'institution' => 'Politeknik Elektronika Negeri Surabaya'
        );

      $exp_list[] = array(
        'period' => 'November 2012',
        'activity' => 'Pembuatan Game Edukasi untuk Anak-Anak Berjudul "Petualangan Citrik" bekerjasama dengan CSR PLN Jawa Timur',
        'institution' => 'Politeknik Elektronika Negeri Surabaya'
        );

      $exp_list[] = array(
        'period' => 'September 2012',
        'activity' => 'Pengajar pada Pelatihan International untuk Negara Ketiga sebagai Kerjasama dengan JICA',
        'institution' => 'Politeknik Elektronika Negeri Surabaya'
        );
    ?>
    <section id="experience" class="row">
      <aside class="section-title col-lg-3">
        <h2>Pengalaman</h2>
      </aside>
      <div class="section-content col-lg-7">
        <?php for($i = 0; $i < count($exp_list); $i++): ?>
          <article class="row">
            <div class="col-lg-3">
              <p><span class="label label-primary"><?php echo $exp_list[$i]['period']; ?></span></p>
            </div>
            <header class="col-lg-9">
              <p>
                <?php echo $exp_list[$i]['activity']; ?><br/>
                <span class="text-muted"><?php echo $exp_list[$i]['institution']; ?></span>
              </p>
            </header>
          </article>
        <?php endfor; ?>
      </div>
    </section>
    <br/>
    <?php 
      $edu_list = array();
      $edu_list[] = array(
          'period' => '2008 - 2011',
          'university' => 'Institut Teknologi Sepuluh Nopember',
          'major' => 'Teknik Elektro - Telematika'
        );

      $edu_list[] = array(
          'period' => '2003 - 2008',
          'university' => 'Institut Teknologi Sepuluh Nopember',
          'major' => 'Teknik Informatika'
        );

      $edu_list[] = array(
          'period' => '2000 - 2003',
          'university' => 'SMU Negeri 1 Jember',
          'major' => 'Jurusan IPA'
        );
    ?>
    <section id="education" class="row">
      <aside class="section-title col-lg-3">
        <h2>Pendidikan</h2>
      </aside>
      <div class="section-content col-lg-7">
        <?php for ($i = 0; $i < count($edu_list); $i++): ?>
          <article class="row">
            <div class="col-lg-3">
              <p><span class="label label-primary"><?php echo $edu_list[$i]['period']; ?></span></p>
            </div>
            <header class="col-lg-9">
              <p>
                <?php echo $edu_list[$i]['university']; ?><br/>
                <span class="text-muted"><?php echo $edu_list[$i]['major']; ?></span>
              </p>
            </header>
          </article>
        <?php endfor; ?>
      </div>
    </section>
    <hr>
    <?php
      $response = "";
      function my_contact_form_generate_response($type, $message){
        global $response;

        if($type == "success"){
          $response = "<div class='alert alert-success'>{$message}</div>";
        } else {
          $response = "<div class='alert alert-danger'>{$message}</div>";
        }
      }

      // response message
      $not_human = "Human verification incorrect.";
      $missing_content = "Please supply all information.";
      $email_invalid = "Email Address Invalid.";
      $message_unsent = "Message was not sent. Try again.";
      $message_sent = "Thanks! Your message has been sent.";

      // user posted variable
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $human = $_POST['message_human'];

      // php mailer
      $to = get_option('admin_email');
      $subject = "Someone sent a message from " . get_bloginfo('name');
      $headers = 'From: ' . $email . 'rn' .
        'Reply-To: ' . $email . 'rn';

      if(!$human == 0){
        if($human != 2){
          my_contact_form_generate_response("error", $not_human);
        } else {
          // validate email
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            my_contact_form_generate_response("error", $email_invalid);
          }
          else {
            // validate presence of name and email
            if(empty($name) || empty($message)){
              my_contact_form_generate_response("error", $missing_content);
            } else {
              // send email
              $sent = wp_mail($to, $subject, strip_tags($message), $headers);
              if($sent){
                my_contact_form_generate_response("success", $message_sent);
              } else {
                my_contact_form_generate_response('error', $message_unsent);
              }
            }
          }
        }
      } else if ($_POST['submitted']) {
        my_contact_form_generate_response("error", $missing_content);
      }
    ?>
    <section id="contact-me" class="row">
      <aside class="section-title col-lg-3">
        <h2>Hubungi saya</h2>
      </aside>
      <div class="col-lg-6">
        <?php echo $response; ?>
        <form action="<?php the_permalink(); ?>#contact-me" method="post" role="form">
          <input type="text" class="form-control" name="name" placeholder="Nama" value="<?php echo esc_attr($_POST['name']); ?>">
          <br/>
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo esc_attr($_POST['email']); ?>">
          <br/>
          <textarea rows="8" class="form-control" name="message" placeholder="Pesan" value="<?php echo esc_attr($_POST['message']); ?>"></textarea>
          <br/>
          <div class="row">
            <div class="input-group col-lg-3">
              <input type="text" name="message_human" class="form-control" placeholder="?">
              <span class="input-group-addon"> + 3 = 5</span>
            </div>
          </div>
          <br/>
          <input type="hidden" name="submitted" value="1">
          <input class="btn btn-primary" name="submit" type="submit" value="KIRIM PESAN">
        </form>
      </div>
    </section>
    <br/>
  </div><!-- /.wrap

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
