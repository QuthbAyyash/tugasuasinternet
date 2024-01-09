<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $sql = "SELECT * FROM nama_database WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $isbn = $_POST['isbn'];

    $sql = "UPDATE nama_database SET title='$title', author='$author', published_year='$published_year', isbn='$isbn' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: lihat.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f5f5f5;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 400px;
      width: 100%;
    }

    label {
      font-weight: bold;
    }

    input {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value="<?php echo $row['author']; ?>" required>

    <label for="published_year">Published Year:</label>
    <input type="number" id="published_year" name="published_year" value="<?php echo $row['published_year']; ?>" required>

    <label for="isbn">ISBN:</label>
    <input type="text" id="isbn" name="isbn" value="<?php echo $row['isbn']; ?>" required>

    <button type="submit">Perbarui Data</button>
  </form>

</body>
</html>
