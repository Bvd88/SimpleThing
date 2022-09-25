var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phone-error');
var emailError = document.getElementById('email-error');
var messageError = document.getElementById('message-error');

function validateName()
{
    var name = document.getElementById('contact-name').value;

    if(name.length == 0){
        nameError.innerHTML='Name is requiered';
        return false;
    }
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError.innerHTML = 'Write full name';
        return false;

    }
    nameError.innerHTML= '<i class="fas fa-check-circle"></i>';
    return true;
}


function validatePhone()
{
    var phone = document.getElementById('contact-phone').value;

    if (phone.length == 0){
        phoneError.innerHTML='Phone number is requiered'
        return false;
    }
    if (phone.length !== 11){
        phoneError.innerHTML='Phone number should be 11 digits'
        return false;
    }
    if(!phone.match(/^[0-9]{11}$/)){
        phoneError.innerHTML='Only digits please'
        return false;
    }

    phoneError.innerHTML= '<i class="fas fa-check-circle"></i>';
    return true;

}


function validateEmail()
{
    var email = document.getElementById('contact-email').value;

    if(email.length == 0){
        nameError.innerHTML='Email is requiered';
        return false;
    }
    if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        emailError.innerHTML = 'Enter a valid email';
        return false;

    }
    emailError.innerHTML= '<i class="fas fa-check-circle"></i>';
    return true;
}


function validateMsg()
{
    var msg = document.getElementById('contact-msg').value;
    var requiered = 30;
    var left = requiered - msg.length;

    if (left > 0){
       msgError.innerHTML = left + 'more character requiered' ;
       return false;
    }
    msgError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;


}

function validateForm(){
    if (!validateName() || !validatePhone() || !validateEmail() || !validateMsg()){
        submitError.innerHTML = 'Please check the red messages';
        return false;
    }
else
    msgError.innerHTML= '<i class="fas fa-check-circle"></i>';
    return true;

}

//theme button//

const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
});