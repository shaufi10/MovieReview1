<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reviewer</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/search_box.css" rel="stylesheet" type="text/css" />
<link href="css/styles1.css" rel="stylesheet" type="text/css" />

</head>
<head>
<title>Search Box Example 1</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />

</head>
<body>
	<!-- HTML for SEARCH BAR -->
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
</body>
<body>
<body>
<div class="header-wrapper">
 <input type="button" id="button" value="Profile"/>
 <a href="http://localhost/MovieReview/logout.php">
 <input type ="button" id="button1" value="Logout"/>
 </a>
  <div class="header">
  <div class="judul">
    <h1>All About Movie</h1>
    </div>
    <div class="logo">
      <div class="header1">
      <h1>Reviewer</h1>
      </div>
    </div>
    <!---logo ends here -->
    <div class="menu">
      <ul>
        <li><a href="home.php">Home</a>me</li>
        <li><a href="news.php">Movie News</a></li>
        <li><a href="schedule.php">Schedule</a></li>
        <li><a href="review.php">Review</a></li>
      </ul>
    </div>
    <!--- menu ends here -->
  </div>
  <!---headerends here -->
</div>
<!---header-wrapper-ends here -->
<style>
  #search-form {
  float: center; 
  margin:70px 0 100px 170px;
  width:690px;
  overflow:hidden; 
}

#search-page-border { 
  border:1px solid #dbdbdb;
  border-radius:4px; padding:7px; float:left; 
}

.search-terms { 
  font-size:26px;
  border:none; 
}

#search-which { 
  margin:0 10px; 
  padding-left:8px; 
  border-left:1px solid #dbdbdb; 
}

#search-which, select option { 
  font-size:20px; 
}

#search-submit { 
  padding:12px 30px;
  margin-left:20px; 
  font-size:20px; 
  float:center; 
  color:#ffffff; 
  background:#F00; 
  border:none; 
  border-radius: 3px; 
}

.accessibly-hidden {
  left: -999em;
  position: absolute;
}
  
</style>
<form action="#" method="post" id="search-form">
 <span id="search-page-border">
 <label class="accessibly-hidden">Search for:</label>
 <input type="text" class="search-terms" name="search-terms" onfocus="if(this.value == 'Search...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search...'; }" value="Search..." />
 <label for="search-which" class="accessibly-hidden">Genre:</label>
 <select name="search-which" id="search-which" style="width: auto"><option value="members">Action</option>
 <option value="groups">Comedy</option>
 <option value="forums">Horror</option>
 <option value="posts">Romance</option>
 </select> </span>
 <input type="submit" name="search-submit" id="search-submit" value="Search" />
</form>
</div>
</div>
<div align="center">
		<table width="250px" height="80px" border="1">
			<tr>
			<td colspan="2"> 
			<div id="header">
			<center> <h1>Movie Review</h1></center>
			<h2></h2>
			</div>
			</td>
			</tr>
			</table>
</div>
<div class="content" style="padding: 60px">
			<form method="get" action="" name="">
			<table>
			<tr colspan=3>
			<td> <h2>Judul Film</h2> </td>
			<td></td>
			<td></td>
			</tr>
			<tr colspan=3>
			<td><textarea name="gambar" rows="10" cols="30" placeholder="gambar" img src="images/banner-img.jpg" ></textarea></td>
			<td></td>
			<td><textarea name="sinopsis" rows="10" cols="30" placeholder="sinopsis"></textarea></td>
			</tr>
			<tr colspan=3>
			<td> <h2>Judul Film</h2> </td>
			<td></td>
			<td></td>
			</tr>
			<tr colspan=3>
			<td><textarea name="gambar" rows="10" cols="30" placeholder="gambar"></textarea></td>
			<td></td>
			<td><textarea name="gambar" rows="10" cols="30" placeholder="sinopsis"></textarea></td>
			</tr>
			</table>
</div>
<div id="footer">
			<center><input type="text" name="judul film" placeholder="Dissucion"></center>
			</div>
</body>
</head>
</html>