$(document).ready(function() {
  $('#registrationForm').on('submit', function(e) {
    if (!$('#name').val() || !$('#email').val() || !$('#phone').val() || !$('#gender').val()) {
      alert('Please fill out all required fields.');
      e.preventDefault();
    }
  });
});
