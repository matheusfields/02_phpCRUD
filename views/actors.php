<a href="?page=inserir actor">Insert Actor</a>
<table style="border:1px solid #ccc; width:100%">
    <tr>
        <th>id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>last_update</th>
    </tr>
    <tr>
    
    <?php
        while($row  = mysqli_fetch_assoc($result_actors)){
            echo "<tr>";
            echo "<td>" . $row['actor_id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['last_update'] . "</td>";
            echo "</tr>";
        }
    ?>
</table>