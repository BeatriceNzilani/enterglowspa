<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="{{ asset('images/icon.png') }}" type="image/png">

<title>EnterGlow SPA-Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha384-qYqz+LguExiUk4WChQ+AMG7PO1GnP97qBXwywJ0iD9v8D3G5c59vbU8hG1PpP1hd" crossorigin="anonymous">



<style>
     html {
            scroll-behavior: smooth; 
        }
        .carousel-indicators {
            list-style-type: none;
            display: flex;
            justify-content: center;
            position: absolute;
            z-index: 15;
            padding: 10px;
        }
        
       .nav-link{
        font-weight: bold;
       }
       
       .nav-link:hover {
    text-decoration: underline;
    text-decoration-color: brown !important;
    text-underline-offset: 10px; 
    text-decoration-thickness:3px ;
}
#navigation{
  background-color:rgb(244, 192, 125)!important;
}
       .txt{
        color: brown;
        font-weight: bolder;
       }
        .carousel-indicators li.active {
            background-color: black;
            transform: scale(1.3);
            padding: 1px;
        }
        
        .carousel-indicators li {
            cursor: pointer;
        }
        
     

.carousel-item img {

   
    height: 550px;
    width: 100% !important; 
    margin-top: 73px; 
  
  
    
   
}



        .carousel-caption {
            position: absolute;
            top: 200px;
            left: 30%;
            transform: translateX(-50%);
            margin-top: 0;
            z-index: 10;
            width: 700px;
            color: black;
            font-weight: bolder;
        }
        .service-card {
    background-color: white; 
    padding: 20px; 
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
    margin: 20px 0; 
    transition: transform 0.3s; 
}

.service-card:hover {
    transform: translateY(-10px); 
    background-color: #A0522D;
    color: white;
    
}
.service-card:hover i {
   
    color: white !important;
    
}
.btnof{
  background-color: #A0522D;
  color: white;
  border: none;
  padding: 5px;
  width: 40%;
  border-radius: 10px;
}
.btnofcanvas{
  background-color: #A0522D;
  color: wheat;
  padding: 5px;
  border: none;
  border-radius: 10px;
  font-size: 20px;
}
.offcanvas {
  background-color: #f8f5f4 !important; 
  text-align: center !important;
  font-size: 18px;
 
}

.offcanvas li{
 padding-bottom: 15px;
}

.nav-link{
  color: black;
}
.dropdown:hover .dropdown-menu {
            display: block !important; 
        }

        .tick-list{
          text-decoration:none !important;
          padding: 20px;
          list-style-type: none;
      
        }
        .tick-list li::before{
          content: '✔';
          color: #A0522D;
          display: inline-block;
          width: 20px;
          list-style-type: none;
          margin-right: 17px !important;

        }
        #notificationModal{
          position: absolute;
          z-index: 1000;
           margin-top: 90px;margin-left: 95%;height: 8%;color: white;border: 1px solid white; border-radius: 800px !important;background: white;padding: 0;
        }
     
        .nav-link.active {
      font-weight: bold;
      color:brown !important;
    }
        
    .dropdown-menu.active{
      font-weight: bold;
      color: brown !important;

    }
    .choose{
      font-family: 'Georgia', serif; font-size: 36px; color:black;text-align: center ;
      padding-top: 20px;
    }
    .chse h3{
      font-family: 'Georgia', serif; font-size: 36px; color:black;text-align: center ;margin-top: 30px;
    }

    .chse{
    
      background-color: #f5f5f5; margin-top: 20px;
      padding: 50px;
      
    }
    .chse  .container p{
      text-align: center;
      margin: auto;
      margin-left: 30px;
      margin-bottom: 30px;
    }

    .chooseimg{
  width: 80px; 
  align-items: center !important;
  display: flex;
  justify-content: center;
  height: 80px;
  margin-left: 150px;
   border-radius: 50%;
   margin-bottom: 10px;
    }
    .popover {
  background-color: #a83b09; 
  color: white !important; 
  border: 1px solid #ccc;
}

