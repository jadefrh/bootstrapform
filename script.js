// Creating the autocomplete object
// Restrict to geographical location types
var autocomplete = new google.maps.places.Autocomplete(
    document.getElementById('city'),
    { types: ['geocode'] }
);
