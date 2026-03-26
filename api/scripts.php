<script>
    // TIME
    function displayTime() {
        let dateTime = new Date();
        let hrs = dateTime.getHours();
        let minutes = dateTime.getMinutes();
        let seconds = dateTime.getSeconds();
        let session = document.getElementById("session");

        if (hrs > 12) {
            session.innerHTML = "PM";
        }

        document.getElementById("hours").innerHTML = hrs;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
    }

    setInterval(displayTime, 10);
</script>

<script>
    // DRAG MODALS
    let topZIndex = 99;

    function makeModalDraggable(modalId) {
        const modal = document.getElementById(modalId);
        const header = modal.querySelector(".modal-header-frame");

        header.style.cursor = "pointer";

        let isDragging = false;
        let offsetX = 0;
        let offsetY = 0;

        header.addEventListener("mousedown", (e) => {
            isDragging = true;
            const rect = modal.getBoundingClientRect();
            offsetX = e.clientX - rect.left;
            offsetY = e.clientY - rect.top;
            modal.style.position = "fixed";
            topZIndex++;
            modal.style.zIndex = topZIndex;
        });

        document.addEventListener("mousemove", (e) => {
            if (isDragging) {
                modal.style.left = `${e.clientX - offsetX}px`;
                modal.style.top = `${e.clientY - offsetY}px`;
            }
        });

        document.addEventListener("mouseup", () => {
            isDragging = false;
        });
    }

    makeModalDraggable("contact-modal-card");
    makeModalDraggable("developments-modal-card");
    makeModalDraggable("illustrations-modal-card");
    makeModalDraggable("skills-modal-card");
</script>

<script>
    //CONTACT ME MODAL

    const contact = document.getElementById("contact-modal-card");
    const contact_button = document.getElementById("contact_button");
    const close_contact_modal = document.getElementById("close-contact-modal");

    contact_button.onclick = function() {
        // opens development's modal
        contact.style.display = "block"; // display the modal
        contact.classList.add("show"); // the animation
    };

    close_contact_modal.onclick = function() {
        // closes developments modal

        contact.classList.remove("show"); // removes show animation
        contact.classList.add("hide"); //  add closing animation

        setTimeout(() => {
            contact.style.display = "none";
            contact.classList.remove("hide");
        }, 300); // must match the duration of scaleOut animation
    };

    //Developments Modal Display Script.

    const developments = document.getElementById("developments-modal-card");
    const developments_button = document.getElementById("developments_button");
    const close_development_modal = document.getElementById(
        "close-development-modal"
    );

    developments_button.onclick = function() {
        // opens development smodal
        developments.style.display = "block"; // display the modal

        developments.classList.add("show"); // the animation
    };

    close_development_modal.onclick = function() {
        // closes developments modal

        developments.classList.remove("show"); // removes show animation
        developments.classList.add("hide"); //  add closing animation

        setTimeout(() => {
            developments.style.display = "none";
            developments.classList.remove("hide");
        }, 300); // must match the duration of scaleOut animation
    };


    // Illustrations Modal Script

    const illustrations = document.getElementById("illustrations-modal-card");
    const illustrations_button = document.getElementById("illustrations_button");
    const close_illustrations_modal = document.getElementById(
        "close-illustrations-modal"
    );

    illustrations_button.onclick = function() {
        illustrations.style.display = "block";
        illustrations.classList.add("show");
    };

    close_illustrations_modal.onclick = function() {
        illustrations.classList.remove("show");
        illustrations.classList.add("hide");

        setTimeout(() => {
            illustrations.style.display = "none";
            illustrations.classList.remove("hide");
        }, 300);
    };

    //Skills Modal Script

    const skills = document.getElementById("skills-modal-card");
    const skills_button = document.getElementById("skills_button");
    const close_skills_modal = document.getElementById("close-skills-modal");

    skills_button.onclick = function() {
        skills.style.display = "block";
        skills.classList.add("show");
    };

    close_skills_modal.onclick = function() {
        skills.classList.remove("show");
        skills.classList.add("hide");

        setTimeout(() => {
            skills.style.display = "none";
            skills.classList.remove("hide");
        }, 300);
    };
</script>

<script>
    // LOFI MUSIC
    let backgroundVideo = document.getElementById("backgroundVideo");

    let lofiMusic = document.getElementById("lofiMusic");
    let soundToggleButton = document.getElementById("sound-toggle-button");
    let icon = document.getElementById("soundIcon");

    soundToggleButton.onclick = function() {
        if (lofiMusic.paused) {
            lofiMusic.volume = 0.1;
            lofiMusic.play();
            icon.src = "/Personal_Portfolio/api/src/img/volume_up_48dp_EFEFEF_FILL0_wght400_GRAD0_opsz48.png";
        } else {
            lofiMusic.pause();
            icon.src = "/Personal_Portfolio/api/src/img/volume_mute_48dp_EFEFEF_FILL0_wght400_GRAD0_opsz48.png";
        }
    }
</script>

<script>
    // TACTILE SOUNDS
    const openClickSound = document.getElementById("openClickSound");
    const closeClickSound = document.getElementById("closeClickSound");
    let buttons = ["sound-toggle-button", "contact_button", "developments_button", "illustrations_button", "skills_button", "email-done-button"];
    let closeButtons = ["close-contact-modal", "close-development-modal", "close-illustrations-modal", "close-skills-modal", "close-btn-emailSentPopupId"];

    buttons.forEach(id => {
        let button = document.getElementById(id);
        button.addEventListener('click', () => {
            openClickSound.volume = 0.1;
            openClickSound.play();
        });
    });

    closeButtons.forEach(id => {
        let closeButton = document.getElementById(id);
        closeButton.addEventListener('click', () => {
            closeClickSound.volume = 0.1;
            closeClickSound.play();
        });
    });
</script>