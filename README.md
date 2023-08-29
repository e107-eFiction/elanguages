# efiction_languages
e107 plugin to replace efiction lans in one place 


## Notes

English/en.php are copy of efiction/languages/en.php files.
Deleted DOCTYPE
Moved Alphabet to separate file
 
Renamed as lan.php and lan_admin.php -  they need to have the same name in LAN folders
Used this way because LANs in e107 has to start with LAN_ - to be able to use shortcode {LAN}


## Todo: 
-  replace variables in LAN strings  - functionality fix
-  replace LANs name with e107 LAN_ way
  

## Use 
in efiction/header.php  
use e107::lan('elanguages', 'lan');
use e107::lan('elanguages', 'lan_admin');

## UNNuke strings
use e107::lan('elanguages', 'lang');
use e107::lan('elanguages', 'lang_admin');

### New strings:
English_front.php
use: e107::lan('elanguages');
English_admin.php
use: e107::lan('elanguages', true);





