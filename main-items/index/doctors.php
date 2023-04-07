
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <?php

            if(isset($_GET['Department'])){
              ?>              
                <p>From the department of <?php echo $_GET['Department']; ?></p>
              <?php
            } else {
              ?>
              <div class="alert alert-info text-center">Please select a department first. <a href="/HimLab">Click here.</a></div>
              <?php
            }
           ?>
        </div>

        <div class="row">

        <?php

            if(isset($_GET['Department'])){
                
                require_once('assets/db/model/index_model.php');
                $indObj = new IndexModel();
                $rs = $indObj->getDoctorsListByDepartment($_GET["Department"]);
                while ($d = mysqli_fetch_assoc($rs)) {
                  ?>

                    <div class="col-lg-6 mt-4">
                      <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-<?php echo rand(1,4); ?>.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                          <h4><?php echo $d["Name"]; ?></h4>
                          <small class="h2 small text-muted"><?php echo $d["Qualification"]; ?></small>
                          <p><?php echo $d["Contact_Details"] .', '. $d["Department"] .', '. $d["Institute_Name"]; ?></p>
                          <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php
                }
            }
        ?>

<!-- 
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Doctors Section -->
