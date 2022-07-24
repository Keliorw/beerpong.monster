<?php
$title = 'Главная страница';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <?=require "src/head.php" ?>

  <script>
    function getRandomInt(max) {
      return Math.floor(Math.random() * max);
    }
    var rotate = 0;

    var LastImageTandjiro = 0;
    var NowImageTandjiro = 0;

    var LastImageNedzuko = 0;
    var NowImageNedzuko = 0;

    var step = 4;
    var imagesTandjiro = [
      "https://nntheblog.b-cdn.net/wp-content/uploads/2022/04/Does-Tanjiro-Die-in-Demon-Slayer.jpg",
      "https://64.media.tumblr.com/f8d168b5ef78238a90ef2eabb79986ed/88930e4f8331c1d1-63/s540x810/7b3c2791fbc77fc7b937d3fcd63fea29ebe2c46f.jpg",
      "https://www.lenbaget.ru/wp-content/uploads/2021/11/17539-1000x830-1.jpg",
      "https://cdn.ananasposter.ru/image/cache/catalog/poster/anime/81/17538-1000x830.jpg",
      "https://img2.akspic.ru/crops/4/7/7/4/6/164774/164774-tandzhiro_kamado-ubijca_demonov_kimetsu_no_yaiba-anime-purpur-art-1366x768.jpg",
      "https://klinok-demonov.ru/wp-content/uploads/2020/03/tandzhiro-kamado-3.jpg"
      
    ];
    var imagesNedzuko = [
      "https://cs13.pikabu.ru/post_img/big/2019/10/24/3/1571889352193112424.jpg",
      "http://pm1.narvii.com/7357/1317c7c3181c2758b5f3894d149372f2eb537b8cr1-720-720v2_uhq.jpg",
      "http://pm1.narvii.com/7409/2b029ed6368b43933251bc644e802eeed3b4a477r1-848-1200v2_uhq.jpg",
      "https://anime-star.ru/wp-content/uploads/2022/01/png-kartinki-anime-klinok-rassekayushhij-demonov_19.jpg",
      "https://www.sofilmesgratis.com/wp-content/uploads/2021/12/Nezuko.webp",
      "https://pm1.narvii.com/7755/dc6aa52d9aa4f3d2567c63fb672a3c7748fef7b8r1-1050-791v2_hq.jpg"
      
    ];
    setInterval(function(){
      $('.card div').css({'transform' : `perspective(2000px) rotateY(${rotate}deg)`});
      rotate+=step;
      if (rotate == 96){
        while (LastImageTandjiro == NowImageTandjiro){
          NowImageTandjiro = getRandomInt(imagesTandjiro.length);      
          console.log("Tandjiro = "+NowImageTandjiro);
        }
        LastImageTandjiro = NowImageTandjiro;
        $('.card').children().eq(1).css({'backgroundImage' : `url(${imagesTandjiro[NowImageTandjiro]})`});
      }

      if (rotate == 280){
        while (LastImageNedzuko == NowImageNedzuko){
          NowImageNedzuko = getRandomInt(imagesNedzuko.length);      
          console.log("Nezuko = "+NowImageNedzuko);
        }
        LastImageNedzuko = NowImageNedzuko;
        $('.card').children().eq(0).css({'backgroundImage' : `url(${imagesNedzuko[NowImageNedzuko]})`});
      }

      if (rotate >= 360){
        rotate = 0;
      }
    }, 100)
  </script>
</head>

<body>
  <div class="block">
    <div class="card">
      <div></div>
      <div></div>
    </div>
  </div>
</body>

</html>