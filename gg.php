<?php
// Папка для загружаемых файлов
$targetDir = "uploads/"; // Убедитесь, что эта папка существует и доступна для записи
$targetFile = $targetDir . basename($_FILES["htmlfile"]["name"]);
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Проверяем, является ли файл HTML
if ($fileType != "html") {
    echo "Извините, только файлы формата HTML допустимы.";
    exit;
}

// Перемещаем загружаемый файл в целевую папку
if (move_uploaded_file($_FILES["htmlfile"]["tmp_name"], $targetFile)) {
    echo "Файл ". htmlspecialchars(basename($_FILES["htmlfile"]["name"])). " был загружен.";
} else {
    echo "Извините, произошла ошибка при загрузке файла.";
}
?>