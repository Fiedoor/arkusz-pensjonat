<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <main>
        <div id="left">
            <a href="index.html">GŁÓWNA</a>
            <img src="1.jpg" alt="pokoje">
        </div>
        <div id="mid">
            <a href="cennik.php">CENNIK</a>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'wynajem');
            $q = 'SELECT * FROM pokoje';
            $res = mysqli_query($conn, $q);
            echo "<table>";
            foreach ($res as $row) {
                echo '<tr>';
                foreach ($row as $r) {
                    echo "<td>" . $r . "</td>";
                }
                echo '</tr>';
            }
            echo "</table>";
            ?>
        </div>
        <div id="right">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3.jpg" alt="pokoje">
        </div>
    </main>
    <footer>
        <p>Stronę opracował: Stanisław Fiedoruk 5J</p>
    </footer>
</body>

</html>