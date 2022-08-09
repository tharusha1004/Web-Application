function valid()
{
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(!document.registerform.email.value.match(validRegex))
    {
        alert("Invalid email address!");
        document.registerform.email.focus();
        return false;
    }
    else if(document.registerform.fname.value.length<=4)
    {
        alert("Enter Full Name");
        return false;
    }
    else{
        return true;
    }
}