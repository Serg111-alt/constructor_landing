<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Landing-page constructor</title>
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
            input{
                display:block;
                padding:5px;
                width:200px;
                
            }
            a{
                display:block;
                padding:5px;
                margin-top:8px;
                background:lightgray;
                text-decoration: none;
                width:160px;
                text-align:center;
            }
            .design {
                padding: 5px 20px; 
                text-decoration: none; 
                cursor: pointer; 
                background: #deefff; 
              margin-left:50px;
                border: 1px solid #008; 
                font: 12px/1 Arial, sans-serif;
                color: #2c539e; 
            }
            .file_upload{
                position: relative;
                overflow: hidden;
                font-size: 1em;        
                height: 2em;           
                line-height: 2em       
            }
            .file_upload > input[type="button"]{
                /*height: 100%*/
            }
            .file_upload > div{
                padding-left: 1em      
            }
            .file_upload input[type=file]{
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                transform: scale(20);
                letter-spacing: 10em;     
                -ms-transform: scale(20); 
                opacity: 0;
                cursor: pointer
            }
         iframe{
             margin-left:500px;
             margin-top:-700px;
         }
         .div{
             width:800px;
             margin-left:50px;
         }
         h1,h2,h3{
             margin-left:50px;
             color:white;
         }
         input[type = "submit"]{
             margin-left:50px;
         }
         body{
             background-image:url(black.png);
             background-repeat:no-repeat;
             background-size:cover;
         }
        </style>
    </head>
    <body>
     
        <form enctype="multipart/form-data" action="controller/controller.php" method="post">
        <input type=hidden name="action" value="add">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> 
            <h2 style = "margin-left:500px;background:white;color:black;width:300px;">Landing-page constructor</h2>
            <h3>Title страницы*</h3>
            <input type="input" name="title" value="" placeholder="Введите title страницы" class="design" />            
            <h3>Заголовок страницы*</h3>
            <input type="input" name="header" value="" placeholder="Введите заголовок страницы" class="design" />
            <h3>Логотип заголовка</h3>
            <input type="file" name="logo" value="" placeholder="Введите изображение логотипа" class="design"  />
            <div id="message"></div>
            <h3>Контент</h3>
<div class = "div">
    <!-- форма отправки сообщения -->
        <div>Сообщение:</div>
       
            <div class="hero-unit">


                <div id="alerts"></div>
                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-edit="fontSize 5">
                                    <font size="5">Huge</font>
                                </a></li>
                            <li><a data-edit="fontSize 3">
                                    <font size="3">Normal</font>
                                </a></li>
                            <li><a data-edit="fontSize 1">
                                    <font size="1">Small</font>
                                </a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                class="icon-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                class="icon-underline"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i
                                class="icon-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                class="icon-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                class="icon-indent-left"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                class="icon-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                class="icon-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                class="icon-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                class="icon-align-justify"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                class="icon-link"></i></a>
                        <div class="dropdown-menu input-append">
                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                            <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i
                                class="icon-picture"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                            data-edit="insertImage" />
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                    </div>
                    <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
                </div>
                <div id="editor">
                  
                  </div>
                  <textarea type="hidden" id="hidden-editor" class="textarea"
                    style="display:none;width: 810px; height: 200px;" name="text"></textarea>
  
            </div>
        </div>
</div>
</div>

            <h3>изображение в контенте</h3>
            <input type="file" name="logo1" id="" placeholder="Введите изображение логотипа" class="design">
            <div id="message"></div>
            <h1>Текст подвала</h1>
         <div >
            <input  type="input" name="footer" value="" placeholder="Введите текст подвала" class="design"  />
           </div>
            <h3>Генерация</h3>
            <input type="submit" name="submitB" value="Сгенерировать Landing" class="design" id="ok"/>
            <h3>Результат</h3>
            <a href='landing/index.html'  class="design" target="_blank">Посмотреть результат в новом окне</a>
            <a href='landing.zip'  class="design" download>Скачать результат</a>

        </form>
           <iframe width="800" height="400" src="landing/index.html"></iframe>
        <p>*поля, обязательные к заполнению</p>        
    </body>
</html>
