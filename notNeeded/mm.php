
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>mySql test page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../cssStyle.css" />
</head>


<!---->
<!---->
<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: JamesSeal-->
<!-- * Date: 26/06/2018-->
<!-- * Time: 05:21-->
<!-- */-->
<!---->
<!--//    $dbhost = 'mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06';-->
<!--//    $dbuser = 'jseal06';-->
<!--//    $dbpass = 'bbkmysql';-->


<h2>Counting the number of Part 0.7</h2>
<p>
    <?php


    //=======================  KEEP THIS SECTION  =============================================================
//                # set up database parameters
//                $dbhost = "mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm";
//                $dbuser = "jseal06";
//                $dbpass = "bbkmysql";
//                #open connection to database
//                $db = new PDO($dbhost, $dbuser, $dbpass);
//                #execute query
//                $result = $db->query("select count(*) from Supplier");
//                #output result
//                $count = $result->fetchColumn(0);
//                print ("There are $count rows in Supplier.");
//                $db= NULL;
//                # close connection
    //=======================  KEEP THIS SECTION  =============================================================


    echo nl2br("NEW SECTION 0.3");
    echo nl2br("\n ");

    $dbhost = "mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm";
    $dbuser = "jseal06";
    $dbpass = "bbkmysql";
    #open connection to database
    $db = new PDO($dbhost, $dbuser, $dbpass);
    #execute query
    $result = $db->query("select * from Supplier");

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
    $db= NULL;
    # close connection



////    look at the next line down to add dbname ---->
//    global $db;
//    try {
//        $conn = new PDO("mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06dbm", 'jseal06', 'bbkmysql');
//        // set the PDO error mode to exception
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo ("Connected successfully");
//        echo nl2br("\n One line.\nAnother line.");
//        echo nl2br("\n well done james now keep it going...");
//
//        $result = $db->query("select count(*) from Part");
//        $count = $result->fetchColumn(0);
//        echo ("There are $count rows in Part.");
//
//
//
//
//
//}
//    catch(PDOException $e)
//    {
//        echo "Connection failed: " . $e->getMessage();
//    }
//

   ?>

<table class="table2" style="width:100%">
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
    </tr>
</table>

</p></body></html>



























<!---->
<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: JamesSeal-->
<!-- * Date: 26/06/2018-->
<!-- * Time: 05:21-->
<!-- */-->
<!---->
<!--<html>-->
<!--<body>-->
<!--<h2>Counting the number of Part</h2>-->
<!--<p>-->
<!--    --><?php
//    # set up database parameters
//    $dbhost = 'mysql:host=mysqlsrv.dcs.bbk.ac.uk;dbname=jseal06';
//    $dbuser = 'jseal06';
//    $dbpass = 'bbkmysql';
//    ##open connection to database
//    $db = new PDO($dbhost, $dbuser, $dbpass);
//    ##execute query
//    $result = $db->query("select count(*) from Part");
//    #output result
//    $count = $result->fetchColumn(0);
//    print ("There are $count rows in Drinkers.");
//    $db= NULL;
//    # close connection?>
<!--</p></body></html>-->
<!---->
<!---->
<!---->
<!--$conn = new PDO("mysql:host=$servername;dbname=myDB", $username,-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->













