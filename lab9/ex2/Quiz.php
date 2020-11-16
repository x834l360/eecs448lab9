<html>
<head></head>
<body>
<?php
    echo "<h2 > QUIZ RESULT </h2>";
    $score = 0;

    echo "<p><strong> Question 1: What is the Capital of Spain ? </strong></p>";
    echo "<p>You answered:"  .$_POST['option-1']. "</p>";
    echo "<p>Correct answer: Madrid</p>";

    if ($_POST['option-1'] == Madrid){
      $score = $score + 20;
    }

    echo "<p><strong> Question 2: What is the Capital of America ? </strong></p>";
    echo "<p>You answered:"  .$_POST['option-2']. "</p>";
    echo "<p>Correct answer: Washington</p>";

    if ($_POST['option-2'] == Washington){
      $score = $score + 20;
    }

    echo "<p><strong> Question 3: What is the Capital of Japan ? </strong></p>";
    echo "<p>You answered:"  .$_POST['option-3']. "</p>";
    echo "<p>Correct answer: Tokyo</p>";

    if ($_POST['option-3'] == Tokyo){
      $score = $score + 20;
    }

    echo "<p><strong> Question 4: What is the Capital of The UK ? </strong></p>";
    echo "<p>You answered:"  .$_POST['option-4']. "</p>";
    echo "<p>Correct answer: London</p>";

    if ($_POST['option-4'] == London){
      $score = $score + 20;
    }

    echo "<p><strong> Question 5: What is the Capital of France ? </strong></p>";
    echo "<p>You answered:"  .$_POST['option-5']. "</p>";
    echo "<p>Correct answer: Pairs</p>";

    if ($_POST['option-5'] == Pairs){
      $score = $score + 20;
    }


	echo "<h4> You scored " .$score. "%</h4>" ;
?>
</body>
</html>
