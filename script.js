
let warning = document.getElementById("alert");

warning.addEventListener('mouseover', function () {
  warning.style.backgroundColor="red";
  warning.style.fontSize="125%";
});

warning.addEventListener('mouseout', function () {
  warning.style.backgroundColor="rgb(47, 105, 192)";
  warning.style.fontSize="100%";
});

warning.addEventListener('click', function () {
  warning.style.opacity="0";
});

function reopenalert () {
  warning.style.opacity="1";
}

setInterval (reopenalert, 4000);