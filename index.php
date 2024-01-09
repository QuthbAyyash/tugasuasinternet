<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan - Halaman Awal</title>
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

    .welcome-message {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .library-icon {
      font-size: 50px;
      color: #3498db;
      margin-right: 10px;
    }

    .menu-container {
      display: flex;
      gap: 20px;
    }

    .menu-item {
      padding: 15px 30px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
      display: flex;
      align-items: center;
    }

    .menu-item:hover {
      background-color: #2980b9;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .menu-item:nth-child(1) {
      animation: fadeInUp 1s ease 0.5s both;
    }

    .menu-item:nth-child(2) {
      animation: fadeInUp 1s ease 1s both;
    }
  </style>
</head>
<body>

  <div class="welcome-message"><h3>DATABASE BUKU QUTHB</h3></div>

  <div class="menu-container">
    <a href="inputdata.php" class="menu-item">
      <span class="library-icon">📚</span> Tambah Data
    </a>
    <a href="lihat.php" class="menu-item">
      <span class="library-icon">📖</span> Lihat Data
    </a>
  </div>

</body>
</html>
