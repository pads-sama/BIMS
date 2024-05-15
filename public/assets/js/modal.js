// document.addEventListener('DOMContentLoaded', (event) => {
//     const modal = document.getElementById("modal");
//     // const modalContent = document.getElementById("modal-content");
//     const modalBody = document.getElementById("modal-body");
//     const span = document.getElementsByClassName("modal-close")[0];
//     const buttons = document.getElementsByClassName("modal-btn");

//     Array.from(buttons).forEach(button => {
//         button.onclick = function () {
//             console.log('click')
//             const file = this.getAttribute('data-file');
//             console.log(file)
//             fetch(file)
//                 .then(response => response.text())
//                 .then(data => {
//                     modalBody.innerHTML = data;
//                     modal.style.display = "block";
//                 })
//                 .catch(error => console.error('Error fetching modal content:', error));
//         }
//     });

//     span.onclick = function () {
//         modal.style.display = "none";
//     }

//     window.onclick = function (event) {
//         if (event.target == modal) {
//             modal.style.display = "none";
//         }
//     }
// });