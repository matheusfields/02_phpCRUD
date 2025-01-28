<table style="border:1px solid #ccc; width:100%">
    <tr>
        <th>actor_id</th>
        <th>film_id</th>
        <th>last_update</th>
    </tr>
    <tr>
    
    <?php
        while($row  = mysqli_fetch_assoc($result_film_actors)){
            echo "<tr>";
            echo "<td>" . $row['actor_id'] . "</td>";
            echo "<td>" . $row['film_id'] . "</td>";
            echo "<td>" . $row['last_update'] . "</td>";
            echo "</tr>";
        }
    ?>
</table>