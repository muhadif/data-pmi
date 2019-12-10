<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Palang Merah Indonesia</title>

</head>

<body>
<!--Jumbotron-->

<div class="jumbotron" style="position: inherit !important;">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('img/bgr1.svg') }}" class="img" style="width:100%;" height="450px" alt="can't reload images :)">
        </div>
        <div class="col-lg-6">
            <br><br>
            <h1>Palang Merah Indonesia</h1>
            <h3>Kota Yogyakarta</h3> <br>
            <a type="button" href="{{ url('history') }}" class="btn btn-outline-primary">Cek Riwayat</a>
        </div>
    </div>
</div>


<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <img src="images/PMI.png" class="image_pmi" height="40px" alt="" style="vertical-align:top !important">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="index.html">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#tentangkami">TENTANG KAMI</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="informasi" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        INFORMASI
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#stok_darah">STOK DARAH</a>
                        <a class="dropdown-item" href="#prasyaratan">PRASYARATAN DONOR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#donasi">DONASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="./login.php" target="_blank">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--TentangKita-->
<div class="container section pb-5" id="tentangkami">
    <!--Section heading-->
    <h2 class="section-heading h1 pt-4">TENTANG KAMI</h2>
    <!--Section desc-->
    <p class="section-description pb-4"></p>
    <H5><strong>VISI</strong></H5>
    <p>PMI yang berkarakter, profesional, mandiri dan dicintai masyarakat</p>
    <h5><strong>MISI</strong></h5>
    <ol>
        <li>Menjadi organisasi kemanusiaan terdepan yang memberikan <strong>layanan berkualitas</strong> melalui kerja sama dengan masyarakat dan mitra sesuai dengan <strong>prinsip-prinsip dasar</strong>Gerakan Palang Merah dan Bulan Sabit Merah.</li>
        <li>Meningkatkan kemandirian organisasi PMI melalui <strong>kemitraan strategis</strong> yang berkesinambungan dengan pemerintah, swasta, mitra gerakan dan pemangku kepentingan lainnya di semua tingkatan.</li>
        <li>Meningkatakan <strong>reputasi organisasi</strong> PMI di tingkat Nasional dan Internasional</li>
    </ol>
    <h5>Tujuan Strategi PMI:</h5>
    <ol>
        <li>Mewujudkan PMI yang berfungsi baik di berbagai tingkatan, baik dalam pelaksanaan kebijakan, peraturan organisasi, sistim dan prosedur yang ditetapkan.</li>
        <li>Meningkatkan kapasitas sumber daya organisasi PMI di berbagai tingkatan, <strong>baik sumber daya manusia dan sarana prasarana</strong> yang diperlukan dalam operasi penanganan bencana di seluruh wilayah Indonesia.</li>
        <li>Meningkatkan <strong>ketahanan masyarakat</strong> untuk mengurangi resiko dan dampak bencana serta penyakit.</li>
        <li>Meningkatkan <strong>palayanan darah</strong> yang memadai, aman dan berkualitas di seluruh Indonesia.</li>
        <li>Memperkuat hubungan kerja sama dengan <strong>pemerintah pusat dan daerah</strong> dalam rangka menjalankan mandat dan fungsi PMI di bidang kemanusiaan.</li>
        <li>Meningkatkan kemitraan yang berkesinambungan dengan sektor <strong>publik, swasta, mitra gerakan, lembaga donor dan pemangku kepentingan</strong> lainnya di semua tingkatan dalam melayani masyarakat.</li>
        <li>Meningkatkan <strong>akuntabilitas PMI</strong> sebagai organisasi kemanusiaan di tingkat Nasional maupun Internasional.</li>
        <li>Meningkatkan pemahaman seluruh elemen masyarakat tentang nilai-nilai <strong>kemanusiaan, prinsip-prinsip dasar</strong> Gerakan Internasional Palang Merah/Bulan Sabit Merah serta <strong>Hukum Perikemanusiaan Internasional</strong> melalui upaya komunikasi, edukasi dan diseminasi</li>
    </ol>
    <h5>Adapun tugas yang dilakukan PMI adalah:</h5>
    <ul>
        <li>Memberikan bantuan kepada korban konflik bersenjata, kerusuhan dan lainnya.</li>
        <li>Memberikan pelayanan darah sesuai dengan ketentuan peraturan perundang-undangan.</li>
        <li>Melakukakn pembinaan relawan.</li>
        <li>Melaksanakan pendidikan dan pelatihan yang berkaitan dengan Kepalangmerahan.</li>
        <li>Menyebarluaskan informasi yang berkaitan dengan kegiatan Kepalangmerahan.</li>
        <li>Membantu dalam penanganan musibah dan/atau bencana di dalam dan di luar negeri.</li>
        <li>Membantu pemberian pelayanan kesehatan dan sosial.</li>
        <li>Melaksananakan tugas kemanusiaan lainnya yang diberikan oleh pemerintah.</li>
    </ul>
    <h5>Sejarah Lahirnya Palang Merah Indonesia</h5>
    <ol>
        <li>21 Oktober 1873</li>
        <p>Pemerintah kolonial Belanda mendirikan organisasi Palang Merah di Indonesia dengan nama <strong> Het Nederland-Indiche Rode Kruis (NIRK) </strong> yang kemudian namannya menjadi <strong> Nederlands Rode Kruiz Afdelinbg Indie (NERKAI).</strong></p>
        <li>1932 dan 1940</li>
        <p>Pada 1932 timbul semangat untuk mendirikan Palang Merah Indonesia (PMI) yang dipelopori oleh dr. RCL. Senduk dan Bahder Djohan. Kemudian, proposal pendirian diajukan pada kongres NERKAI (1940), namun ditolak. Pada saat penjajahan Jepang, proposal itu kembali diajukan, namun tetap ditolak.</p>
        <li>3 September 1945</li>
        <p>Pada 3 September 1945 Presiden Soekarno memerintahkan kepada Menteri Kesehatan dr. Buntaran Martoatmodjo untuk membentuk suatu Badan Palang Merah Nasional untuk menunjukan kepada dunia internasional bahwa keberadaan Negara Indonesia adalah suatu fakta nyata setelah proklamasi kemerdekaan pada 17 Agustus 1945.</p>
        <li>5 September 1945</li>
        <p>Pada 5 September 1945, dr. buntaran membentuk Panitia Lima yang terdiri dari dr. R. Mochtar, dr. Bahder Johan, dr. Joehana, Dr. Marjuki dan dr. Sitanala, untuk mempersiapkan pembentukan Palang merah di Indonesia.</p>
        <li>17 September 1945</li>
        <p>Tepat pada tanggal 17 September 1945 terbentuklah Pengurus Besar Palang Merah Indonesia (PMI) dengan ketua pertama, Drs. Mohammad Hatta.</p>
        <li>16 Januari 1950</li>
        <p>Di dalam satu negara hanya ada satu perhimpunan nasional, maka Pemerintah Belanda membubarkan NERKAI dan menyerahkan asetnya kepada PMI. Pihak NERKAI diwakili oleh dr. B. Van Trich sedangkan dari PMI diwakili oleh dr. Bahder Djohan. </p>
        <li>1950 dan 1963</li>
        <p>PMI terus melakukan pemberian bantuan hingga akhirnya Pemerintah Republik Indonesia Serikat mengeluarkan Keppres No. 25 tanggal 16 Januari 1950 dan dikuatkan engan Keppres No. 246 tanggal 29 November 1963. Pemerintah Indonesia mengakui keberadaan PMI.</p>
        <p>Adapun tugas utama PMI berdasarkan Keppres RIS No. 25 tahun 1950 dan Keppres RI No. 246 tahun 1963 adalah untuk memberikan bantuan pertama pada korban bencana alam dan korban perang sesuai dengan isi Konvensi Jenewa 1949.</p>
        <li>1950</li>
        <p>Secara Internasional, keberadaan PMI diakui oleh Komite Palang Merah Internasional (ICRC) pada 15 Juni 1950. Setelah itu, PMI diterima menjadi anggota Perhimpunan Nasional ke-68 oleh Liga Perhimpunan Palang Merah dan Bulan Sabit Merah (Liga) yang sekarang disebut Federasi Internasional Perhimpunan Palang Merah dan Bulan Sabit Merah (IFRC) pada Oktober 1950.</p>
        <li>Saat ini</li>
        <P>Saat ini, PMI telah berdiri di 33 Provinsi, 474 Kabupaten/Kota dan 3.406 Kecamatan (data per-Februari 2019). PMI mempunyai hampir 1,5 juta sukarelawan yang siap melakukan pelayanan.</P>
    </ol>
    </p>
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-5 mb-4">
            <!--Form with header-->
            <div class="card">
                <div class="card-body">
                    <!--Header-->
                    <div class="form-header blue accent-1">
                    </div>
                    <br>
                    <!--Body-->
                    <div>
                        <img src="./images/pmi1.jpg" alt="cant't reload images" style="width:100%;" height="160px">
                        <p>PMI adalah organisasi kemanusiaan yang berstatus badan hukum, diundangkan dengan Undang-Undang nomor 1 tahun 2018 tenteang Kepalangmerahan guna menjalankan kegiatan Keapalangmerahan sesuai dengan Konvensi Jenewa Tahun 1949, dengan tujuan untuk mencegah dan meringankan penderitaan dan melingdungi korban tawanan perang dan bencana, tanpa membedakan agama, bangsa suku bangsa, warna kulit, jenis kelamin, golongan dan Pandangan politik</p>            </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <!--Google map-->
            <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6588399996326!2d110.3900711505443!3d-7.8258862798710656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a571a9862c413%3A0xb653348bebf3e51d!2sPMI%20Yogyakarta!5e0!3m2!1sen!2sus!4v1572202091158!5m2!1sen!2sus"
                    width="100%" height="460" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

