function validation(event) {
  event.preventDefault();

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  var text;
  console.log("fired");

  if (name.length < 5) {
    text = "Please Enter Valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if (email.indexOf("@") == -1 || email.length < 6) {
    text = "Please Enter Valid Email";
    error_message.innerHTML = text;
    return false;
  }

  if (phone.length > 10) {
    text = "Please Enter Valid Number";
    error_message.innerHTML = text;
    return false;
  }

  if (message.length > 100) {
    text = "Please Enter More Than 100 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("From Submitted Successfully!");
  return true;
}
