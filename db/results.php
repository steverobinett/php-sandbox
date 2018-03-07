<!DOCTYPE html>
<html>
<head>
  <title>Book-O-Rama Search Results</title>
</head>
<body>
  <h1>Book-O-Rama Search Results</h1>
  <?php




    // whitelist the searchtype
    // switch ($searchtype) {
    //   case 'Title':
    //   case 'Author':
    //   case 'ISBN':
    //     break;
    //   default:
    //     echo '<p>That is not a valid search type. <br/>
    //     Please go back and try again.</p>';
    //     exit;
    // }

    // host, username , password, dbname
    $db = new mysqli( 'db715378838.db.1and1.com', 'dbo715378838', 'Linux2018', 'db715378838');
    if (mysqli_connect_errno()) {
       echo '<p>Error: Could not connect to database.<br/>

       Please try again later.</p>';
       echo 'Status is '.mysqli_connect_errno().'<br/>';
       exit;
    }
    else{
      echo 'DB Connect OK. Status is '.mysqli_connect_errno().'<br/>';
    }
  //  $query = "SELECT ISBN, Author, Title, Price FROM Books";
      $query = "SELECT * FROM Books";

    // $query = "SELECT ISBN, Author, Title, Price FROM Books WHERE $searchtype = ?";
    $stmt = $db->prepare($query);
  //  $stmt->bind_param('s', $searchterm);
    $stmt->execute();
      echo 'Status is '.mysqli_connect_errno().'<br/>';
    $stmt->store_result();

    $stmt->bind_result($isbn, $author, $title, $price);

    echo "<p>Number of books found: ".$stmt->num_rows."</p>";

    while($stmt->fetch()) {
      echo "<p><strong>Title: ".$title."</strong>";
      echo "<br />Author: ".$author;
      echo "<br />ISBN: ".$isbn;
      echo "<br />Price: \$".number_format($price,2)."</p>";
    }

    $stmt->free_result();
    $db->close();
  ?>
</body>
</html>
