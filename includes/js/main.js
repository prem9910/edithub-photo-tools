// Scrolling Script
const appData = () => {
    return {
        percent: 0,

        appInit() {
            // source: https://codepen.io/A_kamel/pen/qBmmGKJ
            window.addEventListener('scroll', () => {
                let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                    height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

                this.percent = Math.round((winScroll / height) * 100);
            });
        },
    };
};


// end

// Toggle Script

function toggleModal1() {
    document.getElementById('loginmodal').classList.toggle('hidden')
}
function toggleModal2() {
    document.getElementById('registermodal').classList.toggle('hidden')
}


// End

// dropdown menu 
const dropdownButton = document.getElementById('dropdown-button');
const dropdownMenu = document.getElementById('dropdown-menu');
let isDropdownOpen = true; // Set to true to open the dropdown by default, false to close it by default

// Function to toggle the dropdown
function toggleDropdown() {
    isDropdownOpen = !isDropdownOpen;
    if (isDropdownOpen) {
        dropdownMenu.classList.remove('hidden');
    } else {
        dropdownMenu.classList.add('hidden');
    }
}

// Initialize the dropdown state
toggleDropdown();

// Toggle the dropdown when the button is clicked
dropdownButton.addEventListener('click', toggleDropdown);

// Close the dropdown when clicking outside of it
window.addEventListener('click', (event) => {
    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
        isDropdownOpen = false;
    }
});

// End

