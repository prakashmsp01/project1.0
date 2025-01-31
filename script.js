document.getElementById('bookingForm').addEventListener('submit', function(event) {
    let fullName = document.getElementById('fullName').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    
    // Basic validation
    if (!validateEmail(email)) {
        alert('Please enter a valid email address');
        event.preventDefault();
    } else if (!validatePhone(phone)) {
        alert('Please enter a valid phone number');
        event.preventDefault();
    } else if (fullName.trim() === '') {
        alert('Name cannot be empty');
        event.preventDefault();
    }
});

function validateEmail(email) {
    const re = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    return re.test(String(email).toLowerCase());
}

function validatePhone(phone) {
    const re = /^[0-9]{10}$/;
    return re.test(String(phone));
}
