GET method:

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

POST method:

http://localhost:8000/api/WriteChat

{

    "message":"Nihao"

}