.popover .popover-header {
  background-color: #321305;
  color: white !important;
  font-weight: bold;
}

.popover .popover-body {
  color:white;
  font-size: 18px;
}
:root {
    --main-brown: #fff;
    --lighter-brown:rgb(244, 192, 125)
}

.pulsating-play-btn {
    width: 94px;
    height: 94px;
    background-color: var(--main-brown); 
    border-radius: 50%;  
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border: none;  
    position: relative;
    margin-left: 45%;
    margin-top:20px;
}

.pulsating-play-btn:hover {
    animation: pulsate 1s infinite;
}

@keyframes pulsate {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.2);
    }
    100% {
        transform: scale(1);
    }
}
.pulsating-play-btn:hover {
    animation: pulsate 1s infinite;
}
.pulsating-play-btn::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: var(--lighter-brown);  
    border-radius: 50%;
    z-index: 0;
    animation: scale-pulse 1.5s ease-in-out infinite;
}

@keyframes scale-pulse {
    0%, 100% {
        transform: scale(1);
        opacity: 0.8;
    }
    50% {
        transform: scale(1.3);
        opacity: 1;
    }
}

@keyframes icon-scale {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

.pulsating-play-btn a {
    color: #fff;  
    font-size: 32px;  
    text-decoration: none;  
    z-index: 1;  
    position: relative;
    animation: icon-scale 1.5s ease-in-out infinite;
}
.carobtn{
  background-color: #A0522D;
        color: white;
        border: none;
        padding: 10px;
        width: 140px;
        margin-top: 30px;
      font-weight: bold;
      font-size: 20px;
        border-radius: 10px;
        margin-left: 20px;
}
.hoversvs{
  display: none;
 margin-left: 110px;
 background-color:rgb(244, 192, 125);
 padding: 10px;
 border-radius:10px ;
}
.service-card:hover .hoversvs{
  display: block;

}

.alert {
    position:absolute;
    margin-top:200px;
    z-index: 1000;
    width: 50%;
    padding:40px;
    font-size:20px;
    margin-left:30%
    
    
}
        @media screen and (max-width: 450px) {
          #notificationModal{

            margin-left: 80%
          }
            .carousel-caption {
                top: 100px;
                left: 50%;
                width: 400px;
                color: black;
                font-weight: bolder;
            }
            .carousel-item img {
                width: 100%;
                object-fit: cover;
                height: 300px;
            }
            .carousel-item {
                height: 400px;
            }
          
a.btn#btn {
    margin-left: 35% !important; 
}
#conta{
  width: 100% !important;
}
#soci{
  margin-right: 58%;
}

        }
        
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navigation" data-bs-offset="50" tab="0">

<header>
  <nav class="navbar navbar-expand-sm bg-white fixed-top justify-content-between d-flex bg-white " id="navigation">
    <div class="container">
        <a href="#" class="navbar-brand fs-2"style="font-family: 'Georgia', serif;">ENTER<span class="txt">GLOW</span></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#links" type="button" aria-controls="links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="links">
            <ul class="navbar-nav ms-auto  me-3">
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#about">About us</a>
                </li>

                <li class="nav-item dropdown ">
                  <a href="#services" class="nav-link dropdown-toggle ps-3 pe-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#services">Our Services</a></li>
                  </ul>
              </li>
              
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

     
</nav>

<img src="images/notification.png" alt="NO" id="notificationModal"class="btn " type="button" data-bs-toggle="modal" data-bs-target="#notification"  >
     <div class="modal fade" id="notification">
      <div class="modal-dialog">
        <div class="modal-content">
<div class="modal-header">
  <h3>EnterGlow</h3>
  
  <button class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
  <ul class="tick-list" style="text-decoration: none !important;">
    <li> New "Weekend Wellness" package – enjoy exclusive discounts!</li>
    <li> Closed on public holidays. We apologize for any inconvenience.</li>
    <li> Join our loyalty program and earn rewards for free services!</li>
    <li> Follow us on social media for updates and promotions.</li>
    <li> We prioritize your safety with strict hygiene protocols.</li>
  </ul>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>
        </div>
      </div>
     </div>

