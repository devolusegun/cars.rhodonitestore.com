<?php 

$file 	= './dbc_config/config.xml';

$xmlstr = file_get_contents($file);

$xml 	= simplexml_load_string($xmlstr);

$config	= $xml->xpath('//config');	

$current_version = $config[0]->version;

$current_version = explode('.',$current_version);

?>

<?php $curr_lang = ($this->uri->segment(1)!='')?$this->uri->segment(1):'en'; ?>

   <div class="page-title">

        <div>

          <h1><i class="fa fa-file-o"></i> Dashboard( V <?php echo $config[0]->version;?>)</h1>

          <h4>Overview, stats and more</h4>

        </div>

      </div>





    <div class="row">

      <div class="col-md-7">

        <div class="row">

          <div class="col-md-7">

            <div class="row">

              <div class="col-md-12">

                <div class="tile">

                  <p class="title">

                    Rhodonite - Listing your Cars

                  </p>

                  <p>

                    Find automobiles with ease.

                  </p>

                  <div class="img img-bottom">

                    <i class="fa fa-desktop"></i>

                  </div>

                </div>

              </div>

            </div>

            

          </div>

          <div class="col-md-5">

            <div class="row">

              <div class="col-md-12 tile-active">

                <div class="tile tile-magenta">

                  <div class="img img-center">

                    <i class="fa fa-desktop"></i>

                  </div>

                  <p class="title text-center">

                    Autohub Admin

                  </p>

                </div>

                <div class="tile tile-blue">

                  <p class="title">

                    Autohub Admin

                  </p>

                  <p>

                    Rhodonite is the most complete and friendly Car Listing service

                  </p>

                  <div class="img img-bottom">

                    <i class="fa fa-desktop"></i>

                  </div>

                </div>

              </div>

            </div>

            

          </div>

        </div>

      </div>

      <div class="col-md-5">

        <div class="row">

          <div class="col-md-6">

            <div class="tile tile-orange">

              <div class="img">

                <i class="fa fa-users"></i>

              </div>

              <div class="content">

                <p class="big">
<!-- **CODEINE Was Here. Hoping this cards can be used as Notice board in future -->
                  <?php 
                  /**$CI = get_instance();
                  $CI->load->database();
                  $query = $CI->db->get_where('users',array('status'=>1));
                  echo $query->num_rows();**/
                  ?>

                </p>

                <p class="title">

                  Dealers Hub

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="tile tile-dark-blue">

              <div class="img">

                <i class="fa fa-bars"></i>

              </div>

              <div class="content">
                <p class="big">
                    <!-- **CODEINE Was Here. Hoping this cards can be used as Notice board in future -->
                  <?php
                  #$query = $CI->db->get_where('posts', array('status'=>1));
                  #echo $query->num_rows();
                  ?>
                </p>
                <p class="title">
                  Notice Board
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!--.........CODEINE.....Was Here..............-->
        <!--<div class="col-md-12">
        <a href="http://baratech.com/app/autocon/doc" target="_blank" class="btn btn-info">See Full Documentation</a>
      </div>-->
    </div> 

