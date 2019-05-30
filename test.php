<?php
echo $_SERVER['DOCUMENT_ROOT'];
$filename = '/home/popov/websites/bitrix-dev';
if (is_writable($filename)) {
    echo $filename . ' Файл доступен для записи';
} else {
    echo $filename . ' Файл недоступен для записи';
}
?>