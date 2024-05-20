<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="application/css/bootstrap-4.4.1.css">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">

    <title>Coca Cola 3D App</title>

  </head>
  <body>
    
    <!-- Logo and navigation bar -->
    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container-fluid">  
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="index.php">
            <h1>Coca</h1>
            <h2>Cola</h2>
            <h3>Journey</h3>
            <p>Refreshing the world, one story at a time</p>
        </a>
        </div>
                 
        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Link Menu item button to the links class navbar-collapse selector -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <!-- Added navAbout ID. -->
              <li class="nav-item">
                  <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
              </li>
          
              <!-- Replaced Dropdown with single nav lnk to models -->
              <li class="nav-item">
                <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Start 3D App SPA Contents -->
    <div class="container-fluid main_contents"> <!-- Start SPA Contents -->
        <!-- Home page block element -->
        <div id="home">
          <div class="row"> <!-- Main_3D Image or Carousel -->
            <div class ="col-sm-12">
              <div id="main_3d_image">
              </div> 
            </div>
          </div>

          <!-- Row of cards on the grid -->
          <div class="row">
            <div class="col-sm-4">
                <div class="card">
<!--                     <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
 -->                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery_images/cokeCan-removebg-preview.png" alt="Coca Cola">
<!--                     </a>
 -->                    <div class="card-body">
                        <div id="title_left" class="card-title drinksText"></div>
                        <div id="subTitle_left" class="card-subtitle drinksText"></div>
                        <div id="description_left" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Find out more ...</a>          
                    </div>
                </div>
            </div>
        
            <div class="col-sm-4">
                <div class="card">
<!--                     <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
 -->                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery_images/spriteCan-removebg-preview.png" alt="Sprite">
<!--                     </a>
 -->                    <div class="card-body">
                        <div id="title_centre" class="card-title drinksText"></div>
                        <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                        <div id="description_centre" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                      </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
<!--                     <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
 -->                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery_images/pepperCan-removebg-preview.png" alt="Dr Pepper">
<!--                     </a>
 -->                    <div class="card-body">
                        <div id="title_right" class="card-title drinksText"></div>
                        <div id="subTitle_right" class="card-subtitle drinksText"></div>
                        <div id="description_right" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                      </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
<!--                     <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
 -->                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery_images/fantaCan-removebg-preview.png" alt="Fanta">
<!--                     </a>
 -->                    <div class="card-body">
                        <div id="title_bl" class="card-title drinksText"></div>
                        <div id="subTitle_bl" class="card-subtitle drinksText"></div>
                        <div id="description_bl" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/fanta" class="btn btn-primary btn-responsive">Find out more ...</a>
                      </div>
                </div>
            </div>

          </div>
        </div> <!-- End home page -->

        <!-- About page block element -->
        <div id="about" >
        </div> <!-- End home page -->

        <!-- Start X3D models and 3D Image Gallery -->
        <div id="models">
          <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
          <div class="row">
              <!-- X3D Models — Place 4 models in here for the assignment -->
              <div class="col-sm-8">
                  <div class="card text-left">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <!-- X3D models -->
                        <div>
                          <button type="button" class="btn btn-primary btn-responsive" onclick="cokeScene();">Coke</button>
                          <button type="button" class="btn btn-primary btn-responsive" onclick="spriteScene();">Sprite</button>
                          <button type="button" class="btn btn-primary btn-responsive" onclick="pepperScene();">Pepper</button>
                          <button type="button" class="btn btn-primary btn-responsive" onclick="fantaScene();">Fanta</button>

                           <!-- Place the X3D code here -->
                          <div class="model3D">
                            <x3d id="wire">
                              <scene>
                                  <Switch whichChoice="0" id='SceneSwitch'>
                                      <transform>
                                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/cokeCanFinal.x3d" > </inline>
                                      </transform>
                                      <transform>
                                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/spriteCanFinal.x3d"> </inline>
                                      </transform>
                                      <transform>
                                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/pepperCanFinal.x3d"> </inline>
                                      </transform>
                                      <transform>
                                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/fantaCanFinal.x3d"> </inline>
                                      </transform>
                                  </Switch>
                              </scene>
                            </x3d>
                          </div> 
                          <a href="https://users.sussex.ac.uk/~mr603/3dapp/assignment/index.php/apigetdata" class="btn btn-primary btn-responsive">Full X3D Model Database</a>
                        </div>               
                      </div>
                    </div>
                  </div>

              <!-- 3D image gallery -->
              <div class="col-sm-4">
                  <div class="card text-left">
                      <div class="card-header gallery-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                              <a class="nav-link active" href="#">Gallery</a>
                          </li>
                      </div>
                      <div class="card-body">
                          <div class="card-title title_gallery drinksText"></div>
                          <div class="gallery" id="gallery"></div>
                          <div class="card-text description_gallery drinksText"></div>
                      </div>
                  </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->
          </div> <!-- End row for X3D Model and Gallery -->
        </div> <!-- End X3D Models and Gallery -->
    
        <!-- Start the interaction panels -->
        <div id="interaction" class="row" >
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
        </div> <!-- End the interaction panels -->

        <!-- Row to hold one card to hold the coke descriptive text, etc.-->
        <div id="cokeDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End coke description contents -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
        <div id="spriteDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End sprite description contents -->

        <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
        <div id="pepperDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End pepper description contents -->  

    </div>  <!-- End 3D App SPA Contents --> 

    <!-- Your 3D App footer -->
    <nav class="navbar navbar-expand-sm footer">
        <div class="container">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>&copy 2024 Mobile Web 3D Applications </span></p>
            </div>
            <div class="navbar-text social">
                  <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav> 

    <!-- My 3D app modals -->
    <!-- Contact modal -->
    <!-- The  modal -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="application/js/jquery-3.4.1.js"></script>
    <script src="application/js/popper.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="application/js/bootstrap-4.4.1.js"></script>

     <!-- Include the x3dom JavaScript -->
     <script src='application/js/x3dom.js'></script>

    <!-- Font Awesome Version 5 -->
    <!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
    <!-- <script src="all.js"></script> -->

    <!-- Include the custom JavaScript -->
    <script type='text/javascript' src='application/js/custom.js'></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="application/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="application/js/gallery_generator.js"></script>

    <!-- JavaScript model interaction  -->
    <script src="scripts/js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="application/js/modelInteractions.js"></script>

     <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
     <script src="application/js/jquery.fancybox.min.js"></script>

  </body>
</html>
