<?php
$file = 'download-speed/test.txt'; // مسیر فایلی که می‌خواهید دانلود کنید

if (isset($_POST['download_speed'])) {
    $downloadSpeed = $_POST['download_speed'];
} else {
    $downloadSpeed = 1024; // سرعت دانلود پیش‌فرض در صورتی که ورودی دریافت نشود (در این مثال 1 کیلوبایت بر ثانیه)
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));

$handle = fopen($file, 'rb');
while (!feof($handle)) {
    echo fread($handle, $downloadSpeed);
    flush();
    usleep(1000000 / $downloadSpeed); //
    }

    ?>