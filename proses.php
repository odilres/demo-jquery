<?php
// Kode ini akan dijalankan di sisi server (B) setelah formulir (A) dikirimkan secara asinkron melalui AJAX
$data = $_POST;
$number = isset($data['number']) ? intval($data['number']) : 0;
$text = isset($data['text']) ? $data['text'] : '';
$response = array();

// Menghasilkan array $response berdasarkan nilai dari $number dan $text
for ($i = 0; $i < $number; $i++) {
  $response[] = $text . ' ' . ($i + 1);
}

// Mengatur header HTTP untuk menentukan bahwa respons yang dikirimkan akan berupa JSON
header('Content-Type: application/json');

// Mengubah array $response menjadi bentuk JSON
// Respons ini digunakan untuk menampilkan tabel sesuai dengan data yang diterima
echo json_encode($response);
?>
