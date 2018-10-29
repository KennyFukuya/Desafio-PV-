function validate()
{
	if(document.formuser.firstname.value == "")
	{
		alert("Por favor preencha o campo nome");
		document.formuser.firstname.focus();
		return false;
	}
	
	if(document.formuser.surname.value == "")
	{
		alert("Por favor preencha o campo sobrenome");
		document.formuser.surname.focus();
		return false;
	}
	
	if(document.formuser.login.value == "")
	{
		alert("Por favor preencha o campo login");
		document.formuser.login.focus();
		return false;
	}
	
	if(document.formuser.bday.value == "")
	{
		alert("Por favor preencha o campo data de nascimento");
		document.formuser.bday.focus();
		return false;
	}
	
	if(document.formuser.password.value == "")
	{
		alert("Por favor preencha o campo senha");
		document.formuser.password.focus();
		return false;
	}
	
	if(document.formuser.password2.value == "")
	{
		alert("Por favor preencha o campo repita a senha");
		document.formuser.password2.focus();
		return false;
	}
	
	if(document.formuser.password.value != document.formuser.password2.value)
	{
		alert("Senhas não coincidem");
		document.formuser.password2.focus();
		return false;
	}
	
	return true;
}
