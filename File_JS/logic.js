eventListeners();
function eventListeners(){
  const ui=new UI;
  //display modal
  const links=document.querySelectorAll('.work-item__icon');

  links.forEach(function(item){
    item.addEventListener('click', function(event){
      ui.showModal(event);
    })
  })

  //hide modal
document.querySelector(".work-modal__close").addEventListener('click', function(){
ui.closeModal();
 })
}
//constructor function
function UI(){

}
//show modal
UI.prototype.showModal=function (event) {

  event.preventDefault();
  if(event.target.parentElement.classList.contains('.work-item__icon'));
  let id=event.target.parentElement.dataset.id;

  const modal=document.querySelector('.work-modal');
  const modalItem=document.querySelector('.work-modal__item');
  modal.classList.add('work-modal__show');
  //modal.classList.remove('work-modal');
  modalItem.style.backgroundImage = `url(../Icona_Image/icona_work_${id}.jpg)`
}
//hide modal
UI.prototype.closeModal = function(){
  document.querySelector('.work-modal').classList.remove('work-modal__show');
}
