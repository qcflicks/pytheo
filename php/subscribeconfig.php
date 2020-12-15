<?php

    include 'emailserver.php';

    if(isset($_POST['subscribe'])) {
        
            $email = $sql->real_escape_string($_POST['useremail']);

            $mysql = "INSERT INTO form (email) VALUES ('".$email."')";

        if(!$result = $sql->query($mysql)) {
            die('There was an error running the query [' . $sql->error . ']');
        }
        
    }
        
?>

<!doctype html>

    <head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="theme-color" content="#213140">
        <meta name="robots" content="noindex, nofollow">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/5e64d08a4d.js"></script>
        <!-- Title -->
        <title>Thank You!</title>
        <!-- Logo (Favicon) -->
        <link rel="icon" href="https://i.ibb.co/RY5RLGS/Logo.png" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                background: #e0e5ec;
                overflow-x: hidden;
            }

            .reply {
                width: 100%;
                height: 100vh;
            }

            .container {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                font-family: 'Open Sans', sans-serif;
                width: 100%;
                height: 100%;
            }

            h1 {
                font-size: 1.6em;
                font-weight: 700;
                letter-spacing: 1px;
                text-align: center;
                color: #222;
                margin: 0.22em 0.5em;
            }

            p {
                font-size: 1.06em;
                font-weight: 500;
                color: #444;
                text-align: center;
                line-height: 35px;
                margin: 0.12em 0;
            }

            .reply .container .button {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .reply .container .button a {
                background: #359af2;
	            box-shadow: 0px 4px 30px rgba(255,255,255, 1);
                padding: 0.7em 1.8em;
                color: #E0E5EC;
                border-radius: 25px;
                outline: none;
                border: none;
                transition: 0.6s;
                margin: 1em 4px 1em;
                cursor: pointer;
                text-decoration: none;
                text-align: center;
                font-weight: 600;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: #E0E5EC;
                font-size: 1em;
                box-shadow: 0px 4px 30px rgba(43, 98, 169, 0.8);
            }

            .reply .container .button a:hover,
            .reply .container .button a:active {
                animation: none;
                background: #213140;
                box-shadow: 4px 4px 30px rgba(255, 255, 255, 0.8);
            }

            .reply .container .button a i {
                margin: 1px 4px 0 0;
            }

            .reply .container .button a:hover i {
                transform: translateX(-4px);
                transition: 0.4s;
            }
        </style>

    </head>

    <body>
        <div class="reply">
            <div class="container">
                <h1>Subscribed!</h1>
                <p>
                    You've subscribed to our newsletter!
                </p>
                <div class="button">
                    <a href="http://pytheo.rf.gd">
                        <i class="fas fa-arrow-left"></i> Go Back
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>