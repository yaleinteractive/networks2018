<!-- create.php: Add the event to the database and thank the user. -->

<html>
<head>
  <title>New event</title>
</head>

<body>

  <?php

  // Connect to the database
  include "connect.php";

  $title = $_REQUEST['title'];
  $date = $_REQUEST['date'];
  $time = $_REQUEST['time'];
  if (isset($_REQUEST['description'])) {
    $description = $_REQUEST['description'];
  }
  else {
    $description = '';
  }
  if (isset($_FILES['image'])) {
    $image = basename($_FILES['image']['name']);
  }
  else {
    $image = false;
  }

  // Construct SQL to insert a new row
  $sql = "INSERT INTO events (title, date, time, description, image)
                             VALUES('$title', '$date', '$time', '$description', '$image')";

  // Run the SQL
  $result = $conn->query($sql);

  // Get the ID of the inserted row
  $id = $conn->insert_id;

  if ($image) {

    $uploaddir = dirname(__FILE__) . "/../uploads/$id";

    mkdir($uploaddir);

    $success = move_uploaded_file($_FILES['image']['tmp_name'], "$uploaddir/$image");

    // echo '<pre>';
    // if ($success) {
    //   echo "File is valid, and was successfully uploaded.\n";
    // }
    // echo 'Here is some more debugging info:';
    // print_r($_FILES);
    // print "</pre>";

  }

  // Close the databse connection
  $conn->close();
  ?>

  <h2>Thanks for adding an event!</h2>

  <p>
    <a href="event.php?id=<?= $id ?>">See the new event</a>
  </p>
  <p>
    <a href="index.php">Back to calendar</a>
  </p>

</body>
</html>