</header>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


@if ($errors->any())
    <div class=" alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<section class="caro">
  <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" id="caro">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/ma2.jpg" alt="EnterGlow" class="w-100">
        <div class="carousel-caption">
          <h1 class="text-white fw-bold">Enjoy Our Services!</h1>
          <button class="pulsating-play-btn">
            <a href="https://photos.google.com/share/AF1QipMq3m9yRutJavwAZqShJfh6zKL-20tDTA2efyVI60WHAKU-Ix5lSoqHLW0BCiakdw/photo/AF1QipO9meLewG75tpUvcX1bdyOUkMhhbykd1hDBxWdV?key=OThfS3FDQ1pTSF9TXzlwOWQ3RWNrenoxR0J6cGlR" target="_blank">

                <i class="bi bi-play"></i>
            </a>
        </button>
        <button class="carobtn"><a href="#book" style="text-decoration: none;color: white;">Book Today</a></button>
        
        
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/image11.jpg')}}" alt="EnterGlow" class="w-100">
        <div class="carousel-caption">
          <h1 class="text-white fw-bold">Enjoy Our Services!</h1>
          <button class="pulsating-play-btn">
            <a href="https://photos.google.com/share/AF1QipMq3m9yRutJavwAZqShJfh6zKL-20tDTA2efyVI60WHAKU-Ix5lSoqHLW0BCiakdw/photo/AF1QipO9meLewG75tpUvcX1bdyOUkMhhbykd1hDBxWdV?key=OThfS3FDQ1pTSF9TXzlwOWQ3RWNrenoxR0J6cGlR" target="_blank">
              
                <i class="bi bi-play"></i>
            </a>
        </button>
        <button class="carobtn"><a href="#book" style="text-decoration: none;color: white;">Book Today</a></button>

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/imag3.jpg" alt="EnterGlow" class="w-100">
        <div class="carousel-caption">
          <h1 class="text-white fw-bold">Enjoy Our Services!</h1>
          <button class="pulsating-play-btn">
            <a href="https://photos.google.com/share/AF1QipMq3m9yRutJavwAZqShJfh6zKL-20tDTA2efyVI60WHAKU-Ix5lSoqHLW0BCiakdw/photo/AF1QipO9meLewG75tpUvcX1bdyOUkMhhbykd1hDBxWdV?key=OThfS3FDQ1pTSF9TXzlwOWQ3RWNrenoxR0J6cGlR" target="_blank">
              <i class="bi bi-play"></i>
            </a>
        </button>
        <button class="carobtn"><a href="#book" style="text-decoration: none;color: white;">Book Today</a></button>

        
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/image6.jpg" alt="EnterGlow" class="w-100">
        <div class="carousel-caption">
          <h1 class="text-white fw-bold">Enjoy Our Services!</h1>
          <button class="pulsating-play-btn">
            <a href="https://photos.google.com/share/AF1QipMq3m9yRutJavwAZqShJfh6zKL-20tDTA2efyVI60WHAKU-Ix5lSoqHLW0BCiakdw/photo/AF1QipO9meLewG75tpUvcX1bdyOUkMhhbykd1hDBxWdV?key=OThfS3FDQ1pTSF9TXzlwOWQ3RWNrenoxR0J6cGlR" target="_blank">
              <i class="bi bi-play"></i>
            </a>
        </button>
        <button class="carobtn"><a href="#book" style="text-decoration: none;color: white;">Book Today</a></button>

        
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/serenity-spa.jpg" alt="EnterGlow" class="w-100">
        <div class="carousel-caption">
          <h1 class="text-white fw-bold">Enjoy Our Services!</h1>
          <button class="pulsating-play-btn">
            <a href="https://photos.google.com/share/AF1QipMq3m9yRutJavwAZqShJfh6zKL-20tDTA2efyVI60WHAKU-Ix5lSoqHLW0BCiakdw/photo/AF1QipO9meLewG75tpUvcX1bdyOUkMhhbykd1hDBxWdV?key=OThfS3FDQ1pTSF9TXzlwOWQ3RWNrenoxR0J6cGlR" target="_blank">
              <i class="bi bi-play"></i>
            </a>
        </button>
        <button class="carobtn"><a href="#book" style="text-decoration: none;color: white;">Book Today</a></button>

        
        </div>
      </div>
      
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#caro" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#caro" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
  
  <ol class="carousel-indicators" role="button">
    <li data-bs-target="#caro" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#caro" data-bs-slide-to="1"></li>
    <li data-bs-target="#caro" data-bs-slide-to="2"></li>
    <li data-bs-target="#caro" data-bs-slide-to="3"></li>
    <li data-bs-target="#caro" data-bs-slide-to="4"></li>

