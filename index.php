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

      <div class="body_style">
        <div class="about_me">
          <p>
            <img src="image/zdj.jpg" alt="Moje zdjęcie"><br>
            Jestem pooczątkującym programistą. Aktualnie studiuję informatykę na Uniwersytecie Śląskim. Aktualnymi językami jakimi się interesuję to:
            <div class="about_me-list">
              <ul>
                <li>Java</li>
                <li>C++</li>
              </ul>
            </div>
            Dodatkowo znam jeszcze podstawę języków programowania aplikacji internetowych takich jak:
            <div class="about_me-list">
              <ul>
                <li>HTML5</li>
                <li>CSS</li>
                <li>PHP</li>
                <li>JavaScript</li>
              </ul>
            </div>
            <hr>
            Oprócz programowania interesuję się również sprzętem komputerowym. Staram się być w miarę na bierząco z nowinkami technologicznymi.
            Dodatkowo cztytam książki na temat fizyki. Moimi ulubionymi działami z fizyki są:
            <div class="about_me-list">
              <ul>
                <li>Fizyka kwantowa</li>
                <li>Astrofizyka (nie myślić z astrologią)</li>
              </ul>
            </div>
          </p>
        </div>
        <div class="my_story">
          <h1>Projekty:</h1>
          <ul>
            <li><h5>Ta strona</h5></li>
            <p>
              Głównym moim projektem którym się zajmujem jest ta strona aby ją jak najszybciej ukończyć i później się wziąć za ulepszanie jej (aby zobaczyć kod źródłowy wystarczy kliknąć w ten <a href="https://github.com/KawKac/KawKac.git" class="text-primary">link</a>)<br>
              <div class="small-info">Wykorzystane języki: HTML, CSS, Bootstrap</div>
            </p>
            <li><h5>Gra w kości</h5></li>
            <p>
              Prosty program, który polega na wylosowaniu cyfry od 1-6. Aby wygrać należy odgadnąć cyfrę. Co zgadywanie losowana jest nowa cyfra. Program zawiera zarówno grę solo jak i również multiplayer. Do sprawdzania działania programu wykorzystano bota (PC vs. PC)(aby zobaczyć kod źródłowy wystarczy kliknąć w ten <a href="https://github.com/KawKac/Dice" class="text-primary">link</a>).<br>
              <div class="small-info">Wykorzystane języki: Java</div>
            </p>
            <li><h5>Strona na obronę inżyniera</h5></li>
            <p>
              Jest to moja praca technika, którą broniłem pod koniec mojego technikum. Jest na temat nowych znaczników HTML, które pojawiły się w HTML5.(aby zobaczyć kod źródłowy wystarczy kliknąć w ten <a href="https://github.com/KawKac/praca_technika" class="text-primary">link</a>).<br>
              <div class="small-info">Wykorzystane języki: HTML, CSS, JavaScript z biblioteką JQuery</div>
            </p>
          </ul>
        </div>
      </div>
      <footer id="footer">
        <div class="contact_left">
          <form class="contact_form" action="index.html" method="post">
            <h1>Formularz kontaktowy</h1><br>
            <input type="text" name="name" value="" placeholder="Imię i Nazwisko lub nazwa firmy"><br>
            <input type="text" name="contact" value="" placeholder="Numer telefonu lub e-mail do kontaktu"><br>
            <textarea name="message" rows="8" cols="80" placeholder="Wiadomość"></textarea><br>
            <input type="submit" name="submit" value="Wyślij" class="btn btn-success" disabled>
          </form>
        </div>
        <div class="contact_right">
          <p>Kacper Kawala</p>
          <p>Adres e-mail: <a href="mailto: kacper.jerzy.kawala@gmail.com" class="text-info">kacper.jerzy.kawala@gmail.com</a></p>
          <p>Numer telefonu: +48 575-463-884</p>
        </div>
      </footer>
  </body>
</html>
