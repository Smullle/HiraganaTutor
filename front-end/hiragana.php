<?php

session_start();

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Hiragana Tutor</title>
      <link href="StyleSheet.css" rel="stylesheet" type="text/css">
   </head>
   <body class="background">
      <h1 align="center">Hiragana Tutor</h1>
      <p class="intro">Welcome to Hiragana Tutor study the table below to learn Hiragana and test your knowledge using the five quizzes below. 
         Hover over the Hiragana to see the stroke order and click to hear the pronunciation. Use the Login/Register dropdown to save your progress.
      </p>
      <button class="collapsible">Login/Register</button>
      <div class="content">
         <br>
         <form method="POST" id="login" autocomplete="off">
            <label><input type="text" name="user_id" placeholder="Username"></label>
            <label><input type="password" name="user_pwd" placeholder="Password"></label>
            <br>
            <br>
            <button class="login" type="button" onclick="submitForm('../web-service/login.php')" >Login</button>
            <button class="login" type="button" onclick="submitForm('../web-service/register.php')" >Register</button>
            <br>
            <br>
         </form>
         <div id="ajaxResponseUser"></div>
      </div>
      </div>
      <table align="center">
         <tr>
            <th></th>
            <th>
               <h1>a</h1>
            </th>
            <th>
               <h1>i</h1>
            </th>
            <th>
               <h1>u</h1>
            </th>
            <th>
               <h1>e</h1>
            </th>
            <th>
               <h1>o</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>*</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/a.png" alt="a" onmouseover="playGif(0, this)" onmouseout="stopGif(0, this)" onclick="playSound(0)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/i.png" alt="i" onmouseover="playGif(1, this)" onmouseout="stopGif(1, this)" onclick="playSound(1)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/u.png" alt="u" onmouseover="playGif(2, this)" onmouseout="stopGif(2, this)" onclick="playSound(2)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/e.png" alt="e" onmouseover="playGif(3, this)" onmouseout="stopGif(3, this)" onclick="playSound(3)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/o.png" alt="o" onmouseover="playGif(4, this)" onmouseout="stopGif(4, this)" onclick="playSound(4)"></img></td>
            <th>
               <h1>*</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>k</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/ka.png" alt="ka" onmouseover="playGif(5, this)" onmouseout="stopGif(5, this)" onclick="playSound(5)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ki.png" alt="ki" onmouseover="playGif(6, this)" onmouseout="stopGif(6, this)" onclick="playSound(6)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ku.png" alt="ku" onmouseover="playGif(7, this)" onmouseout="stopGif(7, this)" onclick="playSound(7)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ke.png" alt="ke" onmouseover="playGif(8, this)" onmouseout="stopGif(8, this)" onclick="playSound(8)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ko.png" alt="ko" onmouseover="playGif(9, this)" onmouseout="stopGif(9, this)" onclick="playSound(9)"></img></td>
            <th>
               <h1>k</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>s</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/sa.png" alt="sa" onmouseover="playGif(10, this)" onmouseout="stopGif(10, this)" onclick="playSound(10)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/si.png" alt="shi" onmouseover="playGif(11, this)" onmouseout="stopGif(11, this)" onclick="playSound(11)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/su.png" alt="su" onmouseover="playGif(12, this)" onmouseout="stopGif(12, this)" onclick="playSound(12)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/se.png" alt="se" onmouseover="playGif(13, this)" onmouseout="stopGif(13, this)" onclick="playSound(13)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/so.png" alt="so" onmouseover="playGif(14, this)" onmouseout="stopGif(14, this)" onclick="playSound(14)"></img></td>
            <th>
               <h1>s</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>t</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/ta.png" alt="ta" onmouseover="playGif(15, this)" onmouseout="stopGif(15, this)" onclick="playSound(15)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ti.png" alt="chi" onmouseover="playGif(16, this)" onmouseout="stopGif(16, this)" onclick="playSound(16)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/tu.png" alt="tsu" onmouseover="playGif(17, this)" onmouseout="stopGif(17, this)" onclick="playSound(17)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/te.png" alt="te" onmouseover="playGif(18, this)" onmouseout="stopGif(18, this)" onclick="playSound(18)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/to.png" alt="to" onmouseover="playGif(19, this)" onmouseout="stopGif(19, this)" onclick="playSound(19)"></img></td>
            <th>
               <h1>t</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>n</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/na.png" alt="na" onmouseover="playGif(20, this)" onmouseout="stopGif(20, this)" onclick="playSound(20)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ni.png" alt="ni" onmouseover="playGif(21, this)" onmouseout="stopGif(21, this)" onclick="playSound(21)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/nu.png" alt="nu" onmouseover="playGif(22, this)" onmouseout="stopGif(22, this)" onclick="playSound(22)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ne.png" alt="ne" onmouseover="playGif(23, this)" onmouseout="stopGif(23, this)" onclick="playSound(23)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/no.png" alt="no" onmouseover="playGif(24, this)" onmouseout="stopGif(24, this)" onclick="playSound(24)"></img></td>
            <th>
               <h1>n</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>h</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/ha.png" alt="ha" onmouseover="playGif(25, this)" onmouseout="stopGif(25, this)" onclick="playSound(25)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/hi.png" alt="hi" onmouseover="playGif(26, this)" onmouseout="stopGif(26, this)" onclick="playSound(26)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/hu.png" alt="hu" onmouseover="playGif(27, this)" onmouseout="stopGif(27, this)" onclick="playSound(27)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/he.png" alt="he" onmouseover="playGif(28, this)" onmouseout="stopGif(28, this)" onclick="playSound(28)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ho.png" alt="ho" onmouseover="playGif(29, this)" onmouseout="stopGif(29, this)" onclick="playSound(29)"></img></td>
            <th>
               <h1>h</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>m</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/ma.png" alt="ma" onmouseover="playGif(30, this)" onmouseout="stopGif(30, this)" onclick="playSound(30)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/mi.png" alt="mi" onmouseover="playGif(31, this)" onmouseout="stopGif(31, this)" onclick="playSound(31)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/mu.png" alt="mu" onmouseover="playGif(32, this)" onmouseout="stopGif(32, this)" onclick="playSound(32)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/me.png" alt="me" onmouseover="playGif(33, this)" onmouseout="stopGif(33, this)" onclick="playSound(33)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/mo.png" alt="mo" onmouseover="playGif(34, this)" onmouseout="stopGif(34, this)" onclick="playSound(34)"></img></td>
            <th>
               <h1>m</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>y</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/ya.png" alt="ya" onmouseover="playGif(35, this)" onmouseout="stopGif(35, this)" onclick="playSound(35)"></img></td>
            <td></td>
            <td><img src="/HIRAGANA/front-end/images/yu.png" alt="yu" onmouseover="playGif(36, this)" onmouseout="stopGif(36, this)" onclick="playSound(36)"></img></td>
            <td></td>
            <td><img src="/HIRAGANA/front-end/images/yo.png" alt="yo" onmouseover="playGif(37, this)" onmouseout="stopGif(37, this)" onclick="playSound(37)"></img></td>
            <th>
               <h1>y</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>r</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/ra.png" alt="ra" onmouseover="playGif(38, this)" onmouseout="stopGif(38, this)" onclick="playSound(38)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ri.png" alt="ri" onmouseover="playGif(39, this)" onmouseout="stopGif(39, this)" onclick="playSound(39)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ru.png" alt="ru" onmouseover="playGif(40, this)" onmouseout="stopGif(40, this)" onclick="playSound(40)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/re.png" alt="re" onmouseover="playGif(41, this)" onmouseout="stopGif(41, this)" onclick="playSound(41)"></img></td>
            <td><img src="/HIRAGANA/front-end/images/ro.png" alt="ro" onmouseover="playGif(42, this)" onmouseout="stopGif(42, this)" onclick="playSound(42)"></img></td>
            <th>
               <h1>r</h1>
            </th>
         </tr>
         <tr>
            <th>
               <h1>w</h1>
            </th>
            <td><img src="/HIRAGANA/front-end/images/wa.png" alt="wa" onmouseover="playGif(43, this)" onmouseout="stopGif(43, this)" onclick="playSound(43)"></img></td>
            <td></td>
            <td></td>
            <td></td>
            <td><img src="/HIRAGANA/front-end/images/wo.png" alt="wo" onmouseover="playGif(44, this)" onmouseout="stopGif(44, this)" onclick="playSound(44)"></img></td>
            <th>
               <h1>w</h1>
            </th>
         </tr>
         <tr>
         <tr>
            <th></th>
            <th>
               <h1>a</h1>
            </th>
            <th>
               <h1>i</h1>
            </th>
            <th>
               <h1>u</h1>
            </th>
            <th>
               <h1>e</h1>
            </th>
            <th>
               <h1>o</h1>
            </th>
         </tr>
         <th></th>
         <td></td>
         <td></td>
         <td>
            <img src="/HIRAGANA/front-end/images/n.png" alt="n" onmouseover="playGif(45, this)" onmouseout="stopGif(45, this)" onclick="playSound(45)"></img>
            <h1 align="center">n</h1>
         </td>
         <td></td>
         <td></td>
         </tr>
      </table>
      <h2 align="center">Test Your Knowledge</h2>
      <button class="collapsible">Quiz 1: a sounds.</button>
      <div class="content">
         <form action="../web-service/aResults.php" method="post" id="Quiz1" autocomplete="off">
            <h2>Question 1</h2>
            <img src="/HIRAGANA/front-end/images/ya.png"></img>
            <br>
            <br>
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">ko
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">re
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">e
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ya
            <h2>Question 2</h2>
            <img src="/HIRAGANA/front-end/images/ta.png"></img>
            <br>
            <br>
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">o
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">ta
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">yo
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">a
            <h2>Question 3</h2>
            <img src="/HIRAGANA/front-end/images/a.png"></img>
            <br>
            <br>
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">a
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">yu
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">me
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ki
            <h2>Question 4</h2>
            <img src="/HIRAGANA/front-end/images/na.png"></img>
            <br>
            <br>
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">ka
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">na
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">ni
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ke
            <h2>Question 5</h2>
            <img src="/HIRAGANA/front-end/images/wa.png"></img>
            <br>
            <br>
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">wa
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">ma
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">ta
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">nu
            <h2>Question 6</h2>
            <h3>Select "ha"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/wa.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/u.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/he.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ha.png"></img>
            </label>
            <h2>Question 7</h2>
            <h3>Select "sa"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/mu.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/sa.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ho.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ne.png"></img>
            </label>
            <h2>Question 8</h2>
            <h3>Select "ka"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/si.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ka.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ti.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/yo.png"></img>
            </label>
            <h2>Question 9</h2>
            <h3>Select "ma"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ra.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/n.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ma.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/mi.png"></img>
            </label>
            <h2>Question 10</h2>
            <h3>Select "ra"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ra.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/se.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/no.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/tu.png"></img>
            </label>
            <br>
            <br>
            <button class="submitButton" type="submit" name="submit">Submit Quiz</button> 
            <br>
         </form>
         <br>
         <div id="ajaxResponse1"></div>
         <br>
      </div>
      <button class="collapsible">Quiz 2: e sounds and n.</button>
      <div class="content">
         <form action="../web-service/eResults.php" method="post" id="Quiz2" autocomplete="off">
            <h2>Question 1</h2>
            <img src="/HIRAGANA/front-end/images/se.png"></img>
            <br>
            <br>
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">si
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">se
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">ra
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ki
            <h2>Question 2</h2>
            <img src="/HIRAGANA/front-end/images/e.png"></img>
            <br>
            <br>
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">ti
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">me
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">e
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">o
            <h2>Question 3</h2>
            <img src="/HIRAGANA/front-end/images/me.png"></img>
            <br>
            <br>
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">hi
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">so
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">me
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">re
            <h2>Question 4</h2>
            <img src="/HIRAGANA/front-end/images/he.png"></img>
            <br>
            <br>
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">he
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">wo
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">su
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">yo
            <h2>Question 5</h2>
            <img src="/HIRAGANA/front-end/images/n.png"></img>
            <br>
            <br>
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">tu
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">n
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">ta
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">i
            <h2>Question 6</h2>
            <h3>Select "ke"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ya.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ko.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ke.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/a.png"></img>
            </label>
            <h2>Question 7</h2>
            <h3>Select "te"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/te.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/no.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ta.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ru.png"></img>
            </label>
            <h2>Question 8</h2>
            <h3>Select "ne"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ho.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ne.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/e.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/o.png"></img>
            </label>
            <h2>Question 9</h2>
            <h3>Select "me"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ku.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ne.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/re.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/so.png"></img>
            </label>
            <h2>Question 10</h2>
            <h3>Select "re"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ho.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ti.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/n.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/re.png"></img>
            </label>
            <br>
            <br>
            <button class="submitButton" type="submit" name="submit">Submit Quiz</button> 
            <br>
         </form>
         <br>
         <div id="ajaxResponse2"></div>
         <br>
      </div>
      <button class="collapsible">Quiz 3: i sounds.</button>
      <div class="content">
         <form action="../web-service/iResults.php" method="post" id="Quiz3" autocomplete="off">
            <h2>Question 1</h2>
            <img src="/HIRAGANA/front-end/images/i.png"></img>
            <br>
            <br>
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">wa
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">wo
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">i
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">na
            <h2>Question 2</h2>
            <img src="/HIRAGANA/front-end/images/mi.png"></img>
            <br>
            <br>
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">hi
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">yi
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">mo
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">mi
            <h2>Question 3</h2>
            <img src="/HIRAGANA/front-end/images/ni.png"></img>
            <br>
            <br>
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">ni
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">ta
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">u
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">se
            <h2>Question 4</h2>
            <img src="/HIRAGANA/front-end/images/ki.png"></img>
            <br>
            <br>
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">sa
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">hu
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">ki
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ku
            <h2>Question 5</h2>
            <img src="/HIRAGANA/front-end/images/si.png"></img>
            <br>
            <br>
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">to
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">si
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">wa
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">i
            <h2>Question 6</h2>
            <h3>Select "mi"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/i.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ma.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/mi.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/he.png"></img>
            </label>
            <h2>Question 7</h2>
            <h3>Select "ri"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ra.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ro.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ri.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ne.png"></img>
            </label>
            <h2>Question 8</h2>
            <h3>Select "ni"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ni.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/mi.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/si.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/no.png"></img>
            </label>
            <h2>Question 9</h2>
            <h3>Select "i"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/na.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/i.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ru.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ka.png"></img>
            </label>
            <h2>Question 10</h2>
            <h3>Select "ki"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ki.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/e.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/te.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/a.png"></img>
            </label>
            <br>
            <br>
            <button class="submitButton" type="submit" name="submit">Submit Quiz</button> 
            <br>
         </form>
         <br>
         <div id="ajaxResponse3"></div>
         <br>
      </div>
      <button class="collapsible">Quiz 4: o sounds and n.</button>
      <div class="content">
         <form action="../web-service/oResults.php" method="post" id="Quiz4" autocomplete="off">
            <h2>Question 1</h2>
            <img src="/HIRAGANA/front-end/images/o.png"></img>
            <br>
            <br>
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">te
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">o
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">a
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">yu
            <h2>Question 2</h2>
            <img src="/HIRAGANA/front-end/images/ro.png"></img>
            <br>
            <br>
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">me
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">e
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">te
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ro
            <h2>Question 3</h2>
            <img src="/HIRAGANA/front-end/images/o.png"></img>
            <br>
            <br>
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">o
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">no
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">hu
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">mo
            <h2>Question 4</h2>
            <img src="/HIRAGANA/front-end/images/to.png"></img>
            <br>
            <br>
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">mu
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">so
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">to
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">he
            <h2>Question 5</h2>
            <img src="/HIRAGANA/front-end/images/no.png"></img>
            <br>
            <br>
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">tu
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">ni
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">no
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">yo
            <h2>Question 6</h2>
            <h3>Select "ho"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/yu.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ke.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ri.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ho.png"></img>
            </label>
            <h2>Question 7</h2>
            <h3>Select "n"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/nu.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/n.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ri.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ya.png"></img>
            </label>
            <h2>Question 8</h2>
            <h3>Select "mo"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/mo.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/so.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/i.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/no.png"></img>
            </label>
            <h2>Question 9</h2>
            <h3>Select "ko"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/te.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/a.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ko.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/o.png"></img>
            </label>
            <h2>Question 10</h2>
            <h3>Select "so"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ko.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/so.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ma.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/u.png"></img>
            </label>
            <br>
            <br>
            <button class="submitButton" type="submit" name="submit">Submit Quiz</button> 
            <br>
         </form>
         <br>
         <div id="ajaxResponse4"></div>
         <br>
      </div>
      <button class="collapsible">Quiz 5: u sounds.</button>
      <div class="content">
         <form action="../web-service/uResults.php" method="post" id="Quiz5" autocomplete="off">
            <h2>Question 1</h2>
            <img src="/HIRAGANA/front-end/images/hu.png"></img>
            <br>
            <br>
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">ro
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">sa
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">hu
            <input type="radio" name="Question1"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ka
            <h2>Question 2</h2>
            <img src="/HIRAGANA/front-end/images/yu.png"></img>
            <br>
            <br>
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">ma
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">mo
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">ko
            <input type="radio" name="Question2"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">yu
            <h2>Question 3</h2>
            <img src="/HIRAGANA/front-end/images/u.png"></img>
            <br>
            <br>
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">me
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">yu
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">u
            <input type="radio" name="Question3"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ku
            <h2>Question 4</h2>
            <img src="/HIRAGANA/front-end/images/ku.png"></img>
            <br>
            <br>
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">tu
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">ku
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">hi
            <input type="radio" name="Question4"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ha
            <h2>Question 5</h2>
            <img src="/HIRAGANA/front-end/images/nu.png"></img>
            <br>
            <br>
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a">nu
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b">me
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c">yu
            <input type="radio" name="Question5"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d">ku
            <h2>Question 6</h2>
            <h3>Select "ru"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/me.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ru.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/u.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question6"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/to.png"></img>
            </label>
            <h2>Question 7</h2>
            <h3>Select "yu"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/hi.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/ha.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/me.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question7"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/yu.png"></img>
            </label>
            <h2>Question 8</h2>
            <h3>Select "tu"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/ku.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/hi.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/tu.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question8"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/ha.png"></img>
            </label>
            <h2>Question 9</h2>
            <h3>Select "mu"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/me.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/u.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/to.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question9"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/mu.png"></img>
            </label>
            <h2>Question 10</h2>
            <h3>Select "su"</h3>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="a") echo "checked";?> value="a"><img src="/HIRAGANA/front-end/images/su.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="b") echo "checked";?> value="b"><img src="/HIRAGANA/front-end/images/mo.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="c") echo "checked";?> value="c"><img src="/HIRAGANA/front-end/images/ho.png"></img>
            </label>
            <label>
            <input class="imageRadio" type="radio" name="Question10"
               <?php if (isset($Q1) && $Q1=="d") echo "checked";?> value="d"><img src="/HIRAGANA/front-end/images/yu.png"></img>
            </label>
            <br>
            <br>
            <button class="submitButton" type="submit" name="submit">Submit Quiz</button> 
            <br>
            <div id="ajaxResponse5"></div>
            <br>
         </form>
      </div>
      <br>
      <button class="collapsible">References</button>
      <div class="content">
         <h1>References</h1>
         <p>https://dzone.com/articles/building-simple-quiz-php</p>
         <p>All Images GIFs and Audo from https://en.wikipedia.org/wiki/Hiragana</p>
         <p>https://www.w3schools.com/howto/howto_css_custom_checkbox.asp</p>
         <p>https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_collapsible</p>
         <p>Background https://www.motorhomevagabond.com/japan/shirahige-shrine-ukimido-temple-lake-biwa/</p>
         <p>Login/Register functionality https://www.youtube.com/watch?v=xb8aad4MRx8</p>
      </div>
   </body>
