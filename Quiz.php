<?php
if(isset($_POST['submit'])) {
            echo "Submit is selected"; echo "<br>";

            $answer1=$_POST["answer1"];
            $answer2=$_POST["answer2"];
            $answer3=$_POST["answer3"];
            $answer4=$_POST["answer4"];
            $answer5=$_POST["answer5"];
            $Total=0;
            $correct=0;

            if($answer1=="Red"){
              $Total=$Total+20;
              $correct++;
            } else {
              $Total=$Total;
            }
            if($answer2=="The Black Pearl"){
              $Total=$Total+20;
              $correct++;
            }
            if($answer3=="Liam"){
              $Total=$Total+20;
              $correct++;
            }
            if($answer4=="Kansas"){
              $Total=$Total+20;
              $correct++;
            }
            if($answer5=="Blue, green, red"){
              $Total=$Total+20;
              $correct++;
            }
            echo"1. What is the color of Donald Duck’s bowtie?";echo "<br>";
            echo"You answered : $answer1"; echo "<br>";
            echo"Correct answer: Red";echo "<br>";

            echo"2. In Pirates of the Caribbean, what was Captain Jack Sparrow’s ship’s name?";echo "<br>";
            echo"You answered : $answer2"; echo "<br>";
            echo"Correct answer: The Black Pearl";echo "<br>";

            echo"3. The British band One Direction (rip) was made up of Harry, Louis, Niall, Zayn, and… ";echo "<br>";
            echo"You answered : $answer3"; echo "<br>";
            echo"Correct answer: Liam";echo "<br>";

            echo"4. Which U.S. state is known as the sunflower state?";echo "<br>";
            echo"You answered : $answer4"; echo "<br>";
            echo"Correct answer: Kansas";echo "<br>";

            echo"5. The Powerpuff Girls are 3 distinct colors. What are they?";echo "<br>";
            echo"You answered : $answer5"; echo "<br>";
            echo"Correct answer: Blue, green, red";echo "<br>";

            echo "<br>";
            echo "Total correct answers : $correct";echo "<br>";
            $score=($Total/100)*100;
            echo "Your Score : $score %";


        }
?>
