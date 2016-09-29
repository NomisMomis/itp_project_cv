
<!--*
 * User land page after sign in
 *
 * Date e.g. 21/3/2016
 *
 * @reference http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html
 *
 -->
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
<html>
  <head>
    <meta charset="utf-8">
      <title>Welcome - <?php echo $userRow['email']; ?></title>
             <script src="//code.jquery.com/jquery-1.10.2.js"></script>
               <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
              <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
              <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
              <link rel="stylesheet" href = "bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css">
              <link rel="stylesheet" href="/resources/demos/style.css">
              <link rel="stylesheet" href = "CSS/style.css">
  
  
  
  
  
<body>
  
    <div id="header">
            <div id="left">
                	         
	         
	         <a href="http://feedly.com/i/subscription/feed/https://feedity.com/c9users-io/W1JbV1Zb.rss">
<img src="http://www.w3schools.com/xml/pic_rss.gif" width="36" height="14"></img>
</a>

<a href="http://validator.w3.org/feed/check.cgi?url=https%3A//feedity.com/c9users-io/W1JbV1Zb.rss"><img src="rssbutton.jpg" alt="[Valid RSS]" title="Validate my RSS feed" /></a>
	
                <label>MyTvTimtable.ie</label> 
            </div>
                <div id="right">
                   <div id="content">
                       Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
                   </div>
                </div>
    </div>





        <!-- Image -->
        
          <body>
  
    <div id="header">
            <div id="left">
                	         
	         
	         <a href="http://feedly.com/i/subscription/feed/https://feedity.com/c9users-io/W1JbV1Zb.rss">
<img src="http://www.w3schools.com/xml/pic_rss.gif" width="36" height="14"></img>
</a>

<a href="http://validator.w3.org/feed/check.cgi?url=https%3A//feedity.com/c9users-io/W1JbV1Zb.rss"><img src="rssbutton.jpg" alt="[Valid RSS]" title="Validate my RSS feed" /></a>
	
                <label>MyTvTimtable.ie</label> 
            </div>
                <div id="right">
                   <div id="content">
                       Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
                   </div>
                </div>
    </div>
        
    
     
    	     <!--   <button type="button"class="btn btn-primary-outline" id="PersonalisedTT"><a href="">Personalised Timetable</a>  </button>
    	        
    	        <a href="#" class="top">Scroll To Top</a>
    	        
    	        <ul>
                    <li><a href="#" class="top">Top</a></li>
                </ul>
                -->








    	   <!--code for randomizer-->    