</html>

<script>

images = [
    "/HIRAGANA/front-end/images/a.png",
    "/HIRAGANA/front-end/images/i.png",
    "/HIRAGANA/front-end/images/u.png",
    "/HIRAGANA/front-end/images/e.png",
    "/HIRAGANA/front-end/images/o.png",
    "/HIRAGANA/front-end/images/ka.png",
    "/HIRAGANA/front-end/images/ki.png",
    "/HIRAGANA/front-end/images/ku.png",
    "/HIRAGANA/front-end/images/ke.png",
    "/HIRAGANA/front-end/images/ko.png",
    "/HIRAGANA/front-end/images/sa.png",
    "/HIRAGANA/front-end/images/si.png",
    "/HIRAGANA/front-end/images/su.png",
    "/HIRAGANA/front-end/images/se.png",
    "/HIRAGANA/front-end/images/so.png",
    "/HIRAGANA/front-end/images/ta.png",
    "/HIRAGANA/front-end/images/ti.png",
    "/HIRAGANA/front-end/images/tu.png",
    "/HIRAGANA/front-end/images/te.png",
    "/HIRAGANA/front-end/images/to.png",
    "/HIRAGANA/front-end/images/na.png",
    "/HIRAGANA/front-end/images/ni.png",
    "/HIRAGANA/front-end/images/nu.png",
    "/HIRAGANA/front-end/images/ne.png",
    "/HIRAGANA/front-end/images/no.png",
    "/HIRAGANA/front-end/images/ha.png",
    "/HIRAGANA/front-end/images/hi.png",
    "/HIRAGANA/front-end/images/hu.png",
    "/HIRAGANA/front-end/images/he.png",
    "/HIRAGANA/front-end/images/ho.png",
    "/HIRAGANA/front-end/images/ma.png",
    "/HIRAGANA/front-end/images/mi.png",
    "/HIRAGANA/front-end/images/mu.png",
    "/HIRAGANA/front-end/images/me.png",
    "/HIRAGANA/front-end/images/mo.png",
    "/HIRAGANA/front-end/images/ya.png",
    "/HIRAGANA/front-end/images/yu.png",
    "/HIRAGANA/front-end/images/yo.png",
    "/HIRAGANA/front-end/images/ra.png",
    "/HIRAGANA/front-end/images/ri.png",
    "/HIRAGANA/front-end/images/ru.png",
    "/HIRAGANA/front-end/images/re.png",
    "/HIRAGANA/front-end/images/ro.png",
    "/HIRAGANA/front-end/images/wa.png",
    "/HIRAGANA/front-end/images/wo.png",
    "/HIRAGANA/front-end/images/n.png"
]

