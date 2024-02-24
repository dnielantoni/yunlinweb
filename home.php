<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Calculation Platform For Stratum Subsidence Monitoring</title>

    <!-- Link Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
    <!-- Third Party Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="/css/styles.css">
    <style>
      body { margin: 0; padding: 0; }
      #map { position: absolute; top: 0; bottom: 50px; width: 100%; }
      #buttonsContainer { position: absolute; bottom: 85%; right: 1%; }
      .buttonContainer {
      display: inline-block; 
      background-color: #000000; 
      padding: 10px; 
      margin-right: 10px; 
      border-radius: 5px; 
    }
    
      .toggleButton { 
      margin-right: 5px;
      background-color: #e9e9e9; 
      border: 1px solid #ccc; 
      padding: 10px 20px; 
      border-radius: 5px; 
    
    }
    .buttongroup {
      display: flex; 
      justify-content: center; 
      background-color: rgba(242,242,242,0.7);
      padding: 10px; 
      border-radius: 5px; 
    }

    #button1 {
      border-radius: 5px;
      padding: 5px 15px; 
    }
    #button2 {
      border-radius: 5px;
      padding: 5px 14px; 
    }
    #button3 {
      border-radius: 5px;
      padding: 5px 16px; 
    }
    #button4 {
      border-radius: 5px;
      padding: 5px 15px; 
    }
    #button5 {
      border-radius: 5px;
      padding: 5px 14px; 
    }
    #button6 {
      border-radius: 5px;
      padding: 5px 16px; 
    }
    #button7 {
      border-radius: 12px;
      padding: 5px; 
    }
    #button8 {
      border-radius: 5px;
      padding: 5px; 
    }
    #buttonyl1 {
      border-radius: 5px;
      padding: 5px 15px; 
     }
    #buttonyl2 {
      border-radius: 5px;
      padding: 5px 14px; 
     }
    #buttonyl3 {
      border-radius: 5px;
      padding: 5px 16px; 
     }
    #buttoncy1 {
      border-radius: 5px;
      padding: 5px 15px; 
     }
    #buttoncy2 {
      border-radius: 5px;
      padding: 5px 14px; 
     }
    #buttoncy3 {
      border-radius: 5px;
      padding: 5px 16px; 
     }

    /*style shp圖台*/
    .buttonshp{
    padding: 15px 80px;
    text-align: center;
    display: block;
    font-size: 12px;
    cursor: pointer;
    }

    #buttonshp1 {
      border-radius: 10px;
      padding: 5px 57px; 
     }
    #buttonshp1:hover {
      background-color: #2FC25E;
      color: white;
      transition-duration: 0.7s;
     }
    #buttonshp2 {
      border-radius: 10px;
      padding: 5px 25px; 
     }
    #buttonshp2:hover {
      background-color: #2FC25E;
      color: white;
       transition-duration: 0.7s;
     }
    #buttonshp3 {
      border-radius: 10px;
      padding: 5px 25px; 
     }
    #buttonshp3:hover {
      background-color: #2FC25E;
      color: white;
       transition-duration: 0.7s;
     }

    #buttonupload {
      align-self: center;
      border-radius: 5px;
    }
    #captureButton{
      border-radius: 5px;
      padding: 5px; 
    }
    #captureButton2{
      border-radius: 5px;
      padding: 5px; 
    }
    #uploadButton{
      border-radius: 5px;
      padding: 5px; 
    }
    #satellite-streets-v12 {
      border-radius: 5px;
      padding: 5px; 
    }
    #light-v11 {
      border-radius: 5px;
      padding: 5px; 
    }
    #dark-v11 {
      border-radius: 5px;
      padding: 5px; 
    }
    #streets-v12 {
      border-radius: 5px;
      padding: 5px; 
    }
    #outdoors-v12 {
      border-radius: 5px;
      padding: 5px; 
    }


 .nav-list-container {
      max-height: calc(100vh - 200px); 
      overflow-y: auto;
 }
 .fixed-header {
  position: fixed;
    top: 0; /* Fix the header at the top of the viewport */
    width: 100%; /* Make the header span the full width of the viewport */
    background-color: #012639; /* Set the background color */
    z-index: 1000; /* Adjust the z-index if needed to control stacking order */
    /* Add any other styles you want for your fixed header */
 }
 .sidebar {
  margin-top: 70px;
 }
 .comparetext {
  font-weight: bold;
  font-size: 24px !important;
 }
 
 .file-label {
    display: inline-block;
    padding: 10px;
    background-color: #fff;
    color: #000;
    border-radius: 5px;
    cursor: pointer;
    margin-left: -18px;
  }

  /* Style the label when hovering over it */
  .file-label:hover {
    background-color: #fff;
  }
  .upload-label {

    padding: 0px;
    background-color: #fff;
    color: #000;
    border-radius: 5px;
    cursor: pointer;
    width: 80px;
    height: 25px;
    text-align: end;
    margin-left: -18px;
  }
  .upload-label:hover {
    background-color: #fff;
  }
  .distance-container {
        position: absolute;
        bottom: 110px;
        right: 10px;
        z-index: 1;
        visibility: visible;
    }

    .distance-container > * {
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 11px;
        line-height: 18px;
        display: block;
        margin: 0;
        padding: 5px 10px;
        border-radius: 3px;
        visibility: visible;
    }

    #start-measurement {
      display: flex; 
      justify-content: center; 
      background-color: rgba(242,242,242,0.7);
      padding: 10px; 
      border-radius: 5px; 
      border-radius: 5px;
      padding: 5px; 
    }

    #downloadGeoJSONButton {
      display: flex; 
      justify-content: center; 
      background-color: rgba(242,242,242,0.7);
      padding: 10px; 
      border-radius: 5px; 
      border-radius: 5px;
      padding: 5px; 
    }

    #downloadLine {
      position: absolute;
        top: 1200%;
        right: 10px;
        z-index: 1;
    }

    #menu-icon {
      cursor: move;
      position: absolute;
      background-color: #012639;
      color: #fff;
      padding: 10px;
      border-radius: 50%;
    }

    #menu-container {
      display: none;
      position: absolute;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
    }

    .menu-button {
      display: block;
      margin-bottom: 5px;
      cursor: pointer;
    }
    .zoom{
     position:  fixed;
     top: 16%;
     right: 2%;
  }
  #compass {
    position: fixed;
    top: 27.4%;
    right: 2%;
  }

  #compass-button {
    background-color: rgb(255, 255, 255);
    padding: 12px 12px;
    border: none; /* Remove the border */
    border-radius: 50%;
    position: fixed;
    top: 17%;
    right: 30%;
    display: flex; /* Make it a flex container */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

#compass-button i {
    color: black; /* Set the compass icon color (you can change it as needed) */
    font-size: 20px; /* Adjust the font size as needed */
}

#downloadjsongroup {
  position: fixed;
    top: 75%;
    right: 1%;
}

