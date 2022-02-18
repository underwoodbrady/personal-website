<?php

$page_redirected_from = $_SERVER['REQUEST_URI'];  
$server_url = "https://" . $_SERVER["SERVER_NAME"] . "";

switch(getenv("REDIRECT_STATUS"))
{
	# "400 - Bad Request"
	case 400:
	$error_code = "400 - Bad Request";
	$explanation = "The syntax of the URL submitted by your browser could not be understood";
	break;

	# "401 - Unauthorized"
	case 401:
	$error_code = "401 - Unauthorized";
	$explanation = "This section requires a password or is otherwise protected";
	break;

	# "403 - Forbidden"
	case 403:
	$error_code = "403 - Forbidden";
	$explanation = "This section requires a password or is otherwise protected";
	break;

	# "404 - Not Found"
	case 404:
	$error_code = "404 - Not Found";
	$explanation = "The requested page '" . $page_redirected_from . "' could not be found";
	break;
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/evb7xpr.css">
    <title>Brady Underwood</title>
    <meta name="description" content="Software Developer and Freelance Web Designer | Check out some of my work">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <style>
        /*Reset CSS*/
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: acumin-pro, sans-serif;
        }

        body {
            background-color: #F7F7F7;
            overflow: hidden;
        }

        header {
            position: fixed;
            width: 100%;
            height: 60px;
            overflow: hidden;
            background-color: #F7F7F7;
            z-index: 2;
        }

        header ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
            flex-direction: row;
            padding-top: 20px;
        }


        header li {
            display: inline-block;
            width: 120px;
            text-align: center;
            white-space: nowrap;
            font-size: 1.2em;
            font-weight: 300;
        }

        header a {
            color: black;
            text-decoration: none;
        }

        header li:hover {
            text-decoration: underline;
        }

        header img {
            height: 18px;
            padding: 0px 7px;
            margin-top: 3px;
        }

        #menu-icon {
            position: absolute;
            left: 40px;
            display: none;
            top: 22px;
            cursor: pointer;
        }

        #social-links {
            position: fixed;
            display: flex;
            right: 40px;
            top: 22px;
        }

        #social-links p {
            padding-right: 5px;
        }

        .indent {
            text-indent: 25px;
        }

        .current-page {
            text-decoration: underline;
        }

        footer {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }

        footer p {
            font-size: 0.8em;
        }

        #content {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 70%;
            transform: translate(-50%, -50%);
            min-width: 570px;
        }

        #content h2 {
            font-weight: 300;
            font-size: 3.2em;
            padding-bottom: 5px;
        }

        #content p {
            font-weight: 300;
            font-size: 1.6em;
        }

        button {
            background: none;
            border: 2px solid black;
            padding: 10px 35px;
            margin: 40px calc(50% - 90px);
            font-size: 1.4em;
            font-weight: 500;
            white-space: nowrap;
        }

        button:hover {
            background: black;
            color: white;
            transition: 0.2s;
        }

        @media only screen and (max-width: 850px) {

            /*Mobile*/

            header ul {
                display: none;
                padding-top: 55px;
                flex-direction: column;
            }

            header li {
                padding: 3px 0;
                width: 30%;
                margin: 0 auto;
                background-color: #F7F7F7;
            }

            #menu-icon {
                display: inline-block;
            }

            #content {
                font-size: 0.8em;
                min-width: 300px;
            }

        }

    </style>

</head>

<body>

    <header>

        <a id="menu-icon" onclick="openMenu()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAoCAYAAAC8cqlMAAAACXBIWXMAAAsSAAALEgHS3X78AAAAzUlEQVRYhe2XMQrCQBBFJyFFjmQ5hYVXERQEC8vdnMrCZrezEVJ4CIsUKe1GEiLYioV/lv9g+3mzy8KrzExUVXPOJxFpxR9DCGEvk4iIXETEHJ9dvez/5vAmPrnPTyul1KaUVjhzfcUzxnitlqflnroIC4oAQhE0KIIGRdCgCBoUQaOZ5lHV9VKIjUOHogrxUEoh9ixENPj9okERNCiCBkXQoAgaFEGjuELc5JyPTgtxDCFs34V4LqUQh/8u9Wcec1jFGNuu67wW4mhm/QtwWdv0wfr+mQAAAABJRU5ErkJggg=="></a>

        <nav>
            <ul id="header-links">
                <li><a href="<?php print ($server_url); ?>">Home</a></li>
                <li><a href="<?php print ($server_url); ?>/about.html">About</a></li>
                <li><a href="<?php print ($server_url); ?>/projects.html">Projects</a></li>
                <li><a href="<?php print ($server_url); ?>/contact.html">Contact</a></li>
            </ul>
        </nav>

        <div id="social-links">
            <p>Socials:</p>
            <a href="https://www.instagram.com/dev.brady/" target="_blank"><img src="data:image/png;base64,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"></a>
            <a href="https://www.youtube.com/channel/UC9W_PKINALO7gWGYB7_g9ZQ" target="_blank"><img src="data:image/png;base64,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"></a>
        </div>

    </header>


    <div id="content">

        <h2>Someone Messed Up (<?php print ($error_code); ?>)</h2>

        <p>
            <?php print($explanation); ?>
        </p>

        <button onclick="location.href='<?php print ($server_url); ?>'">GO HOME</button>

    </div>

    <footer>
        <p>Copyright ©2021, All Rights Reserved</p>
    </footer>

    <script>
        
        let headerMenu = document.getElementsByTagName('header');
        let ul = document.getElementById('header-links');
        let menuOpen = false;

        let openMenu = function() {
            if (!menuOpen) {
                headerMenu[0].style.height = '200px';
                headerMenu[0].style.borderBottom = '2px solid black';
                ul.style.display = "flex";
                menuOpen = true;
            } else {
                headerMenu[0].style.height = '60px';
                headerMenu[0].style.borderBottom = 'none';
                ul.style.display = "none";
                menuOpen = false;
            }
        }

        let resizeWindow = function() {
            if (window.innerWidth > 850) {
                headerMenu[0].style.height = '60px';
                headerMenu[0].style.borderBottom = 'none';
                menuOpen = false;
                ul.style.display = "flex";
            } else if (!menuOpen) {
                ul.style.display = "none";
            }
        }

        resizeWindow();

        window.addEventListener('resize', function() {
            resizeWindow();
        });

    </script>
</body>

</html>
