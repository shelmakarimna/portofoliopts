    document.getElementById("contact-form").addEventListener("submit", function (event) {
        event.preventDefault(); 
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (name === "" || email === "" || message === "") {
            alert("Please fill in all fields.");
            return;
        }

        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return;
        }

        alert("Form submitted successfully!");
        this.submit();
    });

    function handleScroll() {
        document.querySelectorAll(".fade-in").forEach((el) => {
            if (el.getBoundingClientRect().top < window.innerHeight - 100) {
                el.classList.add("visible");
            }
        });
    }

    handleScroll();

    let isScrolling;
    window.addEventListener("scroll", function () {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(handleScroll, 100);
    });
});