#latitude {
    background-color: rgba(242,242,242,0.7);
    text-emphasis-color: #00000000;
    padding: 5px 10px;
    border-radius: 5px;
    position: fixed;
    top: 17%;
    right: 11%;
  }
#longitude {
    background-color: rgba(242,242,242,0.7);
    text-emphasis-color: #00000000;
    padding: 5px 10px;
    border-radius: 5px;
    position: fixed;
    top: 17%;
    right: 20%;
  }
#zoom {
    background-color: rgba(242,242,242,0.7);
    text-emphasis-color: #00000000;
    padding: 5px 10px;
    border-radius: 5px;
    position: fixed;
    top: 17%;
    right: 30%;
  }
#angle {
    background-color: rgba(242,242,242,0.7);
    text-emphasis-color: #00000000;
    padding: 5px 10px;
    border-radius: 5px;
    position: fixed;
    top: 17%;
    right: 35.5%;
  }

  /* Gradient Image Styles */
  #gradient-image {
    position: fixed;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .gradient-box {
    width: 30px;
    height: 200px;
    background: linear-gradient(to bottom, #0000FF 0%, #00FF00 50%, #FF0000 100%);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 5px;
  
  }

  .color-text {
    text-align: left; /* Align text to the left */
    margin-left: 5px; /* Adjust margin as needed */
    font-size: 14px; /* Adjust the font size as needed */
    color: white
  }

  .toggleButton1 {
    background-color: rgb(255, 255, 255);
    width: 45px; /* Set the width and height to the same value for a round button */
    height: 45px; /* Set the width and height to the same value for a round button */
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 5px; /* Add space above the button */
}
    </style>

    <!-- Map Screenshot -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

</head>
<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="30RkKS1G"></script>
  
      <!-- Scripts -->
      <script src="/js/script.js"></script>

      <!-- Header -->
      <header class="p-3 fixed-header">
        <div class="container">
            <h3 class="text-light">Data Calculation Platform For Stratum Subsidence Monitoring</h3>
        </div>
    </header>

  
    <!-- Sidebar -->
      <div class="sidebar">
          <div class="logo_details">
              <div class="logo_name">Dashboard</div>
              <i class="bx bx-menu" id="btn"></i>
          </div>
          <div class="nav-list-container">
              <ul class="nav-list">
                  <li>
                      <a href="#">
                          <i class="bx bxs-map bx-fade-up"></i>
                          <span class="link_name">Yunlin</span>
                      </a>
                      <span class="tooltip">Yunlin</span>
                      <div id="buttonyunlin">
                          <div class="buttongroupyunlin">
                              <button class="button" id="button1">2019</button>
                              <button class="button" id="button2">2020</button>
                              <button class="button" id="button3">2021</button>

                  </li>
                  <li>
                      <a href="#">
                          <i class="bx bxs-map bx-fade-up"></i>
                          <span class="link_name">Chiayi</span>
                      </a>
                      <span class="tooltip">Chiayi</span>
                      <button class="button" id="button4">2019</button>
                      <button class="button" id="button5">2020</button>
                      <button class="button" id="button6">2021</button>
                  </li>
                  <li>
                      <h3 style="color: #fff;">Compare</h3>

                      <a href="#">
                          <i class="bx bx-map"></i>
                          <span class="link_name">Yunlin</span>
                      </a>
                      <button class="button" id="buttonyl1">2019</button>
                      <button class="button" id="buttonyl2">2020</button>
                      <button class="button" id="buttonyl3">2021</button>
                      <a href="#">
                          <i class="bx bx-map"></i>
                          <span class="link_name">Chiayi</span>
                      </a>
                      <button class="button" id="buttoncy1">2019</button>
                      <button class="button" id="buttoncy2">2020</button>
                      <button class="button" id="buttoncy3">2021</button>
                  </li>
                  <li>
                      <a href="#">
                          <i class="bx bx-chart"></i>
                          <span class="link_name">Shp檔案圖台的IDW結果</span>
                      </a>
                      <button class="button" id="buttonshp1"><b>等值線IDW</b></button>
                      <button class="button" id="buttonshp2"><b>水準高程檢測點IDW</b></button>
                      <button class="button" id="buttonshp3"><b>分層地陷監測井IDW</b></button>
                  </li>
                  <li>
                      <a href="#">
                          <i class="bx bx-map-alt"></i>
                          <span class="link_name">Map Styles</span>
                      </a>
                      <span class="tooltip">Map Styles</span>
                      <div id="menu">
                          <button id="satellite-streets-v12" type="button" class="map-style-button active">Satellite</button>
                          <button id="light-v11" type="button" class="map-style-button">Light</button>
                          <button id="dark-v11" type="button" class="map-style-button">Dark</button>
                          <button id="streets-v12" type="button" class="map-style-button">Streets</button>
                          <button id="outdoors-v12" type="button" class="map-style-button">Outdoors</button>
                      </div>

                  </li>


                  <li>
                      <a href="#">
                          <i class="bx bx-data"></i>
                          <span class="link_name">Upload DataSet</span>
                      </a>
                      <span class="tooltip">Upload DataSet</span>
                      <main>
                          <form id="uploadForm" enctype="multipart/form-data">
                              <div id="uploadSection">
                                  <label for="geojsonFile" class="file-label">
                                      Select GeoJSON File
                                      <input type="file" name="geojsonFile" id="geojsonFile" accept=".geojson" style="display: none;" onchange="updateFileName(this)" />
                                  </label>
                                  <p id="selectedFileName" style="font-size: 12px; margin-top: 5px; color: white; margin-left: -120px;"></p>
                                  <label for="uploadgeojson" class="upload-label">
                                      <input type="submit" value="Upload" style="background-color: #fff; -webkit-text-fill-color: #000; padding-left: 10px; margin-top: -10px; margin-bottom: -10px;">
                                  </label>

                              </div>
                          </form>
                          <script src="/js/upload.js"></script>
                          <button class="button" id="button7" style="margin-left: 0px;">Display the Uploaded<br> Geojson Data</button>
                      </main>
                  </li>

                  <script>
                      function updateFileName(input) {
                          const selectedFileName = document.getElementById("selectedFileName");
                          if (input.files.length > 0) {
                              selectedFileName.textContent = "Selected file: " + input.files[0].name;
                          } else {
                              selectedFileName.textContent = "";
                          }
                      }
                  </script>

                  <!-- print -->
                  <li>
                      <a href="#">
                          <i class="bx bx-printer"></i>
                          <span class="link_name">Print</span>
                      </a>
                      <span class="tooltip">Print</span>
                      <button id="captureButton">PNG</button>
                      <button id="captureButton2">PDF</button>
                      <a href="#">
                          <i class="bx bx-bulb"></i>
                          <span class="link_name">Tutorial</span>
                          <a href="tutorial.html">Tutorial</a>
                      </a>
                      <a href="#">
                          <i class="bx bx-bulb"></i>
                          <span class="link_name">Project Overview</span>
                          <a href="overview.html">Project Overview</a>
                      </a>
                  </li>



                  <!--
    SHARE BUTTON START -->
                  <h3 style="color: #fff;">Share this website!</h3>

                  <div class="line-it-button" data-lang="en" data-type="share-a" data-env="REAL" data-url="http://140.121.17.82:60180/" data-color="default" data-size="small" data-count="true" data-ver="3" style="display: none;"></div>
                  <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>

                  <a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out this awesome website!" data-url="http://140.121.17.82:60180/">Tweet</a>


                  <a href="https://reddit.com/submit?url=http%3A%2F%2Fhttp://140.121.17.82:60180/%2F" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share on Reddit" rel="noopener">
                      <img src="https://www.iconpacks.net/icons/2/free-reddit-logo-icon-2436-thumb.png" alt="Email" style="width: 40px;" />
                  </a>


                  <div class="fb-share-button" data-href="http://140.121.17.82:60180/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fmouse%2Fterakhir.html&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                  <a href="mailto:?Subject=Data Calculation Platform For Stratum Subsidence Monitoring&amp;Body=Look at this Awesome Website!  http://140.121.17.82:60180/">
                      <img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/112-gmail_email_mail-512.png" alt="Email" style="width: 40px;" />
                  </a>



</div>

          <!--
            SHARE BUTTON END -->


          <li class="profile">
              <div class="profile_details">
                  <img src="/images/profile.jpg" alt="profile image">
                  <div class="profile_content">
                      <div class="name">Welcome! User</div>
                      <a href="logout.php">Logout</a>
                  </div>
              </div>
              <i class="bx bx-log-out" id="log_out"></i>
          </li>
          </ul>


      </div>

    <!-- Main -->
<main>
    <div id="map-container" style="width: 100%; height: 100vh;">
        <div id="map"></div>
    </div>

 -->
  
  <div id="buttonsContainer">

    <div class="zoom">
      <button id="zoomInButton" class="toggleButton1"  >+</button>
      <button id="zoomOutButton" class="toggleButton1"  >-</button>
    </div>

    <div class="buttongroup">
          Sort by Centimeters:
    <button class="toggleButton" data-description="1">0-1 cm</button>
    <button class="toggleButton" data-description="2">0-2 cm</button>
    <button class="toggleButton" data-description="3">0-3 cm</button>
    <button class="toggleButton" data-description="4">0-4 cm</button>
    <button class="toggleButton" data-description="5">0-5 cm</button>
    <button class="toggleButton" data-description="6">0-6 cm</button>
    <button class="toggleButton" data-description="7">0-7 cm</button>
    </div>

      

  <div id="latitude">Latitude: </div>
  <div id="longitude">Longitude: </div>
  <div id="zoom">Zoom: </div>
  <div id="angle">Angle: </div>

  <div id='compass' class='mapboxgl-ctrl'>
  <button id='compass-button'>
  <i class='bx bx-compass' ></i>
  </button>
  </div>

  <div id='downloadjsongroup' >
  <button id="start-measurement">Start Measurement</button>
  <button id="downloadGeoJSONButton">Download GeoJSON</button>
  </div>



</main>

<!-- Third Party Scripts -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/turf.js/6.5.0/turf.min.js"></script>

<!-- Custom Scripts -->
<script src="/js/script.js"></script>


<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<!-- <div id="gradient-image" style="width: 80px;">
  <label>
    <p style="background-color: rgba(242,242,242,0.7)">
      Lowest Amount of subsidence
    </p>
  </label>
  <div class="gradient-box" style="width: 80px; height: 300px;">


    <span class="color-text">Blue<br>(0 Cm)</span>

    <span class="color-text">Green<br>(3.5 Cm)</span>

    <span class="color-text">Red<br>(7 Cm)</span>
  </div>
  <label>
    <p style="background-color: rgba(242,242,242,0.7)">
      Highest Amount of subsidence
    </p>
  </label>
</div> -->

<div id="gradient-image" style="width: 80px;">
  <div class="gradient-box" style="width: 80px; height: 300px;">
    <span class="color-text">Lowest<br>Blue<br>(0 Cm)</span>
    <span class="color-text">Green<br>(3.5 Cm)</span>

    <span class="color-text">Highest<br>Red<br>(7 Cm)</span>
  </div>
</div>

   <div id="imageContainer" style="display: none;">
        <img src="/images/info.jpg" alt="Your Image">
    </div>

    <div id="imageContainer2" style="display: none;">
        <img src="/images/info2.jpg" alt="Your Image">
    </div>

    <div id="imageContainer3" style="display: none;">
        <img src="/images/info3.jpg" alt="Your Image">
    </div>
<div id="distance" class="distance-container"></div>

<script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>


<style>

  #imageContainer {
    position: absolute;
    top: 34%;
    right: 310px;
    width: 100px; /* Adjust the size as needed */
    height: 100px; /* Adjust the size as needed */
    opacity: 0;
    animation: fadeInScaleUp 1.5s ease-in-out forwards;
    }
    

