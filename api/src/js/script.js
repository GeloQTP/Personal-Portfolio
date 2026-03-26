//CONTACT ME MODAL

const contact = document.getElementById("contact-modal-card");
const contact_button = document.getElementById("contact_button");
const close_contact_modal = document.getElementById("close-contact-modal");

contact_button.onclick = function () {
  // opens development's modal
  contact.style.display = "block"; // display the modal
  contact.classList.add("show"); // the animation
};

close_contact_modal.onclick = function () {
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

developments_button.onclick = function () {
  // opens development smodal
  developments.style.display = "block"; // display the modal

  developments.classList.add("show"); // the animation
};

close_development_modal.onclick = function () {
  // closes developments modal

  developments.classList.remove("show"); // removes show animation
  developments.classList.add("hide"); //  add closing animation

  setTimeout(() => {
    developments.style.display = "none";
    developments.classList.remove("hide");
  }, 300); // must match the duration of scaleOut animation
};

// Developments Modal Dragging Script.

// Illustrations Modal Script

const illustrations = document.getElementById("illustrations-modal-card");
const illustrations_button = document.getElementById("illustrations_button");
const close_illustrations_modal = document.getElementById(
  "close-illustrations-modal"
);

illustrations_button.onclick = function () {
  illustrations.style.display = "block";
  illustrations.classList.add("show");
};

close_illustrations_modal.onclick = function () {
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

skills_button.onclick = function () {
  skills.style.display = "block";
  skills.classList.add("show");
};

close_skills_modal.onclick = function () {
  skills.classList.remove("show");
  skills.classList.add("hide");

  setTimeout(() => {
    skills.style.display = "none";
    skills.classList.remove("hide");
  }, 300);
};
