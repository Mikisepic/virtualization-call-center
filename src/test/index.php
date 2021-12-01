<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>MADComms</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
    <div class="container">
      <a class="navbar-brand">MADComms</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#paslaugos">Paslaugos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sprendimai">Sprendimai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#verslo-sritys">Verslo Sritys</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#apie-mus">Apie mus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontaktai">Kontaktai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="paslaugos">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/img2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/img3.jpg" class="d-block w-100" alt="...">
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

  <div id="sprendimai">
  </div>
  <div id="verslo-sritys">
  </div>
  <div id="apie-mus" class="container">
  </div>
  <div id="kontaktai" class="container">
    <div class="row">
      <div class="col-sm-12 text-center pt-5">
        <h1 class="text-white">KONTAKTAI</h1>
        <p class="text-white">Džiaugsimės sulaukę Jūsų skambučio, el. laiško ar užpildytos kontaktų formos!</p>
      </div>
      <div class="col-sm-12 col-xl-6 pt-5 mt-2">
        <div class="contact-form">
          <h3 class="text-center text-white">Susisiekite su mumis!</h3>
          <form class="pt-5">
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vardas Pavardė">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="El. paštas">
            </div>
            <div class="mb-3">
              <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Telefono numeris">
            </div>
            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Įveskite žinutę"></textarea>
            </div>
            <input class="btn btn-light" type="submit" value="Siųsti">
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

  <a href="https://wa.me/8569541244" class="whatsapp_float" target="_blank"><i class="fa fa-whatsapp whatsapp-icon"></i></a>

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
            <a href="#" class="pe-1"><img src="images/fb-icon.png" alt=""></a>
            <a href="#" class="pe-1"><img src="images/twitter-icon.png" alt=""></a>
            <a href="#"><img src="images/linkedin-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>