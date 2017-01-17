<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hello World</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/site.css" rel="stylesheet">
  </head>
  <body>
    <div class='site'>
      <header class='row'>
        <h1><a href='https://github.com/raphaelcrv/vagrant-php-mysql-box'>Vagrant-php-mysql-box</a></h1>
        <hr>
        <p>The most fast development box with apache, mysql and phpmyadmin and allow you connect to guest mysql without ssh</p>
      </header>
      <section class='row'>
        <h2>Getting Started</h2>
        <p>Follow the instructions bellow and setup your PHP5 environment in minutes After you setup your project and run you can delete the git folder and start a new repo with your project for another's dev's</p>
        <hr>        
        <ul>
          <li>Install vagrant using the installation instructions in the Getting Started document</li>
          <li>Clone this repository and run $ vagrant up in your bash or cmd</li>
          <li>Put your php files inside the root directory of this project</li>
          <li>Acess from your browser the address localhost:8080 or 33.33.33.10 and enjoy!</h1>          
        </ul>
        <h2>Development Information</h2>
        <p>the most used comands on vagrant</p>
        <hr>        
        <ul>
          <li>[ vagrant up ] - starts and provisions the vagrant environment</li>
          <li>[ vagrant halt ] - stops the vagrant machine</li>
          <li>[ vagrant suspend ] - Suspends the guest machine</li>
          <li>[ vagrant resume ] - resume a suspended vagrant machine</h1>
          <li>[ vagrant ssh ] - connects to machine via SSH</h1>
          <li>[ vagrant reload ] - restarts vagrant machine</h1>
          <li>[ vagrant destroy ] - stops and deletes all traces of the vagrant machine</h1>
        </ul>
        <p><b>Connection to Mysql</b></p>
        <p>Password:<b>root</b></p>
        <img src='img/connection.PNG'/>
        </br>
        <div class="alert alert-success" style="margin-top: 10px;" role="alert">
          <?php
           echo "DEMO PHP SERVER DATE = ".date('l jS \of F Y h:i:s A');
          ?>
        </div>
      </section>
      <footer>
        <p>You must give appropriate credit, provide a link to this repo</p>
      </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>