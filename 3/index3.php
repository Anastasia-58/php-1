<?php
$title = "Главная страница - страница обо мне";
$about_title = "Информация обо мне";
$bold_text = "Просто пример жирного текста";
$year = "2018";

$site = file_get_contents("./index.html");
$site = str_replace("{{ title }}", $title, $site);
$site = str_replace("{{ about_title }}", $about_title, $site);
$site = str_replace("{{ bold_text }}", $bold_text, $site);
$site = str_replace("{{ year }}", $year, $site);

echo $site;