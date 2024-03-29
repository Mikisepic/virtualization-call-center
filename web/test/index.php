<?php
$ip = "10.0.1.225";
$port = "8531";
$db_name = "app_db";
$user = "app_user";
$password = "password";
$connStr = "host=$ip port=$port dbname=$db_name user=$user password=$password";
//connection to data base
$conn = pg_connect($connStr);
?>

<?php
if (isset($_POST['submit'])) {
  if (!empty($_POST['vardas']) && !empty($_POST['pastas']) && !empty($_POST['telefonas']) && !empty($_POST['zinute'])) {
    $vardas = $_POST['vardas'];
    $pastas = $_POST['pastas'];
    $telefonas = $_POST['telefonas'];
    $zinute = $_POST['zinute'];
    $query = "INSERT INTO contactrequest(req_id, name, phone, email, message)
                              VALUES(DEFAULT, '$vardas', '$telefonas', '$pastas', '$zinute')";
    pg_query($conn, $query);
  }
}
unset($vardas);
unset($pastas);
unset($telefonas);
unset($zinute);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Our CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <title>MADComms</title>

  <style>
    /*Hides number slider when inputing phone number in contact form*/
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">MADComms</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#paslaugos">Paslaugos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#verslo-sritys">Verslo Sritys</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#apie-mus">Apie mus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pagalba">Pagalba</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontaktai">Kontaktai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="karusele">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="#paslaugos"><img src="./images/carousel-0.jpg" class="d-block w-100"></a>
        </div>
        <div class="carousel-item">
          <a href="#verslo-sritys"><img src="./images/carousel-1.jpg" class="d-block w-100"></a>
        </div>
        <div class="carousel-item">
          <a href="#apie-mus"><img src="./images/carousel-2.jpg" class="d-block w-100"></a>
        </div>
        <div class="carousel-item">
          <a href="#pagalba"><img src="./images/carousel-3.jpg" class="d-block w-100"></a>
        </div>
        <div class="carousel-item">
          <a href="#kontaktai"><img src="./images/carousel-4.jpg" class="d-block w-100"></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div id="paslaugos">
    <div class="container">
      <div class="row pt-5 pb-5">
        <div class="col-md-12">
          <h2 class="text-white text-center">PASLAUGOS</h3>
            <p class="text-white text-center pt-2">
              Mums rūpi Jums padėti geriau, efektyviau dirbti ar sumažinti esamus veiklos kaštus</p>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-12 col-lg-4 d-flex justify-content-center pb-5">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem;">
            <img src="images/stacked_line_chart_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Pardavimai</h5>
              <p class="card-text text-center">Pardavimai yra kiekvieno verslo pagrindas. Mes padidinsime Jūsų pardavimus efektyviausiais metodais.</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 d-flex justify-content-center pb-5">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem;">
            <img src="images/support_agent_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Klientų aptarnavimas</h5>
              <p class="card-text text-center">Klientus aptarnaujame visais komunikacijos kanalais – telefonu, el. paštu, interneto pokalbiais.</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 d-flex justify-content-center pb-5">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem;">
            <img src="images/poll_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Klientų apklausos</h5>
              <p class="card-text text-center">Mes nuolatos vygdome apklausas, kurių rezultatai padeda Jūsų įmonei klestėti.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="verslo-sritys">
    <div class="container">
      <div class="row pt-5 pb-5">
        <div class="col-md-12">
          <h2 class="text-center">VERSLO SRITYS</h3>
            <p class="text-center pt-2">
              Skirtingi verslai turi savo unikalius <strong>poreikius</strong> ir lūkesčius. Turime patirties, galimybių ir daug noro bei entuziazmo prisidėti prie Jūsų verslo <strong>didesnės sėkmės</strong>
            </p>
        </div>
      </div>
      <div class="row pt-5 mb-5">
        <div class="col-sm-12 col-md-6 col-xl-3 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/shopping_cart_black_18dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">El. parduotuvės</h5>
              <p class="card-text text-center">Didėjant klientų reiklumui, vis svarbiau užtikrinti efektyvią ir savalaikę komunikaciją.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/hotel_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Rezervacija</h5>
              <p class="card-text text-center">Esame įpratę internetu užsisakyti viešbutį ar lėktuvo bilietus ir tikėtis greitos pagalbos jei staiga jos prireiktų.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/handshake_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Verslo paslaugos</h5>
              <p class="card-text text-center">Tikri profesionalai vertina kokybę, brangina laiką, todėl pasikliauja patikimais partneriais ir patiki jiems dalį netiesioginės savo veiklos.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/devices_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Telekomunikacijos</h5>
              <p class="card-text text-center">Modernizuojant infrastruktūrą, trumpinant laikotarpius ir atstumus ir iškyla poreikis palaikyti užsitikrinti glaudų ryšį su vartotojais.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/shopping_bag_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Mažmeninė prekyba</h5>
              <p class="card-text text-center">Mažmenine užsiimančių įmonių rinkoje yra ypač didelė konkurencija, todėl kiekvienas klientas ypač svarbus.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/screen_search_desktop_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">IT</h5>
              <p class="card-text text-center">Pažangūs IT sprendimai padeda įmonėms didinti savo efektyvumą, bet ar visi Jūsų potencialūs klientai apie juos žino?</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/local_shipping_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Logistika</h5>
              <p class="card-text text-center">Rinkoms globalėjant, daugėja ir iššūkių logistikos procesų valdymui, o tai, savo ruožtu, brandina naujus klientų poreikius.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
          <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; background-color: #61daff; border-color: #61daff">
            <img src="images/business_center_black_24dp.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Finansai, paskolos</h5>
              <p class="card-text text-center">Finansų srityje svarbiausia klientų pasitikėjimas, pastovumas ir galimybė klientams gauti atsakymus į savo klausimus.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div id="apie-mus" class="container">
    <div class="row pt-5 pb-5">
      <div class="col-md-12">
        <h2 class="text-center text-white">APIE MADComms</h3>
          <p class="text-center text-white fs-5 pt-2">
            Ši kompanija buvo įkurta 2021 metų rugsėjo 16 dieną. Motyvuota studentų grupė gavo užduotį iš nuostabaus dėstytojo sukurti telekomunikacijų svetainę. Pradžia buvo sunki... Buvo daug neaiškumų, retai kas sekėsi kaip planuota, bet laikui bėgant (2 svaitės iki pristatymo) ši svetainė pradėjo stotis ant kojų. Jo, ji dar nebaigta, bet mes esam Studentai. O Studentai yra labai gerai žinomi ir gerbiami, kadangi sugeba bet kokią užduotį padaryti paskutinę minutę. Dažnai ji būna atliekama ganėtinai prastai, nes ji būna daroma su mintimi "svarbu veikia". Tačiau mes ne eiliniai Studentai, mes... IT'yšnikai. Mes viską padarom ne tik paskutinę minutę, bet ir tvarkingai. Dėl to galime jus patikinti, jog net jei ir Jums atrodys kad Jūsų projektas yra nedaromas, nesijaudinkit, nes mes viską atidedame paskutinei minutei<span>&#128513;</span>
          </p>
      </div>
    </div>
  </div>
  <div class="advantages pb-5">
    <div class="container">
      <div class="row pt-5">
        <div classs="col-sm-12">
          <h3 class="text-center pb-5">MŪSŲ IŠSKIRTINUMAI</h3>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-6 pt-5 pe-5">
            <div class="row">
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img class="" src="images/scandinavian-peninsula.jpg" alt="">
              </div>
              <div class="col-md-8 text-start">
                <h4>Skandinaviškas požiūris į verslą</h4>
                <p>Puoselėjame skandinaviškas vertybes - orientaciją į klientus, aukštą kokybę, darbuotojus, skaidrumą,
                  patikimumą, igalaikę partnerystę</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 pt-5 pe-5">
            <div class="row">
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="images/certified.png" alt="">
              </div>
              <div class="col-md-8 text-start">
                <h4>Aukšti standartai, apgalvoti procesai</h4>
                <p>Paslaugas teikiame pagal aukštus kokybės, informacijos saugumo ir vadybos standartus, siekiame WOW efekto
                  savo klientams</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-6 pt-5 pe-5">
            <div class="row pt-5">
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="images/multi-language.png" alt="">
              </div>
              <div class="col-md-8 text-start">
                <h4>Klientus aptarnaujame 5-iomis kalbomis.</h4>
                <p>Paslaugas teikiame pagal aukštus kokybės, informacijos saugumo ir vadybos standartus, siekiame WOW efekto
                  savo klientams</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 pt-5 pe-5">
            <div class="row pt-5">
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="images/computer-eng-salaries-worldwide_md.jpg" alt="">
              </div>
              <div class="col-md-8 text-start">
                <h4>Modernios technologijos</h4>
                <p>Paslaugas teikiame pagal aukštus kokybės, informacijos saugumo ir vadybos standartus, siekiame WOW efekto
                  savo klientams</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-6 pt-5 pe-5">
            <div class="row pt-5">
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="images/happy-staff.jpg" alt="">
              </div>
              <div class="col-md-8 text-start">
                <h4>Kompetetingas personalas</h4>
                <p>Paslaugas teikiame pagal aukštus kokybės, informacijos saugumo ir vadybos standartus, siekiame WOW efekto
                  savo klientams</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 pt-5 pe-5">
            <div class="row pt-5">
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="images/247-support.png" alt="">
              </div>
              <div class="col-md-8 text-start">
                <h4>Aptarnavimas 24/7</h4>
                <p>Paslaugas teikiame pagal aukštus kokybės, informacijos saugumo ir vadybos standartus, siekiame WOW efekto
                  savo klientams</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pagalba" class="container">
    <div class="row pt-5 pb-5">
      <div class="col-sm-12 text-center pb-5">
        <h1 class="text-white">PAGALBA</h1>
        <p class="text-white pt-2">Kilo problema, kurią norite išspręsti kuo greičiau? Pasirinkite vieną iš mūsų aptarnaujamų įmonių ir gaukite Jums reikalingą pagalbą iškart!</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#vuPopUp">
            <img src="images/VU-logotype.png" alt="">
          </button>
          <!-- Modal -->
          <div class="modal fade " id="vuPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pasirinkite susisiekimo būdą</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                  <?php
                  //query
                  $query = "select * from company where com_id=1;";
                  $result = pg_query($conn, $query);
                  //stores result as rows
                  $row = pg_fetch_assoc($result);
                  //select wanted row
                  $number = $row['phone'];
                  $wappLink = "https://wa.me/$number";
                  echo "<a href='$wappLink' target='_blank'><img src='images/whatsapp_black_24dp.svg' class='rounded' alt='...'></a>";
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ikiPopUp">
            <img src="images/IKI_logo.png" alt="">
          </button>
          <!-- Modal -->
          <div class="modal fade " id="ikiPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pasirinkite susisiekimo būdą</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                  <?php
                  //query
                  $query = "select * from company where com_id=2;";
                  $result = pg_query($conn, $query);
                  //stores result as rows
                  $row = pg_fetch_assoc($result);
                  //select wanted row
                  $number = $row['phone'];
                  $wappLink = "https://wa.me/$number";
                  echo "<a href='$wappLink' target='_blank'><img src='images/whatsapp_black_24dp.svg' class='rounded' alt='...'></a>";
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#lidlPopUp">
            <img src="images/Lidl-Emblem.png" alt="">
          </button>
          <!-- Modal -->
          <div class="modal fade " id="lidlPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pasirinkite susisiekimo būdą</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                  <?php
                  //query
                  $query = "select * from company where com_id=3;";
                  $result = pg_query($conn, $query);
                  //stores result as rows
                  $row = pg_fetch_assoc($result);
                  //select wanted row
                  $number = $row['phone'];
                  $wappLink = "https://wa.me/$number";
                  echo "<a href='$wappLink' target='_blank'><img src='images/whatsapp_black_24dp.svg' class='rounded' alt='...'></a>";
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#topoPopUp">
            <img src="images/topocentras.png" alt="">
          </button>
          <!-- Modal -->
          <div class="modal fade " id="topoPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pasirinkite susisiekimo būdą</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                  <?php
                  //query
                  $query = "select * from company where com_id=4;";
                  $result = pg_query($conn, $query);
                  //stores result as rows
                  $row = pg_fetch_assoc($result);
                  //select wanted row
                  $number = $row['phone'];
                  $wappLink = "https://wa.me/$number";
                  echo "<a href='$wappLink' target='_blank'><img src='images/whatsapp_black_24dp.svg' class='rounded' alt='...'></a>";
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="kontaktai" class="container">
    <div class="row  pt-5 pb-5">
      <div class="col-sm-12 text-center pb-5">
        <h1 class="text-white">KONTAKTAI</h1>
        <p class="text-white pt-2">Džiaugsimės sulaukę Jūsų skambučio, el. laiško ar užpildytos kontaktų formos!</p>
      </div>
      <div class="col-sm-12 col-xl-6 pt-5 mt-2">
        <div class="contact-form">
          <h3 class="text-center text-white">Susisiekite su mumis!</h3>
          <form class="pt-5" action="" method="post">
            <div class="mb-3">
              <input type="text" class="form-control" name="vardas" id="vardas" maxlength="30" placeholder="Vardas Pavardė">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="pastas" id="pastas" maxlength="40" placeholder="El. paštas">
            </div>
            <div class="mb-3">
              <input type="number" class="form-control" name="telefonas" id="telefonas" maxlength="15" placeholder="Telefono numeris">
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="zinute" id="zinute" maxlength="500" rows="3" placeholder="Įveskite žinutę"></textarea>
            </div>
            <input class="btn btn-light" name="submit" type="submit" value="Siųsti">
          </form>
        </div>
      </div>
      <div class="col-sm-12 col-xl-6 pt-5 mt-2">
        <h3 class="text-center text-white">Kontaktinė informacija</h3>
        <div class="ps-5 pt-5 text-start">
          <p class="text-white">UAB "MADComms"</p>
          <p class="text-white">Biuro adresas: Didlaukio g. 47, Vilnius LT-06229</p>
          <p class="text-white">Registracijos adresas: Didlaukio g. 47, Vilnius LT-06229</p>
          <p class="text-white">Telefonas: 8 5 973 2977</p>
          <p class="text-white">El. p.: info@madcomms.com</p>
        </div>
      </div>
    </div>
  </div>

  <footer id="footer" class="bg-dark">
    <div class="container">
      <div class="row pt-5 mt-5 pb-5">
        <div class="col-sm-12 col-xl-8">
          <h4 class="text-white">
            Kontaktai
          </h4>
          <div class="pt-5 text-start">
            <p class="text-white">UAB "MADComms"</p>
            <p class="text-white">Biuro adresas: Didlaukio g. 47, Vilnius LT-06229</p>
            <p class="text-white">Registracijos adresas: Didlaukio g. 47, Vilnius LT-06229</p>
            <p class="text-white">Telefonas: 8 5 973 2977</p>
            <p class="text-white">El. p.: info@madcomms.com</p>
          </div>
        </div>
        <div class="col-sm-12 col-xl-4">
          <h4 class="text-white">
            Bendraukime
          </h4>
          <div id="socials" class="pt-5">
            <a href="https://www.facebook.com" target="_blank" class="pe-1"><img src="images/fb-icon.png" alt=""></a>
            <a href="https://twitter.com" target="_blank" class="pe-1"><img src="images/twitter-icon.png" alt=""></a>
            <a href="https://www.linkedin.com" target="_blank"><img src="images/linkedin-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>