#imageContainer2 {
    position: absolute;
    top: 34%;
    right: 310px;
    width: 100px; /* Adjust the size as needed */
    height: 100px; /* Adjust the size as needed */
    opacity: 0;
    animation: fadeInScaleUp 1.5s ease-in-out forwards;
    }
    

    #imageContainer3 {
    position: absolute;
    top: 34%;
    right: 310px;
    width: 100px; /* Adjust the size as needed */
    height: 100px; /* Adjust the size as needed */
    opacity: 0;
    animation: fadeInScaleUp 1.5s ease-in-out forwards;
    }
    @keyframes fadeInScaleUp {
        from {
            opacity: 0;
            transform: scale(0);
        }

        to {
            opacity: 1;
            transform: scale(0.9);
        }
    }


  /* Gradient Image Styles */
  #gradient-image {
    position: fixed;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .gradient-box {
    width: 30px;
    height: 200px;
    background: linear-gradient(to bottom, #0000FF 0%, #00FF00 50%, #FF0000 100%);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 5px;
  
  }

  .color-text {
    text-align: left; /* Align text to the left */
    margin-left: 5px; /* Adjust margin as needed */
    font-size: 14px; /* Adjust the font size as needed */
    color: white
  }

</style>

<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoia296dXhvIiwiYSI6ImNsZ3lrdXp3YjAzNnMzbm1qYzMxdnlmajcifQ.jhnwh-sNdrpsMoImIgzbFQ';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [120.673645, 23.147736],
    zoom: 6.5,
    preserveDrawingBuffer: true
  });

  const layerList = document.getElementById('menu');
const mapStyleButtons = layerList.getElementsByClassName('map-style-button');

const compass = document.getElementById('compass');
  const compassButton = document.getElementById('compass-button');

  compassButton.addEventListener('click', () => {
      // Reset the maps to north
      map.easeTo({ bearing: 0 });
    });

    map.addControl(new mapboxgl.NavigationControl(), 'top-left');

  // Add event listener for map movement (latitude and longitude)
map.on('move', function () {
    var center = map.getCenter();
    document.getElementById('latitude').textContent = 'Latitude: ' + center.lat.toFixed(6);
    document.getElementById('longitude').textContent = 'Longitude: ' + center.lng.toFixed(6);
});

