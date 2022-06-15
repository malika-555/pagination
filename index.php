<?php

function debug($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}


$data = range(1, 500);

// количество тегов для вывода
$per_page = 30;

// общее количество тегов
$total = count($data);

// количество страниц
$count_pages = ceil($total / $per_page);

// номер текущей страницы
$page = $_GET['page'] ?? 1;

// проверка
$page = (int)$page;
if (!$page || $page < 1) {
    $page = 1;
}
if ($page > $count_pages) {
    $page = $count_pages;
}
var_dump($page);


$start = ($page - 1) * $per_page;
var_dump($start);

debug(array_slice($data, $start, $per_page));

for ($i = 1; $i <= $count_pages; $i++) {
    echo "<a href='?page={$i}'>$i</a> ";
}
