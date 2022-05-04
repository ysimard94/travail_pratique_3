<head>
    <title>Travail Pratique 3</title>
    <style>
        .color{
            background-color: red;
            color: white;
        }
    </style>
</head>
<html>
    <body>
        <h1>Travail pratique 3</h1>
        <?php
            date_default_timezone_set('America/Toronto');
            $timezone = date_default_timezone_get();

            $time = date('h:i A');
            $hour = date('h');
            $min = date('i');
            echo $time;
        ?>

        <table>
        <?php 
            echo "<table border='1'><br />";

            $heures = range(1, 12);
            $minutes = range(1, 59);
            
            foreach($heures as $heure){
                echo "<tr><th>" . $heure . "</th>";
                foreach($minutes as $minute){
                    if ($heure == $hour && $minute == $min){
                        echo "<td class='color'> X </td>";
                    }
                    else{
                        echo "<td>" . $minute . "</td>";
                    }
                }
            }
                echo "</tr>";
            
        ?>

        </table>
    </body>
</html>
