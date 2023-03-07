<?php 
    $credit = $_GET['credit'];
    $service = $_GET['service'];
    $link = $_GET['link'];
?>
<title>크레딧 소모 경고</title>
<script>
var con_test = confirm("정말 <?php echo $service ?>에 접속하시겠습니까?\n접속시 <?php echo $credit ?>크레딧이 소모됩니다.\n");
if(con_test == true){
    location.replace('<?php echo $link; ?>');
}
else if(con_test == false){
    history.back();
}
</script>