<?php
function pkg(){
if ( ! file_exists("/data/data/com.termux/files/usr/bin/git")){
	print (" \n");
	print ("\n ");
	print ("\033[1;37m[*]\033[1;37m '\033[1;33mgit\033[1;37m'\033[1;36m not found !");
	print (" \n");
	print ("\n ");
	print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mgit\033[1;37m'");
	print (" \n");
	print ("\n ");
        system ("pkg install git -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/bash")){
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mbash\033[1;37m'\033[1;36m not found !");
        print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mbash\033[1;37m'");
        print (" \n");
	print ("\n ");
        system ("pkg install bash -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/cowsay")){
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mcowsay\033[1;37m'\033[1;36m not found !");
        print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mcowsay\033[1;37m'");
        print (" \n");
	print ("\n ");
        system ("pkg install cowsay -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/toilet")){
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mtoilet\033[1;37m'\033[1;36m not found !");
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mtoilet\033[1;37m'");
        print (" \n");
	print ("\n ");
        system ("pkg install toilet -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/figlet")){
	print (" \n");
	print ("\n ");
	print ("\033[1;37m[*]\033[1;37m '\033[1;33mfiglet\033[1;37m'\033[1;36m not found !");
        print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mfiglet\033[1;37m'");
	print (" \n");
	print ("\n ");
        system ("pkg install figlet -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/neofetch")){
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mneofetch\033[1;37m'\033[1;36m not found !");
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mneofetch\033[1;37m'");
        print (" \n");
	print ("\n ");
        system ("pkg install neofetch -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/ruby")){
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mruby\033[1;37m'\033[1;36m not found !");
        print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mruby\033[1;37m'");
        print (" \n");
	print ("\n ");
        system ("pkg install ruby -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/lolcat")){
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mlolcat\033[1;37m'\033[1;36m not found !");
        print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mlolcat\033[1;37m'");
        print (" \n");
	print ("\n ");
        system ("gem install lolcat;pip install lolcat");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/php")){
	print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mphp\033[1;37m'\033[1;36m not found !");
        print (" \n");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mphp\033[1;37m'");
        print (" \n");
	print ("\n ");
        system ("pkg install php -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/termimage")){
        print (" \n");
        system ("pkg install termimage -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/nano")){
        print (" \n");
        print ("\n ");
        print ("\033[1;37m[*]\033[1;37m '\033[1;33mnano\033[1;37m'\033[1;36m not found !");
        print (" \n");
        print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Installing \033[1;37m'\033[1;33mnano\033[1;37m'");
        print (" \n");
        print ("\n ");
        system ("pkg install nano -y");
        }
if ( ! file_exists("/data/data/com.termux/files/usr/bin/jp2a")){
        print (" \n");
        system ("pkg install jp2a -y");
        }

}

function pve(){
if ( file_exists("/data/data/com.termux/files/usr/etc/zshrc")){
        unlink("/data/data/com.termux/files/usr/etc/zshrc");
        }
if ( file_exists("/data/data/com.termux/files/usr/etc/bash.bashrc")){
        unlink("/data/data/com.termux/files/usr/etc/bash.bashrc");
	}
if ( file_exists("/data/data/com.termux/files/usr/etc/motd")){
        unlink("/data/data/com.termux/files/usr/etc/motd");
        }
if ( file_exists("/data/data/com.termux/files/usr/etc/termux-banner")){
        unlink("/data/data/com.termux/files/usr/etc/termux-banner");
        }
}

function logo(){
echo <<<EOL

\033[1;36m        ████████╗███████╗██████╗ ███╗   ███╗██╗   ██╗\033[1;34m██╗  ██╗
\033[1;36m        ╚══██╔══╝██╔════╝██╔══██╗████╗ ████║██║   ██║\033[1;34m╚██╗██╔╝
\033[1;36m           ██║   █████╗  ██████╔╝██╔████╔██║██║   ██║\033[1;34m ╚███╔╝
\033[1;36m           ██║   ██╔══╝  ██╔══██╗██║╚██╔╝██║██║   ██║ \033[1;34m██╔██╗
\033[1;36m           ██║   ███████╗██║  ██║██║ ╚═╝ ██║╚██████╔╝\033[1;34m██╔╝╚██╗
\033[1;36m           ╚═╝   ╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝ ╚═════╝ \033[1;34m╚═╝  ╚═╝
\033[1;33m
          ██████╗  █████╗ ███╗  ██╗███╗  ██╗███████╗██████╗
          ██╔══██╗██╔══██╗████╗ ██║████╗ ██║██╔════╝██╔══██╗
          ██████╦╝███████║██╔██╗██║██╔██╗██║█████╗  ██████╔╝
\033[1;32m          ██╔══██╗██╔══██║██║╚████║██║╚████║██╔══╝  ██╔══██╗
          ██████╦╝██║  ██║██║ ╚███║██║ ╚███║███████╗██║  ██║
          ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚══╝╚═╝  ╚══╝╚══════╝╚═╝  ╚═╝
                              \033[1;37m               >>\033[1;31m MARS-11ᵀᴹ\033[1;37m

\033[1;37m              [01]\033[1;33m EvilEye Banner\033[1;37m [\033[1;32m Animation\033[1;37m ]
\033[1;37m              [02]\033[1;33m EvilEye Banner\033[1;37m [\033[1;32m Normal\033[1;37m ]
\033[1;37m	      [03]\033[1;33m Figlet\033[1;37m         [\033[1;32m Animation\033[1;37m ]
\033[1;37m	      [04]\033[1;33m Toilet\033[1;37m         [\033[1;32m Animation\033[1;37m ]
\033[1;37m              [05]\033[1;33m Cowsay\033[1;37m         [\033[1;32m Animation\033[1;37m ]
\033[1;37m              [06]\033[1;33m Cowsay\033[1;37m         [\033[1;32m Normal\033[1;37m ]
\033[1;37m              [07]\033[1;33m Figlet\033[1;37m         [\033[1;32m Normal\033[1;37m ]
\033[1;37m              [08]\033[1;33m Toilet\033[1;37m         [\033[1;32m Normal\033[1;37m ]
\033[1;37m	      [09]\033[1;33m Neofetch\033[1;37m       [\033[1;32m Normal\033[1;37m ]

\033[1;37m	      [10]\033[1;34m Photo Banner\033[1;37m	   [\033[1;32m Animation\033[1;37m ]
\033[1;37m	      [11]\033[1;34m Photo Banner\033[1;37m	   [\033[1;32m Normal\033[1;37m ]
\033[1;37m	      [12]\033[1;34m Photo Banner\033[1;37m    (termimage)
\033[1;37m              [13]\033[1;34m Custom Banner\033[1;37m   [\033[1;32m Animation\033[1;37m ]
\033[1;37m              [14]\033[1;34m Custom Banner\033[1;37m   [\033[1;32m Normal\033[1;37m ]

\033[1;37m              [00]\033[1;36m Back


EOL;

}

function done(){
print ("\n ");
print ("\033[1;37m[*]\033[1;36m Loading \033[1;37m...");
system ('sleep 1.5');
print ("\n ");
print ("\n ");
print ("[*]\033[1;34m Please Restart Your Termux !\033[1;37m");
print ("\n ");
system ('sleep 4.5');
print ("\n ");

}

function photo(){
print ("\n ");
$a = readline("\033[1;37m[*] \033[96mEnter Photo Location : ");
print ("\n ");
$p = readline("\033[1;37m[*] \033[96mEnter Photo Name : ");
pve();
system ("jp2a ".$a."/".$p." >> termux-banner");
system ("mv termux-banner /data/data/com.termux/files/usr/etc");
print ("\n ");
$b = fopen("xbanne", "w");
fwrite( $b, "clear\n" );
fwrite( $b,"cat /data/data/com.termux/files/usr/etc/termux-banner | lolcat -a --speed=100\n");
fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
system ("rm -rf xbanne");
done();

}

function photon(){
print ("\n ");
$a = readline("\033[1;37m[*] \033[96mEnter Photo Location : ");
print ("\n ");
$p = readline("\033[1;37m[*] \033[96mEnter Photo Name : ");
pve();
system ("jp2a ".$a."/".$p." >> termux-banner");
system ("mv termux-banner /data/data/com.termux/files/usr/etc");
print ("\n ");
$b = fopen("xbanne", "w");
fwrite( $b, "clear\n" );
fwrite( $b,"cat /data/data/com.termux/files/usr/etc/termux-banner | lolcat\n");
fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
system ("rm -rf xbanne");
done();

}

function img(){
print ("\n ");
$a = readline("\033[1;37m[*] \033[96mEnter Photo Location : ");
print ("\n ");
$p = readline("\033[1;37m[*] \033[96mEnter Photo Name : ");
pve();
print ("\n ");
$b = fopen("xbanne", "w");
fwrite( $b, "clear\n" );
fwrite( $b,"termimage ".$a."/".$p."\n");
fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
system ("rm -rf xbanne");
done();

}

function start(){
system ('clear');
logo();
$input = readline("\033[1;37m [*] \033[96mEnter Your Choice : ");
if ( $input == 0) {
	menu();
}

elseif ( $input == 2) {
	print ("\n ");
	print ("\033[1;37m          [01]\033[1;34m Figlet");
	print ("\n ");
	print ("\033[1;37m          [02]\033[1;34m Toilet");
	print ("\n ");
	print ("\n ");
	$figlet = readline("\033[1;37m[*] \033[96mEnter Your Choice : ");
	print ("\n ");
	$cowsay = readline("\033[1;37m[*] \033[96mEnter Your Cowsay Name : ");
	print ("\n ");
	$bname = readline("\033[1;37m[*] \033[96mEnter Your Banner Name : ");
	print ("\n ");
	pve();
	$b = fopen("xbanne", "w");
        fwrite( $b, "clear\n" );
        fwrite( $b, "cowthink -f eyes ".$cowsay." | lolcat\n");
        switch ($figlet){
                case (1):
                        fwrite($b, "figlet ".$bname." | lolcat\n");
                        break;
                case (2):
                        fwrite($b, "toilet ".$bname." | lolcat\n");
                        break;
                }
        fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
	system ("rm -rf xbanne");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Loading \033[1;37m...");
        system ('sleep 1.5');
        print ("\n ");
        print ("\n ");
	print ("[*]\033[1;34m Please Restart Your Termux !\033[1;37m");
	print ("\n ");
	system ('sleep 4.5');
        print ("\n ");

}

elseif ( $input == 1) {
	print ("\n ");
	print ("\033[1;37m          [01]\033[1;34m Figlet");
        print ("\n ");
	print ("\033[1;37m          [02]\033[1;34m Toilet");
        print ("\n ");
        print ("\n ");
        $figlet = readline("\033[1;37m[*] \033[96mEnter Your Choice : ");
	print ("\n ");
	$cowsay = readline("\033[1;37m[*] \033[96mEnter Your Cowsay Name : ");
        print ("\n ");
        $bname = readline("\033[1;37m[*] \033[96mEnter Your Banner Name : ");
        print ("\n ");
	pve();
	$b = fopen("xbanne", "w");
	fwrite( $b, "clear\n" );
	fwrite( $b, "cowthink -f eyes ".$cowsay." | lolcat -a --speed=100\n");
	switch ($figlet){
		case (1):
                        fwrite($b, "figlet ".$bname." | lolcat -a --speed=100\n");
                        break;
                case (2):
                        fwrite($b, "toilet ".$bname." | lolcat -a --speed=100\n");
			break;
		}
	fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
	copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
	copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Loading \033[1;37m...");
        system ('sleep 1.5');
        print ("\n ");
        print ("\n ");
        print ("[*]\033[1;34m Please Restart Your Termux !\033[1;37m");
        print ("\n ");
        system ('sleep 4.5');
        print ("\n ");

}

elseif ( $input == 3) {
	print ("\n ");
	$bname = readline("\033[1;37m[*] \033[96mEnter Your Banner Name : ");
	print ("\n ");
	pve();
	$b = fopen("xbanne", "w");
	fwrite( $b, "clear\n" );
	fwrite($b, "figlet ".$bname." | lolcat -a --speed=100\n");
	fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
	copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Loading \033[1;37m...");
        system ('sleep 1.5');
        print ("\n ");
        print ("\n ");
        print ("[*]\033[1;34m Please Restart Your Termux !\033[1;37m");
        print ("\n ");
        system ('sleep 4.5');
        print ("\n ");

}

elseif ( $input == 4) {
	print ("\n ");
	$bname = readline("\033[1;37m[*] \033[96mEnter Your Banner Name : ");
        print ("\n ");
        pve();
        $b = fopen("xbanne", "w");
        fwrite( $b, "clear\n" );
        fwrite($b, "toilet ".$bname." | lolcat -a --speed=100\n");
        fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
	print ("\n ");
        print ("\033[1;37m[*]\033[1;36m Loading \033[1;37m...");
        system ('sleep 1.5');
        print ("\n ");
        print ("\n ");
        print ("[*]\033[1;34m Please Restart Your Termux !\033[1;37m");
        print ("\n ");
        system ('sleep 4.5');
        print ("\n ");

}

elseif ( $input == 5) {
	print ("\n ");
	$cowsay = readline("\033[1;37m[*] \033[96mEnter Your Cowsay Name : ");
	print ("\n ");
        pve();
        $b = fopen("xbanne", "w");
        fwrite( $b, "clear\n" );
	fwrite( $b, "cowthink -f eyes ".$cowsay." | lolcat -a --speed=100\n");
	fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
	done();

}

elseif ( $input == 6) {
	print ("\n ");
        $cowsay = readline("\033[1;37m[*] \033[96mEnter Your Cowsay Name : ");
        print ("\n ");
        pve();
        $b = fopen("xbanne", "w");
        fwrite( $b, "clear\n" );
        fwrite( $b, "cowthink -f eyes ".$cowsay." | lolcat\n");
        fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
        done();

}

elseif ( $input == 7) {
	print ("\n ");
        $bname = readline("\033[1;37m[*] \033[96mEnter Your Banner Name : ");
        print ("\n ");
        pve();
        $b = fopen("xbanne", "w");
        fwrite( $b, "clear\n" );
        fwrite($b, "figlet ".$bname." | lolcat\n");
        fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
	done();

}

elseif ( $input == 8) {
	print ("\n ");
        $bname = readline("\033[1;37m[*] \033[96mEnter Your Banner Name : ");
        print ("\n ");
        pve();
        $b = fopen("xbanne", "w");
        fwrite( $b, "clear\n" );
        fwrite($b, "toilet ".$bname." | lolcat\n");
        fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
	done();

}

elseif ( $input == 9) {
	print ("\n ");
	pve();
	$b = fopen("xbanne", "w");
        fwrite( $b, "clear\n" );
	fwrite($b, "neofetch\n");
	fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
	copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
        done();

}


elseif ( $input == 10) {
	photo();

}

elseif ( $input == 11) {
        photon();

}

elseif ( $input == 12) {
        img();

}

elseif ( $input == 13) {
	print ("\n ");
	if (file_exists("termux-banner")){
		pve();
		$b = fopen("xbanne", "w");
	        fwrite( $b, "clear\n" );
		fwrite($b,"cat /data/data/com.termux/files/usr/etc/termux-banner |lolcat -a --speed=100\n");
		fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
	        copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
	        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
		system ("mv termux-banner /data/data/com.termux/files/usr/etc");
	        system ("rm -rf xbanne");
	        done();

	}

	else {
		print ("\n ");
                print ("\033[1;35mIf you want to put a custom banner, type 'nano termux-banner' and save your banner and run this tool again.");
                print ("\n ");
	}
}

elseif ( $input == 14) {
	print ("\n ");
        if (file_exists("termux-banner")){
		pve();
		$b = fopen("xbanne", "w");
	        fwrite( $b, "clear\n" );
	        fwrite($b,"cat /data/data/com.termux/files/usr/etc/termux-banner |lolcat\n");
	        fwrite( $b, "PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
        	copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
	        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
	        system ("mv termux-banner /data/data/com.termux/files/usr/etc");
		system ("rm -rf xbanne");
	        done();
	}

	else {
		print ("\n ");
		print ("\033[1;35mIf you want to put a custom banner, type 'nano termux-banner' and save your banner and run this tool again.");
		print ("\n ");

	}
}

else {
	print ("\n");
	print ("\033[1;31m [*] Invalid Choice \033[1;33m".$input."\033[1;31m !");
	system ('sleep 0.7');
	system ('termux-open-url https://github.com/MARS-11/Termux-Banner');
	start();
}
}

function banner(){

system('clear');
echo <<<EOL

\033[1;36m        ████████╗███████╗██████╗ ███╗   ███╗██╗   ██╗\033[1;34m██╗  ██╗
\033[1;36m        ╚══██╔══╝██╔════╝██╔══██╗████╗ ████║██║   ██║\033[1;34m╚██╗██╔╝
\033[1;36m           ██║   █████╗  ██████╔╝██╔████╔██║██║   ██║\033[1;34m ╚███╔╝
\033[1;36m           ██║   ██╔══╝  ██╔══██╗██║╚██╔╝██║██║   ██║ \033[1;34m██╔██╗
\033[1;36m           ██║   ███████╗██║  ██║██║ ╚═╝ ██║╚██████╔╝\033[1;34m██╔╝╚██╗
\033[1;36m           ╚═╝   ╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝ ╚═════╝ \033[1;34m╚═╝  ╚═╝
\033[1;33m
          ██████╗  █████╗ ███╗  ██╗███╗  ██╗███████╗██████╗
          ██╔══██╗██╔══██╗████╗ ██║████╗ ██║██╔════╝██╔══██╗
          ██████╦╝███████║██╔██╗██║██╔██╗██║█████╗  ██████╔╝
\033[1;32m          ██╔══██╗██╔══██║██║╚████║██║╚████║██╔══╝  ██╔══██╗
          ██████╦╝██║  ██║██║ ╚███║██║ ╚███║███████╗██║  ██║
          ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚══╝╚═╝  ╚══╝╚══════╝╚═╝  ╚═╝
                              \033[1;37m               >>\033[1;34m MARS-11

\033[1;37m                         [01]\033[1;32m START
\033[1;37m                         [02]\033[1;32m REMOVE BANNER
\033[1;37m                         [03]\033[1;33m UPDATE TOOL
\033[1;37m                         [04]\033[1;33m FOLLOW ON GITHUB
\033[1;37m                         [00]\033[1;33m EXIT



EOL;

}

function remove() {
	pve();
	$g = fopen("xbanne", "w");
	fwrite( $g ,"PS1='\[\e[0;32m\]\w\[\e[0m\] \[\e[0;97m\]\$\[\e[0m\] '");
	copy( "xbanne", "/data/data/com.termux/files/usr/etc/bash.bashrc");
        copy( "xbanne", "/data/data/com.termux/files/usr/etc/zshrc");
        system ("rm -rf xbanne");
	print ("\n ");
	print ("\033[1;37m[*]\033[1;36m Loading \033[1;37m...");
	system ('sleep 1.5');
	print ("\n ");
	print ("\n ");
	print ("\033[1;37m[*] Banner Removed \033[1;32mSuccessfully \033[1;37m!");
	system ('sleep 1.5');
	print ("\n ");
	print ("\n ");
	print ("[*]\033[1;34m Please Restart Your Termux !\033[1;37m");
	system ('sleep 1.5');
	print ("\n ");
	system ('sleep 15');

}

function follow(){
	system ('termux-open-url https://github.com/MARS-11');
}

function menu(){

banner();
$php  = readline("\033[1;37m [*] \033[96mEnter Your Choice : ");

if ( $php == 1) {
	start();
}

elseif ( $php == 3) {
	print ("\n");
        system ('cd;rm -rf Termux-Banner;cd;rm -rf .D-Termux_Banners;git clone https://github.com/MARS-11/Termux-Banner.git');
	print ("\n");
}

elseif ( $php == 4) {
        follow();
}

elseif ( $php == 2) {
        remove();
}

elseif ( $php == 0) {
        print ("");
}

else {
	print ("\n");
        print ("\033[1;31m [*] Invalid Choice \033[1;33m".$php."\033[1;31m !");
        system ('sleep 0.7');
	system ('termux-open-url https://github.com/MARS-11/Termux-Banner');
        menu();
}
}
pkg();
menu();

?>
