
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>REGISTRATION FORM</title>
  <!-- Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Membership Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  
function ShowHideDiv2() {
    var soflow = document.getElementById("soflow");
    var BCO = document.getElementById("BCO");
    BCO.style.display = soflow.value == "A/C" ? "block" : "none";
    document.getElementById("myId").required = (BCO.style.display == "block");
      
}

</script>
  <!-- //Meta-Tags -->
  <!-- Stylesheets -->
  <link href="style.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
  <!--//fonts-->
<?php

if(isset($_POST['su']))
    {
      
      $scheme=$_POST['scheme'];
      $dept=$_POST['department'];
      $desc=$_POST['desc'];
      
      
      include 'db.php';
      
      if($scheme=="g_scheme")
      {
          $r=mysqli_query($con,"INSERT INTO `g_scheme` (`department`, `description`) VALUES ('$dept', '$desc')");
          $r1=mysqli_query($con,"select email from update_detail where gscheme='Yes' ");
          $row=mysqli_fetch_row($r1);
          foreach($row as $i)
          {
            $from_add = "sangeethac@buddhablock.in"; 
            $to_add = $i; //<-- put your yahoo/gmail email address here
            $subject = "BUDDHABLOCK - GOVERNMENT SCHEME";
            $message = "Hi info from BUDDHABLOCK, a new governament scheme had been added, to check schemes.buddhblock.in";
            $headers = "From: $from_add \r\n";
            $headers .= "Reply-To: $from_add \r\n";
            $headers .= "Return-Path: $from_add\r\n";
            $headers .= "X-Mailer: PHP \r\n";
  
  
  mail($to_add,$subject,$message,$headers);

header("Location:admin.php");




          }
        }
      if($scheme=="p_scheme")
      {
          $r=mysqli_query($con,"INSERT INTO `p_scheme` (`department`, `description`) VALUES ('$dept', '$desc')");
          $r1=mysqli_query($con,"select email from update_detail where pscheme='Yes' ");
          $row=mysqli_fetch_row($r1);
          foreach($row as $i)
          {
            $from_add = "sangeethac@buddhablock.in"; 
            $to_add = $i; //<-- put your yahoo/gmail email address here
            $subject = "BUDDHABLOCK - PRIVATE SCHEME";
            $message = "Hi info from BUDDHABLOCK, a new private scheme had been added, to check schemes.buddhablock.in";
            $headers = "From: $from_add \r\n";
            $headers .= "Reply-To: $from_add \r\n";
            $headers .= "Return-Path: $from_add\r\n";
            $headers .= "X-Mailer: PHP \r\n";
  
  
  mail($to_add,$subject,$message,$headers);

header("Location:admin.php");




          }
      }
    
     }

?>






</head>

<body>
  <header>
    <h1 style="center;"> Scheme Form</h1>
  </header>
  <div class="w3ls-reg">
    <form action="" method="post" >


     <div class="mr_agilemain last-field">
        <div class="field-w3-agile-grid">
          <label>Scheme</label>
        </div>
    <div class="field-right">
    
    <select name="scheme"  id="soflow" editable="true" required=""  >
 
    <option value="null" selected>Select... </option>
    <option value="g_scheme" >Goverment Scheme</option>
    <option value="p_scheme" >Private Scheme</option>
    </select>
    </div>
    </div> 


     <div class="mr_agilemain last-field">
        <div class="field-w3-agile-grid">
          <label>Department</label>
        </div>
    <div class="field-right">
    
    <select name="department"  id="soflow" editable="true" required=""  >
 
    <option value="null" selected>Select... </option>
    <option value="Adi Dravidar and Tribal Welfare Department" >Adi Dravidar and Tribal Welfare Department</option>
    <option value="Agriculture Department" >Agriculture Department</option>
     <option value="School Education Department" >School Education Department</option>
    </select>
    </div>
    </div> 


	   <div class="mr_agilemain">
        <div class="field-w3-agile-grid">
          <label>
            description :</label>
        </div>
        <div class="field-right">
          <textarea name="desc" placeholder="  " cols="60" rows="10" required=""></textarea>
        </div>
      </div>


     <div class="w3ls-contact mr_agilemain w3l-sub">
        
        <input type="submit" value="SUBMIT" name="su">

      </div>
   
  
</body>
<!-- //Body -->

</html>



