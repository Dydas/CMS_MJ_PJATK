function calculate() {
	
var l1 =  document.getElementById('l1').value;
var l2 =  document.getElementById('l2').value;
var l3 =  document.getElementById('l3').value;
var l4 =  document.getElementById('l4').value;
var l5 =  document.getElementById('l5').value;
var l6 =  document.getElementById('l6').value;
var l7 =  document.getElementById('l7').value;
var l8 =  document.getElementById('l8').value;
var price =  document.getElementById('price'); 
var priceButton =  document.getElementById('priceButton'); 

	
	jQuery(function($) {
      $.ajax({
           type: "POST",
           url: '/wp-content/plugins/Kalkulator/ajax.php',
           data:{action:'call_this', l1: l1, l2: l2, l3: l3, l4: l4, l5: l5, l6: l6, l7: l7, l8: l8 },
           success:function(html) {
			price.style.display = "inline";
			price.value = html;
			priceButton.style.display = "none";
           }
      });
	}); 
	


var selectors =   $(".calcSelector");

selectors.on('change', showHide);


function showHide(){
price.style.display = "none";
priceButton.style.display = "inline";	

}


}




