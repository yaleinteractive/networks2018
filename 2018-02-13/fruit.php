<html>

  <head>
    <title>Fruit</title>
  <head>

  <body>

    <p>
      <a href="http://art.yale.edu/Art742b">This is an absolute link</a>
    <p>

    <p>
      <a href="hi.txt">This is a relative link</a>
    <p>

    <p>
      <a href="https://www.rhymezone.com/r/rhyme.cgi?Word=orange&typeofrhyme=perfect&org1=syl&org2=l&org3=y"><img src="images/orange.jpg" width=100></a>
      ↖ You can put an image or most anything else inside a link
    </p>

    <?php

    // Store the get parameters in variables for convenience
    $letter = $_GET['letter'];
    $number = $_GET['number'];

    // 🚀 Refactoring idea: If you instead do
    // $letter = strtoupper($_GET['letter']);
    // then you'd always store the uppercase version of the letter
    // in the $letter variable. Then, you wouldn't need to also check
    // for the lowercase versions below, which is repetetive.

    // Customize a link to pass the $number variable forward to the next page
    // The ../ means a relative link, but to the folder above this one
    // (this would depend on how you have your files organized on your server)
    echo "<p><a href='../letters.php?letter=z&number=$number'>Sleep</a></p>";

    // Do what's in the {}, $number times
    $counter = 1;
    while ($counter <= $number) {

      // Gotcha: Use == not = in a condition
      // COMPARISON OPERATORS
      // Equal to: ==
      // Not equal to: !=
      // <, >, <=, >=
      // LOGICAL OPERATORS
      // And: &&
      // Or: ||

      // If the letter is a, show an image
      if (($letter == 'a') || ($letter == 'A')) {
        echo "<img src='images/apple.jpg' width=20> ";
      }
      // Otherwise if the letter is b, show an emoji
      else if ($letter == 'b' || $letter == 'B') {
        echo " 🍌 ";
      }
      // Otherwise if the letter is o, show an image
      else if ($letter == 'o' || $letter == 'O') {
        echo "<img src='images/orange.jpg' width=20> ";
      }
      // Otherwise (i.e. if it's any other letter), show the letter three times
      // And link it to ccc.com or ddd.com etc.
      else {
        echo " <a href='http://$letter$letter$letter.com'>$letter$letter$letter</a> ";
      }

      // Always add a dot
      echo '.';

      $counter++;
    }

    ?>

  </body>

</html>
