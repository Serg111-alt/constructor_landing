<?php
require "autoload.php";
$header = new Header ( "Заголовок Лендинга");
$footer = new Footer("Подвал страницы");
$text = new Text ( "Это лендинг");
$form = new Form ( "Записаться");
$model = new Model([$header, $text, $footer,$form], "Лендинг");
$str_land =  $model->generate(); // генерация текста лендинга
$dir = "landing";
//mkdir($dir); // создание каталога по указанному пути
$f = fopen("{$dir}/index.html", "w+"); // создание файла лендинга по указанному пути
fwrite($f, $str_land); // запись в файл лендинга
fclose($f);
echo "Лендинг успешно создан!";
$zip = new ZipArchive(); //Создаём объект для работы с ZIP-архивами
$arch = "landing.zip";
$zip->open($arch, ZIPARCHIVE::CREATE); 
echo "Cоздаeм архив лендинга ".$arch;
$file1 = "{$dir}/index.html";
$zip->addFile($file1); 
$zip->close(); //Завершаем работу с архивом
echo "<a href=\"{$dir}/index.html\">Посмотреть результат</a>";

