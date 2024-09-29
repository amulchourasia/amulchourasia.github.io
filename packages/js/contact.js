  $(document).ready(function () {
    $("#contactForm").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submit action

      // Gather form data
      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        subject: $("#subject").val(),
        description: $("#description").val(),
      };

      // Send the form data via Ajax to the PHP script
      $.ajax({
        type: "POST",
        url: "php/send_email.php", // Replace with the path to your PHP script
        data: formData,
        success: function (response) {
          alert("Message sent successfully!");
        },
        error: function (error) {
          alert("Failed to send message. Please try again.");
        },
      });
    });
  });
