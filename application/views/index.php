<head>
    <?= link_tag("css/top_style.css")?>
</head>

<body>
    <div class="wrapper">

        <div class="header_logo_main">
                <?= anchor('index', 
                    img(array
                        (   'src' => 'images/logo_main.png',
                            'alt' => '未来コライロゴ'))
                ) ?>
        </div>
        <div class="main_top">
                <p>Barbershop Quartet</p>
                <h1>未来コライ</h1>
            <div class="main_top_img">
                <?= anchor('index', 
                    img(array
                        (   'src' => 'images/main_images/main_imags_01.png',
                            'alt' => 'メインイメージ'))
                ) ?>
            </div>
        </div>
        <div class="main_contents">
            <div class="top_info">
                <h2>INFORMATION</h2>
                <div class="border"></div>
                <table>
                    <?php foreach ($information as $information_item): ?>
                    <tr>
                        <td class="top_info_date"><?= substr($information_item['publishment_date'], 0, 10) ?></td>
                        <td class="top_info_mark pc_only">◆</td>
                        <td class="top_info_text hover_yellow"><?=$information_item['title']?>
                        <?=$information_item['detail']?></td>
                    </tr>
                    <?php endforeach;?>
                </table>

                <div class="top_info_text_moer"><a href="#">MORE</a></div>
            </div>
            <div class="pc_only">
              <div class="sns">
              <ul>
                  <li class="hover_bg_green"><a href="https://twitter.com/miraikorai" target="_blank"><i class="fab fa-twitter fa-2x"></i><br>Twitter</a></li>
                  <li class="hover_bg_blue"><a href="https://www.facebook.com/miraikorai/" target="_blank"><i class="fab fa-facebook fa-2x"></i><br>Facebook</a></li>
                  <li class="hover_bg_red"><a href="https://www.youtube.com/channel/UCpZujNekSemJADXLgu4Zaqg?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x"></i><br>YouTube</a></li>
              </ul>
            </div>
            </div>
        </div><!--main_contets-->

    </div><!--wrapper-->
</body>

</html>