// Add event listener for map zoom level change
map.on('zoom', function () {
    var zoom = map.getZoom().toFixed(2);
    document.getElementById('zoom').textContent = 'Zoom: ' + zoom;
});

// Add event listener for map rotation (angle) change
map.on('rotate', function () {
    var angle = map.getBearing().toFixed(2);
    document.getElementById('angle').textContent = 'Angle: ' + angle + '°';
});

// Get references to the latitude, longitude, zoom, and angle elements
const latitudeElement = document.getElementById('latitude');
const longitudeElement = document.getElementById('longitude');
const zoomElement = document.getElementById('zoom');
const angleElement = document.getElementById('angle');

// Update the latitude, longitude, zoom, and angle elements when the map moves
map.on('move', () => {
    const { lng, lat } = map.getCenter();
    const newZoom = map.getZoom();
    const newAngle = map.getBearing();
    
    // Update the elements with the new information
    latitudeElement.textContent = 'Latitude: ' + lat.toFixed(6);
    longitudeElement.textContent = 'Longitude: ' + lng.toFixed(6);
    zoomElement.textContent = 'Zoom: ' + newZoom.toFixed(2);
    angleElement.textContent = 'Angle: ' + newAngle.toFixed(2);
});



for (const button of mapStyleButtons) {
  button.onclick = (event) => {
    const layerId = event.target.id;
    map.setStyle('mapbox://styles/mapbox/' + layerId);
    
    // Remove the "active" class from all buttons
    for (const btn of mapStyleButtons) {
      btn.classList.remove('active');
    }
    
    // Add the "active" class to the clicked button
    event.target.classList.add('active');
  };
}


  var geojsonFiles = [
      '/geojson',
      '/geojson2',
      '/geojson3',
      '/geojson4',
      '/geojson5',
      '/geojson6',
      '/geojson7',
      '/river',     //取 濁水溪沖積扇範圍
      '/hsr',       //取 高鐵資料
      '/monitor',   //取 地陷監測點
      '/shp1',      //等值線結果
      '/shp2',      //水準高層檢測點(水準樁)結果
      '/shp3'       //分層地陷監測井結果
  ];

  var currentGeoJSONIndex = 0;
  var popup;

  function loadGeoJSON() {
    map.getSource('my-data').setData(geojsonFiles[currentGeoJSONIndex]);
  }

  function addGeoJSONSourceAndLayer(index) {
  map.addSource('my-data', {
    type: 'geojson',
    data: geojsonFiles[index]
  });

  map.addLayer({
    id: 'my-layer',
    type: 'line',
    source: 'my-data',
    paint: {
      'line-color': [
        'interpolate',
        ['linear'],
        ['get', 'description'],
        0, '#0000FF',  // blue
        3.5, '#00FF00',  // green
        7, '#FF0000'   // red
      ],
      'line-opacity': 0.8,
      'line-width': 4
    }
  });

  // Compare start
    var isShowingBoth = false;
  
  document.getElementById('buttonyl1').addEventListener('click', function () {
  if (isShowingBoth) {
    
    map.removeLayer('my-layer-3');
    map.removeSource('my-data-3');
    isShowingBoth = false;
  } else {
    
    map.addSource('my-data-3', {
      type: 'geojson',
      data: geojsonFiles[0]
    });

    map.addLayer({
    id: 'my-layer-3',
    type: 'line',
    source: 'my-data-3',
    paint: {
      'line-color': [
        'interpolate',
        ['linear'],
        ['get', 'description'], 
        0, '#0000FF',  // blue
        3.5, '#00FF00',  // green
        7, '#FF0000'   // red
      ],
      'line-opacity': 0.8,
      'line-width': 4
    }
  });

    isShowingBoth = true;
  }
});

document.getElementById('buttonyl2').addEventListener('click', function () {
  if (isShowingBoth) {
    
    map.removeLayer('my-layer-3');
    map.removeSource('my-data-3');
    isShowingBoth = false;
  } else {
    
    map.addSource('my-data-3', {
      type: 'geojson',
      data: geojsonFiles[1]
    });

    map.addLayer({
    id: 'my-layer-3',
    type: 'line',
    source: 'my-data-3',
    paint: {
      'line-color': [
        'interpolate',
        ['linear'],
        ['get', 'description'], 
        0, '#0000FF',  // blue
        3.5, '#00FF00',  // green
        7, '#FF0000'   // red
      ],
      'line-opacity': 0.8,
      'line-width': 4
    }
  });

    isShowingBoth = true;
  }
});
document.getElementById('buttonyl3').addEventListener('click', function () {
  if (isShowingBoth) {
    
    map.removeLayer('my-layer-3');
    map.removeSource('my-data-3');
    isShowingBoth = false;
  } else {
    
    map.addSource('my-data-3', {
      type: 'geojson',
      data: geojsonFiles[2]
    });

    map.addLayer({
    id: 'my-layer-3',
    type: 'line',
    source: 'my-data-3',
    paint: {
      'line-color': [
        'interpolate',
        ['linear'],
        ['get', 'description'], 
        0, '#0000FF',  // blue
        3.5, '#00FF00',  // green
        7, '#FF0000'   // red
      ],
      'line-opacity': 0.8,
      'line-width': 4
    }
  });

    isShowingBoth = true;
  }
});
document.getElementById('buttoncy1').addEventListener('click', function () {
  if (isShowingBoth) {
    
    map.removeLayer('my-layer-3');
    map.removeSource('my-data-3');
    isShowingBoth = false;
  } else {
    
    map.addSource('my-data-3', {
      type: 'geojson',
      data: geojsonFiles[3]
    });

    map.addLayer({
    id: 'my-layer-3',
    type: 'line',
    source: 'my-data-3',
    paint: {
      'line-color': [
        'interpolate',
        ['linear'],
        ['get', 'description'], 
        0, '#0000FF',  // blue
        3.5, '#00FF00',  // green
        7, '#FF0000'   // red
      ],
      'line-opacity': 0.8,
      'line-width': 4
    }
  });

    isShowingBoth = true;
  }
});
 
  document.getElementById('buttoncy2').addEventListener('click', function () {
     if (isShowingBoth) {

     map.removeLayer('my-layer-3');
     map.removeSource('my-data-3');
     isShowingBoth = false;
      } else {

     map.addSource('my-data-3', {
     type: 'geojson',
     data: geojsonFiles[4]
              });

              map.addLayer({
                  id: 'my-layer-3',
                  type: 'line',
                  source: 'my-data-3',
                  paint: {
                      'line-color': [
                          'interpolate',
                          ['linear'],
                          ['get', 'description'],
                          0, '#0000FF',  // blue
                          3.5, '#00FF00',  // green
                          7, '#FF0000'   // red
                      ],
                      'line-opacity': 0.8,
                      'line-width': 4
                  }
              });

              isShowingBoth = true;
          }
      });

      document.getElementById('buttoncy3').addEventListener('click', function () {
          if (isShowingBoth) {

              map.removeLayer('my-layer-3');
              map.removeSource('my-data-3');
              isShowingBoth = false;
          } else {

              map.addSource('my-data-3', {
                  type: 'geojson',
                  data: geojsonFiles[5]
              });

              map.addLayer({
                  id: 'my-layer-3',
                  type: 'line',
                  source: 'my-data-3',
                  paint: {
                      'line-color': [
                          'interpolate',
                          ['linear'],
                          ['get', 'description'],
                          0, '#0000FF',  // blue
                          3.5, '#00FF00',  // green
                          7, '#FF0000'   // red
                      ],
                      'line-opacity': 0.8,
                      'line-width': 4
                  }
              });

              isShowingBoth = true;
          }
      });

  map.addLayer({
    id: 'my-layer',
    type: 'line',
    source: 'my-data',
    paint: {
      'line-color': [
        'interpolate',
        ['linear'],
        ['get', 'description'], 
        0, '#0000FF',  // blue
        3.5, '#00FF00',  // green
        7, '#FF0000'   // red
      ],
      'line-opacity': 0.8,
      'line-width': 4
    }
  });
}

  map.on('style.load', function () {
    addGeoJSONSourceAndLayer();
  });

    var buttons = document.querySelectorAll('.toggleButton');

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function () {
    var description = parseFloat(this.getAttribute('data-description'));

    map.setFilter('my-layer-3', ['<=', ['get', 'description'], description]);
  });
}

      // Add hover effect
      map.on('mousemove', 'tileset-layer', function (e) {
     map.getCanvas().style.cursor = 'pointer';

      // Highlight the hovered feature
      map.setFeatureState(
      { source: 'kozuxo.clhirj0t90fgt2bludx23iacp-7ehke', id: e.features[0].id },
      { hover: true }
    );
  });


