<table style="border:1px solid #ccc; width:100%">
    <tr>
        <th>payment_id</th>
        <th>customer_id</th>
        <th>staff_id</th>
        <th>rental_id</th>
        <th>amount</th>
        <th>payment_date</th>
        <th>last_update</th>
    </tr>
    <tr>
    
    <?php
        while($row  = mysqli_fetch_assoc($result_payment)){
            echo "<tr>";
            echo "<td>" . $row['payment_id'] . "</td>";
            echo "<td>" . $row['customer_id'] . "</td>";
            echo "<td>" . $row['staff_id'] . "</td>";
            echo "<td>" . $row['rental_id'] . "</td>";
            echo "<td>" . $row['amount'] . "</td>";
            echo "<td>" . $row['payment_date'] . "</td>";
            echo "<td>" . $row['last_update'] . "</td>";
            echo "</tr>";
        }
    ?>
</table>