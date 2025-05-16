

<!---
<div class="share-buttons" data-source="simplesharingbuttons.com">
   <div class=share-buttons-inner1><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
   <div class=share-buttons-inner2><a href="https://www.facebook.com/sharer.php?u={{URL}}" target="_blank" rel="nofollow noopener" class="snssharebtn snsbtn-facebook">facebook</a></div>
   <div class=share-buttons-inner3><a href="https://social-plugins.line.me/lineit/share?url={{URL}}" target="_blank" rel="nofollow noopener" class="snssharebtn snsbtn-line">LINEで送る</a></div>
   <div class=share-buttons-inner4><a href="https://getpocket.com/edit?url={{URL}}" target="_blank" rel="nofollow noopener" class="snssharebtn snsbtn-pocket">Pocket</a></div>
</div>

--->



<script>
// ページの情報を得る
let pageurl = window.location.href;
let pagetitle = document.title;
// ページ内のSNSシェアボタン用a要素を対象に処理
let snsShareBtns = document.querySelectorAll(".snssharebtn");
snsShareBtns.forEach(function(ssb) {
	// href属性内のキーワードをURLエンコードした文字列に置換
	let target = ssb.getAttribute('href');
	target = target.replace('{{URL}}', encodeURIComponent(pageurl));
	target = target.replace('{{TITLE}}', encodeURIComponent(pagetitle));
	ssb.setAttribute('href', target);
});
function copyPageInfoToClipboard() {
	navigator.clipboard.writeText(pagetitle + " " + pageurl);
	alert('コピーしました！');
}
</script>


<style>
/* ▼各ボタン共通の装飾 */
.snssharebtn {
   display: inline-block;   /* インラインブロック化 */
   background-color: #ccc;  /* 背景色 */
   color: white !important;            /* 文字色 */
   border-radius: 3px;      /* 角丸 */
   line-height: 20px;       /* 行高 */
   font-size: 12px;         /* 文字サイズ */
   font-weight: bold;       /* 太字 */
   padding: 0 0.75em;       /* 内側余白(上下→左右) */
   text-decoration: none;   /* リンクの下線を消す */
   vertical-align: super; /* 下端を揃える */
}
/* ▼各ボタンの配色 */
.snsbtn-twitter { background-color: #1d9bf0; }
.snsbtn-facebook { background-color: #1877f2; }
.snsbtn-line { background-color: #00c300; }
.snsbtn-hatenabookmark { background-color: #00a4de; }
.snsbtn-pocket { background-color: #ef4256; }
.snsbtn-copy { background-color: green; }
</style>






<div class="profile_title">
   この記事の著者・プロフィール
</div>

<div class="profile">

   <div class="profile_01">
      <img src="/img/23590683.jpg" width="120px">
   </div>

   <div class="profile_02">
      <p>shiba</p>
   </div>

   <div class="profile_03">
      <p>
Web制作を始めて約20年（HTML/CSS、Photoshop、Webマーケティング）。2005年から当サイトの運営を開始。
これまでに300個以上のドメインを取得、10社を超えるレンタルサーバーを利用してきました。
      </p>
      
      <p class="center font11 b10 t10" >
      ー当サイトは一部PRを含みますー
      </p>

   </div>

</div>







