<?php
    session_start();
    include_once 'dbconnect.php';
    
    if(!isset($_SESSION['user']))
    {
     header("Location: index.php");
    }
    $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Personalised Timetable</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href = "CSS/style.css">
  <script>
  $(function() {
    $( ".draggable" ).draggable();
    $( ".droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          
          
            $(this).draggable('disable');
      }
    });
  });
  
	$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
	
	var amountScrolled = 300;

    

  </script>
</head>
<body>
    <button id="homeBtn"> <a href="Timetable/Timetable/demo.html">home</a></button>
   
 
    
 
 <br>
<div class="draggable">
  <p>Show 1</p>
</div>

<div class="draggable">
  <p>Show 2</p>
</div>

<div class="draggable">
  <p>Show 3</p>
</div>


 <div id ="personalisedtimetable">
   <div id="timeHead"><h1>Personalised timetable</h1></div>
   <div class="droppable">
     <p>9:00-9:30</p>
   </div>
   <div class="droppable">
     <p>9:30-10:00</p>
   </div>
   <div class="droppable">
     <p>10:00-10:30</p>
   </div>
   
   <div class="droppable">
     <p>10:30-11:00</p>
   </div>
   
   <div class="droppable">
     <p>11:00-11:30</p>
   </div>
   
   <div class="droppable">
     <p>11:30-12:00</p>
   </div>
   
   <div class="droppable">
     <p>12:00-12:30</p>
   </div>
   
   <div class="droppable">
     <p>12:30-13:00</p>
   </div>
   
   <div class="droppable">
     <p>13:00-13:30</p>
   </div>
   
   <div class="droppable">
     <p>13:30-14:00</p>
   </div>
   
   <div class="droppable">
     <p>14:00-14:30</p>
   </div>
   
   <div class="droppable">
     <p>14:30-15:00</p>
   </div>
   
 </div>
 
     <button>Clear Timetable</button>
    
    <script>
        $("button").click(function(){
            $(".draggable").remove();
        });
    </script>
      
</body>
</html>