eventListeners();
function eventListeners(){
  const ui=new UI;

//submit the form
document.querySelector('.order-form').addEventListener('submit',function(event){
  event.preventDefault();
  const name=document.querySelector('.input-name').value;
  const lastname=document.querySelector('.input-lastname').value;
  const email=document.querySelector('.input-email').value;
  const textarea=document.querySelector('.textarea').value;
  let value=ui.checkEmpty(name, lastname, email, textarea);

  if(value){
    ui.showFeedback('Сообщение отправлено', 'success');
    ui.clearFields();
  }
  else{
    ui.showFeedback('Что-то заполнено неверно', 'error');
  }
})
}


//constructor function
function UI(){

}


//check for empty value

UI.prototype.checkEmpty=function(name, lastname, email, textarea){
  let result;
  if(name==='' || lastname==='' || email==='' || textarea==='') {
  result=false;
}
else {
    result=true;
}
return result;
}

//show showFeedback

UI.prototype.showFeedback=function(text, type){
  const feedback=document.querySelector(".order-form__feedback");
  if(type==='success'){
    feedback.classList.add('success');
    feedback.innerText=text;
    this.removeAlert('success');
  }
  else if(type==='error'){
      feedback.classList.add('error');
      feedback.innerText=text;
      this.removeAlert('error');
  }
}

//remove alert

UI.prototype.removeAlert=function(type){
  setTimeout(function(){
    document.querySelector(".order-form__feedback").classList.remove(type)
  }, 3000);
}

//clear field

UI.prototype.clearFields=function(){
  document.querySelector('.input-name').value='';
  document.querySelector('.input-lastname').value='';
  document.querySelector('.input-email').value='';
  document.querySelector('.textarea').value='';
}
