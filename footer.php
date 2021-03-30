<footer class="footer">
    <span>&copy; 2021 <a href="https://goodtech.tips">g o o d t e c h . t i p s</a></span>
    <span>&middot;</span>
    <span>Powered by <a href="https://gohugo.io/" rel="noopener noreferrer" target="_blank">Hugo</a></span>
    <span>&middot;</span>
    <span>Theme <a href="https://git.io/hugopapermod" rel="noopener" target="_blank">PaperMod</a></span>
</footer>
<a href="#top" aria-label="go to top" title="Go to Top (Alt + G)">
    <button class="top-link" id="top-link" type="button" accesskey="g">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6">
            <path d="M12 6H0l6-6z" />
        </svg>
    </button>
</a>



<script>
    window.onload = function () {
        if (localStorage.getItem("menu-scroll-position")) {
            document.getElementById('menu').scrollLeft = localStorage.getItem("menu-scroll-position");
        }
    }
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            var id = this.getAttribute("href").substr(1);
            document.querySelector(`[id='${decodeURIComponent(id)}']`).scrollIntoView({
                behavior: "smooth"
            });
            if (id === "top") {
                history.replaceState(null, null, " ");
            } else {
                history.replaceState(null, null, `#${id}`);
            }
        });
    });
    var mybutton = document.getElementById("top-link");
    window.onscroll = function () {
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
            mybutton.style.visibility = "visible";
            mybutton.style.opacity = "1";
        } else {
            mybutton.style.visibility = "hidden";
            mybutton.style.opacity = "0";
        }
    };

    function menu_on_scroll() {
        localStorage.setItem("menu-scroll-position", document.getElementById('menu').scrollLeft);
    }

</script>
<script>
    document.getElementById("theme-toggle").addEventListener("click", () => {
        if (document.body.className.includes("dark")) {
            document.body.classList.remove('dark');
            localStorage.setItem("pref-theme", 'light');
        } else {
            document.body.classList.add('dark');
            localStorage.setItem("pref-theme", 'dark');
        }
    })

</script>

</body>

</html>