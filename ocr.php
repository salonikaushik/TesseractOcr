<?php
   
include("TesseractOCR.php");

?>

<style>
    <?php include('./style.css')  ?>
</style>

<style>


    .container {
        width: 100%;
        padding: 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        box-sizing: border-box;
    }

    .container-item {
        flex: 1;
        border: 1px solid red;
        margin: 10px;
        padding: 20px;
        height: auto;
        width: 100%;
    }

    .container-item img {
        height: 500px;
        width: inherit;
    }
</style>


    <header class="container-1">
    <div class="logo">
                <h1>OPtical Character Recognition</h1>
            </div>
</header>
<header>
        <div class="container-2">
            <div class="menu-1">
                <ul>
                    <li><a href="./index.php"><span>Home</span></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#"><span class="sign">Sign up</span></a></li>
                </ul>
        </div>
    </header>

<?php

if(isset($_POST['submit']))
    {
        if(isset($_FILES['Myfile']))
        {
            $fileName = $_FILES['Myfile']['name'];
            $fileTmp = $_FILES['Myfile']['tmp_name'];
            $fileSize = $_FILES['Myfile']['size'];
            if(1) 
            {
                move_uploaded_file($fileTmp, './newImages/'.$fileName);
                ?>
                <div class="container">
                <div class="container-item"><img src="<?php echo './newImages/'.$fileName?>" ></div>
                <div class="container-item"><?php echo (new TesseractOCR('./newImages/'.$fileName))->run();?></div>
               </div>
               <?php 
            }
               else
            {
                echo "File size is too big : ";
            }
        }
    }
?>
<!--
    Next Steps 
    1 ) Install Composer
    2 ) Run this command : "composer require thiagoalessio/tesseract_ocr" in this directory
    3 ) use its api as given in the website opened in chrome.
-->













