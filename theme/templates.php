<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?> | Ayannas Grille</title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 
<link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">
 <style type="text/css">

.p {

  color: white;
   margin-bottom: 0;
  margin-top: 0;
  /*padding: 0;*/
  /*float: right;*/
  list-style: none;
}

.p > a { 
  color: white;
  /*text-align: center;*/
  margin-bottom: 0;
  margin: 0;
  padding: 0;
  text-decoration:none;
  background-color:  #0000FF;
}
.p > a:hover ,
.p > a:focus {
   color: maroon; 
   text-decoration:none;
   background-color: #2d52f2;
}


 
.title-logo  {
    color: maroon;
    text-decoration:none;
    font-size: 50px;
    font-family: "Script MT Bold";
    /*font-style: bold;*/
    padding: 0;
    margin: 0;
    top: 0;
  /*  width:1185px;
    height:337px;*/
  
  }
.title-logo:hover {
  color: yellow; 
  text-decoration:none; 
}
.title-logo   img {
  width: 100%;
  height: 100%;
}
.carttxtactive {
  color: red;
  font-style: bold;
  box-shadow: red;

}
.carttxtactive:hover {
   color: white;
}

</style>

<?php
if (isset($_SESSION['gcCart'])){
  if (@count($_SESSION['gcCart'])>0) {
    $cart = '<span class="carttxtactive">('.@count($_SESSION['gcCart']) .')</span>';
  } 
 
} 
 ?>
 
<script type="text/javascript">
   

</script>
</head>

<body style="background-color: lightslategray;" onload="totalprice()" >