</ol>
  </div>
</section>

<section id="about" class="about" data-aos="fade-up" data-aos-delay="100">
  <h1 class="text-center mt-4" data-aos="fade-up" data-aos-delay="200" style="font-family: 'Georgia', serif;">About Us</h1>
  <div class="d-flex flex-column flex-md-row container align-items-center">
    <div class="order-2 order-md-1 col-md-6">
      <p class="me-3 text-center p-4  pt-3  ">Welcome to <span class="fw-bold fst-italic">EnterGlow</span>, your sanctuary of relaxation and rejuvenation. At Enter Glow, we believe in the healing power of touch and natural elements to help you unwind and restore your inner radiance. Our skilled therapists are dedicated to providing you with a unique and soothing spa experience that refreshes both body and mind. Whether you're here for a quick escape or a full day of pampering, let us guide you on a journey to feel balanced, revitalized, and glowing from within.</p>

    </div>
    <div class="col-md-6 order-1 order-md-2" data-aos="fade-in" data-aos-delay="300">
      <img src="images/image5.jpg" alt="EnterGlow Spa" class="img-fluid w-100" style="width: 50%;">
    </div>
 </div>
    <a href="#book" class="btn order-3 text-white" style=" background-color:rgb(159, 81, 26) !important ;margin-left: 22%;margin-top:-70px" id="btn">BOOK TODAY</a>
 
</section>

  
<section id="services" class="py-5">
  <h1 class="text-center mb-4" data-aos="fade-up"style="font-family: 'Georgia', serif;">Our Services</h1>
  <p class="text-center mb-5"data-aos="fade-up" data-aos-delay="50" >At EnterGlow, we offer a wide range of rejuvenating services designed to relax and revitalize you.</p>
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-person-lines-fill" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Massage</h2>
          <p>Experience deep relaxation and relief through various massage therapies tailored to soothe your body and mind.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-hand-thumbs-up" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Manicure</h2>
          <p>Indulge in a pampering manicure service that will leave your hands looking polished, beautiful, and rejuvenated.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6"data-aos="fade-up" data-aos-delay="200">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-brush" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Pedicure</h2>
          <p>Soothe your feet with our luxurious pedicure service designed to refresh, beautify, and pamper effectively.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-scissors" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Salon & Barber</h2>
          <p>Enjoy professional salon services, including haircuts, coloring, and styling to transform your entire look beautifully.</p>
          <button class="hoversvs " ><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-emoji-smile" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Facials</h2>
          <p>Rejuvenate your skin with our customized facials designed to cleanse, nourish, and enhance your complexion thoroughly.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-person-bounding-box" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Body Treatments</h2>
          <p>Relax and rejuvenate with our body treatments that hydrate, pamper, and nourish your skin beautifully and effectively.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-water" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Steam Bath</h2>
          <p>Unwind in our steam bath, which detoxifies, relaxes your muscles, and provides a refreshing experience overall.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-heart-fill" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Couples Spa</h2>
          <p>Share a tranquil experience with a loved one during our couples spa sessions designed specifically for relaxation.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-card text-center">
          <div class="icon">
            <i class="bi bi-gem" style="font-size: 40px; color: #A0522D;"></i>
          </div>
          <h2>Luxury Packages</h2>
          <p>Enjoy our all-inclusive luxury spa packages that combine multiple treatments for a complete and memorable experience.</p>
          <button class="hoversvs "><a href="#book" style="text-decoration: none;color: black;font-weight: 400;">Book Today</a></button>

        </div>
      </div>
     
    </div>
  </div>
