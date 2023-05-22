
        // Navigation code
        var navbar = document.getElementById("mainNav");
        var menu = document.getElementById("navItem");

        window.onscroll = function() {
            if (window.pageYOffset >= menu.offsetTop) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
        document.getElementById("hireBtn").addEventListener("click", displayDate);

        function displayDate() {

        }

        // Animation code
        var typed = new Typed(".animation-text", {
            strings: ["an Auditor", "a Web Developer", "a Blogger"],
            typeSpeed: 120,
            backSpeed: 120,
            loop: true
        })

        // Age code
        let objectDate = new Date();
        let year = objectDate.getFullYear();
        document.getElementById("tag-age").innerHTML = year - 2001;
