
document.getElementById('loadMoreBtn').addEventListener('click', function () {
    if (document.getElementById('loadMoreBtn').innerHTML == 'View More Properties') {
    
            document.querySelector('.harayo1').style.display = 'block'
            document.querySelector('.harayo2').style.display = 'block'

            document.querySelector('.harayo3').style.display = 'block'
            document.getElementById('loadMoreBtn').innerHTML = 'Show Less'
    
    }
    else {
        document.querySelector('.harayo1').style.display = 'none'
        document.querySelector('.harayo2').style.display = 'none'
        document.querySelector('.harayo3').style.display = 'none'
        document.getElementById('loadMoreBtn').innerHTML = 'View More Properties'

    }

})


// Filter
function filterProperties() {
    // Get values from inputs
    const locationInput = document.getElementById('locationSearch').value.toLowerCase();
    const typeFilter = document.getElementById('propertyTypeFilter').value.toLowerCase();

    // Get all property cards
    const propertyCards = document.querySelectorAll('.property-cards .card');

    // Loop through each card and determine if it should be displayed
    propertyCards.forEach(card => {
        const location = card.getAttribute('data-location').toLowerCase();
        const type = card.getAttribute('data-type').toLowerCase();

        const matchesLocation = location.includes(locationInput) || locationInput === '';
        const matchesType = typeFilter === 'all' || type === typeFilter;

        // Show/hide card based on filter matches
        if (matchesLocation && matchesType) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Dynamically update property type labels
document.querySelectorAll('.card').forEach(card => {
    const type = card.getAttribute('data-type').toLowerCase();
    const typeLabel = card.querySelector('.property-type');

    if (type === 'buy') {
        typeLabel.textContent = 'For Sale';
    } else if (type === 'rent') {
        typeLabel.textContent = 'For Rent';
    }
});



// Review
const reviewCards = document.querySelector('.review-cards');
let scrollAmount = 0;

document.querySelector('.arrow-left').addEventListener('click', () => {
    scrollAmount -= 300;
    reviewCards.scrollTo({
        top: 0,
        left: scrollAmount,
        behavior: 'smooth'
    });
});

document.querySelector('.arrow-right').addEventListener('click', () => {
    scrollAmount += 300;
    reviewCards.scrollTo({
        top: 0,
        left: scrollAmount,
        behavior: 'smooth'
    });
});



function showModal(card) {
    const modal = document.getElementById('mapModal');
    const lat = parseFloat(card.getAttribute('data-lat'));
    const lng = parseFloat(card.getAttribute('data-lng'));

    // Initialize the map
    const map = new google.maps.Map(document.getElementById('map'), {
        center: { lat, lng },
        zoom: 15,
    });

    // Add a marker
    new google.maps.Marker({
        position: { lat, lng },
        map,
        title: card.querySelector('h3').textContent,
    });

    // Show the modal
    modal.style.display = 'flex';
}

function closeModal() {
    const modal = document.getElementById('mapModal');
    modal.style.display = 'none';
}

// Attach click event to property cards
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => showModal(card));
});
