
$(document).ready(function(){


  $("#btnAddUser").on( "click", function(e) {
    e.preventDefault();
    var _name = $('#name').val();
    var _email = $('#email').val();
    var _password = $('#password').val();

    var data = {name: _name, email: _email, password: _password};

    //console.log(data)
    $.post("common/insertUser.php",
          data,
          function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
            location.reload();
          });
  });// addUser


});// Main Document
