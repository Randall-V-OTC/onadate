<form action="">
    <select name="numDays" id="numDays">
        <?php
            for($i=0; $i<31;$i++)
            {
                echo ("<option value=$i>$i</option>");
            };

?>
    </select>
    <input type="submit" value="Submit">
</form>