gifs = [
    "/HIRAGANA/front-end/gif/a.gif",
    "/HIRAGANA/front-end/gif/i.gif",
    "/HIRAGANA/front-end/gif/u.gif",
    "/HIRAGANA/front-end/gif/e.gif",
    "/HIRAGANA/front-end/gif/o.gif",
    "/HIRAGANA/front-end/gif/ka.gif",
    "/HIRAGANA/front-end/gif/ki.gif",
    "/HIRAGANA/front-end/gif/ku.gif",
    "/HIRAGANA/front-end/gif/ke.gif",
    "/HIRAGANA/front-end/gif/ko.gif",
    "/HIRAGANA/front-end/gif/sa.gif",
    "/HIRAGANA/front-end/gif/shi.gif",
    "/HIRAGANA/front-end/gif/su.gif",
    "/HIRAGANA/front-end/gif/se.gif",
    "/HIRAGANA/front-end/gif/so.gif",
    "/HIRAGANA/front-end/gif/ta.gif",
    "/HIRAGANA/front-end/gif/chi.gif",
    "/HIRAGANA/front-end/gif/tsu.gif",
    "/HIRAGANA/front-end/gif/te.gif",
    "/HIRAGANA/front-end/gif/to.gif",
    "/HIRAGANA/front-end/gif/na.gif",
    "/HIRAGANA/front-end/gif/ni.gif",
    "/HIRAGANA/front-end/gif/nu.gif",
    "/HIRAGANA/front-end/gif/ne.gif",
    "/HIRAGANA/front-end/gif/no.gif",
    "/HIRAGANA/front-end/gif/ha.gif",
    "/HIRAGANA/front-end/gif/hi.gif",
    "/HIRAGANA/front-end/gif/hu.gif",
    "/HIRAGANA/front-end/gif/he.gif",
    "/HIRAGANA/front-end/gif/ho.gif",
    "/HIRAGANA/front-end/gif/ma.gif",
    "/HIRAGANA/front-end/gif/mi.gif",
    "/HIRAGANA/front-end/gif/mu.gif",
    "/HIRAGANA/front-end/gif/me.gif",
    "/HIRAGANA/front-end/gif/mo.gif",
    "/HIRAGANA/front-end/gif/ya.gif",
    "/HIRAGANA/front-end/gif/yu.gif",
    "/HIRAGANA/front-end/gif/yo.gif",
    "/HIRAGANA/front-end/gif/ra.gif",
    "/HIRAGANA/front-end/gif/ri.gif",
    "/HIRAGANA/front-end/gif/ru.gif",
    "/HIRAGANA/front-end/gif/re.gif",
    "/HIRAGANA/front-end/gif/ro.gif",
    "/HIRAGANA/front-end/gif/wa.gif",
    "/HIRAGANA/front-end/gif/wo.gif",
    "/HIRAGANA/front-end/gif/n.gif"
]

