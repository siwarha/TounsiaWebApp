<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Tounsia Adminstration</title>

  <!-- Favicons -->
  <link href="img/myhome.png" rel="icon">
  <link href="img/myhome.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>TOUN<span>SIA</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
        
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
       MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/myhome.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Adminstration</h5>
          <li class="mt">
            <a  href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
         
          <li class="sub-menu">
            <a  href="advanced_table.php">
              <i class="fa fa-book"></i>
              <span>Women Registered</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a class="active" href="responsive_table.php">
              <i class="fa fa-th"></i>
              <span>Women Complaint</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.php">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
 
         
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Women Complaint</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th class="hidden-phone">Women Name</th>
                    <th>Type of Violence</th>
                    <th>Who is?</th>
                    <th>Story</th>
                    <th style="display:none;">Phone</th>
                    <th style="display:none;">Adresse</th>
                    <th>Custom</th>



                  </tr>
                </thead>
                <tbody>

                  <?php
                  include("includes/db.php");
                  $reff = "Users";
                  $data = $database->getReference($reff)->getValue();
                  $i = 0;

                  foreach($data as $k => $data1){

                  $name = $data1['username'];

                  $ref = "DemandeUser/$name";
                  $reference = $database->getReference($ref);

                  $snapshot = $reference ->getSnapshot();

                  $value = $snapshot->getValue();


                  if($value) {
                  foreach($value as $key => $data2){
                  ?>
                  <tr class="gradeX">
                  <td> <?php $i++; echo $i; ?></td>
                   <td><?php echo $data2['date']; ?></td>
                    <td><?php echo $data2['name']; ?></td>
                    <td><?php echo $data2['violence']; ?></td>
                    <td><?php echo $data2['personne']; ?></td>
                    <td><?php echo $data2['histoire']; ?></td>
                    <td style="display:none;" ><?php echo $data2['adress']; ?></td>
                    <td style="display:none;"><?php echo $data2['tel']; ?></td>
                    <td style="text-align:center" >
                            <a  class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                     </td>
                   
                  </tr>
                  <?php 

           }
          }
           }
           ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
   
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">

    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
    
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Women Name:</td><td>'+aData[3]+'</td></tr>';
      sOut += '<tr><td>Phone:</td><td>'+ aData[8]+'</td></tr>';
      sOut += '<tr><td>Address:</td><td>'+aData[7]+'</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>
</html>
