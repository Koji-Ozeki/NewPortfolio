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
<?php
/*******************************
 データの受け取り 
*******************************/
$company = $POST["form-company"];
$name = $POST["form-name"];
$mail = $POST["form-mail"];
$inquiry = $POST["form-inquiry"];

//危険な文字列を入力された場合にそのまま利用しない対策
$namae		= htmlspecialchars($namae, ENT_QUOTES);
$mailaddress	= htmlspecialchars($mailaddress, ENT_QUOTES);
$naiyou		= htmlspecialchars($naiyou, ENT_QUOTES);

$company = htmlspecialchars($company, ENT_QUOTES);
$name = htmlspecialchars($name, ENT_QUOTES);
$mail = htmlspecialchars($mail, ENT_QUOTES);
$inquiry = htmlspecialchars($inquiry, ENT_QUOTES);

/*******************************
 未入力チェック 
*******************************/
$errmsg = '';	//エラーメッセージを空にしておく
if ($company == '') {
	$errmsg = $errmsg.'<p>会社名が入力されていません。</p>';
}
if ($name == '') {
	$errmsg = $errmsg.'<p>お名前が入力されていません。</p>';
}
if ($mail == '') {
	$errmsg = $errmsg.'<p>メールアドレスが入力されていません。</p>';
}
if ($inquiry == '') {
	$errmsg = $errmsg.'<p>お問い合わせ内容が入力されていません。</p>';
}

/*******************************
 メール送信の実行
*******************************/
if ($errmsg != '') {
	//エラーメッセージが空ではない場合には、[前のページへ戻る]ボタンを表示する
	echo $errmsg;
	
	//[前のページへ戻る]ボタンを表示する
	echo '<form method="post" action="index.php">';
	echo '<input type="hidden" name="company" value="'.$company.'">';
	echo '<input type="hidden" name="name" value="'.$name.'">';
	echo '<input type="hidden" name="mail" value="'.$mail.'">';
	echo '<input type="hidden" name="inquiry" value="'.$inquiry.'">';
	echo '<input type="submit" name="backbtn" onClick="history.back(); value="前のページへ戻る">';
	echo '</form>';
} else {
	//エラーメッセージが空の場合には、メール送信処理を実行する
	//メール本文の作成
	$honbun = '';
	$honbun .= "メールフォームよりお問い合わせがありました。\n\n";
	$honbun .= "【会社名】\n";
	$honbun .= $company."\n\n";
	$honbun .= "【お名前】\n";
	$honbun .= $name."\n\n";
	$honbun .= "【メールアドレス】\n";
	$honbun .= $mail."\n\n";
	$honbun .= "【お問い合わせ内容】\n";
	$honbun .= $inquiry."\n\n";
	
	//エンコード処理
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");

	//メールの作成
	$mail_to	= "kouji.19950111@gmail.com";			//送信先メールアドレス
	$mail_subject	= "メールフォームよりお問い合わせ";	//メールの件名
	$mail_body	= $honbun;				//メールの本文
	$mail_header	= "from:".$mail;			//送信元として表示されるメールアドレス
	
	//メール送信処理
	$mailsousin	= mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);
	
	//メール送信結果
	if($mailsousin == true) {
		header("Location:https://kobrr.com/Portfolio_contact/send.php");
    exit;
	} else {
		echo '<p><br><br>申し訳ございません。<br>メール送信でエラーが発生しました。</p>';
	}
}
?>
</body>