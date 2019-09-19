function validateForm(){
  var x = document.getElementsByTagName("INPUT");
  var letter =/^[a-zA-Z]+$/;
  
    for (var i = 0; i < x.length; i++){
        var val = x[i].value;

        if (x[i].value.length > 30){
                        alert(x[i].value.length);
                        return false;
                        }

                    else if(x[i].value.length == 0){
                        alert("You have not completed all of the questions!");
                        return false;
                        }

                            else if (!val.match(letter)){
                                    alert("Please only enter letters!");
                                    return false;
                                    }
                                }

            
        }