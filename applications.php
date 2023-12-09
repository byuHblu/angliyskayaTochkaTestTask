
<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testEnglishTochka";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


// Получение данных из формы
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO applications (name, phone, email) VALUES ('$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
echo "Запись успешно сохранена";
} else {
echo "Ошибка: " . $sql . "" . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>



