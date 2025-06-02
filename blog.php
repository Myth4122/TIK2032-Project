<?php
// Koneksi ke MySQL
$host = "localhost"; // ganti jika host bukan localhost
$user = "root"; // ganti dengan username MySQL kamu
$pass = ""; // ganti dengan password MySQL kamu
$db = "blog_db";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data artikel
$sql = "SELECT * FROM artikel ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personal Homepage</title>
    <link rel="stylesheet" href="style-blog.css">
</head>
<body>
    <!-- bagian Navigation -->
    <nav>
        <a href="index.html" class="nav-link">Home</a>
        <a href="gallery.html" class="nav-link">Gallery</a>
        <a href="blog.php" class="nav-link">Blog</a>
        <a href="contact.html" class="nav-link">Contact</a>
    </nav>
    <!--bagian navigation end-->

    <header id="home">
        <h1>Ini Bagian Blog/artikel</h1>
    </header>

    <section id="blog">
        <h2>Blog</h2>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="blog-post">';
                echo '<h3>' . $row['judul'] . '</h3>';
                echo '<p>' . $row['isi'];
                if (!empty($row['link'])) {
                    echo ' <a href="' . $row['link'] . '">Baca Selengkap nya</a>';
                }
                echo '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>Tidak ada artikel.</p>';
        }

        $conn->close();
        ?>
    </section>

</body>
</html>
