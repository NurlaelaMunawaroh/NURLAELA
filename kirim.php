<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';

    // Konfigurasi SMTP Gmail
    $mail = new PHPMailer(true);

    try {
        // Pengaturan Server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ellaell801@gmail.com'; // Ganti dengan alamat Gmail Anda
        $mail->Password = 'fjyy uxxr fvnc nynd';  // Gunakan App Password (bukan password Gmail biasa)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Pengaturan Email
        $mail->setFrom('ellaell801@gmail.com', 'wisataalam'); // Ganti dengan email dan nama pengirim
        $mail->addAddress('cantikanandan@gmail.com', 'nama Penerima'); // Ganti dengan email penerima

        // Konten Email
        $mail->isHTML(true);
        $mail->Subject = "Pesan dari formulir kontak";
        $mail->Body = "<p><strong>Nama:</strong> belajar</p>";

        // Kirim Email
        $mail->send();
        echo 'Pesan berhasil dikirim.';
    } catch (Exception $e) {
        echo "Pesan gagal dikirim. Error: {$mail->ErrorInfo}";
    }
?>