<!DOCTYPE html>
<html lang='ja'>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Akimitsu's PortFolio</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
  
          <a href="./index.php" class="navbar-brand" aria-label="ホーム">
            Portfolio
          </a>
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <!--/.container-fluid -->
      </nav>
    </header>
    <div class='container'>
      <div class="row m-5">
        <div class='col-12 text-center'>
          <?php
            mb_language("Ja");
            mb_internal_encoding("UTF-8");
          
            $to = 'akimitsu.speed@gmail.com';
            $name = $_POST['name'];
            $content = $_POST['content'];
            $from = $_POST['from'];
          
          
            if(mb_send_mail($to, $name, $content, $from))
            {
              echo "メールを送信しました";
              
            }
            else
            {
              echo "メールの送信に失敗しました";
            }
          ?>
        </div>  
      </div>
      <div class="row">
        <div class='col-12 text-center'>
          <a class="btn btn-success" href="index.php">戻る</a>
        </div>
      </div>
    </div>
    
    <footer class="footer">
      <p>Copyright © 2020 Akimitsu All Rights Reserved.</p>
    </footer>
  </body>
</html>