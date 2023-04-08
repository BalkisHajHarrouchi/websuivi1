<?php
require "../controllers/eventC.php";
require "../models/event.php";
$eventC = new eventC();
$listEvents = $eventC->displayEvents();
$updateEvent = NULL;

if (isset($_GET["removeEvent"]) && !empty($_GET["removeEvent"])) {
    $eventC->deleteEvent($_GET["removeEvent"]);
    header('location:http://localhost/version1/try/views/Evenement.php');
}

if (isset($_POST) && !empty($_POST)) {
    if (isset($_GET["updateEvent"]) && !empty($_GET["updateEvent"])) {
        $event = new event($_POST["nom"], $_POST["type"], $_POST["lieu"], new \DateTime($_POST["dateEvent"]), $_POST["description"], $_POST["nbPlaces"]);
        $eventC->updateEvent($_GET["updateEvent"], $event);
    } else {
        $event = new event($_POST["nom"], $_POST["type"], $_POST["lieu"], new \DateTime($_POST["dateEvent"]), $_POST["description"], $_POST["nbPlaces"]);
        $eventC->addEvent($event);
    }
    header('location: http://localhost/version1/try/views/Evenement.php');
}

if (isset($_GET["updateEvent"]) && !empty($_GET["updateEvent"])) {
    $updateEvent = $eventC->getEventById($_GET["updateEvent"]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+icons+sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="style.css">

<!-- <link rel="stylesheet" href="css_final.css"> -->
<link rel="stylesheet" href="recherche.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="balkis.css">
    <link rel="stylesheet" href="chart.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/breathelogo.png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">
                        close
                        </span>

                </div>
            </div>
            <div class="sidebar">
                <a href="Tableau.php"  >
                    <span class="material-symbols-sharp">
                        grid_view
                        </span>
                        <h3>Tableau de bord</h3>
                </a>
                <a href="Produit.php">
                <span class="material-symbols-outlined">
                shopping_cart_checkout
                </span>
                        <h3>Produits</h3>
                </a>
                <a href="Recyclage.php">
                <span class="material-symbols-outlined">
                compost
                </span>
                        <h3>Recyclage</h3>
                </a>
                <a href="Evenement.php" class="active">
                    <span class="material-symbols-sharp">
                        event
                        </span>
                        <h3>Evenement</h3>
                        <span class="message-count">26</span>
                </a> <a href="Article.php">
                    <span class="material-symbols-sharp">
                        article
                        </span>
                        <h3>Article</h3>
                </a> <a href="Admin.php">
                    <span class="material-symbols-sharp">
                        account_circle
                        </span>
                        <h3>Admin</h3>
                </a> 
                 <a href="Parametre.php">
                    <span class="material-symbols-sharp">
                        settings
                        </span>
                        <h3>Paramètre</h3>
                </a>
                <a href="../../login/index.php">
                    <span class="material-symbols-sharp">
                        logout
                        </span>
                        <h3>Disconnecter</h3>
                </a>
            </div>
        </aside>
        <!----- end of aside -->
        <main>
    
   


    <div class="crudBox">
    <h1>Ajouter un Event</h1></br>
                <div class="cudBox">
                <form method="POST" action="Evenement.php<?= ($updateEvent !== NULL) ? "?updateEvent=" . $updateEvent["idEvent"] : ""; ?>" enctype="multipart/form-data">


                <div class="form">
                <input type="text" value="<?= ($updateEvent !== NULL) ? $updateEvent["nom"] : ""; ?>" name="nom" placeholder=" " id="" autocomplete="off" class="form__input"><br /><br />
                <label for="nom" class="form__label">Nom</label>
                </div></br>
                </br>
                <select name="type" id="">
  <option value="">-- Sélectionnez le type --</option>
  <option value="Type1" <?php if (($updateEvent !== NULL) && ($updateEvent["type"] === "Type1")) echo "selected"; ?>>Type1</option>
  <option value="Type2" <?php if (($updateEvent !== NULL) && ($updateEvent["type"] === "Type2")) echo "selected"; ?>>Type2</option>
  <option value="Type3" <?php if (($updateEvent !== NULL) && ($updateEvent["type"] === "Type3")) echo "selected"; ?>>Type3</option>
  <!-- Ajoutez plus d'options selon vos besoins -->
</select></br></br></br>
                <div class="form">
                <input type="text" value="<?= ($updateEvent !== NULL) ? $updateEvent["lieu"] : ""; ?>" name="lieu" placeholder=" " id="" autocomplete="off" class="form__input"><br /><br />
                <label for="lieu" class="form__label">Lieu</label>
                </div>
</br>
</br>
                <div class="form">
                <input type="date" value="<?= ($updateEvent !== NULL) ? $updateEvent["dateEvent"] : ""; ?>" name="dateEvent" id="" autocomplete="off" class="form__input"><br /><br />
                <label for="dateEvent" class="form__label">Date de l'Evenement</label>
                </div>
</br>
</br>
                
<div class="form">
<textarea name="description" placeholder=" " id="" cols="35" rows="10" autocomplete="off" class="form__input"><?= ($updateEvent !== NULL) ? $updateEvent["description"] : ""; ?></textarea><br /><br />
                <label for="description" class="form__label">Description</label>
                </div>
</br>
</br>
</br>
</br>
                <div class="form">
                <input type="number" value="<?= ($updateEvent !== NULL) ? $updateEvent["nbPlaces"] : ""; ?>" name="nbPlaces" id="" placeholder=" " autocomplete="off" class="form__input"><br /><br />
                <label for="nbPlaces" class="form__label">Nombre de Places</label>
                </div>
                </br>
                </br>

                <input type="submit" class="add" value="<?= ($updateEvent === NULL) ? 'Ajouter Event' : 'Update Event' ?>" />
    </form>          
                </div>
               

                <?php
// $c1=0;
// $c2=0;
// $c3=0;
// $c4=0;

$db = config::getConnection();
$q1= $db->query("SELECT * FROM event WHERE type='type1'");
$q1->execute();
$rows=count($q1->fetchAll());

// echo $rows;

?>

    <input type="hidden" id="c1" value="<? htmlspecialchars_decode($rows)?>">
     <!--Add charts -->
            <div class="graphBox">

                    <div class="box">
                        <canvas id="barChart" ></canvas>                 
                    </div></br>
                    <div class="box1">
                        <canvas id="pieChart"></canvas> 
                    </div>

            </div>
            <br>


<div class "tableEvent"><h1 class="affiche">Liste des Events</h1>
                 <div class="search-box">
                <input type="text" name="" id="myInput" placeholder="search here..." oninput="searchFun()"></br>
                <div class="search-icon">
                <i class="fas fa-search"></i>
                </div>
                <div class="cancel-icon">
                <i class="fas fa-times"></i>
                </div>
                <div class="search-data">
                </div></div>
                </br>
                <div class="rbox">

               
                <div class="recent-orders">
    <table border="1" id="myTable">
        <thead>
                    <th col-index=1>id Event</th>

                    <th col-index=2>Nom </br>
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                        </select>
                    </th>

                    <th col-index=3>Type </br>
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                    </th>

                    <th col-index=4>Lieu </br>
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                        </select>
                    </th>

                    <th col-index=5>Date </br>
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                        </select>
                    </th>

                    <th col-index=6>Description </br>
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                        </select>
                    </th>
                    <th col-index=7>Places </br>
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                        </select>
                    </th>
                    <th col-index=8>Action </br>
                    </th>

                </thead>

        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($listEvents); $i++) {
            ?>
                <tr>
                    <td><?= $listEvents[$i]["idEvent"]; ?></td>
                    <td><?= $listEvents[$i]["nom"]; ?></td>
                    <td><?= $listEvents[$i]["type"]; ?></td>
                    <td><?= $listEvents[$i]["lieu"]; ?></td>
                    <td><?= $listEvents[$i]["dateEvent"]; ?></td>
                    <td><?= $listEvents[$i]["description"]; ?></td>
                    <td><?= $listEvents[$i]["nbPlaces"]; ?></td>

                    <td>
                        <button class="danger" onclick="removeEvent(<?= $listEvents[$i]['idEvent']; ?>)">Supprimer</button></br>
                        <button class="primary" onclick="updateEvent(<?= $listEvents[$i]['idEvent']; ?>)">Update</button>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
                </div>   
</div>
    </div>

        </main>
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp">
                        menu
                        </span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">
                        light_mode
                        </span>
                    <span class="material-symbols-sharp">
                        dark_mode
                        </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Bonjour, <b>Balkis</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                </div>
            </div>
            <!---END OF TOP-->
            <div class="recent-updates">
                <h2>notification</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order of Night Lion tech GPS drone.</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order of Night Lion tech GPS drone.</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-4.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order of Night Lion tech GPS drone.</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!----END OF RECENT UPDATES-->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-sharp">
                            shopping_cart
                            </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Commandes en ligne</h3>
                            <small class="text-muted">Dernières 24 heures</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div> 
                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-sharp">
                            local_mall
                            </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Commandes hors ligne</h3>
                            <small class="text-muted">Dernières 24 heures</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                    </div>
                </div>   
                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-sharp">
                            person
                            </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>nouveaux clients</h3>
                            <small class="text-muted">Dernières 24 heures</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>   
                <div class="item add-product">
                    <div>
                        <span class="material-symbols-sharp">
                            add
                            </span> 
                        <h3>Ajouter un produit</h3>
                    
                    </div>
                </div>               
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="my_chart.js"> 

</script>
<!-- retourner a la page elle meme -->
    <script>
    const removeCoach = (id) => {
        location.href = `http://localhost/crud_same_page/views/index.php?removeCoach=${id}`
    }
    const updateCoach = (id) => {
        location.href = `http://localhost/crud_same_page/views/index.php?updateCoach=${id}`
    }
    </script>
    <script src="./index.js"></script>
    <script src="../chatbot/app.js"></script>
    <script src="./filter.js"></script>
    <script>
        const removeEvent = (id) => {
            location.href = `http://localhost/version1/try/views/Evenement.php?removeEvent=${id}`
        }
        const updateEvent = (id) => {
            location.href = `http://localhost/version1/try/views/Evenement.php?updateEvent=${id}`
        }
        window.onload = () => {
                console.log(document.querySelector("#myTable > tbody > tr:nth-child(1) > td:nth-child(2) ")
                    .innerHTML);
            };

            getUniqueValuesFromColumn()

            const searchBox = document.querySelector(".search-box");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const searchInput = document.querySelector("#myInput");
      const searchData = document.querySelector(".search-data");
      searchBtn.onclick =()=>{
        searchBox.classList.add("active");
        searchBtn.classList.add("active");
        searchInput.classList.add("active");
        cancelBtn.classList.add("active");
        searchInput.focus();
        if(searchInput.value != ""){
          var values = searchInput.value;
          searchData.classList.remove("active");
          searchData.innerHTML = "You just typed " + "<span style='font-weight: 500;'>" + values + "</span>";
        }else{
          searchData.textContent = "";
        }
      }
      cancelBtn.onclick =()=>{
        searchBox.classList.remove("active");
        searchBtn.classList.remove("active");
        searchInput.classList.remove("active");
        cancelBtn.classList.remove("active");
        searchData.classList.toggle("active");
        searchInput.value = "";
      }
    </script>
</body>
</html>