<?php

session_start();
$error=[];


if ($_SERVER['REQUEST_METHOD']==='POST'){
	$post=filter_input_array(INPUT_POST, $_POST);

	//フォーム送信したときエラーをチェックする



	$category=filter_input(INPUT_POST,'category');
	$company_name=filter_input(INPUT_POST,'company_name');
	$name=filter_input(INPUT_POST,'name');
	$mail=filter_input(INPUT_POST,'mail');
	$tel=filter_input(INPUT_POST,'tel');
	$menu=filter_input(INPUT_POST,'menu');


if ($post['category']===''){
	$error['category']='blank';
}

//if ($post['company_name']===''){
	//$error['company_name']='blank';
//}

if ($post['name']===''){
	$error['name']='blank';
}

if ($post['mail']===''){
	$error['mail']='blank';
}else if (!filter_var($post['mail'],FILTER_VALIDATE_EMAIL)){
	$error['mail']='mail';
}

//if ($post['tel']===''){
	//$error['tel']='blank';
//}

if ($post['menu']===''){
	$error['menu']='blank';
}

if (count($error)===0){
	//エラーがない場合確認画面へ移動
	$_SESSION['form']=$post;
	header('Location: confarm.php');
    exit();
}

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>xdコーディング</title>
<link href="index.css" rel="stylesheet">
<link href="reset.css" rel="stylesheet">

</head>

<body>
<body>
<div class="header">
<div class="header-top">
<div class="header-logo">
<img src="image/site-logo.png">
	</div><!--header-logo-->
<div class="drawer">
<input type="checkbox" id="drawer-check" class="drawer-btn">
<label id="drawer-open" for="drawer-check"><span></span><span></span><span></span></label>
<label id="drawer-close" for="drawer-check"></label>
<div class="drawer-menu">
<ul class="g-nav">
<li><img src="image/site-logo-list.png"></li>
<li><a href="#">ABOUT US</a></li>
<li><a href="#">WARKS</a></li>
<li><a href="#">CULTURE</a></li>
<li><a href="#">TOPICS</a></li>
<li><a href="#">CONTENT</a></li>
</ul>
</div><!--drawer-menu-->
</div><!--drawer-->
</div><!--header-top-->
	
<div class="header-left">
<img src="image/home.png">
</div><!--header-left-->
<div class="header-right">
	</div><!--home header-right-->
<div class="header-right-menu">
<p>デザインで人を笑顔にする会社<br>DIGSMILE INC</p>
<h1>DESIGN<br>FOR<br>SMILE</h1>
</div><!--header-right-menu-->
</div><!--header-->
	
<div class="about">
<div class="about-menu">
<h2>ABOUT US</h2>
<p>DIGSMILEは、デザインで人を笑顔にする会社。<br>何でもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。DIGSMILEの社名にはそんな想いが込められています。</p>

<a href="#ABOUT US">reod more</a>
</div><!--about-menu-->
</div><!--about-->


<div class="works-culture">
<div class="works-culture-menu">
<article class="works">
<h2>WORKS</h2>
<img src="image/home-works.png">
<p>DIGSMILEの制作実績を紹介します。</p>
<a href="#">reod more</a>
</article>
	
<article class="culture">
<h2>CULTURE</h2>
<img src="image/home-culture.png">
<p>DIGSMILEの社内文化について紹介します。</p>
	<a href="#">reod more</a>
</article>
	</div><!--works-culture-menu-->
</div><!--works-colture-->
	
	
<div class="LATEST-TOPICS">
<div class="LATEST-TOPICS-title">
<h2>LATEST TOPICS</h2>
</div><!--LATEST-TOPICS-title-->
<div class="LATEST-TOPICS-menu">
<ul class="topics">
<li><a href="#"><span>2020 02.01</span><br>イベントレポート「VRクリエイター座談会～5Gの次に来るもの～」</a></li>
<li><a href="#"><span>2020 01.18</span><br>プレスリリースのお知らせ DIGGIN' RECORDS</a></li>
<li><a href="#"><span>2020 01.01</span><br>新年明けましておめでとうございます</a></li>
</ul>
<a href="#" id="read-more">reod more</a>
</div><!--LATEST-TOPICS-menu-->
</div><!--LATEST-TOPICS-->
	

<div class="CONTACT-back">
<div class="CONTACT-box">
<article class="CONTACT-menu">
<h2>CONTACT</h2>
	<p>制作の依頼、IRや採用についての連絡・お問い合わせはコンタクトページから承っております。<br>まずはお気軽にご連絡ください。担当者から改めて返信いたします。</p>
	<a href="#" id="read-more">reod more</a>
</article>

<article class="CONTACT-img">
<img src="image/home-contact.png">
</article>
	</div><!--CONTACT-box-->
</div><!--CONTACT-back-->

<a id="ABOUT US"></a>
<div class="about_us">
<div class="about_us-left">
<img src="image/about.png">
</div><!--about_us-left-->
<div class="about_us-right">
	</div><!--about_us-right-->
	<div class="about_us-right-menu">
	<h1>ABOUT US</h1>
<p>DIGSMILEについて</p>
</div><!--about_us-right-menu-->
</div><!--about_us-->
	
<div class="company-wrap">
<div class="company visition">
<div class="visition-menu">
<h3>VISION</h3>
<h4>デザインで人を幸せにする会社</h4>
<p>私たちのデザインで人が笑顔になる。<br><br>そんなデザインを目指しています。<br><br>私達が考える人を笑顔に出来るデザインとは、<br>デザインが課題を適切に解決が出来ているかどうか。<br><br>ビジュアルだけでなく、<br>本当に求められているものは何かわ考え抜いて、<br>デザインしていきたい。<br><br>誰かの幸せを創ることも、<br>世界の常識を変えていくことだって出来る。<br><br>私達はデザインの力を信じています。</p>
</div><!--visition-menu-->
	</div><!--company visition-->
	
<div class="company message">
<div class="CEO-MESSAGE">
<img src="image/about-CEO.png">
	
<div class="message-menu">
<h3>CEO MESSAGE</h3>
<p>良いデザインは人を幸せにする。<br><br>私達はそう信じています。<br><br>デザインを通して、ビジネスの課題とユーザーの課題を解決することで、世の中を幸せにしていきたい。<br><br>現在はあらゆるプロダクトがデジタル化されており、デザイナーに対する需要は高まっていきます。それとともに、期待される役割も幅広くなりつつあります。<br><br>クリエイティブで社会の可能性を切り開いていく。<br><br>変化の激しい現代、私達はデザインの力で社会を良い方向に変革していく企業を目指していきます。</p>
</div><!--company message-menu-->
</div><!--CEO-MESSAGE-->
</div><!--company message-->
	
<div class="company information">
<div class="information-title">
<h2>COMPANY</h2>
</div><!--information-title-->

<div class="information-menu">
<ul class="information-nav">
    <li>社名　　　　　　株式会社DIGSMILE</li>
	<li>代表取締役　　　テイラー・スウィフト</li>
	<li>設立　　　　　　2020年1月1日</li>
	<li>資本金　　　　　一億円</li>
	<li>所在地　　　　　東京都新宿区xx0-0-0</li>
	<li>電話番号　　　　03-0000-0000</li>
</ul>
</div><!--information-menu-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51840.018766061745!2d139.70919719999998!3d35.70158875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d2059b7fd4b%3A0xec61c68fe232efd2!2z5p2x5Lqs6YO95paw5a6_5Yy6!5e0!3m2!1sja!2sjp!4v1639312289473!5m2!1sja!2sjp" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div><!--company information-->
</div><!--company-wrap-->
	
	
<div class="CONTACT">
<div class="CONTACT-left">
<img src="image/contact.png">
</div><!--CONTACT-left-->
<div class="CONTACT-right">
	</div><!--CONTACT-right-->
	<div class="CONTACT-right-menu">
	<h1>CONTACT</h1>
<p>お問い合わせ</p>
</div><!--CONTACT-right-menu-->
</div><!--CONTACT-->
	
<div class="contact-menu">
<p>ご依頼やご相談についてのご要望がございましたら、下記フォームによりお気軽のお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</p>
	
<form action="index.php" method="POST" novalidate>
<div class="form category">
<label>お問い合わせ種別<span class="important">必須</span></label>
<div class="category-menu">
<label><input type="radio" name="category" value="制作依頼" required>制作依頼</label>
<label><input type="radio" name="category" value="採用">採用</label>
<label><input type="radio" name="category" value="IR">IR</label>
<label><input type="radio" name="category" value="その他">その他</label>

<?php if ($error['category']==='blank'): ?>
<p class="error-msg">カテゴリーをお選びください</p>
<?php endif; ?>
	</div><!--category-menu-->
</div><!--form category-->

<div class="form company-name">
<label>会社名・団体名</label>
<input type="text" name="company_name" value="<?php echo htmlspecialchars($post['company_name']); ?>" placeholder="会社名" required autofocus>
</div><!--form company-name-->
	
<div class="form name">
<label>お名前<span class="important">必須</span></label>
<input type="text" name="name" value="<?php echo htmlspecialchars($post['name']); ?>" placeholder="氏名" required autofocus>
<?php if ($error['name']==='blank'): ?>
<p class="error-msg">名前をご記入ください</p>
<?php endif; ?>
</div><!--form name-->
	
<div class="form mail-address">
<label>メールアドレス<span class="important">必須</span></label>
<input type="email" name="mail" value="<?php echo htmlspecialchars($post['mail']); ?>" placeholder="メールアドレス" required autofocus>
<?php if ($error['mail']==='blank'): ?>
<p class="error-msg">メールアドレスをご記入ください</p>
<?php endif; ?>

<?php if ($error['mail']==='mail'): ?>
<p class="error-msg">メールアドレスを正しくご記入ください</p>
<?php endif; ?>
</div><!--form mail-address-->
	
<div class="form tel">
<label>電話番号</label>
<input type="tel" name="tel" value="<?php echo htmlspecialchars($post['tel']); ?>" placeholder="電話番号" required autofocus>
</div><!--form tel-->
	
<div class="form menu">
<label>お問い合わせ内容<span class="important">必須</span></label>
<textarea name="menu" rows="15" placeholder="お問い合わせ内容" required autofocus><?php echo htmlspecialchars($post['menu']); ?></textarea>
<?php if ($error['menu']==='blank'): ?>
<p class="error-msg">お問い合わせ内容をご記入ください</p>
<?php endif; ?>
</div><!--form menu-->
	
<div class="PRAIVACY-POLICY">
<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
</div><!--PRAIVACY-POLICY-->
	
<label><input type="checkbox">個人情報の取り扱いについて同意の上送信します。</label>
	
<div class="form-btn">
	<input type="submit" value="確認" name="lend-btn" class="button" style="color:white;background:black;">
	</div><!--btn-->
</form>

	</div><!--contact-menu-->

	<footer class="footer">
	<p>2018 DIGSMILE INC</p>
	</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="xd.js"></script>
</body>
</html>
