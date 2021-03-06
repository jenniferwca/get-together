<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $pagetitle ?></title>
  <!-- Bootstrap links -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="/Content/style.css">
  <link rel="stylesheet" href="/Content/css/event.css">
  <link rel="stylesheet" href="/Content/css/account.css">
  <link rel="stylesheet" href="/Content/css/carpoolchat.css">
  <link rel="stylesheet" href="/CSS/money_pools.css">
  <link rel="stylesheet" href="/CSS/notifications.css">
  <link rel="stylesheet" href="/CSS/payments.css">
  <link rel="stylesheet" href="/CSS/playlists.css">
  <link rel="stylesheet" href="/CSS/songs.css">
  <link rel="stylesheet" href="/CSS/poll.css">
  <link rel="stylesheet" href="/CSS/todo.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="/CSS/foodlist.css">
  <link rel="stylesheet" type="text/css" href="/CSS/rsvp_style.css"/>
  <link rel="stylesheet" type="text/css" href="/CSS/gallery.css"/>
  <link rel="stylesheet" href="/CSS/drinks_style.css">
  <link rel="shortcut icon" href="/Content/Images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/Content/Images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="style/rsvp_style.css"/>

</head>
<body>
<header>
<a id="top"></a>
  <div id="header-container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="/">
        <img alt="Logo for Get Together" src="/Content/Images/blackgglogo.png" class="header-logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link navbar-custom" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            
            <?php if(isset($_SESSION['userid'])): ?>
              <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $_SESSION['username'] ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="/account?action=logout_user">Logout</a>
                </div>
              </div>
            <?php else: ?>
              <a class="nav-link navbar-custom" href="/account?action=show_add_form"><strong>Login/Register</strong></a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </nav>
</div>
</header>