<html>

<head>

  <style>

    /* This is a CSS selector for all instances of an HTML tag, in this case of
       body. The HTML element doesn't need a class in order to receive these styles. */
    body {
      font-family: Arial, sans-serif;
      font-size: 48pt;
    }

    /* This is a CSS selector for a class, in this case the "module" class.
       You can add this class to any HTML element you want to receive these styles */
    .module {
      position: relative;
      display: inline-block;
      width: 48pt;
      height: 48pt;
      background: yellow;
    }

  </style>

</head>

<body>

  <div class="module">
    <!-- Absolute coordinates are actually measured from the top-left of the parent
         element - not the document - as long as the parent has either relative
         or absolute position. These styles might be better defined as classes
         in the stylesheet, but by doing them inline, you could insert PHP variables
         into them if you wanted to shift them around programmatically. -->
    <div style="position: absolute; top: 0; left: 0;">
      A
    </div>
    <div style="position: absolute; top: 10pt; left: 10pt;">
      B
    </div>
  </div>

  <div class="module">
    <div style="position: absolute; top: 0; left: 0;">
      C
    </div>
    <div style="position: absolute; top: 10pt; left: 10pt;">
      D
    </div>
  </div>

  <?php

  $letter = $_GET['letter'];
  $number = $_GET['number'];
  $size = $_GET['size'];

  // We don't expect size to be specified by the user initially.
  // When it's not, set it to 48 by default.
  if ($size == '') {
    $size = 48;
  }

  $counter = 1;
  while ($counter <= $number) {

    // The {} are optional to surround a variable in double quotes.
    // Here, they are necessary to separate the variable from the pt.
    echo "<span style='font-size: {$size}pt;'>";

    // This letter should link to a size that is the current size plus the counter.
    // We define a new temporary variable to calculate this.
    $link_size = $size + $counter;

    echo "<a href='links.php?letter=$letter&number=$number&size=$link_size'>";

    echo $letter;

    echo "</a>";

    echo "</span> ";

    $counter++;
  }

  // The effect is that the user can load a version of the page where the letters
  // are a little bigger by clicking on an early letter. Or load a version of the
  // page where the letters a lot bigger by clicking on a later later. But can't
  // link to a version of the page where the letters are smaller.
  // View the source in your browser to see how this works.
  // The idea is that by including links in your algorithmic thinking, you can
  // create an experience of pages where new possibilities unfold that weren't
  // available before.

  ?>

</body>

</html>
