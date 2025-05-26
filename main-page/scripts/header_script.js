document.addEventListener("DOMContentLoaded", function () {
    console.log(window.innerWidth);

    window.addEventListener("scroll", function (e) {
        console.log(this.window.scrollY);
        if (this.window.innerWidth >= 992) {
            if ((this.window.scrollY > 0)) {
                document.getElementById("header").style.backgroundColor = "#050613";
            }
            else {
                document.getElementById('header').style.backgroundColor = "#05061300";
            }
        }
    });

    //навели мышь
    document.getElementById("devops").addEventListener("mouseover", function (event) {
        if (window.innerWidth >= 992) {
            document.getElementById("devops_a").classList.add("show");
            document.getElementById("devops_a").ariaExpanded = true;
            document.getElementById("devops_ul").classList.add("show");
        }
    });
    //убрали мышь
    document.getElementById("devops").addEventListener("mouseout", function (event) {
        if (window.innerWidth >= 992) {
            document.getElementById("devops_a").classList.remove("show");
            document.getElementById("devops_a").ariaExpanded = false;
            document.getElementById("devops_ul").classList.remove("show");
        }
    });

    //повторяем для всех элементов

    //навели мышь
    document.getElementById("prodvizhenie").addEventListener("mouseover", function (event) {
        if (window.innerWidth >= 992) {
            document.getElementById("prodvizhenie_a").classList.add("show");
            document.getElementById("prodvizhenie_a").ariaExpanded = true;
            document.getElementById("prodvizhenie_ul").classList.add("show");
        }
    });
    //убрали мышь
    document.getElementById("prodvizhenie").addEventListener("mouseout", function (event) {
        if (window.innerWidth >= 992) {
            document.getElementById("prodvizhenie_a").classList.remove("show");
            document.getElementById("prodvizhenie_a").ariaExpanded = false;
            document.getElementById("prodvizhenie_ul").classList.remove("show");
        }
    });

    //навели мышь
    document.getElementById("about_us").addEventListener("mouseover", function (event) {
        if (window.innerWidth >= 992) {
            document.getElementById("about_us_a").classList.add("show");
            document.getElementById("about_us_a").ariaExpanded = true;
            document.getElementById("about_us_ul").classList.add("show");
        }
    });
    //убрали мышь
    document.getElementById("about_us").addEventListener("mouseout", function (event) {
        if (window.innerWidth >= 992) {
            document.getElementById("about_us_a").classList.remove("show");
            document.getElementById("about_us_a").ariaExpanded = false;
            document.getElementById("about_us_ul").classList.remove("show");
        }
    });
})