<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>callhome</title>
    <link rel="shortcut icon" href="images/logo2.png"alt="callhome">

    <!-- Scripts -->
  <!-- CSS -->
  <!--<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
   <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body data-spy="scroll" data-target=".navbar"data-offset="60">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#"><img src ="images/logod.png" alt ="callhome"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
        <li class="nav-item active">
         <a class="nav-link" href="#accueil">Accueil<span class="sr-only"></span> </a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="#Telecharger">Télécharger </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#comment">Comment ça marche</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tarifs">Tarifs et Promos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#propos">A propos </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
</nav>
</header>
<!--header--->
<section id ="accueil">
        <div class= "container-fluid">
          <div class = "row bg">
             <div class="text">
             <p>Le monde au meilleur Prix grâce à l'application Mobile CALLHOME Multi -services</p>
             <a class="btn btn-lg" href="#" role="button">En savoir plus</a>
           </div>
           </div>
        </div>
   </div>
 </section>
 <section id ="pourquoi">
  <div class="container-fluid">
          <h1>POURQUOI CHOISIR CALLHOME?</h1>
   <div class="img">
       <img src="images/image6.jpeg" class="img-fluid" alt="comment ">
   </div>
</div>
</section>
<section id ="Telecharger">
    <div class="container-fluid">
        <h1>TELECHARGEMENT</h1>
        <div class="row">
               <p>L'Application CallHome est abordable pour tous. Elle met à votre  disposition une plateforme de qualité qui facilite vos échange internationaux.
                  Des forfaits spéciaux sont disponibles pour les appels réguliers vers les destinations spécifiques. Recharger le mobile de vos proches au meilleur prix avec rapidité et simplicité
                  Pour les telecharger il suffit d'aller d'aller dans la playstore si vous etes sur endroid ou appstore si vous etes sur iphone.</p>
             <div class ="btn text-center">
                 <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">APPSTORE</a>
                 <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">PLAYSTORE</a>
              </div>
        </div>
    </div>
</section>
<section id = "comment">
    <div class="container-fluid" >
        <div class="heading">
            <h1 class="text-center">CALLHOME COMMENT CA MARCHE</h1>
        </div>
<div class="embed-responsive embed-responsive-16by9" style="padding-top:100px">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3o_Bm-4grMg" frameborder="0"
   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</section>
<section>
<div class="container" style="padding:20px;">
</section>
<section>
    <div class="container-fluid" id ="tarifs">
        <div class="row1" style="background-color: #5FC6F4">
            <h1>TARIFS ET PROMOS</h1>
            <div class="text">
                <h2>Passez des appels internationaux dans le monde entier</h2>
                <h3>Découvrez les tarifs internationaux très avantageux de Skype pour appeler dans votre pays et à l'étranger</h3>
            </div>
               <div class="form-item" >
               <select id="address-country"placeholder ="Où voulez-vous appleller"></select>
               <input type="text" id="phone" type="tel" >
               </div>
        </div>
    </div>
<section id ="propos">
    <div class="container-fluid">
        <div class="divider"></div>
        <h1>ILS PARLENT DE NOUS</h1>
    </div>
    <div class="row" style="padding-top: 100px;">
      <div class ="col">
       <a href="http://akeza.net/les-burundais-de-la-diaspora-yves-rumuri-createur-de-lapplication-callhome/" target="_blank">
       <img src="images/akeza-mini1.png" />
       </a>
    </div>
    <div class ="col">
      <a href="https://www.youtube.com/watch?v=zQynK5Ct9v8" target="_blank">
      <img src="images/akn.jpg" />
    </a>
 </div>
 </div>
</section>
 <section id ="temoignages">
     <div class="container-fluid">
         <h1>TEMOIGNAGES</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <h6>«Grâce à cette application j'ai pu appeler toute ma famille au Sénégal à des prix vraiment dérisoires!»</h6>
                 <h6>Mamadou R</h6>
             </div>
             <div class="carousel-item">
                <h6>«J'utilise cette application tous les jours. Maintenant je peux appeler
                   ma famille au pays plus de trois fois par semaine!»</h6>
                <h6>Moussa S</h6>
             </div>
              <div class="carousel-item">
                  <h6>«J'utilise cette application tous les jours. Maintenant je peux appeler
                    ma famille au pays plus de trois fois par semaine!»</h6>
                  <h6>Mohamed L.</h6>
             </div>
           </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
           </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
           </a>
      </div>
        </div>
