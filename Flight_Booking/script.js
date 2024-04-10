const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('selected');
const total = document.getElementById('total');
const flightSelect = document.getElementById('flight');

populateUI();

function updateSelectedCount() {

  const selectedSeats = document.querySelectorAll('.row .seat.occupied');

  // const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));



  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * 100;
  
}

function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedflightIndex = localStorage.getItem('selectedflightIndex');

  if (selectedflightIndex !== null) {
    flightSelect.selectedIndex = selectedflightIndex;
  }
}


container.addEventListener('click', e => {
  if (
    e.target.classList.contains('seat') &&
    !e.target.classList.contains('seat_occupied')
  ) {
    e.target.classList.toggle('occupied');

    updateSelectedCount();
  }
});


updateSelectedCount();