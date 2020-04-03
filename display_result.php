<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_REQUEST);
    $investAmount = (float)$_REQUEST["investAmount"];
    $interestRate = (float)$_REQUEST["interestRate"];
    $numberYears = (int)$_REQUEST["numberOfYears"];
    $temp_futureValue = $investAmount;
    static $futureValue = 0;

    for ($i = 1; $i <= $numberYears; $i++) {
        $futureValue = $temp_futureValue + ($temp_futureValue * $interestRate * 0.01);
        $temp_futureValue = $futureValue;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App Future Value Calculator</title>
</head>
<body>
<h2>App Future Value Calculator</h2>
<form id="formResult">
    <fieldset>
        <legend>Result information</legend>
        <table>
            <tr>
                <td>
                    <label for="investAmount">Investment Amount:</label>
                </td>
                <td>
                    <?php
                    echo "$" . $investAmount
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="interestRate"> Yearly Interest Rate:</label>
                </td>
                <td>
                    <?php
                    echo $interestRate . "%"
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="numberOfYears">Number of Years:</label>
                </td>
                <td>
                    <?php
                    echo $numberYears
                    ?>
                </td>
            </tr>
            <tr>
                <td>Future Value:</td>
                <td>
                    <?php
                    echo "$" . $futureValue
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>


