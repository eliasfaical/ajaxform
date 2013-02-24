<?php require_once('./includes/connect.inc.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Formuário Labz</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
        <!--[if lt IE 9]> <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> <![endif]-->
    </head>
    <body>

        <section class="main">
            <form id="formLogin">
                <h1>Formulário Labz</h1>
                
                <p>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" title="Username">
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="password" id="password" name='password' title="Password">
                </p>
                <p>
                    <input type="submit" name="submit" value="Enviar">
                </p>
                <p>
                    <div class="msgForm">&nbsp;</div>
                </p>
            </form>​
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>
