<script type="text/javascript">
    	var selectPais = function(){
    		var e = document.getElementById("pais");
			var strUser = e.options[e.selectedIndex].value;

			if(strUser ==="Brasil"){
				// var divEstado = document.getElementById("div-estado");
				// divEstado.innerHTML = divEstado + "<p>Caraio</p>"
				document.getElementById("div-estado").innerHTML = '<label><strong>País</strong></label><select class=\"form-control form-control-lg\" onchange=\"selectEstado()\" id=\"pais\"><option></option><option> </option><option></option></select>';
			}else if(strUser == "Estados Unidos"){

			}else if(strUser == "Rússia"){

			}
			alert(strUser);
    	}

    	var selectEstado = function(){
    		var e = document.getElementById("pais");
			var strUser = e.options[e.selectedIndex].value;

			if(strUser ==="Brasil"){
				// var divEstado = document.getElementById("div-estado");
				// divEstado.innerHTML = divEstado + "<p>Caraio</p>"
				document.getElementById("div-estado").innerHTML = '<label><strong>País</strong></label><select class=\"form-control form-control-lg\" onchange=\"selectEstado()\" id=\"pais\"><option></option><option> </option><option></option></select>';
			}else if(strUser == "Estados Unidos"){

			}else if(strUser == "Rússia"){

			}
			alert(strUser);
    	}

    // 	var xhttp = new XMLHttpRequest();
		  // xhttp.onreadystatechange = function() {
		  //   if (this.readyState == 4 && this.status == 200) {
		  //    document.getElementById("demo").innerHTML = this.responseText;
		  //   }
		  // };
		  // xhttp.open("GET", "ajax_info.txt", true);
		  // xhttp.send();
    </script>


    <div class="col-8 " id="div-estado">
			
		</div>