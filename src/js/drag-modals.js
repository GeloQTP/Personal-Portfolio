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