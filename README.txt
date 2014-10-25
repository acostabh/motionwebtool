Here is a copy of my code and the instruction on how to install it.

Install Apache ( sudo apt-get install apache2 )
Install PHP5 (sudo apt-get install php5)
Install PHP5-gd (sudo apt-get install php5) - this will enable PNG support, used by the function that displays the buttons depeding on the status of Motion.

Download and unzip the content of this file to your Raspberry PI root web folder (/var/www/) 

cd /var/www
sudo mkdir motion
cd motion
sudo wget http://itechlog.com/project/motion-webtool.tar.gz
sudo tar zxvf motion-webtool.tar.gz


Allow web server user www-data to run sudo commands for motion and pkill (pkill is used to kill processes by their names) 
(this is probably a little insecure and lazy, but your RasPi should be only accessible within you newtork so it's not a big deal - suggestions are welcome though.)

sudo visudo (to edit sudoers)

and add the lines

www-data ALL=(root) NOPASSWD:/usr/bin/motion
www-data ALL=(root) NOPASSWD:/usr/bin/pkill

To save press shift+o, Enter to confirm overwrite, shift+x to exit

Start Apache: sudo service apache2 start

Then access the tool via your browser: http://<ip-address-raspi>/motion    (where <ip> is the ip address of your RAspberrry Pi, which should have been setup as a static IP.

