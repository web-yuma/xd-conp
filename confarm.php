<?php 
session_start();

$post=$_SESSION['form'];
if ($_SERVER['REQUEST_METHOD']=='POST'){

}

if (isset($_POST["submit"])){
	mb_language("ja");
	mb_internal_encoding("UTF-8");

	$subject="お問い合わせ内容の確認";

	$body=<<<EOM
	{$name}様
	お問い合わせありがとうございます。
	以下のお問い合わせ内容を、メールにて確認させていただきました。

	
[会社名]
{$company_name}

[氏名]
{$name}

[メールアドレス]
{$mail}

[電話番号]
{$tel}

[お問い合わせ内容]
{$menu}

内容を確認の上、回答させていただきます。
しばらくお待ちください。
EOM;
}

?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>xdコーディング</title>
<link href="index.css" rel="stylesheet">
<link href="reset.css" rel="stylesheet">
</head>

<body>
<form action="comfarm.php" method="post">

<div class="form category">
<input type="hidden" name="company_name" value="<?php echo $category; ?>">
<div class="category-menu">
	</div><!--category-menu-->
</div><!--form category-->

<div class="form company-name">
<input type="hidden" name="company_name" value="<?php echo $company_name; ?>">
</div><!--form company-name-->
	
<div class="form name">
<input type="hidden" name="name" value="<?php echo $name; ?>">
</div><!--form name-->
	
<div class="form mail-address">
<input type="hidden" name="mail" value="<?php echo $mail; ?>">
</div><!--form mail-address-->
	
<div class="form tel">
<input type="hidden" name="tel" value="<?php echo $tel; ?>">
</div><!--form tel-->
	

<div class="comfarm-box">
<h2>お問い合わせ 内容確認</h2>
<p>お問い合わせ内容はこちらでよろしいでしょうか？<br>よろしければ「送信する」ボタンを押してください。</p>
<div class="comfarm-menu">
<label>カテゴリー:</label>
<p id="comfarm"><?php echo htmlspecialchars($post['category']); ?></p>
</div>

<div class="comfarm-menu">
<label>会社名:</label>
<p id="comfarm"><?php echo htmlspecialchars($post['company_name']); ?></p>
</div>

<div class="comfarm-menu">
<label>名前:</label>
<p id="comfarm"><?php echo htmlspecialchars($post['name']); ?></p>
</div>

<div class="comfarm-menu">
<label>メールアドレス:</label>
<p id="comfarm"><?php echo htmlspecialchars($post['mail']); ?></p>
</div>

<div class="comfarm-menu">
<label>電話番号:</label>
<p id="comfarm"><?php echo htmlspecialchars($post['tel']); ?></p>
</div>

<div class="comfarm-menu">
<label>お問い合わせ内容:</label>
<p id="comfarm"><?php echo nl2br(htmlspecialchars($post['menu'])); ?></p>
</div>

</div><!--comfarm-box-->

	
<div class="form-btn">
	<input type="submit" value="送信する" name="lend-btn" class="button" style="color:white;background:black;width:20%;">
	<button type="button" class="button" style="color:white;background:#9e99b4;width:20%;" onclick="history.back(1)">戻る</button>
	</div><!--btn-->
</form>
</body>
</html>
