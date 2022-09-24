const form =   document.getElementById('form');
const campos = document.querySelectorAll('.required');
const span = document.querySelectorAll('.span-required');

const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

form.addEventListener('submit', (event) => {
  event.preventDefault();
  nameValidate()
  emailValidate()
})


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
  else{
    removeError(0)
  }
}

function emailValidate() {
  if (!emailRegex.test(campos[1].value))
  {
    setErro(1)
  }
  else{
    removeError(1)

  }

  /*function mainPasswordValidate() {
    if (campos[2].value.length <8)
    {
      setErro(2)
    }
    else{
      removeError(2)
  
    }
  }*/

}
