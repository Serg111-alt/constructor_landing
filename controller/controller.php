<?php

require "../autoload.php";

class Controller
{

    private $dir;
    private $uploaddir;

    public function __construct($dir)
    {
        $this->dir = $dir;
        $this->uploaddir = $dir . "/images/";

        if (!is_dir($this->dir)) {
            mkdir($this->dir); // создание каталога 'landing'
        }
        if (!is_dir($this->uploaddir)) {
            mkdir($this->uploaddir);
        }
        // создание  каталога  'landing/images'
    }

    public function upload($filename)
    {
        $message = "";

        $target_file = $this->uploaddir . basename($_FILES[$filename]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Проверка, является ли файл изображением

        $check = getimagesize($_FILES[$filename]["tmp_name"]);
        if ($check === false) {
            //$message = "Файл - не изображение.";
            $uploadOk = 0;
        }

// Проверка существования файла
        if (file_exists($target_file)) {
            $message = "Файл уже существует.";
            //$uploadOk = 0;
        }
// Проверка размера файла
        if ($_FILES[$filename]["size"] > 50000000) {
            $message = "Файл слишком большой.";
            $uploadOk = 0;
        }
// Разрешение определенных файловых форматов
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $message = "Извините, разрешены только форматы JPG, JPEG, PNG & GIF.";
            $uploadOk = 0;
        }
// Проверка, установлен ли $uploadOk в 0 (by an error)ошибка)
        if ($uploadOk == 0) {
            $message .= " Файл не был загружен.";
// Если все в порядке,загружаем файл
        } else {
            if (move_uploaded_file($_FILES[$filename]['tmp_name'], $target_file)) {
                $message .= "Файл " . basename($_FILES[$filename]["tmp_name"]) . " был успешно загружен.";
            } else {
                $message .= "При загрузке файла произошла ошибка." . basename($_FILES["logo"]["tmp_name"]);
            }
        }

        return $message;
    }
  
    public function action()
    {

        $blocks = array();
        ob_start();
        /* Создание блоков */
        if ($_POST['header']) {
            if ($_FILES["logo"]["name"]) {
                $img = "images/" . $_FILES["logo"]["name"];
            } else {
                $img = "";
            }

            $header = new Header($_POST['header'], $img);
            $blocks[] = $header;
        }
        if (isset($_POST['action'])) { 
            $action = $_POST['action'];
            switch ($action) {
                case 'add': 
                        $text = new Text($_POST['text']);
                        $blocks[] = $text;               
                    break; 
                default:
                    header("Location: index.php"); 
            }
        }
       
         if ($_POST['footer']) {
            $footer = new Footer($_POST['footer']);
            $blocks[] = $footer;
        }
        /* Создание модели */
        if ($_POST['title']) {
            $model = new Model($blocks, $_POST['title']);
        } else {
            $model = new Model($blocks);
        }
       
        /* Работа с моделью */
        $str_land = $model->generate(); // генерация текста лендинга
        $path = "{$this->dir}/index.html";
        $f = fopen($path, "w+"); // создание файла лендинга по указанному пути
        fwrite($f, $str_land); // запись в файл лендинга
        fclose($f);
        //$model->achiving($this->dir);

        if ($_FILES["logo"]["name"]) {
            echo $this->upload('logo');

        }
        if ($_FILES["logo1"]["name"]) {
            echo $this->upload('logo1');

        }
        $model->achiving($this->dir);
        header("Location: ../index.php");
        ob_flush();
    }

}
$controller = new Controller('../landing');
$controller->action();