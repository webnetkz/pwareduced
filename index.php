<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Title</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(0, 0, 0)">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/img/miniLogo.png" type="image/png">
        <link rel="apple-touch-icon" href="/public/img/logo.png">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/mobileStyle.css">
        <link rel="manifest" href="/public/json/manifest.json"> 
      </head>

    <body>
        <?php require_once "public/components/header.php"; ?>
        <div class="slider">

        </div>
        <section class="flex" id="content">
          <div class="half first"></div>
          <div class="half">
              <div class="second">
                <div class="third"></div>
                <div>123</div>
              </div>
              <div class="second">
                <div>123123123</div>
                <div class="fourth"></div>
              </div>
          </div>
        </section>
        <script>
          // Проверка браузера на поддержку service worker
         if('serviceWorker' in navigator) {
             // Подключаем sw
             navigator.serviceWorker.register('/sw.js').then(function() {
                 console.log("Service Worker Registered");
             });
         }
      </script>
      <script src="public/js/main.js"></script>
    </body>
</html>
