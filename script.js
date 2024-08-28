document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("todoModal");
    var openModalBtn = document.getElementById("openModalBtn");
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

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == pageAnimator) {
            pageAnimator.style.display = "none";
            pagePickUp.classList.remove("animate");
        }
    }
    
    document.querySelectorAll('.delete-todo button').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
            
            const animator = document.querySelector('.delete-animator');
            const animatorImg = animator.querySelector('img');
    
            // Debugging
            console.log('Delete button clicked');
            console.log('Animator:', animator);
            console.log('Animator Image:', animatorImg);
    
            if (animator && animatorImg) {
                // Make the animator visible
                animator.classList.add('show');  
                console.log('Animator is now visible');
    
                // Start the animation
                animatorImg.classList.add('animate');
                console.log('Animation started');
    
                // Delay the form submission to allow the animation to complete
                setTimeout(() => {
                    this.closest('form').submit(); // Submit the form after the animation
                }, 1000); // 1 second delay (matches the animation duration)
            } else {
                console.error('Animator or Animator Image not found!');
            }
        });
    });
    
    

    todoForm.onsubmit = function (event) {
        event.preventDefault();
        var todoTitle = document.getElementById("todoTitle").value;
        var todoDesc = document.getElementById("todoDesc").value;
        console.log("To-Do Title: " + todoTitle);
        console.log("To-Do Description: " + todoDesc);
        modal.style.display = "none";
    }
});
