<?php

function renderContent($category, $id, $button) {

include 'dbsql.php';
    
$url = 'https://news.google.com/news/rss/headlines/section/topic/' . $category. '';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title"] = $xml->channel[0]->item->title;
$_SESSION["link"] = $xml->channel[0]->item->link;
$_SESSION["description"] = $xml->channel[0]->item->description;

$_SESSION["title2"] = $xml->channel[0]->item[1]->title;
$_SESSION["link2"] = $xml->channel[0]->item[1]->link;
$_SESSION["description2"] = $xml->channel[0]->item[1]->description;

$_SESSION["title3"] = $xml->channel[0]->item[2]->title;
$_SESSION["link3"] = $xml->channel[0]->item[2]->link;
$_SESSION["description3"] = $xml->channel[0]->item[2]->description;
    
echo '
<br><div class="row" id="' . $id . '">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
              </h4>
              <h5>CATEGORY: ' . $category . '</h5>
              <h4>' . $_SESSION["title"] .  '</h4>
              <a href="' . $_SESSION["link"] . '">Source Page</a>
              <p>' . $_SESSION["description"]  . '<p>
              <br>
              <hr>
              <h4>' . $_SESSION["title2"] .  '</h4>
              <a href="' . $_SESSION["link2"] . '">Source Page</a>
              <p>' . $_SESSION["description2"]  . '<p>
              <br>
              <hr>
              <h4>' . $_SESSION["title3"] .  '</h4>
              <a href="' . $_SESSION["link3"] . '">Source Page</a>
              <p>' . $_SESSION["description3"]  . '<p>
              <br>
           <button id="btn' . $button .'" class="btn btn-primary">Clear Cache</button>
           <br>
           <p id="' . $button .'"></p>
            </div> 
          </div>
      </div>        
';
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  

<script>
//jQuery for rendering timestamps in <p> tags with id of 1, 2 and 3

    $(document).ready(function(){
    $("#btn1").click(function(){
        <?php
 session_destroy();
$_SESSION = array();
?>
    var d = new Date();
    d =  d.getTime();
        $("#1").html("Session cache ended at " + d + " universal time.");
        }); 
        
    $("#btn2").click(function(){
        <?php
$_SESSION = array();
?>
    var d = new Date();
    d =  d.getTime();
        $("#2").html("Session cache ended at " + d + " universal time.");
        });
                
    $("#btn3").click(function(){
        <?php
$_SESSION = array();
?>
    var d = new Date();
    d =  d.getTime();
        $("#3").html("Session cache ended at " + d + " universal time.");
        }); 
    });
        
</script>
