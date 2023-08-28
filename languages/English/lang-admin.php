<?php

/**
  * UNITED-NUKE CMS: Just Manage!
  * http://united-nuke.openland.cz/
  * http://united-nuke.openland.cz/forums/
  *
  * 2002 - 2005, (c) Jiri Stavinoha
  * http://united-nuke.openland.cz/weblog/
  *
  * Translation to English language
  * http://axlsystems.amjawa.com/ - 2005, (c) Roman Vosicky
  *  
  * Portions of this software are based on PHP-Nuke
  * http://phpnuke.org - 2002, (c) Francisco Burzi
  *
  * This program is free software; you can redistribute it and/or
  * modify it under the terms of the GNU General Public License
  * as published by the Free Software Foundation; either version 2
  * of the License, or (at your option) any later version.
**/

global $sitename, $nukeurl ;

define("_SEND","Send");
define("_URL","URL");
define("_EMAIL","E-mail");
define("_FUNCTIONS","Functions");
//define("_YES","Yes");  double defined in main lang-english.php
//define("_NO","No");    double defined in main lang-english.php
define("_REQUIRED","(required)");
define("_SAVECHANGES","Save changes");
define("_OK","OK!");
define("_SAVE","Save");
define("_ID","ID");
define("_SUBJECT","Subject");
define("_WHOSONLINE","Who is on-line?");
define("_ARTICLES","Articles");
define("_ALL","All");
define("_PREVIEW","Preview");
define("_YOUARELOGGEDOUT","You have been logged out successfuly!");
define("_HOMECONFIG","Homepage configuration");
define("_DESCRIPTION","Description");
define("_HOMEPAGE","Homepage");
define("_NAME","Name");
define("_FROM","From");
define("_TO","to");
define("_SUBMIT","Submit");
define("_SHOW","Show");
define("_DAYS","days");
define("_STAFF","staff");
define("_ADMINID","Your administration login");
define("_ADMINLOGIN","Login to administration");
define("_EDITADMINS","Administrators");
define("_PREFERENCES","Preferences");
define("_ADMINMENU","Administration menu");
define("_BANNERSADMIN","Banners Administration");
define("_ADMINLOGOUT","Logout");
define("_LAST","Lats");
define("_GO","Go!");
define("_CURRENTPOLL","Current poll");
define("_STORYID","Story ID");
define("_REMOVECOMMENTS","Delete comments");
define("_SURETODELCOMMENTS","Are you sure you want to delete this comment and all relevant answers?");
define("_BLOCKSADMIN","Block administration");
define("_BLOCKS","Blocks");
define("_TITLE","Title");
define("_POSITION","Position");
define("_WEIGHT","Sequence");
define("_STATUS","Status");
define("_LEFTBLOCK","Left block");
define("_LEFT","Left");
define("_RIGHTBLOCK","Right block");
define("_RIGHT","Right");
define("_ACTIVE","Active");
define("_DEACTIVATE","Deactivate");
define("_INACTIVE","Inactive");
define("_ACTIVATE","Activate");
define("_TYPE","Type");
define("_ADDNEWBLOCK","Add new block");
define("_RSSFILE","URL address for RSS/RDF file");
define("_ONLYHEADLINES","(Only for news)");
define("_CONTENT","Content");
define("_ACTIVATE2","Activate?");
define("_REFRESHTIME","Refresh time");
//define("_HOUR","hour(s)"); double defined in main lang-english.php
define("_CREATEBLOCK","Create block");
define("_EDITBLOCK","Edit block");
define("_BLOCK","Block");
define("_SAVEBLOCK","Save block's settings");
define("_BLOCKACTIVATION","Block activation");
define("_BLOCKPREVIEW","Block preview");
define("_WANT2ACTIVATE","Do you want to activate this block?");
define("_ARESUREDELBLOCK","Are you sure you want to delete block");
define("_RSSFAIL","There seems to be a problem with URL address of RSS file");
define("_RSSTRYAGAIN","Please check URL address and name of RSS file and try again.");
define("_RSSCONTENT","(RSS/RDF content)");
define("_IFRSSWARNING","If you type URL address, the content that you type will be ignored!");
define("_BLOCKUP","Block Up");
define("_BLOCKDOWN","Block Down");
define("_SETUPHEADLINES","(Choose Custom and enter URL address or choose URL from our news selection)");
define("_HEADLINESADMIN","Headlines (RSS/RDF) administration");
define("_ADDHEADLINE","Add headlines (RSS/RDF)");
define("_EDITHEADLINE","Edit headlines (RSS/RDF)");
define("_SURE2DELHEADLINE","WARNING: Are you sure you want to delete this headline?");
define("_CUSTOM","Custom");
define("_AUTHORSADMIN","Authors administration");
define("_MODIFYINFO","Modify");
define("_DELAUTHOR","Delete");
define("_ADDAUTHOR","Add new");
define("_PERMISSIONS","Permissions");
define("_USERS","Users");
define("_SUPERUSER","Super user");
define("_SUPERWARNING","WARNING: If you choose Super user, the user will have permission to all actions!");
define("_ADDAUTHOR2","Add administrator");
define("_RETYPEPASSWD","Retype password");
define("_FORCHANGES","(for changes only)");
define("_COMPLETEFIELDS","You must fill all compulsory fields");
define("_CREATIONERROR","Error during creation of author");
define("_AUTHORDELSURE","Are you sure you want to delete author");
define("_AUTHORDEL","Delete");
define("_REQUIREDNOCHANGE","(required, can not be changed later)");
define("_PUBLISHEDSTORIES","This administrator has published following stories");
define("_SELECTNEWADMIN","Please select a new admin to re-assign the alternate administrator");
define("_GODNOTDEL","*(SuperAdmin account can't be deleted)");
define("_MAINACCOUNT","SuperAdmin*");
//define("_ADD","Add");    double defined in main lang-english.php
define("_DAY","Day");
define("_AUTOMATEDARTICLES","Planned articles");
define("_NOAUTOARTICLES","There are no planned articles");
define("_NOFUNCTIONS","---------");
define("_WHOLINKS","Website that links to your server?");
define("_DELETEREFERERS","Delete ");
define("_SITENAME","Site Name");
define("_PASSWDNOMATCH","Sorry, the new passwords doesn't match. Go Back and Try Again");
define("_SITECONFIG","Site Configuration");
define("_GENSITEINFO","Basic Info");
define("_SITEURL","Site URL address");
define("_SITELOGO","Site Logo");
define("_SITESLOGAN","Site Slogan");
define("_ADMINEMAIL","Administrator Email");
define("_ITEMSTOP","Number of Items in Top Page");
define("_STORIESHOME","Number of stories in archive and on homepage");
define("_OLDSTORIES","Stories in Old Articles Box");
define("_ACTULTRAMODE","Provide stories via RSS and Atom?");
define("_DEFAULTTHEME","Default design theme");
define("_SELLANGUAGE","Default language");
define("_LOCALEFORMAT","Local Time Format");
define("_BANNERSOPT","Banner Options");
define("_STARTDATE","Site started at");
define("_ACTBANNERS","Activate the sysem of advertising banners?");
define("_FOOTERMSG","Footer Messages");
define("_FOOTERLINE1","Line no.1");
define("_FOOTERLINE2","Line no.2");
define("_FOOTERLINE3","Line no.3");
define("_COPYRIGHT","Copyright");
define("_BACKENDCONF","Backend Configuration (RSS & Atom)");
define("_BACKENDTITLE","Backend Title (Source Description)");
define("_BACKENDLANG","Backend Language");
define("_MAIL2ADMIN","Mail News to Administrator");
define("_NOTIFYSUBMISSION","Notify new submissions by email?");
define("_EMAIL2SENDMSG","Email to send the message");
define("_EMAILSUBJECT","Subject");
define("_EMAILMSG","Message");
define("_EMAILFROM","E-mail account (From)");
define("_COMMENTSMOD","Comments Moderation");
define("_MODTYPE","Type of Moderation");
define("_MODADMIN","by Administrator");
define("_MODUSERS","by Users");
define("_NOMOD","No Moderation");
define("_COMMENTSOPT","Comments Options");
define("_COMMENTSLIMIT","Comments Limit in Bytes");
define("_ANONYMOUSNAME","Anonymous Default Name");
define("_GRAPHICOPT","Graphics Options");
define("_ADMINGRAPHIC","Display icons of administration panels?");
define("_MISCOPT","Miscelaneous Options");
define("_PASSWDLEN","Minimum users password length");
define("_MAXREF","How many referers keep in HTTP Referers?");
define("_COMMENTSPOLLS","Activate Comments in Polls?");
define("_ALLOWANONPOST","Allow Anonymous to Post?");
define("_ACTIVATEHTTPREF","Activate HTTP Referers?");
define("_SIZE","Size");
define("_MESSAGES","Messages");
define("_MESSAGESADMIN","Messages Administrations");
define("_MESSAGETITLE","Title");
define("_MESSAGECONTENT","Message");
define("_EXPIRATION","Expiration");
define("_VIEWPRIV","Display to?");
define("_MVADMIN","Administrators only");
define("_MVUSERS","Registered Users Only");
define("_MVANON","Anonymous Users Only");
define("_MVALL","All Visitors");
define("_CHANGEDATE","Change start date to today?");
define("_IFYOUACTIVE","(If you Active this Message now, the start date will be toda)");
define("_FILENAME","Filename");
define("_FILEINCLUDE","(If you select a custom Block all other fields will be ignored.)");
define("_BLOCKFILE","(Block File)");
define("_COMMENTSARTICLES","Activate Comments in Articles?");
define("_MULTILINGUALOPT","Multilingual Options");
define("_ACTMULTILINGUAL","Activate Multilingual features? ");
define("_ACTUSEFLAGS","Display flags instead of a dropdown box? ");
define("_LANGUAGE","Language");
define("_EDITMSG","Edit message");
define("_ADDMSG","Add message");
define("_ALLMESSAGES","Overview of messages");
define("_VIEW","Show to");
define("_REMOVEMSG","Are you sure you want to remove this message?");
define("_MODULES","Modules");
define("_MODULESADMIN","Modules Administration");
define("_MODULESADDONS","Modules and Addons");
define("_MODULESACTIVATION","Here you can check the status of your Modules and Addons and Activete or Deactivate them as necessary.<br>New modules you copied to <i>modules</i> directory will be automaticaly added with <i>Inactive</i> status.<br>If you want to remove a module just delete it from the <i>modules</i>, directory, the system will automaticaly update your database and apply requested changes.");
define("_NEWSLETTER","Newsletter");
define("_MASSMAIL","Newsletter to ALL registered users. (This can be considered as SPAM!)");
define("_ANEWSLETTER","Newsletter only to users that subscribed for it");
define("_WHATTODO","What do you want to send?");
define("_SUBSCRIBEDUSERS","Subscribed Users");
define("_NYOUAREABOUTTOSEND","You're about to send a Newsletter to subscribed users.");
define("_NUSERWILLRECEIVE","Users will receive this Newsletter.");
define("_REVIEWTEXT","Please review and check your text:");
define("_NAREYOUSURE2SEND","Are you sure to send this Newsletter now?");
define("_MYOUAREABOUTTOSEND","You're about to send a Massive e-mail to ALL registered users.");
define("_MUSERWILLRECEIVE","Users will receive this Mail.");
define("_MAREYOUSURE2SEND","Are you sure to send this Massive Email now?");
define("_POSSIBLESPAM","Please note that some users may consider this massive email as Spam! In some countries to send massive emails is even illegal and can be prosecuted by law inforcement!");
define("_MASSEMAIL","Massive Email");
define("_MANYUSERSNOTE","WARNING! There are many users that will receive this text. Please wait until the script finish the operation. This can take several minutes to complete!");
define("_NLUNSUBSCRIBE","=========================================================\nYou're receiving this Newsletter because you selected to receive it from your user page at $sitename.\nYou can unsubscribe from this service by clicking in the following URL:\n\n$nukeurl/modules.php?name=".UN_DIR_YOURACOUNT."&op=edituser\"\n\nthen select \"No\" from the option to Receive Newsletter by Email and save your changes, if you need more assistance please contact $sitename administrator.");
define("_NEWSLETTERSENT","The Newsletter has been sent.");
define("_MASSEMAILSENT","Massive Email to all registered users has been sent.");
define("_MASSEMAILMSG","=========================================================\nYou're receiving this email because you're a registered user of $sitename. We hope that this email didn't disturbed you and in some manner contributes to improve our services.");
define("_FIXBLOCKS","Fix Block's Sequence Conflicts");
define("_SAVEDATABASE","Database Backup");
define("_DBOPTIMIZATION","Database Optimization");
define("_OPTIMIZINGDB","Optimizing the Database:");
define("_TABLE","Table");
define("_SPACESAVED","Size of saved table");
define("_ALREADYOPTIMIZED","Already optimized");
define("_OPTIMIZED","Optimized!");
define("_OPTIMIZATIONRESULTS","Optimization Results");
define("_TOTALSPACESAVED","Total size of all tables saved:");
define("_YOUHAVERUNSCRIPT","You have run this script:");
define("_KBSAVED","b saved since its first execution!");
define("_TIMES","times");
define("_CUSTOMTITLE","Custom Title");
define("_CHANGEMODNAME","Change Module Name");
define("_CUSTOMMODNAME","Custom Module Name:");
define("_MODULEEDIT","Edit Modules");
define("_BLOCKFILE2","FILE");
define("_BLOCKSYSTEM","SYSTÉM");
define("_DEFHOMEMODULE","Default Module (Homepage)");
define("_MODULEINHOME","Module Loaded in the Homepage:");
define("_CHANGE","Change");
define("_INHOME","In Homepage");
define("_MODULEHOMENOTE","<b>-= WARNING =-</b><br>Bold module's title represents the module you have in the Homepage.<br>You can't Deactivate or Restrict this module while it's the default one!<br>If you delete the module's directory you'll see and error in the Homepage.<br>Also, this module has been replaced with <i>Home</i> link in the modules block.");
define("_PUTINHOME","Put in Homepage");
define("_SURETOCHANGEMOD","Are you sure you want to change your Homepage from");
define("_CENTERBLOCK","Center Block");
define("_ADMINISTRATION","Administration");
define("_NOADMINYET","So far there are no Administrators Accounts yet, proceed to create the Super User:");
define("_CREATEUSERDATA","Do you want to create a normal user with the same data?");
define("_CENTERUP","Center Up");
define("_CENTERDOWN","Center Down");
define("_NOTINMENU","[ <big><strong>&middot;</strong></big> ] indicates a module which name and link will not be visible in Modules Block");
define("_SHOWINMENU","Visible in Modules Block?");
define("_MUSTBEINIMG","must be in /images/ directory. Valid only for AvantGo module");
define("_USERSOPTIONS","Users Options");
define("_BROADCASTMSG","Activate Broadcast Messages?");
define("_MYHEADLINES","Activate Headlines Reader (RSS/XML)?");
define("_USERSHOMENUM","Let users change the number of articles displayed in Archive and on Homepage?");
define("_CENSOROPTIONS","Censure Options");
define("_CENSORMODE","Cenzor Mode:");
define("_NOFILTERING","No filtering");
define("_EXACTMATCH","Exact match");
define("_MATCHBEG","Match word at the beginning");
define("_MATCHANY","Match anywhere in the text");
define("_CENSORREPLACE","Replace Censored Words with:");
//define("_SECURITYCODE","Security Code"); double defined in main lang-english.php
//define("_TYPESECCODE","Enter the secutiry code to the following field");   double defined in main lang-english.php
define("_UGROUPS","User Groups");
define("_POINTS","Points");
define("_USERSCOUNT","Number of users");
define("_ADDNEWGROUP","Add new Users Group");
define("_GTITLE","Group Name");
define("_POINTSNEEDED","Points needed");
define("_ONLYNUMVAL","Use numeric values only.");
define("_CREATEGROUP","Create This Group");
define("_NOGROUPS","There aren't any Users Group created at this time.");
define("_POINTSSYSTEM","Points System");
define("_UPDATE","Update");
define("_EDITGROUP","Edit Users Group");
define("_SAVEGROUP","Save Group");
define("_GROUPSADMIN","Users Group Administration");
define("_GROUPADDERROR","Group Creation Error!");
define("_GROUPDELETE","Delete Users Group");
define("_SUREGRPDEL1","Are you sure you want to remove/delete the group?:");
define("_NONUMVALUE","The value of the Points isn't numeric. Go back and fix it.");
define("_GROUP","Group");
define("_UGROUP","Users Group:");
define("_VALIDIFREG","Valid only if Registered Users are selected above.");
define("_POINTS01","Journal Entry");
define("_DESC01","Personal user's Journal entry. Valid for publics and privates entries.");
define("_POINTS02","Journal Comment");
define("_DESC02","Each comment posted in a public user's Journal.");
define("_POINTS03","Recommendation to a Friend");
define("_DESC03","Each time a user send the link to our site to a friend via Recommend Us Module.");
define("_POINTS04","Published Article");
define("_DESC04","News that the user sends from Submit News module and then published by the administrator.");
define("_POINTS05","Article Comment");
define("_DESC05","Comment published for any article and/or news.");
define("_POINTS06","Article Sent to a Friend");
define("_DESC06","Each article's or news has an option to send it to a friend. Points valid for each time the user sends the article to a friend.");
define("_POINTS07","Article rating");
define("_DESC07","Each time a user votes for any article.");
define("_POINTS08","Vote in Polls");
define("_DESC08","Each vote registered for any poll or survey, actual or old ones are valid.");
define("_POINTS09","Comment in Polls");
define("_DESC09","Comment published for any actual or old poll/survey.");
define("_POINTS10","Forum New Post");
define("_DESC10","Each time the user opens a new thread in the Forums.");
define("_POINTS11","Forum Answer Post");
define("_DESC11","orums threads answered or replied.");
define("_POINTS12","Review Comment");
define("_DESC12","Comment published for any review in the Reviews module.");
define("_POINTS13","Page View");
define("_DESC13","Get points for each page view generated by the user. Valid for any page of the site.");
define("_POINTS14","Visit to a Link");
define("_DESC14","Each time a user clicks to visit any resource on WebLinks module.");
define("_POINTS15","Rate of any Link");
define("_DESC15","Each time a user votes for a resource in WebLinks module");
define("_POINTS16","Comment to any Link");
define("_DESC16","Comments posted on any resource in the WebLink module.");
define("_POINTS17","File Download");
define("_DESC17","Each time a user clicks to download any file or resource on Downloads module.");
define("_POINTS18","Rate of any File");
define("_DESC18","Each time a user votes for a resource in Downloads module.");
define("_POINTS19","Comment to any File");
define("_DESC19","Comments posted on any resource in the Downloads module.");
define("_POINTS20","Broadcast Message");
define("_DESC20","Each time a user publish a public message using the Broadcast message system.");
define("_POINTS21","Click on any Banner");
define("_DESC21","The best way to force users of your website to click on advertising banner. Give them some points for this.");
define("_AFTEREXPIRATION","After Expiration");
define("_SUBUSERS","Subscribed Users");
define("_SUBVISIBLE","Show to Subscribers?");
define("_IPBANSYSTEM","IP Ban System");
define("_BANNEWIP","Ban a new IP Address");
define("_IPBANNED","Banned IP Addresses");
define("_BANDATE","Banned On");
define("_UNBAN","Cancel/Unban");
define("_IPNUMERIC","IP address should be numeric");
define("_IPENTERED","IP address entered:");
define("_ERROR","ERROR:");
define("_IPOUTRANGE","IP address is out of range.");
define("_IPSTARTZERO","IP address can't start with 0.");
define("_IPLOCALHOST","You can't ban the IP address of your own computer!");
define("_SUCCESS","IP address banned succesfully!");
define("_THEIP","The IP address");
define("_HASBEENBANNED","has been banned from your site.");
define("_SURETOBANIP","Are you sure you want to UNBAN the following IP address:");
define("_IPYOURS","You can't ban your own IP address!");
define("_REASON","Reason");
define("_BANCLASSC","Character * is accepted as the last number, but this will ban a complete Class C IP range. Use it carefuly and only in extreme cases.");
define("_CONTENTMODERATION","Content Moderation - Karma System");
define("_SELECTOPTION","Please select an option from the following list:");
define("_NEWSCOMMENTS","News Comments");
define("_SURVEYCOMMENTS","Surveys Comments");
define("_REVIEWSCOMMENTS","Reviews Comments");
define("_ALLMARKEDUSERS","Display All Marked Users");
define("_NEWSPENDING","News Comments - Approval Pending");
define("_COMMENTTITLE","Comment Title");
define("_USER","User");
define("_APPROVE","Approve");
define("_REJECT","Reject");
define("_NOCONTENT","There is no content here at this time...");
define("_ORIGINALARTICLE","Original Article of this comment:");
define("_INREPLYTO","In reply to the following comment:");
define("_COMMENTAPPPENDING","Comment with Approval Pending:");
define("_SURVEYPENDING","Surveys Comments - Approval Pending");
define("_COMMENTTOSURVEY","Comment to the Survey:");
define("_REVIEWSPENDING","Reviews Comments - Approval Pending");
define("_WITHSCORE","with a Score:");
define("_REGKARMAUSERS","Regular Karma Users");
define("_BADKARMAUSERS","Bad Karma Users");
define("_DEVKARMAUSERS","Devil Karma Users");
define("_CURRENTKARMA","Current Karma");
define("_USERNAME","Username");
define("_BANNERS","Banners");
define("_DOWNLOAD","Files");
define("_ENCYCLOPEDIA","Encyclopedia");
define("_FAQ","F.A.Q.");
define("_NEWS","Articles");
define("_REVIEWS","Reviews");
define("_ADMPOLLS","Polls");
if (!defined('_TOPICS')) {   define("_TOPICS","Topics"); }
define("_WEBLINKS","Web Links");
define("_IMAGESWFURL","URL address of picture or SWF (Flash) file");
define("_MODERATIONKARMA","Moderation - Users Karma System");
define("_BANNEDIPEDIT","Edit Banned IP Address");
define("_BANTHISIP","Ban this IP");
define("_LANGUAGES","Languages");

