<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="inp.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title></title>
</head>
<body>
  <!--imge slider start-->
  
  <section>
  <div class="section">
    <div class="slider">
      <div class="sliders">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" value="" id="radio1">
        <input type="radio" name="radio-btn" value="" id="radio2">
        <input type="radio" name="radio-btn" value="" id="radio3">
        <input type="radio" name="radio-btn" value="" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="im/1.jpg" alt="">

        </div>
        <div class="slide">
          <img src="im/2.jpg" alt="">

        </div>
        <div class="slide">
          <img src="im/3.jpg" alt="">

        </div>
        <div class="slide">
          <img src="im/4.jpg" alt="">

        </div>
            <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto ">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
         </div>
        <!--automatic navigation end-->
      </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                  <label for="radio1" class="manual-btn"></label>
                  <label for="radio2" class="manual-btn"></label>
                  <label for="radio3" class="manual-btn"></label>
                  <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
    </div>
    
 <script>
var counter =1;
setInterval(function()  {
  

  document.getElementById('radio'+ counter).checked=true;
  counter++;
  if(counter > 4){
    counter =1;
  }
},5000);

</script>
  </div>
 
</section>
<section>
<div class="menu">

  <div class="menutoggle"></div>

    <ul>
      <li class="list active">
        <a href="#" style ="--clr: #f44336;">
        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
        <span class="text">Home</span>
      </a>
      </li>
      <li class="list">
        <a href="#" style ="--clr: #ffa117;">
        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
        <span class="text">About</span>
      </a>
      </li>
      <li class="list">
        <a href="#" style ="--clr: #2196f3;">
        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
        <span class="text">messgges</span>
      </a>
      </li>
      <li class="list">
        <a href="#" style ="--clr: #b145e9;">
        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
        <span class="text">settings</span>
      </a>
      </li>

    </ul>

  
</div>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  let menutoggle =document.querySelector('.menutoggle');
  let menu =document.querySelector('.menu');
  menutoggle.onclick = function(){
    menu.classList.toggle('active')
  }
  let list =document.querySelectorAll('.list');
  function activelink() {
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
    
  }
  list.forEach((item) =>
  item.addEventListener('click',activelink));
</script>
</section>
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">We offer you this simple website that helps you easily help ...</p>
  <hr class="my-4">
  <p>We hope we are as good as you think we are...</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
    <section class="bkcolor">

     <form action="">
       <div class="content">
       <label class="from" for="from">From</label>
       <div ><input type="text" class="go form-control" name="from"></div>
       
       
       
       <label class="to" for="to">To</label>
      <div><input type="text"class="destination form-control"name="to"></div>
      
   
       
       <label class="sdate">Start date:</label>
        <input type="date" class="ssdate form-control" value="01-10-2023"
       min="2023-1-10" max="2030-12-31" name="date">
       
       
       
       
     <label for="em"class="em">email</label>
      
      

       <label for="em"class="us">promo code</label> 

      <input type="text"class="usa form-control" placeholder="Enter promo code" name="pcode">
           <label class="numk form-label" for="typeNumber">number of children</label>
       
       <input type="number"class=" form-control nkkk" name="numbch"min="0" max="9" id="">
           <input type="email" name="email" id="" class="form-control ema">
      <input type="submit"class=" btn btn-outline-warning sub" name="submit" value="Book quickly"></div>
    </div>
      
    
     
       </form>
 


    </section>
    
      <div class="announcements">
        <div class="drop" style="--clr:#ff0f5b;">
      <div class="dropsin">
        <h2>01</h2>
        <p>We offer you this offer: 15% discount on flights from Turkey to Japan.</p>
        <a href="#">know more</a>

      </div>
      </div>
        <div class="drop" style="--clr:#be01fe;">
      <div class="dropsin">
        <h2>02</h2>
        <p>We offer you this offer:20% discount on cut-off tickets from the Riyadh Center in Saudi Arabia.</p>
        <a href="#">know more</a>
      </div>
      </div>
        <div class="drop" style="--clr:#01b4ff;">
      <div class="dropsin">
        <h2>03</h2>
        <p>We offer you this offer: 11% discount on flights from Switzerland to New York.</p>
        <a href="#">know more</a>
      </div>
      </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="hotels">
      <div class="hotel">      <div class="jumbotron1">
  <h1 class="display-4">Hotel booking!</h1>
  <p class="lead">If your destination is a tourist, we will guide you on how to choose a suitable hotel for your destination!</p>
  <hr class="my-4">
  <p>Learn about international and local hotel prices with us.</p>
  <p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">learn more</a>
  </p>
  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <!--<div class="card card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>-->
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">N.hotel</th>
      <th scope="col">cost per day</th>
      <th scope="col">Evaluation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th>HOTOSA hotels</th>
      <td>1000$</td>
      <td>✯✯✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Associated International Luxury Hotels</td>
      <td>990$</td>
      <td>✯✯✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Preferred hotels and resorts</td>
      <td>950$</td>
      <td>✯✯✯✯✯</td>
    </tr>
    <th scope="row">4</th>
      <th>Global Hotel Alliance</th>
      <td>920$</td>
      <td>✯✯✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>The United Arab Emirates</td>
      <td>1090$</td>
      <td>✯✯✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Dubai</td>
      <td>1050$</td>
      <td>✯✯✯✯✯✯✯</td>
    </tr>
    <th scope="row">7</th>
      <th>Hotels and Resorts</th>
      <td>800$</td>
      <td>✯✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>The leading hotels of the world</td>
      <td>1200$</td>
      <td>✯✯✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Historic hotels in america</td>
      <td>750$</td>
      <td>✯✯✯✯✯</td>
    </tr>
    <th scope="row">10</th>
      <th>Logis hotels</th>
      <td>840$</td>
      <td>✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Republic Hotel</td>
      <td>990$</td>
      <td>✯✯✯✯</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Wyndham Hotel Management Group</td>
      <td>950$</td>
      <td>✯✯✯✯✯✯</td>
    </tr>
  </tbody>
</table>
<div class="booking"><input type="text"class="destination form-control" name="hotell"></div>
<hr class="my-4">
<!--<div class="hobooking"><input type="submit"class="btn btn-outline-dark" value="Book quickly"></div>-->

       </div>
      </div>
    </div>
 
  </div>
</div>
      

    </div></div>

 
 </body>
</html>
<?php

   if(isset($_GET['submit'])){
    $from = $_GET['from'];
    $email = $_GET['email'];
    $To = $_GET['to'];
    $date = $_GET['date'];
    $numberch = $_GET['numbch'];
    $pcode = $_GET['pcode'];
    $hotel = $_GET['hotell'];
    $con = mysqli_connect('localhost','root','','fli');
    include('confi.php');
    // 2-check connection
    if(!$con){
      die('connection failed');
    }
    // 3-prepare query
    $sql = "INSERT INTO register VALUES ('$pcode', '$email' , '$from','$To','$numberch','$date','$hotel')";
  
    //4-execute query
    $result = mysqli_query($con,$sql);
    

    $to      =  $email;
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From:hazoo4219@gmail.com' . "\r\n" .
        'Reply-To:hazoo4219@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
  }
?>