<?php $title = $htmll = $csss =" ";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $title=check_that($_POST["title"]);
            $htmll=check_that($_POST["htmll"]);
            $csss=check_that($_POST["csss"]);
            }

        function check_that($inter_user){
        $inter_user=trim($inter_user);
        $inter_user=stripslashes($inter_user);
        $inter_user=htmlspecialchars($inter_user);
        return $inter_user;} ?>
        

if(!isset ($_POST["title"])){
$title_eer="Title is Required";
}
    elseif {$title=$inter_faced($_POST["title"]);}

    <?php echo (int)$_POST['name']; ?>
  
    