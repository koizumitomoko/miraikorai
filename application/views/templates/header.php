<!DOCTYPE html>

<html lang="ja">

<head>
    <title>未来コライ|Miraikorai|<?= $title ?> </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="未来コライは、混声のバーバーショップを歌うカルテットグループです。">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <?= link_tag("css/style.css")?>
    <?= link_tag("css/color_style.css")?>
    <?= link_tag("css/header_footer.css")?>
    <script src="<?= base_url("js/language.js")?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--web icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
</head>

<body>
  <header>
      <div class="header_top"></div>
      <nav class="header_nav">
          <div class="header_menu_sub">
            <div class="header_logo"><a href="../index.html"><img src="../images/logo_mini.png" alt="未来コライロゴ"></a></div>
              <div class="header_menu_right">
<div class="pc_only">
                  <div class="header_menu_lng">
                    <ul>
                        <li class="header_contact"><a href="../postmail/index.html"><i class="lng_icon far fa-envelope fa-2x"></i><p> CONTACT</p></a></li>
                        <li><i class="lng_icon fas fa-globe fa-2x"></i><p> LANGUAGE</p>
                            <ul>
                                <li class="lang_select">JP</li>
                                <li><a href="" class="langEng">EN</a></li>
                            </ul>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          <div class="pc_only">
          <nav class="header_menu_main">
              <ul>
                  <li class="hover_red"><a href="../about.html">ABOUT</a></li>
                  <li class="hover_blue"><a href="../stage.html">STAGE</a></li>
                  <li class="hover_green"><a href="../gallery.html">GALLERY</a></li>
                  <li class="hover_yellow"><a href="../blog.html">BLOG</a></li>
              </ul>
          </nav>
        </div>

      </nav>
<div class="sp_only">
      <input type="checkbox" class="check" id="checked">
               <label class="menu-btn" for="checked">
                   <span class="bar top"></span>
                   <span class="bar middle"></span>
                   <span class="bar bottom"></span>
                   <span class="menu-btn__text">MENU</span>
               </label>
               <label class="close-menu" for="checked"></label>
               <nav class="drawer-menu">
                 <ul>
                     <li><a href="../about.html">ABOUT</a></li>
                     <li><a href="../stage.html">STAGE</a></li>
                     <li><a href="../gallery.html">GALLERY</a></li>
                     <li><a href="../blog.html">BLOG</a></li>
                     <li><a href="../postmail/index.html">CONTACT</a></li>
                     <li><a href="" class="langEng">LANGUAGE JP<i class="fas fa-long-arrow-alt-right"></i>EN</a></li>
                 </ul>
            <div class="sns_sp">
                        <ul>
                         <li class="bg_green"><a href="https://twitter.com/miraikorai" target="_blank"><i class="fab fa-twitter fa-2x"></i></a></li>
                         <li class="bg_blue"><a href="https://www.facebook.com/miraikorai/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a></li>
                         <li class="bg_red"><a href="https://www.youtube.com/channel/UCpZujNekSemJADXLgu4Zaqg?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x"></i></a></li>
                       </ul>

             </div>
             </nav>
             </div>
  </header>
</body>
