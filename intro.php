
<?php 

#minesweeper player



error_reporting(0);


echo "Mines:";
$a = readline();



$cars = array (
array(   0,   0,   0,   0,   0,  0,  0,  0,  0),
array(   0,   0,   0,   0,   0,  0,  0,  0,  0),
array(   0,   0,   0,   0,   0,  0,  0,  0,  0),
array(   0,   0,   0,   0,   0,  0,  0,  0,  0),
array(   0,   0,   0,   0,   0,  0,  0,  0,  0),
array(   0,   0,   0,   0,   0,  0,  0,  0,  0),
array(   0,   0,   0,   0,   0,  0,  0,  0,  0),
array(   0,   0,   0,   0,   0,  0,  0,  0,  0)

  
);
														//Random coordinates (excluding safe zone)
for ($i = 0; $i < $a; $i++){
$minex=rand( 0, 6);
$miney=rand( 0, 6);
$cars[$minex][$miney]=9;

}
														//end



														//Find 9s and create 1s

for ($row = 0; $row < 7; $row++){
        for ($col = 0; $col < 8; $col++){
	if ($cars [$row][$col] == 9){
//###############################################################################	


if($cars [$row+1][$col]!=9){
$cars [$row+1][$col]++;}  //right
if($cars [$row-1][$col]!=9){
$cars [$row-1][$col]++;}  //left
if($cars [$row][$col+1]!=9){
$cars [$row][$col+1]++;}  //up
if($cars [$row][$col-1]!=9){
$cars [$row][$col-1]++;}  //down
if($cars [$row-1][$col-1]!=9){
$cars [$row-1][$col-1]++;}  //up left
if($cars [$row+1][$col-1]!=9){
$cars [$row+1][$col-1]++;}  //up right
if($cars [$row-1][$col+1]!=9){
$cars [$row-1][$col+1]++;}  //down left
if($cars [$row+1][$col+1]!=9){
$cars [$row+1][$col+1]++;}  //down right







//###############################################################################  
	}
	
	}
}
															//end



													

/*															//print hidden vector
for ($row = 0; $row < 7; $row++){
        for ($col = 0; $col < 8; $col++){
        echo $cars [$row][$col];
        }
        echo "\n";
}
*/															//end






//###############################################################################  
//Player input

//###############
	 //safe//
	 //zone//
	 //    //
   	 //    //
	 //    //
	 //    //
//###############





				        //|Safezone|
$viewable = array (
array(   "? ",   "? ",   "? ",   "? ",   "? ",  "? ",  "? ",  "? ", " 1 "),
array(   "? ",   "? ",   "? ",   "? ",   "? ",  "? ",  "? ",  "? ", " 2 "),
array(   "? ",   "? ",   "? ",   "? ",   "? ",  "? ",  "? ",  "? ", " 3 "),
array(   "? ",   "? ",   "? ",   "? ",   "? ",  "? ",  "? ",  "? ", " 4 "),
array(   "? ",   "? ",   "? ",   "? ",   "? ",  "? ",  "? ",  "? ", " 5 "),
array(   "? ",   "? ",   "? ",   "? ",   "? ",  "? ",  "? ",  "? ", " 6 "),
array(   "? ",   "? ",   "? ",   "? ",   "? ",  "? ",  "? ",  "? ", " 7 ")



  
);


											//create safezone
 
$viewable[0][7] = strval( $cars[0][7]);
$viewable[1][7] = strval( $cars[0][7]);
$viewable[2][7] = strval( $cars[0][7]);
$viewable[3][7] = strval( $cars[0][7]);
$viewable[4][7] = strval( $cars[0][7]);
$viewable[5][7] = strval( $cars[0][7]);
$viewable[6][7] = strval( $cars[0][7]);







											//end

											
											



echo "1 2 3 4 5 6 7 8\n";

	
										//make viewabe vector viewable
for ($row = 0; $row < 10; $row++){
        for ($col = 0; $col < 10; $col++){
	 
        echo $viewable [$row][$col];
        }
        echo "\n";
}
     



$Status = "running";											//end



														//user input

while ($Status == "running"){


echo "Input coordinates: x";


$y = readline();

echo "                   y";

$x = readline();

echo "\n\n";

echo "1 2 3 4 5 6 7 8\n";

$viewable[$x-1][$y-1] = strval( $cars [$x-1][$y-1] . " ");

		if($viewable[$x-1][$y-1] == "9"){echo "\nGAME OVER\n";
		$Status = "Donerunning";
		}



if($Status == "running"){                                                                                        //make viewabe vector viewable
for ($row = 0; $row < 10; $row++){
        for ($col = 0; $col < 10; $col++){
        echo $viewable [$row][$col];
        }
        echo "\n";
}
 echo "\n\n\n\n\n\n\n";

}




}

?>







