<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App Future Value Calculator</title>
</head>
<body>
<h2>App Future Value Calculator</h2>
<form method="post" id="formGet" action="display_result.php">
    <fieldset>
        <legend>Enter input information</legend>
        <table>
            <tr>
                <td>
                    <label for="investAmount">Investment Amount:</label>
                </td>
                <td>
                    <input type="text" name="investAmount" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="interestRate"> Yearly Interest Rate:</label>
                </td>
                <td>
                    <input type="text" name="interestRate" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="numberOfYears">Number of Years:</label>
                </td>
                <td>
                    <input type="number" name="numberOfYears" value="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Calculate</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>


