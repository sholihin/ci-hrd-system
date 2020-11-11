<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="">



<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="POWER MANAGEMENT">

  <title>Sakit - Dewanstudio Power Management</title>

  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">

  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/ico/favicon.png">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"

  rel="stylesheet">



  <!-- CSS -->

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/app.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/core/menu/menu-types/horizontal-menu.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">



  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">



  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/pickers/daterange/daterangepicker.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/css/pickers/pickadate/pickadate.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/plugins/pickers/daterange/daterange.min.css">

  <!-- END CSS -->



</head>









<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"

data-open="click" data-menu="horizontal-menu" data-col="2-columns">

  <!-- fixed-top-->

  <?php $this->load->view('inc/menuluar');?>

  



  <div class="app-content container center-layout mt-2">

    <div class="content-wrapper">

      <div class="content-body">

        <div>

          <h1 class="text-center" style="padding:40px 0 40px 0;"><b>HRD SYSTEM</b></h1>

        </div>



        <!-- menu absen dll -->
        <div class="row">

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>absen">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">Absen</h3>
                    </div>
                    <div>
                      <i class="icon-check info font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>cuti">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">Cuti</h3>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>sakit">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">Sakit</h3>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>izin">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">Izin</h3>
                    </div>
                    <div>
                      <i class="icon-doc warning font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>


          <div class="col-xl-2 col-lg-6 col-6">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>tugas">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="primary">Tugas</h3>
                    </div>
                    <div>
                      <i class="icon-doc primary font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>


          <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="<?=base_url()?>reportproject">
                  <div class="card-body-report">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">Project Report</h3>
                    </div>
                    <div>
                      <i class="icon-pie-chart info font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <!-- <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="penilaian.html">
                  <div class="card-body">
                    <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">Penilaian</h3>
                    </div>
                    <div>
                      <i class="icon-pencil info font-large-2 float-right"></i>
                    </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div> -->

        </div>
        <!-- end menu absen dll -->

        

	     <div class="row">

          <div id="recent-transactions" class="col-xl-8 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                <h2 class="card-title-center">SAKIT</h2>

              </div>

      			  <!-- Pick-A-Date Picker start -->

      				<section id="pick-a-date">

      				  <div class="card">

      					<div class="card-content collapse show">

      					  <div class="card-body">

      						<form method="POST" enctype="multipart/form-data">

                  <?=validation_errors()?>

                  <?=$msg?>

      						  <div class="row">

      							<div class="col-md-12 col-sm-6 col-12">

      							  <div class="form-group">

      								<div class="row">

      								  <div class="col-lg-6">

      									<h5>Mulai Tanggal</h5>

      									<div class="input-group">

      									  <div class="input-group-prepend">

      										<div class="input-group-prepend">

      											<span class="input-group-text"><i class="ft-calendar"></i></span>

      										</div>

      									  </div>

      									  <input id="picker_from" name="tanggal_mulai" class="form-control datepicker" type="date">

      									</div>

      								  </div>

      								  <div class="col-lg-6">

      								    <h5>Sampai Tanggal</h5>

      									<div class="input-group">

      									  <div class="input-group-prepend">

      										<div class="input-group-prepend">

      											<span class="input-group-text"><i class="ft-calendar"></i></span>

      										</div>

      									  </div>

      									  <input id="picker_to" name="tanggal_akhir" class="form-control datepicker" type="date">

      									</div>

      								  </div>

      								  <!-- <div class="col-lg-12">

      									  <h5 class="pb-xl-1 py-xl-1">Alasan</h5>

      									  <textarea id="" rows="5"  name="alasan" class="form-control" name="comment" placeholder="Tulis Alasan Anda"></textarea>

      								  </div> -->

      								  <div class="col-lg-12 pb-xl-1 py-xl-1">

                            <h5>Silahkan Upload Surat Sakit Anda :</h5>

                            <fieldset class="form-group">

                              <input type="file" name="userfile" class="form-control-file" id="exampleInputFile">

                            </fieldset>



      								  </div>

                        <div class="pr-xl-1 px-xl-1">

                          <button type="submit" class="btn btn-info btn-lg btn-block float-right"><i class="ft-check-circle"></i> SUBMIT</button>

                        </div>

                         

      								</div>

      								

      							  </div>

      							</div>

      						  </div>

      						</form>

      					  </div>

      					</div>

      				  </div>

      				</section>

      				<!-- Pick-A-Date Picker end -->

            </div>

          </div>



          <div id="recent-transactions" class="col-xl-4 col-lg-6 col-12">

            <div class="card">

              <div class="card-header">

                <h4 class="card-title-center">JUNE 2018</h4>

                <!-- <h5 class="p-xl-1"><b>TOTAL SAKIT : <?php echo $jumlahtotalsakit; ?></b> -->
                <h5 class="p-xl-1"><b>TOTAL SAKIT : <?= jumlah_sakit_y(user_id()) ?></b> 

                </h5>



                <div class="pl-xl-1 pr-xl-1 px-xl-1">

                  <b>LAMA SAKIT:</b>

                  <?php if(!empty($ambil_sakit)){ ?>

                  <?php foreach($ambil_sakit as $getsakit){ ?>



                 <p class="m-xl-0">

                   <?php 

                      $tanggalmulai = date('d-m-Y', strtotime($getsakit['tanggal_mulai']));

                      $tanggalakhir = date('d-m-Y', strtotime($getsakit['tanggal_akhir']));

                   ?>

                   <?php if(!empty($getsakit['tanggal_akhir'])){ ?>

                   <?php echo  $tanggalmulai;?> - <?php echo  $tanggalakhir;?>

                   <?php } elseif(empty($getsakit['tanggal_akhir'])) { ?>

                   <?php echo  $tanggalmulai;?>

                   <?php } ?>

                 </p>

                  <?php } ?>

                  <?php } ?>

                </div>

                <br>

                <a class="btn btn-block btn-success " href="<?=base_url()?>sakit/detil_sakit">Detil</a>
                <?php if ($this->session->userdata('rule') == 1 || $this->session->userdata('rule') == 2) { ?>
                <a class="btn btn-block btn-success " href="<?=base_url()?>sakit/list_sakit">List Sakit</a>
                <?php } ?>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  

  <!-- Footer -->

  <footer class="footer footer-transparent footer-light navbar-shadow">

    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">

      <span class="float-md-center d-block d-md-inline-block">Copyright &copy; 2018 DEWANSTUDIO, All rights reserved. </span>

    </p>

  </footer>

  <!-- end Footer -->

  

  <!-- JS -->

  <script src="<?=base_url()?>assets/vendors/js/vendors.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="<?=base_url()?>assets/vendors/js/ui/jquery.sticky.js"></script>

  <script src="<?=base_url()?>assets/js/core/app-menu.min.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/js/core/app.min.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/js/scripts/customizer.min.js" type="text/javascript"></script>



  <script type="text/javascript" src="<?=base_url()?>assets/vendors/js/ui/jquery.sticky.js"></script>

  <!-- <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script> -->

  <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"

  type="text/javascript"></script>

  <script src="<?=base_url()?>assets/vendors/js/pickers/daterange/daterangepicker.js"

  type="text/javascript"></script>



   <script src="<?=base_url()?>assets/js/scripts/pickers/dateTime/pick-a-datetime.js"

  type="text/javascript"></script>



  <script src="<?=base_url()?>assets/js/scripts/ui/jquery-ui/date-pickers.min.js" type="text/javascript"></script>

  <!-- JS -->



</body>



</html>



