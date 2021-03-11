<?php
system('clear');
echo   "\n";
echo   "_______________________________________\n";
echo   "[-] Author :Tahu Petis                [-]\n";
echo   "______________________________________\n";
echo   "[-] Team   :Kediri Black Hat          |\n";
echo   "______________________________________|\n";
echo   "[1] Career resume file upload         |\n";
echo   "[2] Open journal system               |\n";
echo   "[3] Slims Mass Exploit                |\n";
echo   "[4] Keluar tuan                       |\n";
echo   "_______________________________________\n";
echo   "[-] Pilih :\n";
echo   "\n  ==>  ";
$pil     = trim(fgets(STDIN));
if($pil     ==  1){
      system('git clone https://github.com/Aldibima30/crfu');
               }
if($pil     ==   2){
       system('git clone https://github.com/tahupetis30/ojs');
               }
if($pil     ==    3){
       system('Masih Perbaikan');
                }
if($pil     ==    4){
       system('exit');
                }
?>
