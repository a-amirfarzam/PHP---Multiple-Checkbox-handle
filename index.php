<?php
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input onchange="funChk1()" type="checkbox" name="chk1" id="chk1">
        <input onchange="funChk2()" type="checkbox" name="chk2" id="chk2">
        <input onchange="funChk3()" type="checkbox" name="chk3" id="chk3">
        <input type="text" name="ch1" id="ch1" value="0" hidden>
        <input type="text" name="ch2" id="ch2" value="0" hidden>
        <input type="text" name="ch3" id="ch3" value="0" hidden>
        <button type="submit">ok</button>
    </form>

    <script>
        function funChk1() {
            let chk1 = document.getElementById('chk1')
            let ch1 = document.getElementById('ch1')
            if (chk1.checked)
                ch1.value = 1
            else
                ch1.value = 0
        }

        function funChk2() {
            let chk2 = document.getElementById('chk2')
            let ch2 = document.getElementById('ch2')
            if (chk2.checked)
                ch2.value = 1
            else
                ch2.value = 0
        }
    </script>
</body>

</html>