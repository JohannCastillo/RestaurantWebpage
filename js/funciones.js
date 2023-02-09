
function mostrar(){
    var radioBtn = document.getElementsByName("btnradio");
    var btnValue
    
    for (var i=0; i<radioBtn.length; i++) {
        btnValue = radioBtn[i].value;
        if (radioBtn[i].checked == true) { 
             document.getElementById(btnValue).hidden = false;
        }else document.getElementById(btnValue).hidden = true;
    }
}

function mostrar2(){
    var radioBtn = document.getElementsByName("btnradioB");
    var btnValue
    
    for (var i=0; i<radioBtn.length; i++) {
        btnValue = radioBtn[i].value;
        if (radioBtn[i].checked == true) { 
             document.getElementById(btnValue).hidden = false;
        }else document.getElementById(btnValue).hidden = true;
    }
}