var popup;
var popupOpen = false; 


map.on('mouseenter', 'my-layer', function (e) {
    var coordinates = e.lngLat;
    var properties = e.features[0].properties;
    var description = properties.description;
    var name = properties.name;
    var distance = properties.distance;
    var city = properties.city;

    var popupHTML =
        "<div><strong>FID:</strong> " + name + "</div>" +
        "<div><strong>City:</strong> " + city + "</div>" +
        "<div><strong>Land subsidence (下陷量):</strong> " + description + "cm" + "</div>" +
        "<div><strong>Total Distance:</strong> " + distance + "</div>" +
        "<button id='copyButton'>Copy Text</button>"  +
        "<button id= 'downloadButton' class='downloadButton'>Download Data</button>";

    if (popup) {
        popup.remove();
    }

    popup = new mapboxgl.Popup()
        .setLngLat(coordinates)
        .setHTML(popupHTML)
        .addTo(map);

        var downloadButton = popup.getElement().querySelector('.downloadButton');
    downloadButton.addEventListener('click', function () {
        var selectedFeatures = {
            type: 'FeatureCollection',
            features: [e.features[0]]
        };

        var selectedFeaturesJSON = JSON.stringify(selectedFeatures);
        downloadGeoJSON(selectedFeaturesJSON);
    });

    popupOpen = true; 

var copyButton = document.getElementById('copyButton');
copyButton.addEventListener('click', function () {
    
    var popupTextContent = [
        "FID: " + name,
        "City: " + city,
        "Land subsidence (下陷量): " + description + "cm",
        "Total Distance: " + distance
    ].join('\n');

    var textarea = document.createElement('textarea');
    textarea.value = popupTextContent;

    document.body.appendChild(textarea);
    textarea.select();

    document.execCommand('copy');

    document.body.removeChild(textarea);

    alert('Text copied to clipboard');
    });
});

map.on('mouseleave', 'my-layer', function () {
    
    if (!popupOpen && popup) {
        popup.remove();
    }
});

map.on('click', 'my-layer', function () {
    if (popupOpen) {
        popupOpen = false; 
        popup.remove();
    } else {
        popupOpen = true;
    }
});

  map.on('mouseenter', 'my-layer-2', function (e) {
    var coordinates = e.lngLat;
    var properties = e.features[0].properties;
    var description = properties.description;
    var name = properties.name;
    var distance = properties.distance;
    var city = properties.city;

    var popupHTML =
      "<div><strong>FID:</strong> " + name + "</div>" +
      "<div><strong>City:</strong> " + city + "</div>" +
      "<div><strong>Land subsidence (下陷量):</strong> " + description + "cm" + "</div>" +
      "<div><strong>Total Distance:</strong> " + distance + "</div>";

    popup = new mapboxgl.Popup()
      .setLngLat(coordinates)
      .setHTML(popupHTML)
      .addTo(map);
  });

  map.on('mouseleave', 'my-layer-2', function () {
    map.getCanvas().style.cursor = '';
    popup.remove();
    });

    var isShowingBoth = false;

 document.getElementById('button1').addEventListener('click', function () {
     if (isShowingBoth) {

         map.removeLayer('my-layer-2');
         map.removeSource('my-data-2');
         isShowingBoth = false;
     } else {

         map.addSource('my-data-2', {
             type: 'geojson',
             data: geojsonFiles[0]
         });

         map.addLayer({
             id: 'my-layer-2',
             type: 'line',
             source: 'my-data-2',
             paint: {
                 'line-color': [
                     'interpolate',
                     ['linear'],
                     ['get', 'description'],
                     0, '#0000FF',  // blue
                     3.5, '#00FF00',  // green
                     7, '#FF0000'   // red
                 ],
                 'line-opacity': 0.8,
                 'line-width': 4
             }
         });

         isShowingBoth = true;
     }
 });

document.getElementById('button2').addEventListener('click', function () {
    if (isShowingBoth) {

        map.removeLayer('my-layer-2');
        map.removeSource('my-data-2');
        isShowingBoth = false;
    } else {

        map.addSource('my-data-2', {
            type: 'geojson',
            data: geojsonFiles[1]
        });

        map.addLayer({
            id: 'my-layer-2',
            type: 'line',
            source: 'my-data-2',
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'description'],
                    0, '#0000FF',  // blue
                    3.5, '#00FF00',  // green
                    7, '#FF0000'   // red
                ],
                'line-opacity': 0.8,
                'line-width': 4
            }
        });

        isShowingBoth = true;
    }
});

document.getElementById('button3').addEventListener('click', function () {
    if (isShowingBoth) {
        map.removeLayer('my-layer-2');
        map.removeSource('my-data-2');
        isShowingBoth = false;
    } else {

        map.addSource('my-data-2', {
            type: 'geojson',
            data: geojsonFiles[2]
        });

        map.addLayer({
            id: 'my-layer-2',
            type: 'line',
            source: 'my-data-2',
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'description'],
                    0, '#0000FF',  // blue
                    3.5, '#00FF00',  // green
                    7, '#FF0000'   // red
                ],
                'line-opacity': 0.8,
                'line-width': 4
            }
        });

        isShowingBoth = true;
    }
});

