<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Git</title>
</head>
<body>
    <?php
        function add($a,$b){
            return $a+$b;
        }
        $c = add(4,5);
        echo $c;
        function nhan2So(&$a,&$b){
            return $a*$b;
        }
        
        $kq = nhan2So(10,5);
        echo "$kq";
    ?>
    <?php 
        phpinfo();
        $a = array("SV1" => "HuuNam","SV2" => "AnhTuan");
        print_r($a);
        echo "12345"
        echo "hehehehehehehe"
        
    ?> 
    <div>
        <input type="button" value="Submit">
    </div>

    <table>
        <tr><td>Trinh Anh Tuan</td><td>Truong Huu Nam</td></tr>
    </table>
</body>
</html>