<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body>  
<h1>Chat</h1>  
<div id="CHATCHAT">  
</div>  


<?php
//foreach ($chats as $Content) {
                //echo $Content;
                //echo '<br>';
            //}
?>
<form class="subform" method="post" action="{{ route('send.Message')}}" enctype="multipart/form-data">
{{ csrf_field() }}        
    <input type="text" class="MessageContent" id="MessageContent" name="MessageContent"></input>
    <input type="submit"></input>
</form>



</body>

</html>
<script>

function reloadChat(){
    //alert(chat);

let req = new XMLHttpRequest();
  req.open('GET', "http://localhost:8000/api/ChatHistory");
  req.onload = function() {
    if (req.status == 200) {
        //console.log(req.responseText);
        var obj = JSON.parse(req.responseText);

        //document.getElementById("CHATCHAT").innerHTML = obj;
        var output = "";

        for (let x in obj) {
            //console.log(x + ": "+ obj[x]);
            output +=  obj[x] +"</br>";       
        }
        document.getElementById("CHATCHAT").innerHTML = output;
    } else {
        console.log("Error: " + req.status);
    }
  }
  req.send();

}
reloadChat();
//setTimeout(reloadChat().reload(), 1000);

//setTimeout(reloadChat(),1000);
//reloadChat();
function refresh() {    
    setTimeout(function () {
        location.reload()
    }, 5000);
}
refresh();
</script>
