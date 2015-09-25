<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>W O L F Z E I T.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php if(strstr($_SERVER['HTTP_USER_AGENT'], 'Safari') && !strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome')) { ?>
        <link rel="stylesheet" href="styles/safari.css">
    <?php } else { ?>
        <link rel="stylesheet" href="styles/main.css">
    <?php } ?>
</head>

<body>

<!--[if lt IE 8]>
  <div style="height: 100px; vertical-align: middle; font-weight: bold;">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
  </div>
<![endif]-->

    <header>
        <h1>W O L F Z E I T.net</h1>
        <?php if(strstr($_SERVER['HTTP_USER_AGENT'], 'Safari') && !strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome')) { ?>
            <img src="images/logo-wolfzeit-net.png" title="W O L F Z E I T.net" />
        <?php } else { ?>
            <img src="images/logo-wolfzeit-net.svg" onerror="this.onerror=null; this.src='images/logo-wolfzeit-net.png'" title="W O L F Z E I T.net" />
        <?php } ?>
        <ul>
            <li><a href="http://ecrug.wolfzeit.net" title="Archiv älterer Kunst">ecrug</a></li>
            <li><a href="http://der-herr-pianist.de" title="Meine Leidenschaft">der-herr-pianist.de</a></li>
            <li><a href="http://www.wolfzeit.com" title="Meine Selbständigkeit">wolfzeit.com</a></li>
            <li><a href="http://www.meerkat-web.tk" title="Poesie">meerkat</a></li>
            <li><a href="http://enjian.wolfzeit.net" title="Ein Endzeit-Hörspiel-Album">enjian</a></li>

        </ul>
        <p>Space for projects of <a href="http://www.gabriel-wolf.de">Gabriel&nbsp;Wolf</a>.</p>
    </header>
</body>

</html>
