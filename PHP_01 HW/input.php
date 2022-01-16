<!DOCTYPE html>
<html lang="ja">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="reset.css">
  <title>みんなの健康活動</title>
</head>

<body class="body">

  <!--Headerエリア--->
  <header>
    <div class="top">
      <div class="top-under">  
        <h1 class="logo"><a href="./Kenko-top.html"><img src="./PAGE LOGO.png" alt="ロゴ" width=100px height=100px ></a></h1>
        <h1 class="letter">みんなの健康活動<br><div class="small">からだをバランスよく思いやり、楽しくリフレッシュ</div></h1>
      </div>
    </div>

    <div class="menu">
        <ul class=nav>
          <li class="li"><a href="./Kenko-chat.html">健康ナレッジ<br>を投稿</a></li>
          <li class="li"><a href="./Kenko-top.html">健康<br>スケジューリング</a></li>
          <li class="li"><a href="./Kenko-top.html">お楽しみ<br>マーケットプレイス</a></li>
        </ul>
    </div>
  </header>

  <main>
   <!--パーソナライズ提案エリア--->    
    <section id="contact">
      <div class="contact_area">
        <div class="form-wrapper">
          <h2 class="contact-title">パーソナライズ健康活動の提案を受けよう</h2>
          <p class="con1">自分と同じようなタイプを特定して、継続できる方法を提案します</p>

<body>

	<form name="userForm" action="write.php" method="post">

                <dl class="form-inner">
                  <dt class="form-title check-checkbox">年齢</dt>
                  <dd class="form-item">
                    <ul class="form-ul_01">
                      <li class=checkbox><input type="radio" name="age" value="20代" id="a" >20代</li>
                      <li class=checkbox><input type="radio" name="age" value="30代" id="b" >30代</li>
                      <li class=checkbox><input type="radio" name="age" value="40代" id="c" >40代</li>
                      <li class=checkbox><input type="radio" name="age" value="50代" id="d" >50代</li>
                      <li class=checkbox><input type="radio" name="age" value="60代" id="e" >60代以上</li>
                    </ul>
                  </dd>

                  <dt class="form-title check-checkbox"> 性別</dt>
                  <dd class="form-item">
                    <ul class="form-ul_02">
                      <li class=checkbox><input type="radio" name="sex" value="男性" id="g">男性</li>
                      <li class=checkbox><input type="radio" name="sex" value="女性" id="h">女性</li>
                      <li class=checkbox><input type="radio" name="sex" value="その他" id="i">その他</li>
                    </ul>
                  </dd>

                  <dt class="form-title">働き方</dt>
                  <dd class="form-item">
                      <select id="work" name="work" class="form-parts"></select>
                  </dd>

                  <dt class="form-title check-checkbox"> 今日時点での最大の問題意識</dt>
                  <dd class="form-item">
                    <ul class="form-ul">
                      <li class=checkbox><input type="radio" name="problem" value="自分にあった運動の度合いを知りたい" id="j"> 自分にあった運動の度合いを知りたい</li>
                      <li class=checkbox><input type="radio" name="problem" value="自分にあった運動の選択肢を知りたい" id="k">自分にあった運動の選択肢を知りたい</li>
                      <li class=checkbox><input type="radio" name="problem" value="健診の値を改善したい" id="l">健診の値を改善したい</li>
                      <li class=checkbox><input type="radio" name="problem" value="趣味に合わせた健康を改善したい" id="m">趣味に合わせた健康を改善したい</li>
                      <li class=checkbox><input type="radio" name="problem" value="家族と共に健康に取組みたい" id="n">家族と共に健康に取組みたい</li>
                    </ul>
                  </dd>

                  <dt class="form-title check-checkbox"> 時間予算（運動や調理、健康活動に使える時間のイメージ）</dt>
                  <dd class="form-item">
                    <ul class="form-ul">
                      <li class=checkbox><input type="radio" name="time" value="無制限（提案を聞きたい）" id="">無制限（提案を聞きたい）</li>
                      <li class=checkbox><input type="radio" name="time" value="週に1時間~3時間" id="">週に1時間~3時間</li>
                      <li class=checkbox><input type="radio" name="time" value="週に4時間~10時間" id="">週に4時間~10時間</li>
                      <li class=checkbox><input type="radio" name="time" value="週に11時間~30時間" id="">週に11時間~30時間</li>
                      <li class=checkbox><input type="radio" name="time" value="週に30時間~50時間" id="">週に30時間~50時間</li>
                      <li class=checkbox><input type="radio" name="time" value="それ以上" id="">それ以上</li>
                    </ul>
                  </dd>

                  <dt class="form-title check-checkbox"> その他要望 </dt>
                  <dd class="form-item">
                    <textarea id="demand" name="demand" class="form-parts"></textarea>
                  </dd>
                </dl>
		<input type="submit" value="送信">
	</form>

</body>
</html>