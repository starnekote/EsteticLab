    function markCervices() {
  const container = document.querySelector('.cervices');
  if (!container) return;

  const items = container.querySelectorAll('.cervice');

  items.forEach((item, index) => {
    const number = index + 1; // Починаємо з 1
    if (number % 2 === 0) {
      item.classList.add('row-reverse');
    } else {
      item.classList.add('row');
    }
  });
}
markCervices();