</section>
<section>
  <div class="offcanvas offcanvas-start" id="moreservices">
    <div class="offcanvas-header">
      <h2 style="font-weight: bold;">  More Services</h2>
      <button type="button" class="btn-close  text-reset" data-bs-dismiss="offcanvas">

      </button>
    </div>
    <div class="offcanvas-body">
      <h3 style="font-weight: bold;">Additional Services</h3>
      <ul>
        <li>Meditation and Mindfulness Sessions</li>
          <li>Hot Stone Massage</li>
        <li>Makeup Application</li>
        <li>Waxing Services</li>
        <li>Hair Treatments</li>
        <li>Detox Body Wrap</li>
        <li>Scalp Massage</li>
        <li>Cryotherapy</li>
        <li>Aromatherapy</li>
         <li>Nail Art</li>
      </ul>
      <button class="btnof"><a href="#book" style="text-decoration:none;color:wite;">Book Today</a></button>
    </div>

  </div>
  <button class="btnofcanvas ms-auto" data-bs-target="#moreservices" data-bs-toggle="offcanvas" type="button" style="margin: auto; display: flex;align-items: center;"> View More Services</button>
</section>
<section class="tee">
 <section class="chse">
  <h1 class="choose"data-aos="fade-up">Why Choose Us</h1>

  <p style="margin-top: 20px; width: 600px;"data-aos="fade-up" data-aos-delay="100" class="container"id="conta">
    Experience the difference with our dedicated services, premium products, and commitment to your well-being. Discover why we’re a favorite among clients.
</p>
<div class="container">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <img src="images/image7.jpg" alt="no" class="chooseimg">
      <h3 style="font-size: 22px; color: #A0522D;">Experienced Professionals</h3>
            <p style="font-size: 16px; color: black;">Our licensed experts deliver top-quality, personalized care to meet your needs.</p>

    </div>
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <img src="images/oil1.jpeg" alt="no" class="chooseimg">
      <h3 style="font-size: 22px; color:#A0522D;">High-Quality Products</h3>
      <p style="font-size: 16px; color: black">Using premium, eco-friendly products to ensure safe and effective treatments.</p>
    </div>
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <img src="images/m3.jpg" alt="no" class="chooseimg">
      <h3 style="font-size: 22px; color: #A0522D;">Relaxing Ambiance</h3>
      <p style="font-size: 16px; color: black;">Enjoy a calm, soothing environment crafted for ultimate relaxation.</p>

    </div>
  </div>
</div>
</section>

<button type="button" class="btn" data-bs-toggle="popover" title="Welcome to EnterGLOW ✨" data-bs-content="Experience beauty and relaxation at its finest! 'Glow from within, shine outside.'" 
style="margin-top: 50px !important;margin-bottom: 30px !important; display: flex;margin:auto;background-color: #A0522D;color: white;">
  Click Me 🌟😊
</button>

