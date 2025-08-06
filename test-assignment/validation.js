function validateForm() {
      const email = document.forms["regForm"]["email"].value;
      const address = document.forms["regForm"]["address"].value;
      const phone = document.forms["regForm"]["phone"].value;
      const gender = document.forms["regForm"]["gender"].value;

      if (!email.includes("@")) {
        alert("Enter a valid email.");
        return false;
      }
      if (address === "") {
        alert("Address cannot be empty.");
        return false;
      }
      if (phone === "" || isNaN(phone)) {
        alert("Enter a valid phone number.");
        return false;
      }
      if (!gender) {
        alert("Please select your gender.");
        return false;
      }

      return true;
    }