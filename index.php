<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel='icon' href='img/HMISI.png' type='image/x-icon' />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Websitenya HMISI PPG</title>
    <script src="https://kit.fontawesome.com/d7573f2700.js" crossorigin="anonymous"></script>
    <!-- style -->
    <style>
        .parallax1 {
            /* The image used */
            background-image: url("img/bg1.jpg");

            /* Set a specific height */
            height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .dropdown-menu {
            display: block;
            visibility: hidden;
            opacity: 0;
            transform: translateY(50px);
            transition: .5s ease all;
        }

        .dropdown-menu.show {
            display: block;
            visibility: visible;
            opacity: 1;
            transform: translateY(0px);
            transition: .5s ease all;
        }

        .display-3,
        .display-5 {
            color: #03a9f4;
        }

        img {
            max-height: 400px;
        }

        .carousel-item,
        .conten {
            height: 60vh;
            min-height: 330px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
    <img class="rounded mx-auto d-block mt-3 mb-3" src="img/HMISI.png" alt="" width="100px">
    <!-- Navigasi Bar -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Program Kerja</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Kepengurusan</a>
        </li>
    </ul>
    <!-- Bagian Atas -->
    <section>
        <div class="parallax1">
        </div>
    </section>

    <div class="text-center mt-5 mt-5">
        <h1 class="display-3">HIMPUNAN<br>MAHASISWA<br>MANAJEMEN<br>INFORMATIKA DAN<br>SISTEM INFORMASI</h1>
        <br><br>
        <footer class="blockquote-footer mb-5">Websitenya Himpunan Mahasiswa Manajemen Sistem Informasi</footer>
    </div>

    <!-- bagian tengah -->
    <section class="mt-5 mb-5 text-center" style="background-color: #2e7d32">
        <h1 class="display-1 text-white pt-5">Our Vision and Mission</h1>
        <br><br>
        <div class="container conten">
            <h1 class="display-2 text-white text-left">VISION</h1>
            <h6 class="text-white text-left">"Terwujudnya HMISI yang bergerak aktif dan dinamis secara internal maupun eksternal, serta menguatkan rasa kekeluargaan di lingkungan jurusan Manejemen Informatika dan Sistem Informasi khususnya."</h6>
            <br><br>

            <div class="text-right">
                <h1 class="display-2 text-white text-right">MISSION</h1>
                <h6 class="text-white ">" Mengadakan kegiatan yang menunjang sisi akademis maupun non akademis mahasiswa/i Manajemen Informatika dan Sistem Informasi.</h6>
                <h6 class="text-white ">Membangun relasi yang luas dengan mengoptimalkan kegiatan yang berhubungan dengan masyarakat.</h6>
                <h6 class="text-white ">Menjadikan HMISI sebagai wadah bersosialisasi dan berbagi antar mahasiswa/i manajemen informatika dan Sistem Informasi.</h6>
                <h6 class="text-white ">Memfasilitasi gagasan dan metode anggota dalam cipta karya. Menciptakan suasana yang nyaman dalam HMISI."</h6>
            </div>

        </div>
    </section>
    <!-- Bagian bawah -->
    <section>
        <div class="mt-5 mb-5 text-center">
            <h1 class="display-3">Our Activity</h1>
            <br><br>
            <footer class="blockquote-footer">​Banyak Sekali Kegiatan Kami di Himpunan Mahasiswa Manajemen Informatika dan Sistem Informasi</footer>
        </div>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('img/pembelajaran.png')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Learn Programming</h2>
                            <p class="lead">di Tahun 2020 ini kita Mengadakan Pembelajaran Programmer, tujuan dari diadakan kegiatan ini adalah melatih skill temen temen semua di bidang Pemrograman.</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/MAKRAB.png')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">​Malam Keakraban</h2>
                            <p class="lead">Malam Keakraban atau yang sering kita sebut sebagai Makrab, adalah kegiatan untuk saling mengenal satu sama lain bersama Mahasiswa baru beserta Pengurus, Demisioner dan Alumni dari HMISI</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/VB.png')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">​Ekstravaganza</h2>
                            <p class="lead">​Setiap Tahunnya, kami mengadakan Kegiatan Perlombaan Kemerdekaan yang disebut Ekstravaganza, Kami ikut berpartisipasi bersama dengan UKM lain. Lomba yang biasanya kami adakan adalah lomba VB.NET dan Web Design</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>



    <!-- bagian Akhir -->
    <div class="mt-5 mb-5 text-center">
        <h1 class="display-3">Know More Us!</h1>
        <br><br>
        <footer class="blockquote-footer">​Kenali Lebih Jauh tentang Himpunan Mahasiswa Manajemen Sistem Informasi</footer>
    </div>
    <section class="mt-5 text-center" style="background-color: #f57c00">
        <div class="container conten">
            <h1 class="display-3 text-white pt-5">Ttile</h1>
            <div class="card-columns pt-5">
                <div class="card bg-outline-primary bg-transparent">
                    <div class="card-body text-center">
                        <p class="card-text">Some text inside the first card</p>
                    </div>
                </div>
                <div class="card bg-outline-warning bg-transparent">
                    <div class="card-body text-center">
                        <p class="card-text">Some text inside the second card</p>
                    </div>
                </div>
                <div class="card bg-outline-success bg-transparent">
                    <div class="card-body text-center">
                        <p class="card-text">Some text inside the third card</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <!-- Navigasi Bar -->

        <ul class="nav justify-content-center pt-4 pb-4" style="background-color: #455a64">
            <li class="nav-item">
                <a class="nav-link active text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="">Program Kerja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="">Kepengurusan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="">Ikuti Kami <i class="fa fa-instagram"></i></a>
            </li>
        </ul>
        <!-- Copyright -->
        <div class="pt-2 pb-1 text-center" style="background-color: #263238">
            <div>
                <div>
                    <p class="text-white">Copyright &copy;2020 by Himpunan Mahasiswa Manajemen Sistem Informasi</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <script src="https://kit.fontawesome.com/d7573f2700.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>