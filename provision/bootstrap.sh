echo -e "\e[92mUpdating Packages... \e[0m"
sudo apt-get update -y

echo -e "\e[92mInstalling apache2 \e[0m"
sudo apt-get install apache2 -y

cd /var/www/html
sudo rm index.html

echo -e "\e[92mInstalling PHP dependences \e[0m"
sudo apt-get install php5-mcrypt -y
sudo apt-get install php5 -y
sudo apt-get install php5-cli -y 
sudo apt-get install php5-xdebug -y 
sudo apt-get install php5-mysql -y 
sudo apt-get install php5-imagick -y 
sudo apt-get install php-pear -y 
sudo apt-get install php5-dev -y 
sudo apt-get install php5-curl -y 
sudo apt-get install php5-sqlite -y 
sudo apt-get install libapache2-mod-php5 -y 

echo -e "\e[92mInstall mysql server\e[0m"
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
sudo apt-get -y install mysql-server

echo -e "\e[92m Updated mysql bind address to allow external connections. \e[0m"
sudo sed -i "s/.*bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/my.cnf

echo -e "\e[92mMysql Service restared \e[0m"
sudo service mysql restart 

echo -e "\e[92mGRANT ALL ON *.* TO [root] \e[0m"
mysql -uroot -proot -e "GRANT ALL ON *.* TO 'root'@'%' IDENTIFIED BY 'root';"

echo -e "\e[92mApache restarted \e[0m"
sudo service apache2 restart


echo -e "\e[92mOpen Your Broswer and access the address http:\\localhost:8080 or 33.33.33.10 \e[0m"
