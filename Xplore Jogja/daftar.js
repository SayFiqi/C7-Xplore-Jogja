function checkPw(){
			if (document.getElementById("pw").value != document.getElementById("vpw").value){
				document.getElementById("daftar").disabled = true;
				document.getElementById("vpw").style.border = "1px solid red";
			}else{
				document.getElementById("vpw").style.border = "none";
				document.getElementById("daftar").disabled = false;
			}
		}