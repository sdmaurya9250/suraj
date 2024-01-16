function submitForm() {
    // Get form elements
    var nameInput = document.getElementsByName("yname")[0];
    var emailInput = document.getElementsByName("yemail")[0];
    var phoneInput = document.getElementsByName("yphone")[0];
    var subjectInput = document.getElementsByName("ysubject")[0];
    var messageInput = document.getElementsByName("message")[0];

    // Check if any field is empty
    if (nameInput.value === '' || emailInput.value === '' || phoneInput.value === '' || subjectInput.value === '' || messageInput.value === '') {
        alert('All fields are mandatory. Please fill in all the details.');
        return false;
    }

    // Validate input lengths
    if (nameInput.value.length > 15) {
        alert('Name should not exceed 15 characters.');
        return false;
    }

    if (phoneInput.value.length >= 15) {
        alert('Phone number should not exceed 15 digits.');
        return false;
    }

    if (emailInput.value.length > 50) {
        alert('Email should not exceed 20 characters.');
        return false;
    }

    if (subjectInput.value.length > 20) {
        alert('Subject should not exceed 20 characters.');
        return false;
    }

    if (messageInput.value.length > 500) {
        alert('Message should not exceed 100 characters.');
        return false;
    }

    // Construct the message with form data
    var message = "Name: " + nameInput.value +
                  "\nEmail: " + emailInput.value +
                  "\nPhone: " + phoneInput.value +
                  "\nSubject: " + subjectInput.value +
                  "\nMessage: " + messageInput.value;


    // Construct the WhatsApp link with two contact numbers
    var whatsappLink = "https://wa.me/917875794608?text=" + encodeURIComponent(message);

    // Open the WhatsApp link in a new tab
    window.open(whatsappLink, "_blank");
                  


}