<!--http://stackoverflow.com/questions/14614453/fetching-a-random-row-from-mysql-and-displaying-it-with-php-->
<!--http://www.w3schools.com/tags/tag_form.asp code for form button  -->
			       
    	            <form method="POST" action=''>
                        <input type="SUBMIT" class="random" name="randomiser" id="randomiser" value="Randomizer">
                    </form>
                    
                 <div id="shows" style="color:#3399FF" <h1><span>Your random show is at:</span></h1> 
    	                <?php
    	         
			                if(isset($_POST['randomiser']))
			                {
		                            $sql = ("SELECT * FROM bbc1,bbc2,tv3 ORDER BY RAND() LIMIT 1 ");
                                    $result = mysql_query($sql);
			                    while ($row = mysql_fetch_array($result))
			                        echo $row['channel_dates']  .$row['times']. $row['shows'];
			                        
			
			                }
			             ?>
			            
	         </div>
         
	         
	         
	         
	         
	         
                <div class="timetable"></div>
    
                 <script src="timetable.js"></script>
    <script>
          var timetable = new timetable();
    
          timetable.setScope(00,00);
          timetable.addLocations(['Personal', 'RTE1', 'RTE2', 'BBC1']);
    
    	  //Friday RTE
    	  timetable.addEvent('The Good Wife', 'RTE1', new Date(2015,7,17,00,00), new Date(2015,7,17,01,30));
    	  
          timeable.addEvent('How To Get Away With Murder', 'RTE2', new Date(2015,7,17,01,00), new Date(2015,7,17,02,25), '#');
          
          timetable.addEvent('This Week', 'BBC1', new Date(2015,7,17,03,00), new Date(2015,7,17,04,45), '#');
          
          var renderer = new Timetable.Renderer(timetable);
          renderer.draw('.timetable');
          
           
             var c = {};
            
           $("<tr>").draggable({
              helper: "clone",
              start: function(event, ui){
                  c.tr = this;
                  c.helper = ui.helper;
              }
           });
           
           
           $("<tr>").droppable({
               drop: function(event, ui){
                   var inventor = ui.draggable.text();
                   $(this).find("input").val(inventor);
                   
                   $(c.tr).remove();
                   $(c.helper).remove();
               }
           })
          
          $(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.top').fadeIn();
		} else {
			$('.top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
          
          </script>
          
          
          
          
          
          
<!--*
 *  Connect to databse
 *
 * Date e.g. 21/3/2016
 *
 * @reference http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html
 *
 -->
    <?php 
            
          $servername = "localhost";
          $username = "andremac96";
          $password = "";
          $dbname = "dbtest";
              
              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              } 
              
              $sql = "SELECT channel_dates, times, shows from bbc1";
              $result = $conn->query($sql);
          
                if ($result->num_rows > 0) {
                
                // let's get a variable with the total number of records, i.e. horizontal cells:
                $totalRecords = 0;

                //get values from database into array
                while($row = $result->fetch_assoc()) {
                }
    
     // output data of each row

    
} else {
     echo "";
}

$conn->close();
          
?>
       
       
       
       
       
       <!--reference: http://stackoverflow.com/questions/17642543/displaying-data-horizontally-using-php-and-mysql 
       http://stackoverflow.com/questions/7153637/php-generate-divs-based-on-a-specific-number
       -->
       <div class = "table-responsive id" ="timetableDiv">
           <table id="tableTime">
         <?php 
         $channels = mysql_query("SELECT Cname_id  FROM channel") or die("unable to select".mysql.error());
         $tableCount=0;
         while($row=mysql_fetch_assoc($channels)){
             $tableCount++;
            $new_array[] = $row;
         ?>
                
                    <tr 
                    
                    
                    
                    >
                        
                    <?php
             if($tableCount =='1'){
                $data = mysql_query("SELECT channel_date, shows, times FROM bbc1 ") or die("unable to select".mysql.error());
            
            ?> <td class = "titlecell">
             <?php  echo $row['Cname_id']; ?>
             </td>
                 
                 <?php
             }
             
             elseif($tableCount =='2'){
                   $data = mysql_query("SELECT channel_date, shows, times FROM bbc2 ") or die("unable to select".mysql.error());
             ?>
            <td class = "titlecell">
            <?php echo $row['Cname_id'];?>
            </td><?php
             }
             elseif ($tableCount =='3') {
                   $data = mysql_query("SELECT channel_date, shows, times FROM rte ") or die("unable to select".mysql.error());
             ?>
                         <td class = "titlecell">
                        <?php  echo $row['Cname_id']; ?>

             </td>
             <?php
             }
             elseif ($tableCount =='4') {
                $data = mysql_query("SELECT channel_date, shows, times FROM tv3 ") or die("unable to select".mysql.error()); 
                
                         echo '<td class = "titlecell">';
                          echo $row['Cname_id'];

             echo '</td>';
             }
             else{
                 echo "error loading table";
                 
             }
                $recordCount=0;
                       if ($recordCount % 800==0 &&$recordCount != 0)
                {
                        echo '</tr><tr>';
                }
               
                while($row=mysql_fetch_row($data)){
              
                echo '<td>';
                for($i=0; $i< count($row); $i++){
                    echo $row[$i];
                     
                }
                echo '</td>';
                    $recordCount++;
                }
             
         }
              
                ?>
                </tr>
                </table>
                
                </br>
               </div>
                
                
                
                
                
            



                
                
             <!--
             * Live Search - Ajax Section
             *
             * Date e.g. 21/3/2016
             *
             * @reference :https://www.youtube.com/watch?v=lWBQvfRh7_M
             *
             -->
 
 
                		
					
			<div id="sear">
		<label>search shows:	<input type="search" name="search" id="search"></label>
			<div id="here"></div>
			    </div>
			    
                            <script src=jq.js></script>
                            			
                            			<script>
                            				$(document).ready(function(e)
                            				{
                            					$("#search").keyup(function()
                            					{
                            						$("#here").show();
                            						var x = $(this).val();
                            						$.ajax(
                            							{
                            								type:'GET',
                            								url:'fetch.php',
                            								data: 'q='+x,
                            								success:function(data)
                            								{
                            									$("#here").html(data);
                            								}
                            								,
                            							});
                            					});
                            				});
                            							
                            			</script>
                                            <!--End Of Search-->
</body>
</html>