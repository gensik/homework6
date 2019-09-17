<?php
$arr = [
            ['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],
            ['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],
            ['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
            ['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],
            ['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],
            ['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],
            ['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],
            ['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
            ['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],
            ['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],
            ['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],

];
//1)Всем сотрудникам у кого ЗП меньше 1600 добавить 100.
echo 'Всем сотрудникам у кого ЗП меньше 1600 добавить 100. <br>' ;
$rab =array_map(function ($elem) {
    if ($elem['salery'] < 1600) {
        $elem['salery'] = $elem['salery'] + 100;

        echo '<table style="border: 4px double #333;  ">';
        echo '<tr> ';
        echo '<th width=100px>' . $elem ['name'] . '</th>' ;
        echo '<td width=100px>' . $elem['salery'] . ' грн' . '</td>';
        echo '</tr>';
        echo '</table>';
    }
      return $elem;
}, $arr);


//2)Всем сотрудникам кто работал больше 180 часов, добавить премию 20%.
echo '<br> Всем сотрудникам кто работал больше 180 часов, добавить премию 20%. ';
$rab =array_map(function ($elemHours) {
    if ($elemHours['work_hours'] > 180) {
        $elemHours['salery'] = $elemHours['salery'] + ($elemHours['salery'] * 0.2);

        echo '<table style="border: 4px double #333;  ">';
        echo '<tr> ';
        echo '<th width=100px>' . $elemHours ['name'] . '</th>' ;
        echo '<td width=100px>' . $elemHours['salery'] . ' грн' . '</td>' ;
        echo '</tr>';
        echo '</table>';
    }
    return $elemHours;
}, $arr);

//3) Вывести всех сотрудников которые отработали меньше 160 часов.
echo '<br> Вывести всех сотрудников которые отработали меньше 160 часов ';
$rab =array_map(function ($elemHours) {
    if ($elemHours['work_hours'] < 160) {

        echo '<table style="border: 4px double #333;  ">';
        echo '<tr> ' ;
        echo '<th width=100px>' . $elemHours ['name'] . '</th>' ;
        echo '<td width=100px>' . $elemHours['salery'] . ' грн' . '</td>';
        echo '</tr>';
        echo '</table>';
    }
    return $elemHours;
}, $arr);


//4)  Вывести всех сотрудников у которых ЗП меньше 2000.
echo '<br> Вывести всех сотрудников у которых ЗП меньше 2000. ';
$rab =array_map(function ($element) {
    if ($element['salery'] < 2000) {

        echo '<table style="border: 4px double #333;  ">';
        echo '<tr> ' ;
        echo '<th width=100px>' . $element ['name'] . '</th>' ;
        echo '<td width=100px>' . $element['salery'] . ' грн' . '</td>';
        echo '</tr>';
        echo '</table>';
    }
    return $element;
}, $arr);
