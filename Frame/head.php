
<!DOCTYPE html>

<html>

    <head>
        <title>
            <?php
            if (isset($GLOBALS['caller_page'])) {
                echo ($GLOBALS['caller_page']);
            } else {
                echo 'caller_page unassigned';
            }
            ?>
        </title>
        <meta name = "viewport" content = "width=device-width,initial-scale=1">
        <link rel = "shortcut icon" type = "image/png" href = "http://pre11.deviantart.net/3944/th/pre/i/2012/122/6/9/cookie_monster_by_neorame-d4yb0b5.png" />
        <!--Latest bootstrap compiled and minified CSS -->
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin = "anonymous">
        <!--Optional bootstrap theme -->
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin = "anonymous">
        <!--Jquery(Bootstrap dependency) -->
        <script src = "https://code.jquery.com/jquery-latest.min.js"></script>
        <style>
            ::-webkit-scrollbar {
                display: none;
            }

            .main {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .main .main-div {
                position: absolute;
                top: 50%;
                left: 50%;
                padding: 2%;
                transform: translate(-50%, -50%);
                background-color: grey;
                font-family: 'Roboto Slab', serif;
                font-size: 24px;
                text-align: center;
            }

            h1 {
                background-color: lightblue;
                color: green;
            }
            td:first-child{
                text-align: left;
            }

        </style>
    </head>

    <body>
        <div class="main">
            <div class="main-div">