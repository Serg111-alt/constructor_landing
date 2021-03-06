<?php

class Model {

    private $name;
    private $blocks = array();

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getBlocks() {
        return $this->blocks;
    }

    function setBlocks($blocks) {
        $this->blocks = $blocks;
    }

    function __construct($blocks = array(), $name = "Landing-page constructor") {
        $this->name = $name;
        $this->blocks = $blocks;
    }

    function generate() {
        $content = "";
        for ($i = 0; $i < count($this->blocks); $i++) {
            $content .= $this->blocks[$i]->draw();
        }
        return $template = <<<EOD

        <!DOCTYPE html>
        <html lang="en">
        <head>
          <!-- Theme Made By www.w3schools.com -->
          <title>{$this->name}</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
                 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	  <script type="text/javascript" src="js/scripts.js"></script>
    <meta name="description" content="This tiny jQuery Bootstrap WYSIWYG plugin turns any DIV into a HTML5 rich text editor" />
    <link rel="apple-touch-icon" href="//mindmup.s3.amazonaws.com/lib/img/apple-touch-icon.png" />
    <link rel="shortcut icon" href="favicon.ico" >
    <link href="external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="external/jquery.hotkeys.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="external/google-code-prettify/prettify.js"></script>
		
    <script src="bootstrap-wysiwyg.js"></script>
    <script src="script.js"></script>
          <style>
          body {
              font: 400 15px Lato, sans-serif;
              line-height: 1.8;
              color: #818181;
          }
          h2 {
              font-size: 24px;
              text-transform: uppercase;
              color: #303030;
              font-weight: 600;
              margin-bottom: 30px;
          }
          h4 {
              font-size: 19px;
              line-height: 1.375em;
              color: #303030;
              font-weight: 400;
              margin-bottom: 30px;
          }  
          .jumbotron {
              background-color: #f4511e;
              color: #fff;
              padding: 100px 25px;
              font-family: Montserrat, sans-serif;
          }
          .container-fluid {
              padding: 60px 50px;
          }
          .bg-grey {
              background-color: #f6f6f6;
          }
          .logo-small {
              color: #f4511e;
              font-size: 50px;
          }
          .logo {
              color: #f4511e;
              font-size: 200px;
          }
          .thumbnail {
              padding: 0 0 15px 0;
              border: none;
              border-radius: 0;
          }
          .thumbnail img {
              width: 100%;
              height: 100%;
              margin-bottom: 10px;
          }
          .carousel-control.right, .carousel-control.left {
              background-image: none;
              color: #f4511e;
          }
          .carousel-indicators li {
              border-color: #f4511e;
          }
          .carousel-indicators li.active {
              background-color: #f4511e;
          }
          .item h4 {
              font-size: 19px;
              line-height: 1.375em;
              font-weight: 400;
              font-style: italic;
              margin: 70px 0;
          }
          .item span {
              font-style: normal;
          }
          .panel {
              border: 1px solid #f4511e; 
              border-radius:0 !important;
              transition: box-shadow 0.5s;
          }
          .panel:hover {
              box-shadow: 5px 0px 40px rgba(0,0,0, .2);
          }
          .panel-footer .btn:hover {
              border: 1px solid #f4511e;
              background-color: #fff !important;
              color: #f4511e;
          }
          .panel-heading {
              color: #fff !important;
              background-color: #f4511e !important;
              padding: 25px;
              border-bottom: 1px solid transparent;
              border-top-left-radius: 0px;
              border-top-right-radius: 0px;
              border-bottom-left-radius: 0px;
              border-bottom-right-radius: 0px;
          }
          .panel-footer {
              background-color: white !important;
          }
          .panel-footer h3 {
              font-size: 32px;
          }
          .panel-footer h4 {
              color: #aaa;
              font-size: 14px;
          }
          .panel-footer .btn {
              margin: 15px 0;
              background-color: #f4511e;
              color: #fff;
          }
          .navbar {
              margin-bottom: 0;
              background-color: #f4511e;
              z-index: 9999;
              border: 0;
              font-size: 12px !important;
              line-height: 1.42857143 !important;
              letter-spacing: 4px;
              border-radius: 0;
              font-family: Montserrat, sans-serif;
          }
          .navbar li a, .navbar .navbar-brand {
              color: #fff !important;
          }
          .navbar-nav li a:hover, .navbar-nav li.active a {
              color: #f4511e !important;
              background-color: #fff !important;
          }
          .navbar-default .navbar-toggle {
              border-color: transparent;
              color: #fff !important;
          }
          footer .glyphicon {
              font-size: 20px;
              margin-bottom: 20px;
              color: #f4511e;
          }
          .slideanim {visibility:hidden;}
          .slide {
              animation-name: slide;
              -webkit-animation-name: slide;
              animation-duration: 1s;
              -webkit-animation-duration: 1s;
              visibility: visible;
          }
          @keyframes slide {
            0% {
              opacity: 0;
              transform: translateY(70%);
            } 
            100% {
              opacity: 1;
              transform: translateY(0%);
            }
          }
          @-webkit-keyframes slide {
            0% {
              opacity: 0;
              -webkit-transform: translateY(70%);
            } 
            100% {
              opacity: 1;
              -webkit-transform: translateY(0%);
            }
          }
          @media screen and (max-width: 768px) {
            .col-sm-4 {
              text-align: center;
              margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
          }
          @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
          }
          </style>
        </head>
        <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        
        <!-- Container (About Section) -->
        
        <!-- Container (Services Section) -->
        {$content}
        
        <!-- Container (Portfolio Section) -->
        
          
        
            <!-- Left and right controls -->
        
      
     
        
        <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        
            // Prevent default anchor click behavior
            event.preventDefault();
        
            // Store hash
            var hash = this.hash;
        
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){
           
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          });
          
          // Slide in elements on scroll
          $(window).scroll(function() {
            $(".slideanim").each(function(){
              var pos = $(this).offset().top;
        
              var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                  $(this).addClass("slide");
                }
            });
          });
        })
        </script>
        
        </body>
        </html>
EOD;
    }

    function achiving($dir) {
        // Создаем архив 
        $zip = new ZipArchive(); //Создаём объект для работы с ZIP-архивами
        $arch = ".zip";
        $zip->open($dir . $arch, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE);

        $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file) {
            // Проускаем каталоги (они добавятся автоматически)
            if (!$file->isDir()) {
                // Получаем реальный и относительный пути файла
                $filePath = $file->getRealPath();
                $lendir = substr($dir, 3);
                $relativePath = strstr($filePath, $lendir);
                // Добавляем текущий файл в архив
                $zip->addFile($filePath, $relativePath);
            }
        }

        $zip->close(); //Завершаем работу с архивом
    }

}
