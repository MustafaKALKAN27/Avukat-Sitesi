<title>İstanbul Hukuk Bürosu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("class.phpmailer.php"); // PHPMailer dosyamizi çagiriyoruz
$mail = new PHPMailer(); // Sinifimizi $mail degiskenine atadik
$mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
$mail->From     = $_POST["mail"];//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
$mail->Sender   = $_POST["mail"];//"admin@localhost";//Gönderen Mail adresi
//$mail->ReplyTo  = ($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->AddReplyTo=($_POST["mail"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
$mail->FromName = $_POST["ad"];//"PHP Mailer";//gönderenin ismi
$mail->Host     = "smtp.gmail.com";//"localhost"; //SMTP server adresi
$mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = false;
$mail->Port     = 587; //Natro SMPT Mail Portu
$mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
$mail->Username = "mail adresin";//"admin@localhost"; //SMTP kullanici adi
$mail->Password = "mail şifren";//""; //SMTP mailinizin sifresi
$mail->WordWrap = 50;
$mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
$mail->Subject  = $_POST["konu"]." /PHP SMTP Ayarları/Mail Konusu";//"Deneme Maili"; // Mailin Konusu Konu
//Mailimizin gövdesi: (HTML ile)
$body  = "						"."Mail İçeriği Başlığı"."<br><br>";
$body .= "Gönderen Adi		: ".$_POST["ad"]."<br>";
$body .= "E-posta Adresi	: ".$_POST["mail"]."<br>";
$body .= "Telefonu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["telefon"]."<br>";

$body .= "Konu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["konu"]."<br>";
$body .= "Mesaj&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$_POST["mesaj"]."<br>";


//  $body = $_POST["mesaj"];//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
// HTML okuyamayan mail okuyucularda görünecek düz metin:
$textBody = $body;//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
$mail->Body = $body;
$mail->AltBody = $text_body;
if ($mail->Send()) echo "Sorunuz gönderilmiştir.";
else echo "Sorunuz gönderilmiştir.";
$mail->ClearAddresses();
$mail->ClearAttachments();
//$mail->AddAttachment('images.png'); //mail içinde resim göndermek için
$mail->addCC('mail adresin');// cc email adresi
$mail->addBCC('mail adresin');// bcc email adresi
$mail->AddAddress("mail adresin"); // Mail gönderilecek adresleri ekliyoruz. Birden fazla ekleme yapılabilir.
$mail->Send();
$mail->ClearAddresses();
$mail->ClearAttachments();
?>
<script language="javascript">
{
    alert("Mesajınız Gönderilmiştir");
}
</script>
<?php
header("Refresh: 0; url=http://www.avukatmuratcengiz.com/iletisim.html");
?>