</section>
<section id ="contact">
    <div class = "container-fluid">
            <h1>CONTACTEZ-NOUS</h1>
        <div class="row">
              <div class="col-lg-12"></div>
                  <form id ="contact-form"method="post"action=""role ="form">
                      <div class="row">
                          <div class ="col-md-6">
                              <label for="first name" >Prénom<span class=blue>*</span></label>
                              <input type ="text" id ="firstname" name="firstname"class ="form-control"placeholder="votre prénom">
                              <p class ="comments">Mesage d'erreur</p>
                          </div>
                          <div class ="col-md-6">
                              <label for="first name" >Nom<span class=blue>*</span></label>
                              <input type ="text" id ="name" name="name"class ="form-control"placeholder="votre nom">
                              <p class ="comments">Message d'erreur</p>
                          </div>

                          <div class ="col-md-6">
                              <label for="email" >Email<span class=blue>*</span></label>
                              <input type ="text" id ="email" name="email"class ="form-control"placeholder="votre email">
                              <p class ="comments">Mesage d'erreur</p>
                          </div>
                          <div class ="col-md-6">
                              <label for="telepfone" >Téléphone<span class=blue>*</span></label>
                              <input type ="text" id ="telephone" name="téléphone"class ="form-control"placeholder="votre téléphone">
                              <p class ="comments">Message d'erreur</p>
                          </div>
                            <div class="col-md-12">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                             </div>
                          <div class ="col-md-12">
                              <p class ="blue"> * Ces informations sont requises</p>
                          </div>

                          <div class ="col-md-12">
                              <input type="submit"class="button1" value ="Envoyer">
                          </div>
                      </div>
                      <p class ="thank-you">Votre message a bien été envoyé.Merci de nous avoir contacté</p>
                  </form>
             </div>
        </div>
    </div>
</section>
<footer>
<section id ="adresse" >
<div class="container-fluid">
   <div class="row">
    <div class="col-md-4">
      <h2> <i class = "fa fa-home"></i> L'AGENCE</h2>
      <p>Tours Mercuriales </p>
      <p> 40, rue Jean Jaurès</p>
      <p> 93170 Bagnolet, France</p>
     </div>
    <div class="col">
        <h2><i class="far fa-clock"></i>SERVICE CLIENT</h2>
        <p>Du lundi au vendredi </p>
        <p> 10h - 19h</p>
    </div>
    <div class="col">
      <h2><i class="fas fa-phone-square"></i>NOUS CONTACTER</h2>
      <a href = "#">contact@callhome.fr</a>
      <p> T: 01 70 82 85 84</p>
      <a href ="#"><i class= "fab fa-facebook fa-2x mx-2 text-primary"></i></a>
      <a href ="#"><i class= "fab fa-twitter fa-2x mx-2 text-primary"></i></a>
    </div>
  </div>
</div>
</section>
<section id ="map">
    <div class="container-fluid">
      <div class ="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.507556922432!2d2.4129382156747083!3d48.86760007928847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66d7653a0ab75%3A0xd9e3c13938a5e4f8!2sTours%20Mercuriales%2C%2040%20Rue%20Jean%20Jaur%C3%A8s%2C%2093170%20Bagnolet!5e0!3m2!1sfr!2sfr!4v1615028265859!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </div>
     </div>
</section>
<section id ="blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <p>&copy{{date("Y")}} crée par Nf avec<span style="color:red;"> &hearts;</span></p>
            </div>
             <div class="col-md-4">
              <a href = "#">Blog</a>
            </div>
            <div class="col-md-4">
            <a href = "https://77413a0c-346a-46db-8def-b4e9608d7fcd.filesusr.com/ugd/f5c5ab_d8029a67795d4837900c31d591966fdc.pdf">Privacy</a>
            </div>
        </div>
    </div>
</section>
</footer>
<script>
    // get the country data from the plugin
var countryData = window.intlTelInputGlobals.getCountryData(),
  input = document.querySelector("#phone"),
  addressDropdown = document.querySelector("#address-country");

// init plugin
var iti = window.intlTelInput(input, {
  utilsScript: "../../build/js/utils.js?1613236686837" // just for formatting/placeholders etc
});

// populate the country dropdown
for (var i = 0; i < countryData.length; i++) {
  var country = countryData[i];
  var optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  var textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
  addressDropdown.appendChild(optionNode);
}
// set it's initial value
addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', function(e) {
  addressDropdown.value = iti.getSelectedCountryData().iso2;
});

// listen to the address dropdown for changes
addressDropdown.addEventListener('change', function() {
  iti.setCountry(this.value);
});
</script>

</body>
</html>

