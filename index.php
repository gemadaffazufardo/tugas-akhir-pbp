<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My website</title>
  <link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="container">
    <div id="header">
      <h1>UTS PBP</h1>
    </div>

    <div id="sidebar">
      <h3>navigasi</h3>
      <ul id="navmenu">
        <li><a href="index.php" class="selected">profil</a></li>
        <li><a href="?module=galeri#pos">galeri</a></li>
        <li><a href="?module=jadwal#pos">jadwal kuliah</a></li>
      </ul>
    </div>

    <div id="page">
      <?php if (isset($_GET['module']))
      include "konten/$_GET[module].php";
    else
      include "konten/home.php";
    ?>
    </div>

    <div id="clear"></div>
    
    <div id="footer">
      <p>&copy;2025</p>
    </div>
  </div>
</body>
</html>
