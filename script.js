document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("todoModal");
    var openModalBtn = document.getElementById("openModalBtn");
    var closeModalBtn = document.getElementsByClassName("close-btn")[0];
    var todoForm = document.getElementById("todoForm");

    let pageAnimator = document.getElementById("page-animator");
    let pagePickUp = document.getElementById("pick-up-page");

    openModalBtn.onclick = function () {
        pageAnimator.style.display = "block";
        setTimeout(()=>{
            pagePickUp.classList.add("animate");
        },100)
        // pageAnimator.classList.add("animate");
    }
    // openModalBtn.onclick = function () {
    //     modal.style.display = "block";
    // }

    // closeModalBtn.onclick = function () {
    //     modal.style.display = "none";
    // }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == pageAnimator) {
            pageAnimator.style.display = "none";
            pagePickUp.classList.remove("animate");
        }
    }

    todoForm.onsubmit = function (event) {
        event.preventDefault();
        var todoTitle = document.getElementById("todoTitle").value;
        var todoDesc = document.getElementById("todoDesc").value;
        console.log("To-Do Title: " + todoTitle);
        console.log("To-Do Description: " + todoDesc);
        modal.style.display = "none";
    }
});
