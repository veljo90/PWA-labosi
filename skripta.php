<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="Vježbe iz predmeta Programiranje web aplikacija">
    <meta name="keywords" content="programiranje, web, aplikacije, servisi">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Članak</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.html" class="logo"><img src="images/earth.svg" alt="Zemlja"></a>
                </li>

                <li>
                    <a href="index.html">Početna</a>
                </li>

                <li>
                    <a href="onama.html">O nama</a>
                </li>

                <li>
                    <a href="http://www.tvz.hr/">TVZ</a>
                </li>
				
				<li>
                    <a href="unos.html">Unesi novi članak</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="row">
        <article class="centrirano">
            <?php
                if(isset($_POST['skriveno'])){
                    echo '<p>Članak se ne prikazuje jer je sakriven</p>';
                } else {
					echo '<table><caption>' . $_POST['naslov'] . '</caption>';
					echo '<tr><th>Sažetak</th><td>' . $_POST['sazetak']. '</td></tr>';
					echo '<tr><th>Vijest</th><td>' . $_POST['vijest']. '</td></tr>';
					echo '<tr><th>Kategorija</th><td>' . $_POST['kategorija']. '</td></tr></table>';
                }
            ?>
        </article>
    </div>

    <footer>
        <p>Copyright &copy; Velimir Lisec 2018, vlisec@tvz.hr. All Rights Reserved.</p>
    </footer>

</body>

</html>