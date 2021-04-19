<!DOCTYPE html>

<head>
  <title>Covid Tracker</title>
  <?php include 'links.php';  ?>
  <?php include 'style.php';  ?>
</head>

<body onload="fetch()">
  <nav class="navbar navbar-expand-lg nav_style pl-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Covid-19</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0 pr-5 text-capitalize">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SYMPTOMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PREVENTION</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="main">
    <div class="row w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center corona_anim">
          <img src="covid1.jpg" width="200" height="200">
        </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 pt-5">
        <div class="right-side w-100 h-100 justify-content-center align-items-center">
          <h1>Let Fight Against Corona </h1>
          <h1>Stay Safe Stay Home</h1>
        </div>

      </div>
    </div>

  </div>
  <section class="coronaupdate container-fluid">
    <div class="mb=3">
      <h3 class="text-center">COVID UPDATES OF INDIA</h3>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-strpped text-center" id=tbval>
        <tr>
          <th>Country</th>
          <th>Country Code</th>
          <th>New Confirmed</th>
          <th>Total Confirmed</th>
          <th>New Deaths</th>
          <th>Total Deaths</th>

        </tr>
        <?php
        $data = file_get_contents("https://api.covid19india.org/data.json");
        $covid = json_decode($data, true);

        $statecount = count($covid['statewise']);

        $i = 1;
        while ($i < $statecount) {
        ?>

          <tr>
            <td><?php echo $covid['statewise'][$i]['lastupdatedtime']; ?></td>
            <td><?php echo $covid['statewise'][$i]['state']; ?></td>
            <td><?php echo $covid['statewise'][$i]['confirmed']; ?></td>
            <td><?php echo $covid['statewise'][$i]['active']; ?></td>
            <td><?php echo $covid['statewise'][$i]['recovered']; ?></td>
            <td><?php echo $covid['statewise'][$i]['deaths']; ?></td>


          </tr>
          <!-- echo $covid['statewise'][$i]['lastupdatedtime'];
          echo $covid['statewise'][$i]['state'];
          echo $covid['statewise'][$i]['confirmed'];
          echo $covid['statewise'][$i]['active'];
          echo $covid['statewise'][$i]['recovered'];
          echo $covid['statewise'][$i]['deaths']; =-->

        <?php
          $i++;
        }

        ?>
      </table>
    </div>
  </section>

  <!-- ********about section ***************************************************** -->
  <div class="container-fluid sub-section pt-5 pb-5" id="about-id">
    <div class="section-header text-center mb-5 mt-4">
      <h1>About Covid-19</h1>
    </div>
    <div class="row ">
      <div class="col-lg-5 col-lg-6 col-12">
        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="covid3.jpg" width="600" height="200" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-lg-6 col-12 ">
        <div class="w-100 h-100 justify-content-center align-items-center">
          <h2>What is COVID-19</h2>
          <p>COVID-19 is a new strain of coronavirus that has not been previously identified in humans. The COVID-19 is the cause of an outbreak of respiratory illness first detected in Wuhan, Hubei province, China. Since December 2019</p>
          <p>The virus that causes COVID-19 spreads mainly when an infected person is in close contact with another person.Small droplets and aerosols containing the virus can spread from an infected person's nose and mouth as they breathe, cough, sneeze, sing, or speak. Other people are infected if the virus gets into their mouth, nose or eyes. The virus may also spread via contaminated surfaces, although this is not thought to be the main route of transmission.[</p>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5">
    <div class="symptoms container-fluid pl-5">
      <div class="row w-100 h-100 pt-5">
        <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-2">
          <div class="leftside w-100 h-100 justify-content-center align-items-center ">
            <h1>Covid Symptoms</h1>
            <ul>
              <li>fever or chills</li>
              <li>Cough</li>
              <li>Shortness of breath or difficulty breathing </li>
              <li>Fatigue
              <li>Muscle or body aches</li>
              <li>Headache</li>
              <li>New loss of taste or smell</li>
              <li>Sore throat</li>
              <li>Congestion or runny nose</li>
              <li>Nausea or vomiting</li>
              <li>Diarrhea</li>
            </ul>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-2">
          <div class="rightside w-100 h-100 justify-content-center align-items-center">
            <h1>Covid Preventions</h1>
            <ul>
              <li>Stop shaking hands and hugging people</li>
              <li>Avoid touching your face</li>
              <li>Wash your hands frequently and carefully</li>
              <li>Avoid eating or drinking in public places</li>
              <li>Self-quarantine if sick</li>
              <li>Wash all the groceries and vegies</li>
              <li>Wear a mask</li>
              <li>Cover your mouth and nose when you cough and sneeze</li>
              <li>Don’t share personal items</li>
              <li>Clean and disinfect surfaces</li>
              <li>Maintain physical Distancing</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>



  <footer class="bg-light text-center text-lg-start">

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">Covidcasetracker.com</a>
    </div>

  </footer>
</body>

</html>