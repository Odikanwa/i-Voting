/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("responsiveMenu").style.width = "85%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("responsiveMenu").style.width = "0";
    document.body.style.backgroundColor = "white";
}
function openVoteDropdown() {
	var x = document.getElementById("darrVoteDiv");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
function openResultsDropdown() {
	var x = document.getElementById("darrResultsDiv");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
function openRegisterDropdown() {
	var x = document.getElementById("darrRegisterDiv");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
function openContactUsDropdown() {
	var x = document.getElementById("darrContactUsDiv");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

function moreNewsButtonFunction() {
    var x = document.getElementById("hidePhone");
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}