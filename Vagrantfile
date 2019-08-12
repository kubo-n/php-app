Vagrant.configure("2") do |config|
  config.vm.box = "bento/centos-7.4"
  config.ssh.insert_key = false
  config.vm.synced_folder ".", "/vagrant", mount_options: ['dmode=777','fmode=755']
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.provision "shell", path: "script.sh"
end