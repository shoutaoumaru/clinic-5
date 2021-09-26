<?php
 /* Template Name: promise
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>当院について | 医院テンプレート5</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300;400;600&family=Noto+Serif+JP:wght@200;400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>

<body>
  <div class="superwrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>HOME</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>"><span>MENU</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/doctor')); ?>"><span>DOCTOR</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>NEWS</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>"><span>FAQ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span>RECRUIT</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.p-header -->
    <div id="main-contents">
      <div class="promise">
        <div class="promise__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2@pc.jpg" alt="">
        </div>
        <div class="c-container">
          <h2 class="promise__title clip-js1 left">
            <p class="c-head01">PROMISE</p>
            <p class="c-sub-head01">当医院の約束</p>
          </h2>
          <div class="promise__txtarea appear up">
            <h4 class="promise__txt-tit c-head02 item">患者さんと健康を<br class="view-pc">
              “共に真剣に”向き合うために</h4>
            <p class="c-txt-sm item">
              耳鼻咽喉科疾患は、症状を何度も繰り返したり、症状が長く続くこともあります。また、お子様からご年配の方まで幅広い年齢層の方が対象となります。それ故、それぞれの患者様に合った治療方針や治療方法を十分に説明し、同意をえた上で行うことが大切であると考えています。
            </p>
          </div>
          <ul class="promise__list appear up">
            <li class="promise__item item">
              <h2>耳鼻咽喉科の専門医として</h2>
              <p class="c-txt-sm">
                当クリニックでは、専門医の強みを活かして早期発見、早期治療につながる内視鏡検査や超音波検査を行うことができます。また、CTやMRIなども、診察室で画像を見ながら、わかりやすく結果を説明することができます。
                万一、紹介が必要となった際でも、疾患に合わせて信頼できる医療機関をご紹介しています。 わからないことやご不安がありましたらご相談ください。
              </p>
              <div class="c-btn">
                <a class="c-link animsition-link item" href="<?php echo esc_url( home_url('/treatment')); ?>">VIEW MORE</a>
              </div>
            </li>
            <li class="promise__item item">
              <h2>くつろぎの環境で行う、<br>からだに優しい内視鏡検査</h2>
              <p class="c-txt-sm">
                「病気の早期発見、早期治療に内視鏡検査はとてもメリットがある」、ということは知っているものの、どうしても「苦しそう」「怖そう」「痛いらしい」などのイメージがあり、先延ばしにしている方は多いのではないでしょうか？
                当クリニックでは、より楽に、より安心して検査を受けていただくために、患者さまがくつろげる環境を整え、確かな観察力をご提供します。
              </p>
              <div class="c-btn">
                <a class="c-link animsition-link item" href="<?php echo esc_url( home_url('/treatment')); ?>">VIEW MORE</a>
              </div>
            </li>
            <li class="promise__item item">
              <h2>皆様のかかりつけ医として</h2>
              <p class="c-txt-sm">
                感冒やワクチン接種などの一般的な内科診療のほか、健康長寿の妨げになる生活習慣病（高血圧や高脂血症、骨粗しょう症など）を早期に発見し、大病にならないよう継続的に診療を行います。
              </p>
              <div class=" c-btn">
                <a class="c-link animsition-link item" href="<?php echo esc_url( home_url('/doctor')); ?>">VIEW MORE</a>
              </div>
            </li>
          </ul>
          <div class="contents">
            <p class="contents__scroll parallax-rt">MEDICAL</p>
            <p class="c-txt-sm">
              "はな"みみ"のど"に関してどんなことでも気になる事をお聞かせ下さい。<br class="view-pc">
              些細な事でも構いません。<br class="view-pc">
              しっかりとお悩みをお伺いしながら一人ひとりに合った治療法をご提案させて頂きます。
            </p>
            <div class="promise__reserve c-btn">
              <a class="c-link" href="tel:092-686-7954">予約する</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-------- /#main-contents -------->
    <footer id="footer" class="p-footer">
      <div class="p-footer__inner clip-text skew">
        <div class="p-footer__logo">
        </div>
        <div class="p-footer__menu">
          <ul class="p-footer__list">
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">HOME</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">MENU</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/doctor')); ?>">DOCTOR</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">FAQ</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href="/<?php echo esc_url( home_url('/recruit')); ?>">RECRUIT</a>
            </li>
          </ul>
        </div>
        <div class="p-footer__copy">
          &copy;2021 RivRound.inc
        </div>
      </div>
    </footer>
    <!-------- /.p-footer -------->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">HOME</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">MENU</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/doctor')); ?>">DOCTOR</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">FAQ</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="/<?php echo esc_url( home_url('/recruit')); ?>">RECRUIT</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- /.superwrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/simpleParallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/parallax.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>