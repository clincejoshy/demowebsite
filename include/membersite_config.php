<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('clincepics.16mb.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('clincepro@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'mysql.hostinger.co.uk',
                    /*username*/'u822806530_clinc',
                      /*password*/'qwerty',
                      /*database name*/'u822806530_db1',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>