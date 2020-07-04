var currentFieldset = 0; // Current fieldset is set to be the first fieldset (0)
showFieldset(currentFieldset); // Display the current fieldset

function showFieldset(n) {
  // This function will display the specified fieldset of the form...
  var x = document.getElementsByClassName("fieldset");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline-block";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
	//... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}


function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("fieldset");
  // Exit the function if any field in the current fieldset is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentFieldset].style.display = "none";
  // Increase or decrease the current fieldset by 1:
  currentFieldset = currentFieldset + n;
  // if you have reached the end of the form...
  if (currentFieldset >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
 }
  // Otherwise, display the correct tab:
  showFieldset(currentFieldset);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("fieldset");
  y = x[currentFieldset].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
	
      // and set the current valid status to false
    valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
	
    document.getElementsByClassName("step")[currentFieldset].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

 