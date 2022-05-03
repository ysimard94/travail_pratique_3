<head>
    <title>Travail Pratique 3</title>
</head>
<html>
    <body>
        <h1>Travail pratique 3</h1>
        <?php
            date_default_timezone_set('America/Toronto');
            $timezone = date_default_timezone_get();

            $time = date('h:i');

            echo $time
        ?>

        <table>
        <?php 
            echo "<table border='1'><br />";

            $heures = range(1, 12);
            $minutes = range(1, 59);
            
            foreach($heures as $heure){
                echo "<tr><th>" . $heure . "</th>";
                foreach($minutes as $minute){
                    echo "<td>" . $minute . "</td>";
                }
                echo "</tr>";
            }
        ?>

        </table>
    </body>
</html>
