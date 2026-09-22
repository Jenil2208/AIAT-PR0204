const cart = {};
const products = window.bakeryProducts || [];
const money = value => `$${value.toFixed(2)}`;

function renderCart() {
  const items = Object.entries(cart).filter(([, quantity]) => quantity > 0);
  const root = document.getElementById('cart-items');
  const count = items.reduce((total, [, quantity]) => total + quantity, 0);
  const total = items.reduce((sum, [id, quantity]) => sum + products.find(product => product.id === Number(id)).price * quantity, 0);
  document.getElementById('cart-count').textContent = count;
  document.getElementById('cart-total').textContent = money(total);
  root.innerHTML = items.length ? items.map(([id, quantity]) => {
    const product = products.find(item => item.id === Number(id));
    return `<div class="cart-line"><div>${product.name}<small>${quantity} × ${money(product.price)}</small></div><button type="button" data-remove="${product.id}" aria-label="Remove ${product.name}">×</button></div>`;
  }).join('') : '<p class="empty-cart">Your bag is waiting for something sweet.</p>';
}

function setDrawer(isOpen) {
  document.getElementById('cart-drawer').classList.toggle('open', isOpen);
  document.querySelector('.drawer-backdrop').classList.toggle('open', isOpen);
  document.getElementById('cart-drawer').setAttribute('aria-hidden', String(!isOpen));
}

document.addEventListener('click', event => {
  const addButton = event.target.closest('[data-add]');
  const removeButton = event.target.closest('[data-remove]');
  if (addButton) {
    const id = addButton.dataset.add;
    cart[id] = (cart[id] || 0) + 1;
    renderCart();
    setDrawer(true);
  }
  if (removeButton) {
    const id = removeButton.dataset.remove;
    cart[id] -= 1;
    renderCart();
  }
  if (event.target.closest('[data-cart-open]')) setDrawer(true);
  if (event.target.closest('[data-cart-close]')) setDrawer(false);
  if (event.target.closest('.checkout-button')) alert('Thanks! Checkout is ready for your order.');
  const categoryButton = event.target.closest('[data-category]');
  if (categoryButton) {
    document.querySelectorAll('.category-tab').forEach(button => button.classList.remove('active'));
    categoryButton.classList.add('active');
    document.querySelectorAll('.product-card').forEach(card => { card.hidden = categoryButton.dataset.category !== 'all' && card.dataset.category !== categoryButton.dataset.category; });
  }
});

renderCart();
