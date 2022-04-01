<?php
if(isset($_GET['title'])){
    
    echo filter_var($_GET['title'], FILTER_SANITIZE_NUMBER_INT);
}
?>
<?php
if(isset($_GET['link'])){
    
    $link = $_GET['link'];
    
    $allInc = array('sites.php');
    if(in_array($link, $allInc)){
        include($link);
    }else{
        
        echo 'you dont have permission to include this file';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MNM ITE</title>
            <link rel="shortcat icon" type="image/ico" href="favicon.ico">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="style.css">
            <script src="respond.min"></script>
            <script src="html5shiv.min"></script>
        <style>
            .nav-link:hover{
                background-color:darkslateblue;} 
            .career, .sites{
                font-style: italic;
                border: 1px;
                border-radius: 25px;
                background-color: blue;
                opacity: .8;
                color: white;
            }
            .unv h2{
                font-style: italic;
                border: 1px;
                border-radius: 25px;
                background-color: blue;
                opacity: .8;
                color: white;
            }
        </style>
    </head>
    <body>

            <!-- .............................................................................................................................................. -->


            <nav style="position:sticky;border:1px;border-radius: 20px;"  class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
                    <a style="color: blue; font-weight: bold; ;font-size: 50px;padding-top:0px;margin-bottom:10px;" class="navbar-brand" href="#">welcome</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                        <div  style="background-color:blue; border-radius:10px; " class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a style="font-size: 20px; border: 1px; border-radius: 30px;color: white; margin-right: 15px;text-align: center;margin-bottom: 0px;margin-top:18px;" class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a style="font-size: 20px; border: 1px; border-radius: 30px;color: white;margin-right: 15px;text-align: center;margin-bottom: 0px;margin-top:18px;" class="nav-link" href="careers.php">careers</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a style="font-size: 20px; border: 1px; border-radius: 30px;color: white;margin-right: 15px;text-align: center;margin-bottom: 0px;margin-top:18px;" class="nav-link" href="sites.php">
                                sites
                                </a>
                            </li>
                            <a style="font-size: 20px; border: 1px; border-radius: 30px;color: white;margin-right: 15px;text-align: center;margin-bottom: 10px;margin-top:18px;" class="nav-link" href="courses.php">
                            courses
                                </a>
                            </li>  
                            <li class="nav-item dropdown">
                                <a style="font-size: 20px; border: 1px; border-radius: 30px;color: white;margin-right: 15px;text-align: center;margin-bottom: 0px;margin-top:18px;" class="nav-link" href="university.php">
                                university
                                    </a>
                            </li>                          
                    </ul>
        </div>
        </nav>
    </main>
</header>
	<div class="container text-center">


