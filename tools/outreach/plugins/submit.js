function notify(message) {
  Toastify({
    text: message,
  }).showToast();
}

function SubmitForm() {
  var ContentCreator = $("#ContentCreator").val();
  var YourName = $("#YourName").val();
  var Output = $("#Output");

  $.post(
    "plugins/submit",
    {
      ContentCreator: ContentCreator,
      YourName: YourName,
    },
    function (data) {
      if(data == "error") {
        notify("Ensure all fields are filled");
      } else {
        $(Output).val(data);
      }
    }
  );
}

function toggleEditor() {
  var Output = $("#Output");
  var LockBtn = $("#lock");

  if ($(Output).prop("readonly")) {
    $(Output).prop("readonly", false);
    notify("Unlocked Editor");
    $(Output).focus();
    $(LockBtn).html('<i class="fa-solid fa-lock-open"></i>');
  } else {
    $(Output).prop("readonly", true);
    notify("Locked Editor");
    $(LockBtn).html('<i class="fa-solid fa-lock"></i>');
  }
}

function ShowPreview() {
  var Output = $("#Output").val();

  $.post(
    "plugins/preview.php",
    {
      Output: Output,
    },
    function (data, textStatus, jqXHR) {
        if(data == "success") {
            window.location.href='template';
        } else {
            notify("Couldn't open template preview");
        }
    }
  );
}
