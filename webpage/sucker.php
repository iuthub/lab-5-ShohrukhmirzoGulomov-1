<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Thanks, sucker!</h1>

<p>Your information has been recorded.</p>
<?php
?>
<dl>
    <dt>Name</dt>
    <dd><?php echo ($_REQUEST["name"])?$_REQUEST["name"]:"N/A";  ?></dd>
    <dt>Section</dt>
    <dd><?php if(isset($_REQUEST["sections"])) {foreach ($_REQUEST["sections"] as $section ){echo $section;} } else{
        echo "N/A";
        }?></dd>

    <dt>Credit Card</dt>
    <dd><?php if(isset($_REQUEST["credit"]) && isset($_REQUEST["card"]))
        {
            echo $_REQUEST["credit"];
            echo "(";
            echo $_REQUEST["card"];
            echo ")";
        }
        ?></dd>
    <?php
    $data = "";
    foreach($_REQUEST["sections"] as $section)
    {
        $data = $_REQUEST["name"].";".$data.$section.";";
    }
    $data.=$_REQUEST["credit"].";".$_REQUEST["card"].";";
    file_put_contents("sucker.txt", $data);
    ?>
</dl>
</body>
</html>