document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevents form from submitting immediately
  
    // Display the alert message
    if (confirm("Booking has been confirmed!")) {
      // If OK is pressed, redirect to another page
      window.location.href = "car-grid.php";
    }
  });