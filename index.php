<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bilgi Testi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .test-container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>

<div class="test-container">
  <h2>PHP Bilgi Testi</h2>
  <form action="sonuc.php" method="post">
    <ol>
      <li>
        <p>PHP'nin açılımı nedir?</p>
        <label>
          <input type="radio" name="soru1" value="a"> a) PHP: Hypertext Preprocessor
        </label>
        <label>
          <input type="radio" name="soru1" value="b"> b) Personal Home Page
        </label>
        <label>
          <input type="radio" name="soru1" value="c"> c) Private Hypertext Processor
        </label>
      </li>
      <li>
        <p>PHP'de "echo" fonksiyonu ne işe yarar?</p>
        <label>
          <input type="radio" name="soru2" value="a"> a) Veritabanı bağlantısı yapar.
        </label>
        <label>
          <input type="radio" name="soru2" value="b"> b) Ekran üzerine çıktı yazdırır.
        </label>
        <label>
          <input type="radio" name="soru2" value="c"> c) Sayısal işlemleri yapar.
        </label>
      </li>
      <li>
        <p>PHP'de değişkenler nasıl tanımlanır?</p>
        <label>
          <input type="radio" name="soru3" value="a"> a) $myVar = 5;
        </label>
        <label>
          <input type="radio" name="soru3" value="b"> b) var myVar = 5;
        </label>
        <label>
          <input type="radio" name="soru3" value="c"> c) myVar := 5;
        </label>
      </li>
      <li>
        <p>PHP'de "if" ve "else" yapısı nasıl kullanılır?</p>
        <label>
          <input type="radio" name="soru4" value="a"> a) if ($condition) { // kodlar } else { // kodlar }
        </label>
        <label>
          <input type="radio" name="soru4" value="b"> b) if $condition { // kodlar } else { // kodlar }
        </label>
        <label>
          <input type="radio" name="soru4" value="c"> c) if $condition: // kodlar else: // kodlar endif;
        </label>
      </li>
      <li>
        <p>PHP'de bir dizi nasıl oluşturulur?</p>
        <label>
          <input type="radio" name="soru5" value="a"> a) myArray = array(1, 2, 3);
        </label>
        <label>
          <input type="radio" name="soru5" value="b"> b) myArray = [1, 2, 3];
        </label>
        <label>
          <input type="radio" name="soru5" value="c"> c) myArray := {1, 2, 3};
        </label>
      </li>
      <li>
        <p>PHP'de bir fonksiyon nasıl tanımlanır?</p>
        <label>
          <input type="radio" name="soru6" value="a"> a) function myFunction() { // kodlar }
        </label>
        <label>
          <input type="radio" name="soru6" value="b"> b) def myFunction(): // kodlar end;
        </label>
        <label>
          <input type="radio" name="soru6" value="c"> c) myFunction = function() { // kodlar };
        </label>
      </li>
      <li>
        <p>PHP'de bir döngü nasıl kullanılır?</p>
        <label>
          <input type="radio" name="soru7" value="a"> a) for ($i = 0; $i < 5; $i++) { // kodlar }
        </label>
        <label>
          <input type="radio" name="soru7" value="b"> b) while ($i < 5) { // kodlar $i++; }
        </label>
        <label>
          <input type="radio" name="soru7" value="c"> c) foreach ($array as $item) { // kodlar }
        </label>
      </li>
      <li>
        <p>PHP'de bir dosyayı okuma işlemi nasıl yapılır?</p>
        <label>
          <input type="radio" name="soru8" value="a"> a) read_file("file.txt");
        </label>
        <label>
          <input type="radio" name="soru8" value="b"> b) file_get_contents("file.txt");
        </label>
        <label>
          <input type="radio" name="soru8" value="c"> c) open_file("file.txt");
        </label>
      </li>
      <li>
        <p>PHP'de bir sayının karesini almak için hangi fonksiyon kullanılır?</p>
        <label>
          <input type="radio" name="soru9" value="a"> a) sqr()
        </label>
        <label>
          <input type="radio" name="soru9" value="b"> b) square()
        </label>
        <label>
          <input type="radio" name="soru9" value="c"> c) pow()
        </label>
      </li>
      <li>
        <p>PHP'de bir dizinin eleman sayısını bulmak için hangi fonksiyon kullanılır?</p>
        <label>
          <input type="radio" name="soru10" value="a"> a) size()
        </label>
        <label>
          <input type="radio" name="soru10" value="b"> b) length()
        </label>
        <label>
          <input type="radio" name="soru10" value="c"> c) count()
        </label>
      </li>
    </ol>
    <input type="submit" value="Testi Gönder">
  </form>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tek Sayılar</title>
</head>
<body>
    <h2> 1 ile 100 Arasındaki Tek Sayılar</h2>

    <ul>
        <?php
            for ($i = 1; $i <= 100; $i += 2) {
                echo "<li>$i</li>";
            }
        ?>
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastgele Sayı Tablosu</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Rastgele Sayı Tablosu</h2>

    <table>
        <?php
            $satirSayisi = 5; 
            $sutunSayisi = 5; 

            for ($i = 1; $i <= $satirSayisi; $i++) {
                echo "<tr>";

                for ($j = 1; $j <= $sutunSayisi; $j++) {
                    $rastgeleSayi = rand(1, 100); // 1 ile 100 arasında rastgele bir sayı al
                    echo "<td>$rastgeleSayi</td>";
                }

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kişiler</title>
</head>
<body>
  <h2>Kişiler</h2>
  <form action="" method="POST">
    <label for="ad">Ad:</label>
    <input type="text" id="ad" name="ad" required>

    <label for="soyad">Soyad:</label>
    <input type="text" id="soyad" name="soyad" required>

    <label for="email">E-Posta:</label>
    <input type="email" id="email" name="email" required>

    <input type="submit" name="submitPerson" value="Ekle">
  </form>

  <h2>Kişi Ara</h2>
  <form action="" method="POST">
    <label for="aramaAd">Ad ile Ara:</label>
    <input type="text" id="aramaAd" name="aramaAd" required>

    <input type="submit" name="araPerson" value="Ara">
  </form>

  <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Veritabanı bağlantı hatası kontrolü
    if ($conn->connect_error) {
      die("Bağlantı hatası: " . $conn->connect_error);
    }

    // 1. Form için kişi ekleme işlemi
    if(isset($_POST['submitPerson'])){
      $ad = $_POST['ad'];
      $soyad = $_POST['soyad'];
      $email = $_POST['email'];

      $sql = "INSERT INTO kisi (ad, soyad, email) VALUES ('$ad', '$soyad', '$email')";

      if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarıyla eklendi.";
      } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
      }
    }

    // 2. Form için kişi arama işlemi
    if(isset($_POST['araPerson'])){
      $aramaAd = $_POST['aramaAd'];

      $sql = "SELECT soyad, email FROM kisi WHERE ad = '$aramaAd'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "Soyad: " . $row["soyad"]. "<br>E-Posta: " . $row["email"]. "<br>";
        }
      } else {
        echo "Kişi bulunamadı.";
      }
    }
    $conn->close();
  ?>
</body>
</html>