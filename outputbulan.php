<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bulan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Afwan Ayasyin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tugas1.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="latihan.html">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="bulan.php">Bulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="segitiga.html">Segitiga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="vkubus.html">Kubus</a>
                    </li>
            </div>
        </div>
    </nav>
    <?php
    $bulan = $_POST["bulan"];

    if ($bulan == 1) {
        echo "Bulan Januari";
    } elseif ($bulan == 2) {
        echo "Bulan Februari";
    } elseif ($bulan == 3) {
        echo "Bulan Maret";
    } elseif ($bulan == 4) {
        echo "Bulan April";
    } elseif ($bulan == 5) {
        echo "Bulan Mei";
    } elseif ($bulan == 6) {
        echo "Bulan Juni";
    } elseif ($bulan == 7) {
        echo "Bulan Juli";
    } elseif ($bulan == 8) {
        echo "Bulan Agustus";
    } elseif ($bulan == 9) {
        echo "Bulan September";
    } elseif ($bulan == 10) {
        echo "Bulan Oktober";
    } elseif ($bulan == 11) {
        echo "Bulan November";
    } elseif ($bulan == 12) {
        echo "Bulan Desember";
    } else {
        echo "tidak tersedia";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<div>
    <footer>
        <p class="mb-0">&copy;2025</p>
    </footer>
</div>

</html>