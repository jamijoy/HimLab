
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Clinical departments for the purposes of these definitions an area of doctor practice and, without limiting the foregoing, shall include a ward, area or place of doctor practise with a patient/client population.</p>
        </div>

        <div class="row">
          
          <?php

            include('assets/json/departments.php');
            foreach (json_decode($departmentJSON) as $key => $value) {
              ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                  <a href="<?php echo $value->url; ?>">
                    <div class="icon-box">
                      <div class="icon"><i class="<?php echo $value->icon_class; ?>"></i></div>
                      <h4><?php echo $value->name; ?></h4>
                      <p><?php echo $value->details; ?></p>
                    </div>
                  </a>
                </div>
              <?php
            }
          
          ?>

          

        </div>

      </div>
    </section><!-- End Services Section -->
