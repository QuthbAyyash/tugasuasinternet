<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM nama_database";
$result = $conn->query($sql);


if (!$result) {
    die("Query error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f5f5f5;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            margin-right: 5px;
        }

        a:hover {
            background-color: #2980b9;
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

    <h2>DATA BUKU YANG TELAH DIINPUT</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>ISBN</th>
            <th>Aksi</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td>" . $row["published_year"] . "</td>";
            echo "<td>" . $row["isbn"] . "</td>";
            echo "<td>
                <a href='hapus.php?id=" . $row["id"] . "'>Hapus</a>
                <a href='edit.php?id=" . $row["id"] . "'>Edit</a>
                <a href='detail.php?id=" . $row["id"] . "'>Lihat Detail</a>
            </td>";
            echo "</tr>";
        }
        ?>

    </table>

    <a href="index.php">
        <button>Kembali</button>
    </a>

</body>
</html>
