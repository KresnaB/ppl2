<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="margin:auto" width="800px">
    <tr>
        <td style="text-align:center" height="100px"><h3>Header</h3></td>
    </tr>
    <tr>
        <td>
            <a href="<?php echo base_url() ?>">Home</a> | 
            <a href="<?php echo base_url('index.php/berita') ?>">Berita</a>
        </td>
    </tr>
    <tr>
        <td height="400px">
            <?php 
                if(empty($isi)){ echo "tidak ada view";}
                else{include($isi);}
            ?>
        </td>
    </tr>
    <tr>
        <td style="text-align:center">
            <h3>Footer</h3>
        </td>
    </tr>
    </table>
</body>
</html>