<html>

<body>
    <table border="1">
        <tr>
            <td>
                Username:
            </td>
            <td>
                <?php
                    echo $_POST['Username'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Email address:
            </td>
            <td>
                <?php
                    echo $_POST['Mail'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Message:
            </td>
            <td>
                <?php
                    echo $_POST['Message'];
                ?>
            </td>
        </tr>
    </table>
</body>

</html>
