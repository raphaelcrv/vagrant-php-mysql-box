echo 'Update Packages'
sudo apt-get update -y

#Variables
dir_html = 'cd /var/www/html' 
dir_root = 'cd /'             
install = 'sudo apt-get install' 

echo 'Installing apache'
$install apache2 -y

#Html directory
$dir_html

if [ -f $dir_html/index.html ]; then
    echo "Apache demo index.html File deleted!"
    rmdir -rf html
else
    echo 'Not found'
fi

echo 'Installing PHP dependences Check Doc for more info'
$install php5-mcrypt -y
$install php5 -y
$install php5-cli
$install php5-xdebug
$install php5-mysql
$install php5-imagick
$install php5-mcrypt
$install php-pear
$install php5-dev
$install php5-curl
$install php5-sqlite
$install libapache2-mod-php5

#To-do instalar mysql testar todas as dependencias / fazer conexao com o banco finalizar dependencias
#to-do criar pagina de apresentação php na raiz
# #Installing Mysql
# echo '6 - Updated mysql bind address to allow external connections.'
# sudo sed -i "s/.*bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/my.cnf
