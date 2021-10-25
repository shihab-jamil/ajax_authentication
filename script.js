// A $( document ).ready() block.
$(document).ready(function () {
  $.ajax({
    url: "login.php",
    method: "POST",
    dataType: "text",
    success: function (response) {
      $("#main_card_header").text("Login");
      $("#main_card_body").html(response);
    },
  });
});


function change_content(content) {
  event.preventDefault();
  if(content == 'login'){
     $.ajax({
       url: "login.php",
       method: "POST",
       dataType: "text",
       success: function (response) {
         $("#main_card_header").text("Login");
         $("#main_card_body").html(response);
       },
     });          
  }else{
    $.ajax({
      url: "signup.php",
      method: "POST",
      dataType: "text",
      success: function (response) {
        $("#main_card_header").text("Signup");
        $("#main_card_body").html(response);
      },
    });
  }
}


function submitForm(currentForm){
  event.preventDefault();

  if (currentForm == 'signup') {
    if ($("#password").val() != $("#confirmPassword").val()) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Password Didn't match!",
      });
      return;
    }

    var formData = $("#signupForm").serialize();
     $.ajax({
       url: "config.php",
       method: "POST",
       data: formData,
       dataType: "text",
       success: function (response) {
        if(response.trim() == 'success'){
          var Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener("mouseenter", Swal.stopTimer);
              toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
          });

          Toast.fire({
            icon: "success",
            title: "Signed up successfully",
          });

        }else{
          var Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener("mouseenter", Swal.stopTimer);
              toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
          });

          Toast.fire({
            icon: "error",
            title: "Something went wrong",
          });
        }

        $("#signupForm")[0].reset();

       },
     });

  }else{
      var formData = $("#loginForm").serialize();
      $.ajax({
        url: "config.php",
        method: "POST",
        data: formData,
        dataType: "text",
        success: function (response) {
           if (response.trim() == "success") {
             window.location.href = "home.php";
           } else {
             var Toast = Swal.mixin({
               toast: true,
               position: "top-end",
               showConfirmButton: false,
               timer: 3000,
               timerProgressBar: true,
               didOpen: (toast) => {
                 toast.addEventListener("mouseenter", Swal.stopTimer);
                 toast.addEventListener("mouseleave", Swal.resumeTimer);
               },
             });

             Toast.fire({
               icon: "error",
               title: "Wrong credential",
             });
           }
        },
      });
  }

}


function requestLogout(){
  window.location.href = "home.php?logout";
}