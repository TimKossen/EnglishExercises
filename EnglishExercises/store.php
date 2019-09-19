<?php
session_start();
$fp = 'data.txt';
$X = (int)1;
$CORRECT = (int)0;
echo "<html>";
echo "<table>";
echo "<th> Your Answer </th>";
echo "<th> The Correct Answer </th>";
while(!empty($_POST[c][$X])){
    $ANSWER = $_SESSION["correct_spelling"][$X-1];
    $INPUT = $_POST[c][$X];
    echo "<tr>";
    echo "<td>$INPUT</td>";
    echo "<td>$ANSWER</td>";
    echo "</tr>";
    if($ANSWER == $INPUT){
        $CORRECT++;
    }
    $X++;
}


echo "</table>";
echo "Your Score: ";
$X = $X - 1;
$PERCENT = (int)(($CORRECT / $X)*100);
echo $CORRECT;
echo "/";
echo $X;
echo "<br>";
echo $PERCENT;
echo "%";
$_POST["score"] = $PERCENT;
file_put_contents($fp, var_export($_POST, true), FILE_APPEND | LOCK_EX);
?>

<form method="get" action="/index.php">
    <button type="submit">Click Here to Try Again</button>
</form>

</html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>