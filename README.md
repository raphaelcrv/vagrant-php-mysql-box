# Vagrant-php-mysql-box - under development<br/>

The most fast development box with apache, mysql and phpmyadmin and allow you connect to guest mysql without ssh


<h2>Getting Started</h2>
<p>Follow the instructions bellow and setup your PHP5 environment in minutes
After you setup your project and run you can delete the git folder and start a new repo with your project for another's dev's</p>

* Install vagrant using the installation instructions in the <a href="http://docs.vagrantup.com/v2/installation/" /target="_blank">Getting Started document</a>
* Clone this repository and run $ vagrant up in your bash or cmd
* Put your php files inside the root directory of this project
* Acess from your browser the address localhost:8080 or 33.33.33.10 and enjoy!


#Development Information

###Vagrant Basic Commands

* [ vagrant up ] - starts and provisions the vagrant environment</li>
* [ vagrant halt ] - stops the vagrant machine</li>
* [ vagrant suspend ] - Suspends the guest machine</li>
* [ vagrant resume ] - resume a suspended vagrant machine</li>
* [ vagrant ssh ] - connects to machine via SSH</li>
* [ vagrant reload ] - restarts vagrant machine </li>
* [ vagrant destroy ] - stops and deletes all traces of the vagrant machine </li>

### PHP My Admin

* Available on localhost:8080/phpmyadmin
* User: root Password: root


### Mysql

* Hostname: 127.0.0.1
* Username: vagrant
* Server Port: 3307
* Username: root
* Password: root



###Included components
* php5
* apache2
* php5-cli
* php5-xdebug
* php5-mysql
* php5-imagick
* php5-mcrypt
* php-pear
* php5-dev
* php5-curl
* php5-sqlite
* libapache2-mod-php5


<h2>Contributing</h2>
Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Authors

* **Raphael Souza** - *Initial work* - [raphaelcrv repo](https://github.com/raphaelcrv)

See also the list of [contributors](https://github.com/raphaelcrv/vagrant-php-mysql-box/edit/Readme-Update/CONTRIBUTING.md) who participated in this project.

## License

You must give appropriate credit, provide a link to this repo

