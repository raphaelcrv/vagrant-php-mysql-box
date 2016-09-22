# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Check Doc for More info
VAGRANTFILE_VERSION = "2"

Vagrant.configure(VAGRANTFILE_VERSION) do |config|
# This configures what box the machine will be brought up against
config.vm.box = "ubuntu/trusty64"

# First parameter is a path to a directory on the host machine. '(.) root host', 
#Tip: You can customize add a folder and change the first parameter like /project and put y files inside project folder
# Second parameter must be an absolute path of where to share the folder (/var/www) path guest
config.vm.synced_folder ".", "/var/www/html"

#Allow you to access a port on your host machine
  config.vm.network "forwarded_port", guest: 3306, host: 3307 #mysql
  config.vm.network "forwarded_port", guest: 80, host: 8080, # nginx/apache
  auto_correct: true

# External script bash for provisioner
config.vm.provision "shell", path: "./provision/bootstrap.sh"

# Adress to access the guest from host or create a vhosts and access from a domain
config.vm.network :private_network, ip: "33.33.33.10"

end