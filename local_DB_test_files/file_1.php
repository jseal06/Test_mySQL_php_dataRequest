<?php
/**
 * Created by IntelliJ IDEA.
 * User: JamesSeal
 * Date: 27/06/2018
 * Time: 17:13
 */

echo ("NEW SECTION 0.3 ************        FILE_1 TEXT  + local connection       ****************");
echo nl2br("\n ");
//
//$user = 'root';
//$password = 'root';
//$db = 'inventory';
//$host = 'localhost';
//$port = 8889;
//
//$link = mysql_connect(
//    "$host:$port",
//    $user,
//    $password
//);
//$db_selected = mysql_select_db(
//    $db,
//    $link
//);




$servername = "localhost";
$username = "root";
$password = "root";

try {
    //dbname is in this section....
    $conn = new PDO("mysql:host=$servername;dbname=testDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    //$db = new PDO("mysql:host=$servername;dbname=testDB", $username, $password);
#execute query
    $result = $conn->query("select * from Part");

    echo ('<table style="width:100%">');
    while ($row = $result->fetch()) {
        echo ("<tr>" );
        for ($i = 0;$i < $result->columnCount(); $i++) {
            print ("<td> $row[$i] </td>");
        }
        print ("</tr>");
    }
    echo('</table>');

#output result
//    $count = $result->fetchColumn(0);
//    print ("There are $count rows in Supplier.");
    $conn= NULL;
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}





//
//echo nl2br("NEW SECTION 0.3 local database test
//");
//echo nl2br("\n ");
//
//$servername = "localhost";
//$username = "root";
//$password = "root";
//
////$dbhost = "mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm";
////$dbuser = "jseal06";
////$dbpass = "bbkmysql";
//
//#open connection to database
////$db = new PDO($dbhost, $dbuser, $dbpass);
//  $db = new PDO("mysql:host=$servername;dbname=testDB", $username, $password);
//#execute query
//$result = $db->query("select * from Supplier");
//
//echo ('<table style="width:100%">');
//while ($row = $result->fetch()) {
//    echo ("<tr>" );
//    for ($i = 0;$i < $result->columnCount(); $i++) {
//        print ("<td> $row[$i] </td>");
//    }
//    print ("</tr>");
//}
//echo('</table>');
//
//#output result
////    $count = $result->fetchColumn(0);
////    print ("There are $count rows in Supplier.");
//$db= NULL;









# close connection
//
//                #execute query
//                $result = $db->query("select * from Supplier");
//
//                echo ('<table style="width:100%">');
//                while ($row = $result->fetch()) {
//                    echo ("<tr>" );
//                    for ($i = 0;$i < $result->columnCount(); $i++) {
//                        print ("<td> $row[$i] </td>");
//                    }
//                    print ("</tr>");
//                      }
//
//
//               echo('</table>');
//


//
//
////  =======================  KEEP THIS SECTION  =============================================================
//
//
//# set up database parameters
//    $dbhost = "mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm";
//    $dbuser = "jseal06";
//    $dbpass = "bbkmysql";
//    #open connection to database
//    $db = new PDO($dbhost, $dbuser, $dbpass);
//    #execute query
//    $result = $db->query("select count(*) from Supplier");
//    #output result
//    $count = $result->fetchColumn(0);
//    print ("There are $count rows in Supplier.");
////    $db= NULL; <-- commented out to keep the connection open for the query below
//    # close connection
////    ====================  KEEP THIS SECTION  =============================================================
//
//    echo nl2br("NEW SECTION 0.3");
//    echo nl2br("\n ");
//
////    below is commented out as the connection is not closed - open address is not needed
//
////    $dbhost = "mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm";
////    $dbuser = "jseal06";
////    $dbpass = "bbkmysql";
////    #open connection to database
////    $db = new PDO($dbhost, $dbuser, $dbpass);
//
//
//    #execute query
//    $result = $db->query("select * from Supplier");
//
//    echo ('<table style="width:100%">');
//    while ($row = $result->fetch()) {
//        echo ("<tr>" );
//        for ($i = 0;$i < $result->columnCount(); $i++) {
//            print ("<td> $row[$i] </td>");
//        }
//        print ("</tr>");
//    }
//    echo('</table>');
//
//    $db= NULL;
//    # close connection
//
//
//
//
//
////=======================  KEEP THIS SECTION  =============================================================
////                # set up database parameters
////                $dbhost = "mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm";
////                $dbuser = "jseal06";
////                $dbpass = "bbkmysql";
////                #open connection to database
////                $db = new PDO($dbhost, $dbuser, $dbpass);
////                #execute query
////                $result = $db->query("select count(*) from Supplier");
////                #output result
////                $count = $result->fetchColumn(0);
////                print ("There are $count rows in Supplier.");
////                $db= NULL;
////                # close connection
//
//
//// ====================== CREATE TABLE SECTION BELOW ============
////
////                echo nl2br("NEW SECTION 0.3");
////                echo nl2br("\n ");
////
////                $dbhost = "mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm";
////                $dbuser = "jseal06";
////                $dbpass = "bbkmysql";
////                #open connection to database
////                $db = new PDO($dbhost, $dbuser, $dbpass);
////                #execute query
////                $result = $db->query("select * from Supplier");
////
////                echo ('<table style="width:100%">');
////                while ($row = $result->fetch()) {
////                    echo ("<tr>" );
////                    for ($i = 0;$i < $result->columnCount(); $i++) {
////                        print ("<td> $row[$i] </td>");
////                    }
////                    print ("</tr>");
////                }
////                echo('</table>');
////
////                #output result
////                //    $count = $result->fetchColumn(0);
////                //    print ("There are $count rows in Supplier.");
////                $db= NULL;
////                # close connection
//
////=======================  KEEP THIS SECTION  =============================================================
//
//
//
//
//
//
