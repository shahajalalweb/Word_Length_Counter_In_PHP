<?php
$txt = "";
$strW = "";
$strL = "";
$word = "";
$lent = "";

if (isset($_POST["text"])) {
    $txt = $_POST["text"];
    $strW = str_word_count($txt);

    $strR = str_replace(" ", "", $txt);

    $strL = strlen($strR);

    $word = "Word : ";
    $lent = "Length : ";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Word & Length</title>
</head>

<body>
    <div class="container h-screen flex justify-center items-center bg-gray-200">
        <div class="flex flex-col justify-center items-center w-96 h-auto bg-slate-100 p-5 rounded-md">
            <h2 class="font-bold text-gray-400 text-lg mb-4 pt-5">Word & Length Counter</h2>

            <div class="flex">
                <h2 class="py-5 px-2 font-bold text-gray-400"><?php echo $word . $strW ?> </h2>
                <h2 class="py-5 px-2 font-bold text-gray-400"> <?php echo $lent . $strL ?> </h2>
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form w-full flex" method="post">
                <textarea class="p-3 rounded-md mb-2 w-full h-32 " type="text" name="text" placeholder="Write text"><?php echo $txt ?></textarea>
                <input class="font-bold text-gray-600 rounded-full bg-cyan-300 p-1 flex justify-center items-center pb-2 px-5 mt-2 hover:bg-cyan-400" type="submit" value="Checking">
            </form>

        </div>
    </div>

</body>

</html>