document.getElementById('button4').addEventListener('click', function () {
    if (isShowingBoth) {
        map.removeLayer('my-layer-2');
        map.removeSource('my-data-2');
        isShowingBoth = false;
    } else {

        map.addSource('my-data-2', {
            type: 'geojson',
            data: geojsonFiles[3]
        });

        map.addLayer({
            id: 'my-layer-2',
            type: 'line',
            source: 'my-data-2',
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'description'],
                    0, '#0000FF',  // blue
                    3.5, '#00FF00',  // green
                    7, '#FF0000'   // red
                ],
                'line-opacity': 0.8,
                'line-width': 4
            }
        });

        isShowingBoth = true;
    } 
});

document.getElementById('button5').addEventListener('click', function () {
    if (isShowingBoth) {
        map.removeLayer('my-layer-2');
        map.removeSource('my-data-2');
        isShowingBoth = false;
    } else {

        map.addSource('my-data-2', {
            type: 'geojson',
            data: geojsonFiles[4]
        });

        map.addLayer({
            id: 'my-layer-2',
            type: 'line',
            source: 'my-data-2',
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'description'],
                    0, '#0000FF',  // blue
                    3.5, '#00FF00',  // green
                    7, '#FF0000'   // red
                ],
                'line-opacity': 0.8,
                'line-width': 4
            }
        });

        isShowingBoth = true;
    } 
});

