<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanilla PHP</title>
</head>
<body>
    <?php
    require_once("student.class.php");

    $students = [ 
        new Student(1, 'Chema', 'Roldán', 
            'https://pbs.twimg.com/profile_images/1589907446100811776/HUGwTr8P_400x400.jpg', 
            '<p>Hello world</p>', '20/05/1985'),
        new Student(2, 'Aula', 'de Software Libre UCO', 
            'https://pbs.twimg.com/profile_images/1645089881411002371/wdsyLx6h_400x400.jpg', 
            '<p>Hello #DEVS :-D</p>', '21/06/1984') 
    ];

    function filterByQueryparam() {
        global $students;

        $studentsToPrint = $students;
        if(array_key_exists('id', $_GET)) {
            $studentsToPrint = array_filter($students, function($st) {
                return $st->id == $_GET['id'];
            });
        }

        return $studentsToPrint;
    }

    $studentsToPrint = filterByQueryparam();

    
    ?>
    <table>
        <?php foreach($studentsToPrint as $student): ?>
            <tr>
                <td><?= $student->id ?></td>
                <td><img style="width:50px; height: 50px;" src="<?= $student->avatar ?>"></img> </td>
                <td><?= $student->name . ' ' . $student->surname ?></td>
                <td><?= $student->description ?></td>
                <td><?= $student->birthdate ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>