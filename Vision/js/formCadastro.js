const addBookButton = document.getElementById('add_book');
const dialog = document.getElementById('modal');

addBookButton.addEventListener('click', function(event) {
    event.preventDefault();

    dialog.showModal();
});

dialog.addEventListener('click', function(event) {
    if (event.target === dialog) {
        dialog.close();
    }
});