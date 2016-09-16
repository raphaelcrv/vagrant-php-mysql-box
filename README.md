vagrant-php-mysql-box - under development 
*Atention*
This project is under development 

Actual Status
- Only Virtual Machine is working without Mysql, Apache ... 
===============

The most fast development box with apache, mysql and phpmyadmin and access mysql without ssh


<h2>First Step's</h2>
<p>Follow the instructions bellow and setup your PHP5 environment in minutes<p>

<ul>
  <li>
    Install vagrant using the installation instructions in the 
    <a href="http://docs.vagrantup.com/v2/installation/" /target="_blank">Getting Started document</a>
  </li>
  <li>Clone this repository and run $ vagrant up</li>
  <li>Put your php files inside the root of this project</li>
  <li>Acess localhost:8080 or 33.33.33.10 and enjoy!</li>
</ul>

<h2>Vagrant Basic Commands</h2>
<ul>
  <li>```vagrant up``` starts and provisions the vagrant environment</li>
  <li>```vagrant halt``` stops the vagrant machine</li>
  <li>```vagrant suspend``` Suspends the guest machine</li>
  <li>```vagrant resume``` resume a suspended vagrant machine</li>
  <li>```vagrant ssh``` connects to machine via SSH</li>
  <li>```vagrant reload``` restarts vagrant machine
  <li>```vagrant destroy``` stops and deletes all traces of the vagrant machine
</ul>

<h2>PHP My Admin</h2>
<ul>
  <li>Available on localhost:8080/phpmyadmin</li>
  <li>User: root Password: root</li>
</ul>

<h2>Mysql</h2>
<ul>
  <li>Hostname: 127.0.0.1</li>
  <li>Username: vagrant</li>
  <li>Server Port: 3307</li>
  <li>Username: root</li>
  <li>Password: root</li>
</ul>


<h2>Included components</h2>

<ul>
  <li>php5</li>
  <li>apache2</li>
  <li>php5-cli</li>
  <li>php5-xdebug</li>
  <li>php5-mysql</li>
  <li>php5-imagick</li>
  <li>php5-mcrypt</li>
  <li>php-pear</li>
  <li>php5-dev</li>
  <li>php5-curl</li>
  <li>php5-sqlite</li>
  <li>libapache2-mod-php5</li>
</ul>

