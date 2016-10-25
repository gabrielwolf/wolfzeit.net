<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>W O L F Z E I T.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php if(strstr($_SERVER['HTTP_USER_AGENT'], 'Safari') && !strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome')) { ?>
        <link rel="stylesheet" href="https://wolfzeit.net/home/styles/safari.css">
    <?php } else { ?>
        <link rel="stylesheet" href="https://wolfzeit.net/home/styles/main.css">
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
            <img src="https://wolfzeit.net/home/images/logo-wolfzeit-net.png" title="W O L F Z E I T.net" />
        <?php } else { ?>
            <img src="https://wolfzeit.net/home/images/logo-wolfzeit-net.svg" onerror="this.onerror=null; this.src='https://wolfzeit.net/home/images/logo-wolfzeit-net.png'" title="W O L F Z E I T.net" />
        <?php } ?>
        <h2>500 Internal Server Error</h2>
        <p>Sorry, die Maschinen sind heiß gelaufen</p>
    </header>
</body>

</html>
