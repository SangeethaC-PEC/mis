<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Schemes Site</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--
afflatus, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

		<div id="sitename">
			<div class="width">
				<h1><a style="color:#10469E;"> E-FRIEND FOR GOVERMENT SCHEMES</a></h1>
                
				<nav>
				 
				
					<ul >
					<img src="a.png">
							<div class="dropdown">
							<button class="dropbtn">LOGIN 
							  <i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
							  <a href="#">PROFILE</a>
							  <a href="#">LOGOUT</a>
							</div>
						  </div>  
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
	
		<section id="body" class="width clear">
			<aside id="sidebar" class="column-left">
				<ul>
                	<li>
						
                        <ul class="blocklist">
						<li><a>MENU</a></li>
                            <li class=""><a href="gschemes.html">GOVERNMENT SCHEMES</a></li>
                            <li><a href="pschemes.html">PRIVATE SCHEMES</a></li>
                            <li><a href="exams.html">EXAMS</a></li>
                            <li><a href="workshop.html">WORKSHOPS</a></li>                           
                        </ul>
					</li>	
				</ul>
			</aside>
			<section id="content" class="column-right">
                	<p style="color:#10469E;"><b>Department Wise &nbsp;&nbsp;&nbsp; Bonoficiary Wise &nbsp;&nbsp;&nbsp; A to Z &nbsp;&nbsp;&nbsp; Search</b></p>
					<hr/>
	    <article>
			<h2 style="color:black;">
				<div class="container">
  <h2>EVENTS</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Department</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php
 include 'db.php';
$r=mysqli_query($con,"select * from g_scheme where department='Adi Dravidar and Tribal Welfare Department' ");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo "<td> ".$row[4]."</td>";
echo "<td> ".$row[5]."</td>";
echo "<td> ".$row[6]."</td>";
echo  "</tr>";
}

?>
  </tbody>
  </table>




  <form action="approve.php">
 <h2>Approve</h2>
 <input type="submit" name="sub" value="approve">
 
</form>
</div>
			</h2>
					</article>
		</section>

	</section>
</body>
</html>