<!--Stok Darah-->
<div class="container marketing" id="stok_darah">
    <h2 class="section-heading h1 pt-4">STOK DARAH</h2>
    <br><br>
    <!-- Three columns of text below -->
    <div class="row">
        <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>
            </svg>
            <br><br>
            <h2>A</h2>
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
            <br><br>
            <h2>B</h2>
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
            <br><br>
            <h2>O</h2>
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
            <br><br>
            <h2>AB</h2>
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>

<!--SyaratDonor-->
<div class="container section pb-5" id="prasyaratan">
    <h2 class="section-heading h1 pt-4">Prasyaratan Donor Darah</h2>
    <p class="section-description pb-4"></p>
    <ol>
        <li>Usia 17 -61 tahun (usia 17 tahun diperbolehkan donor bila mendapat izin tertulis dari orangtua</li>
        <li>Berat badan minimal 50 kg</li>
        <li>Temperatur tubuh 36,6 - 37,5 derajat Celcius</li>
        <li>Tekanan darah baik yaitu sistole=110-150 mmHg, diastole=70 -100 mmHg</li>
        <li>Denyut nadi teratur yaitu sekitar 50 - 100 kali/menit</li>
        <li>Hemoglobin perempuan minimal 12 gram, sedangkan untuk laki-laki minimal 12,5 gram</li>
        <li>Jumlah penyumbangan per tahun paling banyak 5 kali dengan jarak penyumbangan sekurang-kurangnya 3 bulan</li>
        <li>Calon donor dapat mengambil dan menandatangani formuli pendaftaran, lalu menjalani pemeriksaan pendahuluan, seperti kondisi berat badan, HB, golongan darah, dan dilanjutakan dengan pemeriksaan dokter</li>
    </ol>
    </ol>
</div>

<!-- START THE FEATURETTES -->
<div class="container" id="donasi">
    <h2 class="section-heading h1 pt-4">DONASI</h2>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Donasi Siaga Pandemi
            </h2>
            <p class="lead">Donasi siaga pandemi adalah sebuah program penggalangan dana dan dukungan untuk membantu kegiatan sosialisasi siaga pandemi di masyarakat dan respon bantuan dari PMI apabila terjadi wabah, kondisi KLB (Kejadian Luar Biasa), dan atau pandemi di Indonesia.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                 role="img" aria-label="Placeholder: 500x500">
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Donasi Program</h2>
            <p class="lead">Donasi Program adalah upaya penggalangan danan dari masyarakat (individu, lembaga/institusi/komunitas, dan perusahaan) untuk dialokasikan ke berbagai program.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                 role="img" aria-label="Placeholder: 500x500">
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Donasi Khusus</h2>
            <p class="lead">Donasi Khusus adalah sebuah program donasi yang bersifat temporer donasi yang dilaksanakan dalam tenggat waktu tertentu disesuaikan dengan kebutuhan penanganan korban di lokasi tertentu.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                 role="img" aria-label="Placeholder: 500x500">
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Donasi Umum</h2>
            <p class="lead">Donasi Umum adalah wadah yang digunakan untuk mempermudah masyarakat dalam berdonasi. Siapapun dapat berpartisipasi dalam segala kegiatan PMI dengan berdonasi melalui donasi online ini.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                 role="img" aria-label="Placeholder: 500x500">
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>
        </div>
    </div>
</div>
<!-- /END THE FEATURETTES -->

<!--Optional JavaScript-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>
