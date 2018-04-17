<!-- new.php: Fill out the form for a new event, which may be past or future. -->

<html>
<head>
  <title>New event</title>
</head>

<body>

  <?php

  include "connect.php";

  $date = $_GET['date'];

  if (strtotime($date) < time()) {
    // This is a boolean variable, which means true or false
    $past = true;
  }
  else {
    $past = false;
  }

  // Close the databse connection
  $conn->close();
  ?>

  <?php
    if ($past) {
      echo "<h2>Describe a past event from $date</h2>";
    }
    else {
      echo "<h2>Advertise an upcoming event on $date</h2>";
    }
  ?>

  <form enctype="multipart/form-data" method="post" action="create.php">
      <label>Title <input type="text" name="title"></label><br>
      <input type="hidden" name="date" value="<?= $date ?>">
      <label>Time <input type="time" name="time"></label><br>

      <?php if ($past) { ?>
        <label>What actually happened?<br>
          <textarea name="description"></textarea></label><br>
        <label>Documentary photo <input type="file" name="image"></label><br>
      <?php } ?>

      <input type="submit" value="Add">
  </form>

  <a href="index.php">Cancel</a>

</body>
</html>
