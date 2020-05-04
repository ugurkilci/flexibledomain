<?php
$domain = "https://www.girisimzel.com/ugurkilci/"; // Enter your domain. Don't forget to put "/" at the end of the link.
$q = @$_GET["q"]; // Query

echo '<style>iframe{width: 100%;height: 100%;position: absolute;}</style'; // Css code for frame tag display overlay

## Basic
if($q){ // If there is a query
  echo '<iframe src="'. $domain . $q .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>'; // Redirect domain to pages
}else{ // If there is no query
  echo '<iframe src="'. $domain .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>'; // Just redirect to your main domain
}

## Technical
/*

if($q){ // If there is a query
  if($q == "login"){
    // $q = "login.php" // I think it is an unnecessary point but maybe it could be the user.
    echo '<iframe src="'. $domain . $q .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>'; // Redirect domain to page
  }elseif($q == "register"){
    // $q = "register.php" // I think it is an unnecessary point but maybe it could be the user.
    echo '<iframe src="'. $domain . $q .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>'; // Redirect domain to page
  }else{
    $error = "404.html" // Error page link. A simple security measure to ensure that it does not go beyond the links you specify.
    echo '<iframe src="'. $domain . $error .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>'; // Redirect domain to page
  }
}else{ // If there is no query
  echo '<iframe src="'. $domain .'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>'; // Just redirect to your main domain
}

*/