<div class="navbar-fixed-top navbar-TOPsm  col-md-10    col-md-offset-1"    role="navigation" style="background-color:maroon;color:maroon">
  <div class="container">
    <div class="navbar-header">
          <h5 class="navbar-menu p" >Ayannas Grille E-Marketing System<</h5>
         <button type="button" class="navbar-toggle btn-xs p" data-toggle="collapse" data-target=".smMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span></button> 
    </div>
      <div  class="collapse navbar-collapse  smMenu "> 

        <ul class="navbar-nav p navbar-left tooltip-demo" style="margin-left:-8%;"> 
            <li class="dropdown dropdown-toggle ">
              <a  data-toggle="tooltip" data-placement="left" title="Contact Us"   href="<?php echo web_root.'index.php?q=contact';  ?>">
               <i class="fa fa-phone fa-fw"> </i>  09500800397
              </a>
            </li>
            <li class="dropdown dropdown-toggle">
              <a   data-toggle="tooltip" data-placement="right"  title="Cart List"  href="<?php echo web_root.'index.php?q=cart';  ?>"> 
               <i class="fa fa-shopping-cart fa-fw"> </i> <?php echo  isset($cart) ? $cart : "(0)" ; ?> 
              </a>
            </li>
          </ul>
          <ul class="navbar-nav p navbar-right">
            <?php if (isset($_SESSION['CUSID']) ){  

$mydb->setQuery("SELECT count(*) as 'num',SUMMARYID FROM  `tblsummary` 
      WHERE     `CUSTOMERID`='".$_SESSION['CUSID']."'  AND 
      ORDEREDSTATS in ('Confirmed','Cancelled') AND HVIEW=0");    
$res = $mydb->loadResultList();

    foreach ($res as $key) { 
    $_SESSION['gcNotify'] = $key->num; 
  }
?>
     

            <li class="dropdown  dropdown-toggle">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-user fa-fw"></i>
                    <?php echo $_SESSION['CUSNAME']; ?>
                  <i class="caret"> </i> 
               </a>

                  <ul class="dropdown-menu dropdown-acnt"> 
                    <li><a title="Edit" href="<?php echo web_root; ?>index.php?q=profile"  >My Profile</a></li> 
                    <li> <a  href="logout.php">Logout</a></li>  
                  </ul> 
            </li>  
 
<?php  } ?>

        </ul>
      </div>

  </div>
</div>


 <!-- <div class="col-md-10 col-md-push-1 " style=" margin-top:-2%">  -->
  <div class="col-md-10 col-md-offset-1 " >  
   <!-- <div class="col-md-12"> -->
    <div class="row "> 
     <p style="margin-top: -50px;" class="title-logo"> 
        <a  class=""  href="<?php echo web_root; ?>index.php" title="">
           <img src="img/ayannasgrillelogo.png" alt="logo"  />
        </a>
    </p> 
     </div>    
   </div>

 <div class="navbar navbar-static-top navbar-magbanua col-md-10    col-md-offset-1"    role="navigation" style="background-color:maroon;color:maroon">
    
      <div class="container ">
        <div class="navbar-header"> 
            <div class="navbar-menu p" >Menu</div>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bigMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 

       <!--  <a class="navbar-brand"  href="<?php echo web_root; ?>index.php" title="View Sites">GC Appliance Centrum Corp</a> -->
        </div>
<?php
  
  ?>
        <div class="collapse navbar-collapse bigMenu" style="float:right" > 
          <!-- <ul class="nav navbar-nav" style="margin-left:-4%;"    >  -->

          <ul class="nav navbar-nav" > 
            <li class="dropdown dropdown-toggle <?php echo ($_GET['q']=='') ? "active" : false;?> ">
              <a href="<?php echo web_root.'index.php'; ?>"> Home</a>
            </li>
            <li class="dropdown-toggle <?php echo ($_GET['q']=='contact') ? "active" : false;?>">
              <a href="<?php echo web_root.'index.php?q=contact';  ?>"> Contact Us</a>
            </li>
            <li class="dropdown-toggle <?php echo ($_GET['q']=='product') ? "active" : false;?>" >
              <a href="<?php echo web_root.'index.php?q=product'; ?>"> Product</a>
            </li>
           <li class="dropdown-toggle <?php echo ($_GET['q']=='cart') ? "active" : false;?> ">
             <a href="<?php echo web_root.'index.php?q=cart';  ?>"> 
               <i class="fa fa-shopping-cart fa-fw"> </i><?php echo  isset($cart) ? $cart : "(0)" ; ?>
             </a>
          </li>
          <?php 
            
            if( isset($_SESSION['orderdetails'])){
              if (@count($_SESSION['orderdetails'])>0){

          ?>
         <li class="dropdown-toggle <?php echo ($_GET['q']=='orderdetails') ? "active" : false;?>">
            <a href="<?php echo web_root.'index.php?q=orderdetails';  ?>">Order Details</a>
         </li>
         <?php   }   } ?>
           <!-- <li class="dropdown-toggle"> <a data-target="#smyModal" data-toggle="modal" class="signup" href="">Login</a></li> -->
           
          </ul>           
        </div> 
        <!--/.navbar-collapse --> 
    </div> 
   <!-- /.nav-collapse --> 
  </div> 
 <!-- /.container -->

<!-- pop up login -->
<?php // include "LogSignModal.php"; ?> 
<!-- end pop up login -->
  
<div class="col-md-10 col-md-push-1 "> 
   <!-- start content --> 
        <div class="row"> 
          <div id="page-wrapper">
               <?php

          if($title=='Profile' or $title=='Track Order' ){
                echo ' <div class="row">';

                require_once $content;
                echo ' </div><br/>';
     
              }else{
  // check_message(); ?>



            <div class="row">
              <div class="col-lg-8">
                <div class="panel panel-default">
                  <div class="panel-heading">
                  <b><?php   
                  echo  $title . (isset($_GET['category']) ?  '  |  ' .$_GET['category'] : '' )?></b> 
                  </div>
                  <div class="panel-body">
                 
                    <?php require_once $content; ?>
           
                     
                  </div>
                <!--   <div class="panel-footer">
                      Panel Footer
                  </div> -->
              </div>
          </div> 
           <div class="col-lg-4">
          
                  <?php 
                  require_once "sidebar.php";
                
                    ?>
             </div>
        </div>
        <?php }

?>
       </div>
            <footer class="panel-footer" style="background-color:#6a2c28;color:white" >
              <p align="left" >&copy; Young Entrepreneurs Society</p>
           </footer>
      </div>

  </div>  
<!-- end of page  -->


 <!-- modalorder -->
 <div class="modal fade" id="myOrdered">
 </div>
<!-- end -->
 
    <!-- jQuery -->
    <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript --> 
    <!-- DataTables JavaScript -->
    <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/ekko-lightbox.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

    <!-- Custom Theme JavaScript --> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
 <script type="text/javascript">
  $(document).on("click", ".proid", function () {
    // var id = $(this).attr('id');
      var proid = $(this).data('id')
    // alert(proid)
       $(".modal-body #proid").val( proid )

      });

</script>
 <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var BRGY = document.getElementById('BRGY').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&BRGY="+BRGY+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>     

</body>
</html>