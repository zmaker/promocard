Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.network "forwarded_port", guest: 80, host: 8000

  #config.vm.synced_folder "./", "/website", id: "vagrant-root", owner: "vagrant", group: "www-data", mount_options: ["dmode=775,fmode=664"] 

  config.vm.synced_folder "./", "/var/www/html", id: "vagrant-root", owner: "vagrant", group: "www-data", mount_options: ["dmode=777,fmode=777"] 

  config.vm.provision :shell, path: "bootstrap.sh" 
 
end
