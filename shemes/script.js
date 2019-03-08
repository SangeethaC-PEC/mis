$(document).ready(function(){
$("#Payment1").change(function(){
    $this = $(this);
    if($this.val() === "A/C"){
        $("#chBox").css("display","block");
    }else{
        $("#chBox").css("display","none");
    }
});
});   