function copyText() {
  var textElement = document.getElementById("text");
  var textToCopy = textElement.innerText;

  var textarea = document.createElement("textarea");
  textarea.value = textToCopy;
  document.body.appendChild(textarea);

  textarea.select();
  document.execCommand("copy");

  document.body.removeChild(textarea);

  var tooltipElement = document.getElementById("tooltip");
  tooltipElement.innerText = "Copied";

  setTimeout(function () {
    tooltipElement.innerText = "Click to copy";
  }, 20000);
}
var swiper = new Swiper(".blog-slider", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  mousewheel: {
    invert: false,
  },
  // autoHeight: true,
  pagination: {
    el: ".blog-slider__pagination",
    clickable: true,
  },
});
function openModal() {
  document.getElementById("backdrop").style.display = "block";
  document.getElementById("pdfModal").style.display = "block";
  document.body.classList.add("modal-open");
  // Disable touch outside the modal
  document.addEventListener("touchstart", handleTouchStart, { passive: false });
  // Close modal when clicking outside
  document
    .getElementById("backdrop")
    .addEventListener("click", closeModalOnClickOutside);
}

function closeModal() {
  document.getElementById("backdrop").style.display = "none";
  document.getElementById("pdfModal").style.display = "none";
  document.body.classList.remove("modal-open");
  // Re-enable touch outside the modal
  document.removeEventListener("touchstart", handleTouchStart);
  // Remove click outside event listener
  document
    .getElementById("backdrop")
    .removeEventListener("click", closeModalOnClickOutside);
}

function handleTouchStart(event) {
  // Prevent touch outside the modal
  if (!event.target.closest(".modal")) {
    event.preventDefault();
  }
}

function closeModalOnClickOutside(event) {
  // Close the modal if clicked outside
  if (event.target.id === "backdrop") {
    closeModal();
  }
}
function scrollToAbout() {
  var aboutSection = document.getElementById("about");

  if (aboutSection) {
    aboutSection.scrollIntoView({ behavior: "smooth" });
  }
}
function scrollToContact() {
  var aboutSection = document.getElementById("contacts");

  if (aboutSection) {
    aboutSection.scrollIntoView({ behavior: "smooth" });
  }
}
function scrollToProject() {
  var aboutSection = document.getElementById("projects");

  if (aboutSection) {
    aboutSection.scrollIntoView({ behavior: "smooth" });
  }
}
