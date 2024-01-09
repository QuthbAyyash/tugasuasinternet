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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
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

        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 800px;
            width: 100%;
            padding: 20px;
            border: 2px solid #3498db;
            border-radius: 8px;
            background-color: #ecf0f1;
            text-align: left;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        p {
            margin: 10px 0;
        }

        img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 10px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div>
        <h2>Detail Buku</h2>

        <div>
            <img src="quthb.jpg" alt="Book Cover" style="margin-right: 20px;">

            <label>ID:</label>
            <p><?php echo $row['id']; ?></p>

            <label>Title:</label>
            <p><?php echo $row['title']; ?></p>

            <label>Author:</label>
            <p><?php echo $row['author']; ?></p>

            <label>Published Year:</label>
            <p><?php echo $row['published_year']; ?></p>

            <label>ISBN:</label>
            <p><?php echo $row['isbn']; ?></p>
        </div>

        <a href="lihat.php">
            <button>Kembali</button>
        </a>
    </div>

</body>
</html>
