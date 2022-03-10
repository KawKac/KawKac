<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kacper Kawala</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class="image"></div>
        <div class="navbar">
          <p>Kacper Kawala</p>
          <div class="btn btn-group">
            <a href="https://github.com/KawKac" class="media" target="_blank"> <img src="./image/github.svg" alt="GitHub" > </a>
            <a href="https://www.instagram.com/lankutheofficial/" class="media" target="_blank"> <img src="./image/instagram.svg" alt="Instagram" > </a>
            <a href="https://www.linkedin.com/in/kacper-kawala-1b921a22b/" class="media" target="_blank"> <img src="./image/linkedin.svg" alt="LinkedIn" > </a>
          </div>
          <ul>
            <li>
              <a href="#">
                <img src="image/gb.svg" title="EN" alt="EN">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="image/pl.svg" title="PL" alt="PL">
              </a>
            </li>
          </ul>
        </div>

        <?php
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        switch($lang)
        {
           case 'pl':
              include("PL.php");
              break;

           default:
               include("EN.php");
        }
         ?>

  </body>
</html>
