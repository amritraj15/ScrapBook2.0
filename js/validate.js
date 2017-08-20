function validateForm() 
{  
    if (document.getElementById('name').value == "")
    {
	swal("Please enter your name!")
        return false;
    } 
    if (document.getElementById('email').value == "")
    {
	swal("Please enter your email!")
        return false;
    }
    if (document.getElementById('email').value != "")
    {
    	var x = document.forms["contact_form"]["email"].value;
    	var atpos = x.indexOf("@");
    	var dotpos = x.lastIndexOf(".");
    	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    	{
		swal("Email is not valid!")
        	return false;
    	}
    } 
    if (document.getElementById('phone').value != "")
    {
        var phoneno = /^\d{10}$/;
        var y = document.forms["contact_form"]["phone"].value; 
  	if(!y.match(phoneno) || !(y>=7000000000 && y<=9999999999))  
        {
        	swal("Phone Number is not valid!. Contain only 10 digits")
        	return false; 
        }
    }
    if (document.getElementById('message').value == "")
    {
	swal("Please enter your message!")
        return false;
    }     
}
