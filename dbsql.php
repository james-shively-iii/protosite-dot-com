<?php
/**
 * dbsql.php connects to database and calls a sql statement
 * 
 * 
 * @author James Shively <james.shively-iii@gmail.com>
 * @version 1.0 2018/03/03
 * @link http://www.reedly.info/ 
 * @license https://www.apache.org/licenses/LICENSE-2.0
 * @todo none
 */

require 'credentials.php';

//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$sql1 = "SELECT wn18_categories.CategoryID, wn18_categories.Title, wn18_submenus.SubMenuID, wn18_submenus.SubMenuTitle, 
wn18_submenus.SubMenuURL 
FROM wn18_categories
INNER JOIN wn18_submenus ON wn18_categories.CategoryID=wn18_submenus.CategoryID
WHERE wn18_categories.CategoryID = 1;";

$sql2 = "SELECT wn18_categories.CategoryID, wn18_categories.Title, wn18_submenus.SubMenuID, wn18_submenus.SubMenuTitle, 
wn18_submenus.SubMenuURL 
FROM wn18_categories
INNER JOIN wn18_submenus ON wn18_categories.CategoryID=wn18_submenus.CategoryID
WHERE wn18_categories.CategoryID = 2;";

$sql3 = "SELECT wn18_categories.CategoryID, wn18_categories.Title, wn18_submenus.SubMenuID, wn18_submenus.SubMenuTitle, 
wn18_submenus.SubMenuURL 
FROM wn18_categories
INNER JOIN wn18_submenus ON wn18_categories.CategoryID=wn18_submenus.CategoryID
WHERE wn18_categories.CategoryID = 3;";
//we connect to the db here
$result1 = mysqli_query($iConn,$sql1) or die(trigger_error(mysqli_error($iConn), E_USER_ERROR));

$result2 = mysqli_query($iConn,$sql2) or die(trigger_error(mysqli_error($iConn), E_USER_ERROR));

$result3 = mysqli_query($iConn,$sql3) or die(trigger_error(mysqli_error($iConn), E_USER_ERROR));

/*if(mysqli_num_rows($result1) > 0)
{//show records
    while($row = mysqli_fetch_assoc($result1))
    {
        echo '<p>';
        echo 'Category ID: <b>' . $row['CategoryID'] . '</b> ';
        echo 'Category: <b>' . $row['Title'] . '</b> ';
        echo 'Sub Menu ID: <b>' . $row['SubMenuID'] . '</b> ';
        echo 'Sub Menu Title: <b><a href=' . $row['SubMenuURL'] . '>' . $row['SubMenuTitle'] . '</a></b> ';
        echo '</p>';
    }
}else{//inform there are no records
    echo '<p>There are currently no links</p>';
}

if(mysqli_num_rows($result2) > 0)
{//show records
    while($row = mysqli_fetch_assoc($result2))
    {
        echo '<p>';
        echo 'Category ID: <b>' . $row['CategoryID'] . '</b> ';
        echo 'Category: <b>' . $row['Title'] . '</b> ';
        echo 'Sub Menu ID: <b>' . $row['SubMenuID'] . '</b> ';
        echo 'Sub Menu Title: <b><a href=' . $row['SubMenuURL'] . '>' . $row['SubMenuTitle'] . '</a></b> ';
        echo '</p>';
    }
}else{//inform there are no records
    echo '<p>There are currently no links</p>';
}

if(mysqli_num_rows($result3) > 0)
{//show records
    while($row = mysqli_fetch_assoc($result3))
    {
        echo '<p>';
        echo 'Category ID: <b>' . $row['CategoryID'] . '</b> ';
        echo 'Category: <b>' . $row['Title'] . '</b> ';
        echo 'Sub Menu ID: <b>' . $row['SubMenuID'] . '</b> ';
        echo 'Sub Menu Title: <b><a href=' . $row['SubMenuURL'] . '>' . $row['SubMenuTitle'] . '</a></b> ';
        echo '</p>';
    }
}else{//inform there are no records
    echo '<p>There are currently no links</p>';
}*/

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);