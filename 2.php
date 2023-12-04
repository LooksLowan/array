<!DOCTYPE html>
<html>
<head>
    <title>School lokalen</title>
</head>
<body>
    <h1>School Lokalen</h1>
    <ul>
        <?php
        $school = array(
            array(
                'Lokaalnummer' => '01',
                'Capaciteit' => '50 Personen',
                'Verdieping' => 'Begane grond',
                'Vierkante Meters' => '35m^2'
            ),
            array(
                'Lokaalnummer' => '02',
                'Capaciteit' => '35 Personen',
                'Verdieping' => 'Begane grond',
                'Vierkante Meters' => '28m^2'
            ),
            array(
                'Lokaalnummer' => '03',
                'Capaciteit' => '100 Personen',
                'Verdieping' => 'Begane grond',
                'Vierkante Meters' => '100m^2'
            )
        );

        foreach ($school as $lokaal) {
            echo '<li>';
            echo '<h2>Lokaalnummer: ' . $lokaal['Lokaalnummer'] . '</h2>';
            echo '<p>Capaciteit: ' . $lokaal['Capaciteit'] . '</p>';
            echo '<p>Verdieping: ' . $lokaal['Verdieping'] . '</p>';
            echo '<p>Vierkante Meters: ' . $lokaal['Vierkante Meters'] . '</p>';
            echo '</li>';
        }
        ?>
    </ul>
</body>
</html>