<section style="position: relative; padding: 50px; background-image: url('images/image11.jpg'); background-size: cover; background-position: center; text-align: center;" data-aos="fade-up">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
  <h1 style="font-family: 'Georgia', serif; font-size: 35px; position: relative; z-index: 2; color: white;">Book Today for Great Offers!</h1>
  <p style="font-size: 16px; color: white; position: relative; z-index: 2;">Don't miss out on amazing deals and exclusive discounts when you book today! Our services are designed to make you feel relaxed and rejuvenated.</p>

  <form action="{{route('bookings.store')}}" method="POST" id="book"style="max-width: 600px; margin: 0 auto; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; position: relative; z-index: 3;">
  @csrf
 
  <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
      </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    
    <div class="mb-3">
      <label for="phone_no" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phone_no" name="phone_no" value="{{ old('phone_no') }}" required>
    </div>

  

    <div class="mb-3">
      <label for="date" class="form-label">Preferred Appointment Date</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}"required>
    </div>

    <div class="mb-3">
      <label for="time" class="form-label">Preferred Appointment Time</label>
      <input type="time" class="form-control" id="time" name="time"  value="{{ old('time') }}" required>
    </div>

    <div class="mb-3">
      <label for="specialRequests" class="form-label">Special Requests (Optional)</label>
      <textarea class="form-control" id="specialRequests" name="specialRequests" rows="3">{{ old('specialRequests') }}</textarea>
    </div>

    <button type="submit" class="btn " style="background: #A0522D; color: white;">Book Now</button>
  </form>
</section>


<section class="contact-info" data-aos="fade-up">
  <div class="d-flex justify-content-center d-flex flex-column flex-md-row container mt-3">

    <div class="col-md-3 me-4">
      <i class="bi bi-telephone me-2" style="font-size: 40px; color: #A0522D;"> </i><span style="font-size: 22px;padding-bottom: 80px !important;font-weight: bolder;">Contact Us</span> 
      <p><a href="mailto:EnterGLOW@gmail.com" style="text-decoration: none; color: black;">Email: EnterGLOW@gmail.com</a></p>
      <p><a href="tel:+254799234578" style="text-decoration: none; color: black;">Phone: +254799234578</a></p>
    </div>

    <div class="col-md-3 me-4">
      <i class="bi bi-clock me-2" style="font-size: 40px; color: #A0522D;"></i><span style="font-size: 22px;padding-bottom: 80px !important;font-weight: bolder">Opening Hours</span> 
      <ul class="list-unstyled">
        <li>Monday - Friday: 9:00 AM - 7:00 PM</li>
        <li>Saturday: 10:00 AM - 6:00 PM</li>
        <li>Sunday: Closed</li>
      </ul>
    </div>

    <div class="col-md-3">
      <i class="bi bi-geo-alt me-2" style="font-size: 40px; color: #A0522D;"></i> <span style="font-size: 22px;padding-bottom: 80px !important;font-weight: bolder">Address</span> 
      <p>BBS Mall 3<sup>rd</sup> Floor Eastleigh, Nairobi, Kenya</p>
    </div>

    <div class="col-md-2">
      <h5 class="text-uppercase mb-3"style="font-weight: bolder ;margin-top:8px;margin-bottom:20px;margin-right:20px;"><img src="images/soci1.png" alt="" style="height: 50px;"><span style="margin-top: -35px !important; display: flex; justify-content: end;margin-bottom: 30px;" id="soci">Follow Us</span></h5>
      <div style="margin-top:-20px;margin-bottom:0;margin-left:20px;">
        <a href="https://www.facebook.com/EnterGLOW" target="_blank" style="margin-right: 15px; font-size: 30px; color: #3b5998;">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.instagram.com/EnterGLOW" target="_blank" style="margin-right: 15px; font-size: 30px; color: #E4405F;">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="https://twitter.com/EnterGLOW" target="_blank" style="margin-right: 15px; font-size: 30px; color: #1DA1F2;">
          <i class="bi bi-twitter"></i>
        </a>
      </div>
    </div>

  </div>
</section>

<footer class="d-flex flex-md-row flex-column container py-4 " style="align-items: center !important;">
 

  
</footer>

<hr class="my-4">

<p class="text-center" style="font-size: 14px; color: #fff; background: #A0522D; border-top: 2px solid #8B4513; padding: 10px 0;margin-top: -22px;">
  &copy; 2024 EnterGLOW. All rights reserved.
</p>




<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>

<script src="script.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
<script>
    
    AOS.init();
</script>
