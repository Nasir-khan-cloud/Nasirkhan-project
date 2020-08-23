
<?php include 'head.php'; ?>
        <div class="row">
            <div class="col m-0 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="<?php echo BASE_URL; ?>image/slide1.png" alt="First slide" style="height: 400px; width: 100%;" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?php echo BASE_URL; ?>image/slide2.png" alt="Second slide" style="height: 400px; width: 100%;" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?php echo BASE_URL; ?>image/slide3.jpg" alt="Third slide" style="height: 400px; width: 100%;" >
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
        </div>



        <div class="clear"> </div>
        <div class="content-grids">
          <div class="wrap">


        </div>
       </div>

       <?php include 'footer.php'; ?>
