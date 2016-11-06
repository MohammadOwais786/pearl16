$(document).ready(function(){

			    /* Get browser */
			    $.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());

			    /* Detect Chrome */
			    if($.browser.chrome){
			        /* Do something for Chrome at this point */
			        alert("You are using Chrome!");
			        
			        /* Finally, if it is Chrome then jQuery thinks it's 
			           Safari so we have to tell it isn't */
			        $.browser.safari = false;
			    }

			    /* Detect Safari */
			    if($.browser.safari){
			        /* Do something for Safari */
			        alert("You are using Safari!");
			    }

			});