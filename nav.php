<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        * {
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            font-family: "Montserrat", sans-serif;
            padding-top: 128px; /* Adjust based on the height of your nav and nav-buttons */
        }

        nav {
            background: #0082e6;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 10px 0;
        }

        .logo {
            color: white;
            font-size: 35px;
            font-weight: bold;
            text-align: center;
            margin: 10px 0;
        }

        .nav-buttons {
            background: #0056b3;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            top: 80px; /* Adjust according to the height of the nav */
            left: 0;
            z-index: 999;
            justify-content: flex-end;
        }

        .nav-buttons ul {
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        .nav-buttons ul li {
            margin: 0 10px;
        }

        .nav-buttons ul li a {
            color: white;
            font-size: 17px;
            text-transform: uppercase;
            padding: 5px 10px;
            transition: background-color 0.3s;
            display: block;
        }

        .nav-buttons ul li a:hover {
            background-color: #1b9bff;
            border-radius: 3px;
        }

        .checkbtn {
            font-size: 30px;
            color: white;
            cursor: pointer;
            display: none;
        }

        #check {
            display: none;
        }

        @media (max-width: 952px) {
            .logo {
                font-size: 30px;
            }

            .nav-buttons ul li a {
                font-size: 16px;
            }
        }

        @media (max-width: 858px) {
            .checkbtn {
                display: block;
            }

            .nav-buttons ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #2c3e50;
                top: 80px;
                left: -100%;
                flex-direction: column;
                align-items: center;
                transition: all 0.5s;
                padding: 0;
            }

            .nav-buttons ul li {
                margin: 50px 0;
            }

            .nav-buttons ul li a {
                font-size: 20px;
            }

            a:hover, a.active {
                background: none;
                color: #0082e6;
            }

            #check:checked ~ .nav-buttons ul {
                left: 0;
            }
        }

    </style>
</head>
<body>
    <nav>
        <label class="logo">My Portfolio</label>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <div class="nav-buttons">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutme.php">About</a></li>
            <li><a href="my_projects.php">My Projects</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="contact_me.php">Contact Me</a></li>
            <li><a href="https://github.com/dashboard" target="_blank">GitHub</a></li>
        </ul>
    </div>
</body>
</html>
