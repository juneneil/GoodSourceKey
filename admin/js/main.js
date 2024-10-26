function validateForm(event) {
    event.preventDefault(); // Prevent form submission

    // Get form data
    const form = event.target;
    const name = form.fullname.value;
    const email = form.email.value;
    const service = form.service.value;
    const serviceDate = form.service_date.value;
    const specialRequest = form.special_request.value;

    // Set modal content
    document.getElementById('confirmName').textContent = name;
    document.getElementById('confirmEmail').textContent = email;
    document.getElementById('confirmService').textContent = service;
    document.getElementById('confirmDate').textContent = serviceDate;
    document.getElementById('confirmRequest').textContent = specialRequest;

    // Show modal
    $('#confirmationModal').modal('show');

    // Save button action
    document.getElementById('saveButton').onclick = function() {
        form.submit(); // Submit the form
        setTimeout(function() {
            window.location.href = "index.html"; // Redirect after form submission
        }, 1000);
    };
}