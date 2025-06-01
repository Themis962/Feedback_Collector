function validateForm() {
  const message = document.getElementById("message").value.trim();
  if (message === "") {
    alert("Please enter a message.");
    return false;
  }
  return true;
}