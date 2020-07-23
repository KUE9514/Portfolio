<!DOCTYPE html>
<html lang='ja'>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Akimitsu's PortFolio</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
  </head>
  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
  
          <a href="" class="navbar-brand" aria-label="ホーム">
            Portfolio
          </a>
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#top">Top</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#works">Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
      </nav>
      
      <div id="top" class="image_top">
        <h1 class="top__title">Akimitsu's Portfolio</h1>
      </div>
    </header>
    
    <section id="profile" class="section">
      <div class="container">
        <h2 class="section-title">Profile</h2>
        <div class="row">
          <div class="col-lg-6 text-center mb-5">
            <img class="myphoto" src="./image/IMG_k6sm8o.jpg">
          </div>
          <div class="col-lg-6 text-center">
            <ul class="profile">
              <li>名前：Akimitsu</li>
              <li>出身地：岐阜県</li>
              <li>趣味：ボーリング、キャンプ、釣り</li>
              <li>活動：前職を退職したのち3ヶ月間オンラインスクール受講。<br>
                        受講終了後はPHPを中心に日々勉強しています。</li>
              <li>その他：前職ではECサイトへの出品や管理ツールを使用していた為、エンドユーザーの目線で考える事ができます。</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="skills" class="section section-bg">
      <div class="container">
        <h2 class="section-title">Skills</h2>
        <div class="row text-center">
          <div class="col-lg-4 content-skills">
            <img class="image-icon" src="./image/icon-php.png">
            <h3>PHP</h3>
            <p>基本的な文法やMySQLの連携を習得。<br>
               Laravelを用いて簡単なWebアプリが制作出来ます。</p>
          </div>
          <div class="col-lg-4 content-skills">
            <img class="image-icon" src="./image/icon-html5.png">
            <h3>HTML5</h3>
            <p>基本的な知識を身に付けています。</p>
          </div>
          <div class="col-lg-4 content-skills">
            <img class="image-icon" src="./image/icon-css3.png">
            <h3>CSS3</h3>
            <p>レスポンシブデザインなど基本的な技術を身に付けています。</p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-4 content-skills">
            <img class="image-icon" src="./image/icon-javascript.png">
            <h3>javaScript</h3>
            <p>jQueryやVue.jsを用いてWebサイトに動きをつける事が出来ます。</p>
          </div>
          <div class="col-lg-4 content-skills">
            <img class="image-icon" src="./image/icon-mysql.png">
            <h3>MySQL</h3>
            <p>データベースの作成、テーブルの作成・操作・分析・結合といった基本的な操作を身に付けています。</p>
          </div>
          <div class="col-lg-4 content-skills">
            <img class="image-icon" src="./image/icon-github.png">
            <h3>git/GitHub</h3>
            <p>自分の書いたコードをGitHub上に公開しております。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="works" class="section">
      <div class="container">
        <h2 class="section-title">Works</h2>
        <div class="card mb-5 shadow animated" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 image-works">
              <a href="https://actpile.herokuapp.com" target="blank">
                <div class="image-effect">
                  <img class="rounded" src="./image/image-actpile.png" width="100%" height="100%" alt="Actpile">
                </div>
              </a>
            </div>
            <div class="col-lg-6 order-lg-1">
              <div class="card-body text-center">
                <h4 class="card-title">共有できるカレンダー式の活動記録</h4>
                <p class="card-text">URL:<a href="https://actpile.herokuapp.com" target="blank">https://actpile.herokuapp.com</a></p>
                <p class="card-text">使用言語：PHP、HTML5、CSS3</p>
                <p class="card-text">フレームワーク：Laravel、Bootstrap</p>
                <p class="card-text">開発環境：Cloud9、Linux、Heroku、git/GitHub</p>
                <p class="card-text">DB：MySQL</p>
                <p class="card-text">ユーザ名/パスワード：test/password</p>
                <p class="card-text"><a href="https://github.com/KUE9514/Actpile" target="blank">GitHub</a></p>
              </div>
            </div>  
          </div>
        </div>  
        <div class="card mb-5 shadow animated" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-lg-6 image-works">
              <div class="image-effect">
                <img class="rounded" src="./image/image-top.png" width="100%" height="100%" alt="Portflio">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card-body text-center">
                <h4 class="card-title">ポートフォリオ</h3>
                <p class="card-text">このサイトです。</p>
                <p class="card-text">使用言語：javaScript、HTML5、CSS3</p>
                <p class="card-text">フレームワーク：jQuery、Bootstrap</p>
                <p class="card-text">開発環境：Cloud9</p>
                <p class="card-text"><a href="#">GitHub</a></p>
              </div>  
            </div>
          </div>
        </div>
      </div>  
    </section>
    <section id="contact" class="section section-bg">
      <div class="container">
        <div class="mb-4">
          <h2 class="section-title">Contact</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-10">
            <form action="./contact.php" method="post">
              <div class="form-group row">
                <div class="col-md-12">
                <label>お名前</label>
                
                  <input type="text" class="form-control" name="name" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>メールアドレス</label>
                  <input type="email" class="form-control" name="from" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>内容</label>
                  <textarea class="form-control" name="content" cols="60" rows="10" required></textarea>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                  <button type="submit" class="btn btn-success m-3">送信する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    </section>
    
    
      
    <footer>
      <p>Copyright © 2020 Akimitsu All Rights Reserved.</p>
    </footer>
        
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7481237b93.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>