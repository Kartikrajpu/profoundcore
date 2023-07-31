// Get the button element using its class name
const colorChangeBtn = document.querySelector('.color-change-btn');

// Get the header element using its ID
const mainHeading = document.getElementById('main-heading');

// Define an array of colors to be used for the text
const colors = ['#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#FF00FF', '#00FFFF'];

// Function to randomly pick a color from the array
function getRandomColor() {
  return colors[Math.floor(Math.random() * colors.length)];
}

// Event listener for the button click
colorChangeBtn.addEventListener('click', function() {
  // Get a random color
  const randomColor = getRandomColor();

  // Change the header text color to the random color
  mainHeading.style.color = randomColor;
});
