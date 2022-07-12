"use strict"
document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);
async function formSend (e) {
    e.preventDefault();
    let error = formValidate(form);

    if (error === 0) {
        let response = await fetch('sendmail.php', {
            method: 'POST',
            body: formData
        });
    }
    
}

function formValidate(form) {
    let error = 0;
    let formReq = document.querySelectorAll('._req');

    for (let index = 0; index < formReq.length; index++) {
        const input = formReq[index]; 
        formRemoveError(input);   
        if (input.classlist.contains('_email')){
             
        }
    }

}
function formAddError(input) {
    input.parentElement.classlist.add('_error');
    input.classlist.add('_error');
}
function formRemoveError(input) {
    input.parentElement.classlist.remove('_error');
    input.classlist.remove('_error');
}

})
