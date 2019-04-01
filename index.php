<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Project</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
    <header class="container-1">
    <div class="logo">
                <h1>OPtical Character Recognition</h1>
            </div>
</header>
<header>
        <div class="container-2">
            <div class="menu-1">
                <ul>
                    <li><a href="#"><span>Home</span></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#"><span class="sign">Sign up</span></a></li>
                </ul>
        </div>
    </header>
    <section class="section-1">
        <div class="Form1">
        <!-- You needed to add enctype="multipart/form-data" down below to use $_FILES -->
            <form action="./ocr.php" method="POST" enctype="multipart/form-data">
               <span>Select File:</span> <input type="file" name="Myfile"/>
               <input type = "submit" name="submit"/>
            </form>
    </div>
    </section>
    <footer>
        <h2>Submitted By: S@loni</h2>
</footer>
</body>
</html>