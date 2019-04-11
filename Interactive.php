<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?
        if($_POST){
            if(isset($_POST['dn'])){
                $dn = (int)$_POST['dn'];
            };
        };
        // nested array containing 31 arrays holding schedules for each day of the month
        $schedule = array(
            array("tets"), array(), array(), array(), array(), array(), array(),
            array(), array(), array(), array(), array(), array(), array(),
            array(), array(), array(), array(), array(), array(), array(),
            array(), array(), array(), array(), array(), array(), array(),
            array(), array(), array()
        );
        ?>
        
    </body>
</html>