sounds = [
    "/HIRAGANA/front-end/HiraganaAudio/a.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/i.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/u.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/e.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/o.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ka.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ki.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ku.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ke.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ko.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/sa.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/shi.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/su.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/se.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/so.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ta.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/chi.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/tsu.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/te.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/to.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/na.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ni.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/nu.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ne.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/no.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ha.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/hi.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/hu.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/he.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ho.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ma.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/mi.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/mu.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/me.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/mo.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ya.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/yu.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/yo.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ra.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ri.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ru.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/re.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/ro.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/wa.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/wo.mp3",
    "/HIRAGANA/front-end/HiraganaAudio/n.mp3"
]


function playGif(x, imag) {
    imag.setAttribute("src", gifs[x])
}

function stopGif(x, imag) {
    imag.setAttribute("src", images[x])
}

function playSound(x) {
    var audio = new Audio(sounds[x]);
    audio.play();
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $(document).on('submit', '#Quiz1', function(e) {

        e.preventDefault();

        var result1 = $('#Quiz1').serializeArray();

        $.post('../web-service/aResults.php', result1, function(htmlResponse) {
            $('#ajaxResponse1').html(htmlResponse);
        });
    });

$(document).on('submit', '#Quiz2', function(e) {

    e.preventDefault();

    var result2 = $('#Quiz2').serializeArray();

    $.post('../web-service/eResults.php', result2, function(htmlResponse) {
        $('#ajaxResponse2').html(htmlResponse);
    });
});

$(document).on('submit', '#Quiz3', function(e) {

    e.preventDefault();

    var result3 = $('#Quiz3').serializeArray();

    $.post('../web-service/iResults.php', result3, function(htmlResponse) {
        $('#ajaxResponse3').html(htmlResponse);
    });
});

$(document).on('submit', '#Quiz4', function(e) {

    e.preventDefault();

    var result4 = $('#Quiz4').serializeArray();

    $.post('../web-service/oResults.php', result4, function(htmlResponse) {
        $('#ajaxResponse4').html(htmlResponse);
    });
});

$(document).on('submit', '#Quiz5', function(e) {

    e.preventDefault();

    var result5 = $('#Quiz5').serializeArray();

    $.post('../web-service/uResults.php', result5, function(htmlResponse) {
        $('#ajaxResponse5').html(htmlResponse);
    });
});


function submitForm(url) {
    var data = $("#login").serialize();
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        success: function(data) {
            $("#ajaxResponseUser").html(data);
        }
    });
}

</script>