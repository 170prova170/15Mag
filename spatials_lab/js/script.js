document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('toggle-filters');
    const panel = document.getElementById('filter-panel');

    if (toggleBtn && panel) {
        toggleBtn.addEventListener('click', () => {
            panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
        });
    }
});