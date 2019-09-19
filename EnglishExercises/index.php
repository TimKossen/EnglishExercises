<?php
session_start();
$spelling_array = array(
    "frequently",
    "emptied",
    "trauma",
    "pillar",
    "misrepresent",
    "whistle",
    "precision",
    "volunteer",
    "ordinary",
    "urban"
);

$_SESSION["correct_spelling"] = $spelling_array;
?>
<html>
<body>
<script type="text/javascript" src="validation.js"></script>  
<form action="store.php" name = "comments" method="post" onsubmit = "return validateForm()">
What is your name?
<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>
<h2> Part 1. The underlined words are spelt incorrectly. Try and spell them correctly. </h2> 
<br><br><br>
Our geography class investigated how <u> freqently </u>
people recycle their rubbish.
<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>
Jess <u> emptyed </u> all the bags in a frantic effort to find
the lost phone.
<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>
An ambulance took the <u>trawma</u> patient to the
hospital. 

<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>

A tall stone <u>pilar</u> supports the new statue
in the park. 

<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>


Advertising must not <u>missrepresent</u> facts
to make products seem more appealing. 

<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>

When the referee blew the final <u>whissel</u> the
score was even.

<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>

The new stopwatch was very accurate and timed
each lap with <u>precishon</u>.

<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>


We decided to <u>volenteer</u> and collect funds
for charity.
<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>

It had started as an <u>ordinry</u> day but
finished up being quite exciting
<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>

Cities and other <u>urben</u> areas need
careful planning.
<input type="text" name="c[]"  placeholder="Answer here...">
<br><br><br>

<br><br><br><br><br>

<input type="submit" value = "Submit">


</html>

<style>
textarea {
  width: 100%;
}
</style>

