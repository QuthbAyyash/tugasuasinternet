<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data</title>
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
    align-items: center;
    padding: 50px;
    border: 2px solid #3498db;
    border-radius: 8px;
    background-color: #ecf0f1;
    }

    label {
      font-weight: bold;
    }

    input {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    select {
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
  <h1>Masukan Data Buku</h1>
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required>

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required>

    <label for="published_year">Published Year:</label>
    <select id="published_year" name="published_year" required>
      <option value="2024">2024</option>
      <option value="2023">2023</option>
      <option value="2022">2022</option>
      <option value="2021">2021</option>
      <option value="2020">2020</option>
      <option value="2019">2019</option>
      <option value="2018">2018</option>
      <option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
    </select>


    <label for="isbn">ISBN:</label>
    <input type="text" id="isbn" name="isbn" required>

    <button type="submit">Tambah Data</button>
  </form>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "nama_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $isbn = $_POST['isbn'];

 
    $sql = "INSERT INTO nama_database (id, title, author, published_year, isbn) VALUES ('$id', '$title', '$author', '$published_year', '$isbn')";

    if ($conn->query($sql) === TRUE) {
    
        $conn->close();


        header("Location: lihat.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>

</body>
</html>