document.getElementById('button6').addEventListener('click', function () {
    if (isShowingBoth) {
        map.removeLayer('my-layer-2');
        map.removeSource('my-data-2');
        isShowingBoth = false;
    } else {

        map.addSource('my-data-2', {
            type: 'geojson',
            data: geojsonFiles[5]
        });

        map.addLayer({
            id: 'my-layer-2',
            type: 'line',
            source: 'my-data-2',
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'description'],
                    0, '#0000FF',  // blue
                    3.5, '#00FF00',  // green
                    7, '#FF0000'   // red
                ],
                'line-opacity': 0.8,
                'line-width': 4
            }
        });

        isShowingBoth = true;
    }
});
document.getElementById('button7').addEventListener('click', function () {
    if (isShowingBoth) {
        map.removeLayer('my-layer-2');
        map.removeSource('my-data-2');
        isShowingBoth = false;
    } else {

        map.addSource('my-data-2', {
            type: 'geojson',
            data: geojsonFiles[6]
        });

        map.addLayer({
            id: 'my-layer-2',
            type: 'line',
            source: 'my-data-2',
            paint: {
                'line-color': [
                    'interpolate',
                    ['linear'],
                    ['get', 'description'],
                    0, '#0000FF',  // blue
                    3.5, '#00FF00',  // green
                    7, '#FF0000'   // red
                ],
                'line-opacity': 0.8,
                'line-width': 4
            }
        });

		map.addSource('my-data-7', {
                    type: 'geojson',
                    data: geojsonFiles[6]
                });

                map.addLayer({
                    id: 'my-layer-7',
                    type: 'circle',
                    source: 'my-data-7',
                   paint: {
                        'circle-color': '#3D3C3C', //
                        'circle-opacity': 0.5,
                        'circle-radius': 3,
                    }
                });

        isShowingBoth = true;
    }
});


    let isButtonEnabled = false;

    document.getElementById('buttonshp1').addEventListener('click', function () {
        if (isButtonEnabled) {
            // Disable functionality
            map.removeLayer('my-layer-5');
            map.removeLayer('my-layer-3');
            map.removeLayer('my-layer-4');
            map.removeLayer('my-layer-6');
            map.removeSource('my-data-5');
            map.removeSource('my-data-3');
            map.removeSource('my-data-4');
            map.removeSource('my-data-6');
            document.getElementById('imageContainer').style.display = 'none';
            document.getElementById('imageContainer2').style.display = 'none';
            document.getElementById('imageContainer3').style.display = 'none';

        } else {
            // Enable functionality
            map.addSource('my-data-5', {
                type: 'geojson',
                data: geojsonFiles[10] // 取等值線資料
            });

            map.addLayer({
                id: 'my-layer-5',
                type: 'circle',
                source: 'my-data-5',
                paint: {
                    'circle-color': [
                        'interpolate',
                        ['linear'],
                        ['get', 'h(m)'],
                        20, '#56FF56', //green
                        47, '#03C703', //green
                        98, '#F0E802', //yellow
                        118, '#EEB83B', //orange
                        180, '#FC160F', //red
                    ],
                    'circle-opacity': 1,
                    'circle-radius': 4.5
                }
            });

            map.addSource('my-data-3', {
                type: 'geojson',
                data: geojsonFiles[7] // 取濁水溪沖積扇範圍
            });

            map.addLayer({
                id: 'my-layer-3',
                type: 'line',
                source: 'my-data-3',
                paint: {
                    'line-color': '#000000',  // black
                    'line-opacity': 0.8,
                    'line-width': 3
                }
            });

            map.addSource('my-data-4', {
                type: 'geojson',
                data: geojsonFiles[8]
            });

            map.addLayer({
                id: 'my-layer-4',
                type: 'line',
                source: 'my-data-4',
                paint: {
                    'line-color': '#ED7014',  // orange
                    'line-opacity': 1,
                    'line-width': 5,
                }
            });

            map.addSource('my-data-6', {
                type: 'geojson',
                data: geojsonFiles[9]
            });

            map.addLayer({
                id: 'my-layer-6',
                type: 'circle',
                source: 'my-data-6',
                paint: {
                    'circle-color': '#006FFF', //
                    'circle-opacity': 1,
                    'circle-radius': 4,
                    'circle-stroke-color': '#000000',  // Customize the border color
                    'circle-stroke-width': 2  // Customize the border width
                }
            });

            document.getElementById('imageContainer').style.display = 'block';
        }
        // Toggle the flag
        isButtonEnabled = !isButtonEnabled;
    });

    document.getElementById('buttonshp2').addEventListener('click', function () {
        if (isButtonEnabled) {
            // Disable functionality
            map.removeLayer('my-layer-5');
            map.removeLayer('my-layer-3');
            map.removeLayer('my-layer-4');
            map.removeLayer('my-layer-6');
            map.removeSource('my-data-5');
            map.removeSource('my-data-3');
            map.removeSource('my-data-4');
            map.removeSource('my-data-6');
            document.getElementById('imageContainer').style.display = 'none';
            document.getElementById('imageContainer2').style.display = 'none';
            document.getElementById('imageContainer3').style.display = 'none';

        } else {
            // Enable functionality
            map.addSource('my-data-5', {
                type: 'geojson',
                data: geojsonFiles[11]
            });

            map.addLayer({
                id: 'my-layer-5',
                type: 'circle',
                source: 'my-data-5',
                paint: {
                    'circle-color': [
                        'interpolate',
                        ['linear'],
                        ['get', 'h(m)'],
                        -2, '#56FF56', //green
                        5, '#03C703', //green
                        11, '#F0E802', //yellow
                        19, '#EEB83B', //orange
                        31, '#FC160F', //red
                    ],
                    'circle-opacity': 1,
                    'circle-radius': 4.5
                }
            });

            map.addSource('my-data-3', {
                type: 'geojson',
                data: geojsonFiles[7]
            });

            map.addLayer({
                id: 'my-layer-3',
                type: 'line',
                source: 'my-data-3',
                paint: {
                    'line-color': '#000000',  // black
                    'line-opacity': 0.8,
                    'line-width': 3
                }
            });

            map.addSource('my-data-4', {
                type: 'geojson',
                data: geojsonFiles[8]
            });

            map.addLayer({
                id: 'my-layer-4',
                type: 'line',
                source: 'my-data-4',
                paint: {
                    'line-color': '#ED7014',  // orange
                    'line-opacity': 1,
                    'line-width': 5,
                }
            });

            map.addSource('my-data-6', {
                type: 'geojson',
                data: geojsonFiles[9]
            });

            map.addLayer({
                id: 'my-layer-6',
                type: 'circle',
                source: 'my-data-6',
                paint: {
                    'circle-color': '#006FFF', //
                    'circle-opacity': 1,
                    'circle-radius': 4,
                    'circle-stroke-color': '#000000',  // Customize the border color
                    'circle-stroke-width': 2  // Customize the border width
                }
            });

            document.getElementById('imageContainer2').style.display = 'block';
        }
        // Toggle the flag
        isButtonEnabled = !isButtonEnabled;
    });

    document.getElementById('buttonshp3').addEventListener('click', function () {
        if (isButtonEnabled) {
            // Disable functionality
            map.removeLayer('my-layer-5');
            map.removeLayer('my-layer-3');
            map.removeLayer('my-layer-4');
            map.removeLayer('my-layer-6');
            map.removeSource('my-data-5');
            map.removeSource('my-data-3');
            map.removeSource('my-data-4');
            map.removeSource('my-data-6');
            document.getElementById('imageContainer').style.display = 'none';
            document.getElementById('imageContainer2').style.display = 'none';
            document.getElementById('imageContainer3').style.display = 'none';

        } else {
            // Enable functionality
            map.addSource('my-data-5', {
                type: 'geojson',
                data: geojsonFiles[12]
            });

            map.addLayer({
                id: 'my-layer-5',
                type: 'circle',
                source: 'my-data-5',
                paint: {
                    'circle-color': [
                        'interpolate',
                        ['linear'],
                        ['get', 'h(m)'],
                        2, '#56FF56', //green
                        12, '#03C703', //green
                        16, '#F0E802', //yellow
                        23, '#EEB83B', //orange
                        36, '#FC160F', //red
                    ],
                    'circle-opacity': 1,
                    'circle-radius': 4.5
                }
            });

            map.addSource('my-data-3', {
                type: 'geojson',
                data: geojsonFiles[7]
            });

            map.addLayer({
                id: 'my-layer-3',
                type: 'line',
                source: 'my-data-3',
                paint: {
                    'line-color': '#000000',  // black
                    'line-opacity': 0.8,
                    'line-width': 3
                }
            });

            map.addSource('my-data-4', {
                type: 'geojson',
                data: geojsonFiles[8]
            });

            map.addLayer({
                id: 'my-layer-4',
                type: 'line',
                source: 'my-data-4',
                paint: {
                    'line-color': '#ED7014',  // orange
                    'line-opacity': 1,
                    'line-width': 5,
                }
            });

            map.addSource('my-data-6', {
                type: 'geojson',
                data: geojsonFiles[9]
            });

            map.addLayer({
                id: 'my-layer-6',
                type: 'circle',
                source: 'my-data-6',
                paint: {
                    'circle-color': '#006FFF', //
                    'circle-opacity': 1,
                    'circle-radius': 4,
                    'circle-stroke-color': '#000000',  // Customize the border color
                    'circle-stroke-width': 2  // Customize the border width
                }
            });

            document.getElementById('imageContainer3').style.display = 'block';
        }
        // Toggle the flag
        isButtonEnabled = !isButtonEnabled;
    });


  var buttons = document.querySelectorAll('.toggleButton');

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function () {
    var description = parseFloat(this.getAttribute('data-description'));

    map.setFilter('my-layer-2', ['<=', ['get', 'description'], description]);
  });
}

      // Add hover effect
      map.on('mousemove', 'tileset-layer', function (e) {
     map.getCanvas().style.cursor = 'pointer';

      // Highlight the hovered feature
      map.setFeatureState(
      { source: 'kozuxo.clhirj0t90fgt2bludx23iacp-7ehke', id: e.features[0].id },
      { hover: true }
    );
  });

  // Reset hover effect when the mouse leaves the layer
  map.on('mouseleave', 'tileset-layer', function () {
    map.getCanvas().style.cursor = '';

    // Reset the feature state
    map.setFeatureState(
      { source: 'kozuxo.clhirj0t90fgt2bludx23iacp-7ehke', id: null },
      { hover: false }
    );
  });

    // Capture screenshot
    document.getElementById('captureButton').addEventListener('click', function () {
        // Get the dimensions and position of the map container
        var mapContainer = document.getElementById('map-container');
        var rect = mapContainer.getBoundingClientRect();

        // Capture the map container using html2canvas with specified dimensions
        html2canvas(mapContainer, {
            width: rect.width,
            height: rect.height,
            x: rect.left,
            y: rect.top
        }).then(function (canvas) {
            // Convert canvas to an image URL
            var imgURL = canvas.toDataURL('image/png');

            // Create a link element to download the image
            var link = document.createElement('a');
            link.href = imgURL;
            link.download = 'map_screenshot.png';
            link.click();
        });
    });

    document.getElementById('captureButton2').addEventListener('click', function () {
        // Get the dimensions and position of the map container
        var mapContainer = document.getElementById('map-container');
        var rect = mapContainer.getBoundingClientRect();

        var element = document.getElementById('map-container'); // Define element first

        var pdfOptions = {
            margin: [-10, -70],
            filename: 'map_screenshot.pdf',
            image: { type: 'png', quality: 1 },
            html2canvas: {
                scale: 1,
                imageSmoothingEnabled: true,
                width: element.scrollWidth, // Set width to match the container's scroll width
                height: element.scrollHeight, // Set height to match the container's scroll height
                x: element.getBoundingClientRect().left + 100, // Set x to the left position of the container
                y: element.getBoundingClientRect().top, // Set y to the top position of the container
            },
            pagebreak: { mode: ['avoid-all'], before: '.page-break' },
            jsPDF: { unit: 'mm', orientation: 'landscape', compressPDF: true, pageWidth: 50, pageHeight: 500 }
        };

        html2pdf().from(element).set(pdfOptions).save();

    });

function clearMeasurements() {
   
   lineStringFeatures.features = [];
   geojson.features = [];
   map.getSource('lineString').setData(lineStringFeatures);
   map.getSource('geojson').setData(geojson);
   distanceContainer.innerHTML = '';
}

const distanceContainer = document.getElementById('distance');

