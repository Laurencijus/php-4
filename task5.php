<?php
$colors = ['BlanchedAlmond',
    'CadetBlue',
    'BurlyWood',
    'DarkOliveGreen',
    'HotPink',
    'PapayaWhip',
];
?>
<table>
    <tr>

    <th>Key</th>
    <th>color</th>
</tr>
 <?php foreach ($colors as $key => $color) {?>
    <tr style=background-color:<?php echo $color; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $color; ?></td>
 </tr>


    <?php }?>

 </table>




  foreach ($colors as $key => $color) {?>



}