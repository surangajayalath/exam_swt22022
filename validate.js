function validation(){
	var email = document.getElementById('email').value;
	var filter = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

	if(!filter.test(email)){
		alert("InValid Email");
		return false;
	}
	else{
		alert("Valid Email");
		return false;
	}
}