const geojson = {
    'type': 'FeatureCollection',
    'features': []
};

const lineStringFeatures = {
    'type': 'FeatureCollection',
    'features': []
};

map.on('load', () => {
    map.addSource('geojson', {
        'type': 'geojson',
        'data': geojson
    });

    map.addSource('lineString', {
        'type': 'geojson',
        'data': lineStringFeatures
    });

    map.addLayer({
        id: 'measure-points',
        type: 'circle',
        source: 'geojson',
        paint: {
            'circle-radius': 5,
            'circle-color': '#000'
        },
        filter: ['in', '$type', 'Point']
    });

    map.addLayer({
        id: 'measure-lines',
        type: 'line',
        source: 'lineString',
        layout: {
            'line-cap': 'round',
            'line-join': 'round'
        },
        paint: {
            'line-color': '#000',
            'line-width': 2.5
        }
    });

    let measurementStarted = false;

    function toggleMeasurement() {
        measurementStarted = !measurementStarted;

        document.getElementById('start-measurement').textContent = measurementStarted
            ? 'Stop Measurement'
            : 'Start Measurement';

        if (!measurementStarted) {
            map.off('click', handleMapClick);
        } else {
            map.on('click', handleMapClick);
            
document.getElementById('start-measurement').addEventListener('click', clearMeasurements);
        }
    }

function handleMapClick(e) {

const point = {

'type': 'Feature',

'geometry': {

'type': 'Point',

'coordinates': [e.lngLat.lng, e.lngLat.lat]

},

'properties': {

'id': String(new Date().getTime())

}

};


geojson.features.push(point);


if (geojson.features.length > 1) {

const lastPoint = geojson.features[geojson.features.length - 2];

const currentPoint = geojson.features[geojson.features.length - 1];


const segment = {

'type': 'Feature',

'geometry': {

'type': 'LineString',

'coordinates': [lastPoint.geometry.coordinates, currentPoint.geometry.coordinates]

}

};

lineStringFeatures.features.push(segment);


const totalDistance = turf.length(lineStringFeatures);


const value = document.createElement('pre');

value.textContent = `Total distance: ${totalDistance.toLocaleString()}km`;

distanceContainer.innerHTML = '';

distanceContainer.appendChild(value);


map.getSource('lineString').setData(lineStringFeatures);

}

        map.getSource('geojson').setData(geojson);
    }

    document.getElementById('start-measurement').addEventListener('click', toggleMeasurement);
});
map.on('mousemove', (e) => {
    const features = map.queryRenderedFeatures(e.point, {
        layers: ['measure-points']
    });
    map.getCanvas().style.cursor = features.length
        ? 'pointer'
        : 'crosshair';
});


// download geojson data button start

    var downloadButton = document.getElementById('downloadGeoJSONButton');

    downloadButton.addEventListener('click', function() {
        downloadGeoJSON(geojsonFiles[currentGeoJSONIndex]);
    });

    function downloadGeoJSON(geojsonDataUrl) {

        fetch(geojsonDataUrl)
            .then(response => response.json())
            .then(geojsonData => {

                var blob = new Blob([JSON.stringify(geojsonData)], { type: 'application/json' });

                var url = window.URL.createObjectURL(blob);

                var a = document.createElement('a');
                a.style.display = 'none';
                a.href = url;
                a.download = 'currentGeoJSON.geojson';

                document.body.appendChild(a);
                a.click();

                window.URL.revokeObjectURL(url);
                document.body.removeChild(a);
            })
            .catch(error => console.error(error));
    }

    // end of download geojson button


    // download geojson line start
    map.on('click', 'my-layer', function (e) {
        var clickedFeature = e.features[0];

        var selectedFeatures = {
            type: 'FeatureCollection',
            features: [clickedFeature]
        };

        var selectedFeaturesJSON = JSON.stringify(selectedFeatures);

        downloadGeoJSON(selectedFeaturesJSON);
    });


        document.getElementById('downloadButton').addEventListener('click', function () {

        alert('Please select which GEOJSON line data you want to download!');
    });
    
    function downloadGeoJSON(data) {
        var blob = new Blob([data], { type: 'application/json' });
        var url = URL.createObjectURL(blob);
        var a = document.createElement('a');
        a.href = url;
        a.download = 'selected_feature.geojson';
        a.style.display = 'none';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }
    // end of download geojson line
</script>



  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      
      const menuIcon = document.getElementById('menu-icon');
      const menuContainer = document.getElementById('menu-container');
  
      menuIcon.addEventListener('mousedown', (e) => {
        let offsetX = e.clientX - menuIcon.getBoundingClientRect().left;
        let offsetY = e.clientY - menuIcon.getBoundingClientRect().top;
  
        function handleDragMove(e) {
          menuIcon.style.left = e.clientX - offsetX + 'px';
          menuIcon.style.top = e.clientY - offsetY + 'px';
          menuContainer.style.left = e.clientX - offsetX + 'px';
          menuContainer.style.top = e.clientY - offsetY + 'px';
        }
  
        function handleDragEnd() {
          document.removeEventListener('mousemove', handleDragMove);
          document.removeEventListener('mouseup', handleDragEnd);
        }
  
        document.addEventListener('mousemove', handleDragMove);
        document.addEventListener('mouseup', handleDragEnd);
      });
  
   
      menuContainer.addEventListener('mousedown', (e) => {
        let offsetX = e.clientX - menuContainer.getBoundingClientRect().left;
        let offsetY = e.clientY - menuContainer.getBoundingClientRect().top;
  
        function handleDragMove(e) {
          menuContainer.style.left = e.clientX - offsetX + 'px';
          menuContainer.style.top = e.clientY - offsetY + 'px';
        }
  
        function handleDragEnd() {
          document.removeEventListener('mousemove', handleDragMove);
          document.removeEventListener('mouseup', handleDragEnd);
        }
  
        document.addEventListener('mousemove', handleDragMove);
        document.addEventListener('mouseup', handleDragEnd);
      });
  
      menuIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        menuContainer.style.display = (menuContainer.style.display === 'none' || menuContainer.style.display === '') ? 'block' : 'none';
      });
  
const initialIconPosition = {
  left: window.innerWidth - menuIcon.offsetWidth - 30,
  top: window.innerHeight - menuIcon.offsetHeight - 300
};

menuIcon.style.left = initialIconPosition.left + 'px';
menuIcon.style.top = initialIconPosition.top + 'px';

const initialContainerPosition = {
  left: window.innerWidth - menuContainer.offsetWidth - 30,
  top: window.innerHeight - menuContainer.offsetHeight  -300
};

menuContainer.style.left = initialContainerPosition.left + 'px';
menuContainer.style.top = initialContainerPosition.top + 'px';

    });

    // Add zoom in and zoom out functionality
document.getElementById('zoomInButton').addEventListener('click', function () {
    map.zoomIn();
});

document.getElementById('zoomOutButton').addEventListener('click', function () {
    map.zoomOut();
});
  </script>
    
</body>
</html>