const form =   document.getElementById('form');
const campos = document.querySelectorAll('.required');
const span = document.querySelectorAll('.span-required');

const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

function setErro(index){
campos[index].style.border.bottom ='3px solid #e63636'
span[index].style.display = 'block';

}
function removeError(index){
  campos[index].style.border = ''
  span[index].style.display = 'none';

}

function nameValidate(){
  if(campos[0].value.length < 3)
  {
    setErro(0)
  }
  else if (campos[0].value.length = null){
    removeError(0)
  }
  else{
    removeError(0)
  }
}