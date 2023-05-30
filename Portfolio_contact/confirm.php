<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/stylesheet.css">
  
<script src="js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script src="js/jquery-library-1.0.0.js"></script>
  
 <title>LP</title>
</head>
<body>
  <div class="header menu">
    <ul>
      <li><a href="https://kobrr.com/Portfolio">Home</a></li>
      <li><a href="https://kobrr.com/Portfolio_about">About</a></li>
      <li><a href="https://kobrr.com/Portfolio_skill">Skill</a></li>
      <li><a href="https://kobrr.com/Portfolio_service">Service</a></li>
      <li><a href="https://kobrr.com/Portfolio_product">Product</a></li>
      <li><a href="https://kobrr.com/Portfolio_contact">Contact</a></li>
    </ul>
  </div>

  <form action="./mail.php" method="post">
    <div class="contact">
    <h1>お問い合わせ</h1>

    <div class="contact-title">
      <h2>内容確認</h2>
      <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信」ボタンを押して下さい。</p>
    </div>
    
    <label for="form-company" class="form_title">
        &nbsp;&nbsp;会社名&nbsp;&nbsp;
      </label>
      <p class="check"><?php echo htmlspecialchars($_POST['form-company']); ?></p>
      
      <label for="form-name" class="form_title">
        &nbsp;&nbsp;お名前&nbsp;&nbsp;
      </label>
      <p class="check"><?php echo htmlspecialchars($_POST['form-name']); ?></p>
    
      <label for="form-mail" class="form_title">
        &nbsp;&nbsp;メールアドレス&nbsp;&nbsp;
      </label>
      <p class="check"><?php echo htmlspecialchars($_POST['form-mail']); ?></p>
    
      <label for="form-inquiry" class="form_title">
        &nbsp;&nbsp;お問い合わせ詳細&nbsp;&nbsp;
      </label>
      <p class="form-detailcontents">ご依頼内容、お問い合わせ内容を<br class="spOnly">ご記載ください。</p>
      <p class="check"><?php echo htmlspecialchars($_POST['form-inquiry']); ?></p>
      
      <input type="button" name="btn_back" value="戻る" onClick="history.back();">
	    <input type="submit" name="btn_submit" formaction="./send.php" value="送信">
    </div>
    
  </form>

  <div class="footer menu">
    <ul>
      <li><a href="https://kobrr.com/Portfolio">Home</a></li>
      <li><a href="https://kobrr.com/Portfolio_about">About</a></li>
      <li><a href="https://kobrr.com/Portfolio_skill">Skill</a></li>
      <li><a href="https://kobrr.com/Portfolio_service">Service</a></li>
      <li><a href="https://kobrr.com/Portfolio_product">Product</a></li>
      <li><a href="https://kobrr.com/Portfolio_contact">Contact</a></li>
    </ul>
  </div>

</body>