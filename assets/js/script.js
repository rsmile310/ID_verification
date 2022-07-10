document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      inputElement.closest("div").nextElementSibling.classList.add("active");
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    inputElement.closest("div").nextElementSibling.classList.add("active");
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement
      .querySelector(".drop-zone__prompt")
      .classList.remove("active");
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
      var tempId = thumbnailElement.previousElementSibling.getAttribute("id");
      if (tempId == "image1") {
        img1BaseSrc = reader.result;
      }

      if (tempId == "image2") {
        img2BaseSrc = reader.result;
      }
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

var closeBtn = document.querySelectorAll(".close-btn");

closeBtn.forEach((item, index) => {
  closeBtn[index].addEventListener("click", (e) => {
    closeBtn[index].classList.remove("active");
    document
      .querySelector(".drop-zone.drop-box" + index)
      .querySelector(".drop-zone__thumb")
      .remove();

    document
      .querySelector(".drop-zone.drop-box" + index)
      .querySelector(".drop-zone__prompt")
      .classList.add("active");
    var count = index + 1;
    document.getElementById("myFile" + count).value = "";
  });
});

var bars = document.querySelector(".meter > span");
var temp = 0;

$(document).ready(function () {
  $("#file-upload").change(function () {
    var filepath = this.value;
    var m = filepath.match(/([^\/\\]+)$/);
    var filename = m[1];
    console.log(filename)
    $("#filename").html(filename);
  });

  $("#imgForm").on("submit", function (e) {
    e.preventDefault();
    var data = new FormData(this);
    if (!$("#image1").val() || !$("#image2").val() || !$("#image1").val() || !$("#image4").val() || !$("#file-upload").val()) {
      $(".warn-text").removeClass("active");
    } else {
      $(".warn-text").addClass("active");
      $("#imgForm :input").prop("disabled", true);
      var temp = $("#authCode").val();

      $.ajax({
        url: "controller/uploadController.php",
        type: "POST",
        processData: false,
        mimeType: "multipart/form-data",
        dataType: "json",
        contentType: false,
        data: data,
        success: function (response) {
          if(response){
            $("#imgForm :input").prop("disabled", false);
            alert("Submitted successfully!") 
          }
        },
      });
    }
  });

  $("#resetBtn").click(function () {
    location.reload();
  });
});
