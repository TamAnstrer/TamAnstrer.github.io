<?php
// Lấy địa chỉ IP của người dùng
$ip_address = $_SERVER['REMOTE_ADDR'];

// Lấy thời gian truy cập
$time = date('Y-m-d H:i:s');

// Chuẩn bị nội dung để lưu vào tệp log.txt
$log_entry = "$time - IP: $ip_address\n";

// Lưu nội dung vào tệp log.txt
$file = 'log.txt';
file_put_contents($file, $log_entry, FILE_APPEND);

// Hiển thị thông báo trên trang web
echo 'Địa chỉ IP của bạn đã được lưu: ' . $ip_address;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lưu địa chỉ IP</title>
</head>
<body>
</body>
<script>
    console.log()
</script>
</html>
