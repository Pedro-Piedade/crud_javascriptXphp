const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex =   /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
const senhaRegex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/

function setError(index){
    campos[index].style.border = '2px solid #e63636'
    spans[index].style.display = 'block';
}

function removeError(index){
    campos[index].style.border = ''
    spans[index].style.display = 'none';
}

function userValidate(){
    if(campos[0].value.length < 3)
        {
          setError(0);
        }
        else 
        {
          removeError(0);
        }
    }
        
function emailValidate(){
    if(!emailRegex.test(campos[1].value)){
        setError(1);
    }
    else {
        removeError(1);
    }
}

function mainPasswordValidate(){
    if(!senhaRegex.test(campos[2].value))
        {
          setError(2);
        }
        else 
        {
          removeError(2);
          comparePassword();
          }
        }

function comparePassword(){
     if(campos[2].value == campos[3].value && campos[3].value.length >= 8){
         removeError(3);
        }
      else {
         setError(3);
      }
}