
<!--
/*
 * Querying database and displaying results fo search
 *
 * Date e.g. 6/4/2016
 *
 * @reference :https://www.youtube.com/watch?v=lWBQvfRh7_M

 *
 */ 
 -->

<?php 


 include 'connect.php'; // being the MySQLi_ API

if(!empty($_GET['q']))
{


$q= mysqli_real_escape_string($conn, $_GET['q']);


    $query = mysqli_query($conn, "select shows,times from rte where shows like '%$q%';")
             or die(mysqli_error($conn));
             
           

    while($output=mysqli_fetch_assoc($query))
    {

        echo '<a>'.$output['shows'].$output['times'].'</a>';


    }

}