<?php
$lok = getcwd();
print $lok;
$image = scandir($lok);
print "<table>\n";
foreach($image as $r=>$i){
    if(strlen($i)>2 && $i!='index.php'){
        if($r%8==0)print "<tr>\n";
        print "<td><img width='40px' height='40px' src='$i'><td >$i</td></td>";
        if($r%8==7)print "\n</tr>\n";
    }
}
print "</table>\n";
