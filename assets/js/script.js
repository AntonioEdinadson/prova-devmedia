
    function menuToggle($id, $toggle) {
        let modal = document.getElementById($id);
        let toggle = document.getElementById($toggle);

        if (modal.classList.contains("toggle")) {
            modal.classList.remove("toggle");

        } else {
            modal.classList.add("toggle");
        }

    }

    if (document.getElementById("icon")) {
        let btn = document.getElementById("icon").addEventListener('click', () => menuToggle("menu", "toggle"));
    }