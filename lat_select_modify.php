<! //lat_select_modify.php !>
<table border="1">

<tr>
    <th> No </th> <th> Nama </th> <th> Modifiy </th> 
</tr>
<?php

$conn = mysqli_connect("localhost", "root", "", "namadenya");

$databaca = "select *from sija2" ; 

 $datares=mysqli_query($conn,$databaca) ;
    
while ($datarr=mysqli_fetch_array($datares) ) {

echo " <tr> 
                <td> " . $datarr[0] . "</td>  <td> ".  $datarr[1] ."</td>
                <td> <a href='lat_Delete.php?pilano=".$datarr[0] ."> Delate </a>
                </tr> " ; 
            }
  
?>
</table>