// System links
// admin/modules/links.ipban.php
define("_IPBANSYSTEMLINK","Banned IP");

//admin/modules/links.submissions.php
define("_SUBMISSIONSLINK","Submited News");

//admin/links/links.topics.php
define("_TOPICSADM","Topic Administration");

//admin/modules/authors.php
define("_UN_AUTHORS_LOGIN","Username (login)");

//admin/modules/message.php
define("_MESACTIVE","Active?");

//admin/modules/newsletter.php)
define("_UN_NUMBEROFUSERSFORBULLETIN","users");

//admin/modules/sections.php a admin.php
define("_UN_ARTICLESLAST","articles");

//admin/modules/blocks.php
define("_HEADADMINRSS","Settings");
define("_MOREDAYS", "more days");

//admin/modules/downloads.php a admin/modules/links.php
define("_DOWNOWNERNEW","Administrator");

//admin/modules/moderation.php
define("_UN_COMMENTTOREVIEW","Comment to review:");

// News and Surveys panel
define("_UN_SELECTLISTTOPICS","Topics:");

// only missed translation
if (!defined('_TOPIC')) {   define("_TOPIC","Topic"); }
//un_extesnions.php
define("_UN_MODULE","modules panel");

//make_alt_tip for base admin system modules
define("_UN_MAT_IPBAN","The access to your website from provided IP address will be disallowed. You appreciate this option when it is obvious from server log that somebody abuse your system from certain IP address. But have in mind that even if IP address is unique identification it can be faked or can change in the course of time.");
define("_UN_MAT_GROUP","Create or change <i>users groups</i>, set up neccessary number of points collected to be a member of the group and set up of number of points the user can receive after performing some actions.");
define("_UN_MAT_NEWSLETTER","Send <i>newsletter</i> to registered users, or to those who allowed to send it to them during the registration. Every user alse can <i>allow</i> or <i>disallow</i> to send the newsletter to him/her temporarilly in setting for his/her account.");
define("_UN_MAT_BLOCKS","Create and change <i>Blocks</i>. You can <i>activate</i> and <i>deactivate</i>  them, changa their location, change display options etc.");
define("_UN_MAT_COMMENTS","(Massive) removal of comments entered from provided IP address. You appreciate this option when somebody is SPAMING the articles with comments using scripts for example.");
define("_UN_MAT_SUBMISSIONS","Display received news posted by users via module <i>Submit News</i>. Those news can be modified and published.");
define("_UN_MAT_MODULES","<i>Activate</i> or <i>Deactivate</i> installed modules. Set up which users or groups can use sopecific modules, or set up the module as <i>Homepage</i>.");
define("_UN_MAT_OPTIMIZE","Analyze system database, perform its optimalization for higher performance and reliability.");
define("_UN_MAT_EDITADMINS","Add or modify administrators and setup their access rights for specific modules.");
define("_UN_MAT_BACKUP","Backup all tables in the system database and send this backup to browser to save it on your computer.");
define("_UN_MAT_HTTPREF","Display web links from where the visitors came to your website. This function require the option <i>HTTP Referers</i> in the pannel <i>Preferences</i> to be turned on.");
define("_UN_MAT_MESSAGES","Create or modify the messages that can be displayed in the upper area of your <i>Homepage</i>.");
define("_UN_MAT_SETTINGS","Main system control pannel. Please pay big attention to the changes you are going apply there. The changes will effect most of the system. For example you can change there <i>Website Name</i>, <i>URL Address</i> of the website, <i>Slogan</i> of your website, <i>Administrator's E-mail</i>, <i>Comments Moderation</i> and a lot of other system preferences that influence its behavior.");
define("_UN_MAT_UPDATE","Search for new updated system versions, display information about changes and information for easy and fast instalation of new version.<br>To access update information you will have to <i>activate</i> SLUFU service.");
define("_UN_MAT_SECURITY","Ban IP addresses or range of IP addresses or improve authorization to access the server.<br>Protect the systema against a lot of kinds of attacks as for example DoS (Denial of Service), XSS (Cross Site Scripting), SQL Injection.<br><br><span style='color: red'>Warning:</span> Please pay big attention to the changes in this pannel. If you are not experienced user, do not change any settings here. If you are not using any installed add-ons or modules, it is not necessary to activate any protection.");
define("_UN_MAT_LOGOUT", "Log out from administration. To log out completely and destroy all login information it will be neccessary to close all instances of your browser.");

// if is not admin authorized for admin module
define("_UN_ADMINNOTPERMFORMODULETITLE","Administration is not allowed");
define("_UN_ADMINNOTPERMFORMODULE","You don't have required access rights for modules administration");
define("_UN_ADMINNOTPERMFORSYSTEMMODULETITLE","You don't have required access rights for administration of system modules");
define("_UN_ADMINNOTPERMFORSYSTEMMODULE","For administration fo system components you must have authorization level <i>Super User</i>.");
define("_UN_ADMINNOTPERMFORSYSTEMMODULEADMINISTRATORS","Only <i>SuperAdmin</i> can change administrators settings.");

?>