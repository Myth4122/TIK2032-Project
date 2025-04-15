document.addEventListener('DOMContentLoaded', () => {
    // Fade-in effect
    const galleryImages = document.querySelectorAll('.gallery-grid img');
    galleryImages.forEach((img, index) => {
        img.style.opacity = 0;
        img.style.transition = 'opacity 0.8s ease';
        setTimeout(() => {
            img.style.opacity = 1;
        }, index * 150);
    });

    // Click to enlarge
    galleryImages.forEach(img => {
        img.addEventListener('click', () => {
            const popup = document.createElement('div');
            popup.classList.add('image-popup');
            popup.innerHTML = `
                <div class="popup-content">
                    <img src="${img.src}" alt="${img.alt}">
                    <span class="close-btn">&times;</span>
                </div>
            `;
            document.body.appendChild(popup);

            // Close button
            popup.querySelector('.close-btn').addEventListener('click', () => {
                popup.remove();
            });

            // Close when clicking outside image
            popup.addEventListener('click', (e) => {
                if (e.target === popup) {
                    popup.remove();
                }
            });
        });

        // Tooltip (simple title from alt)
        img.title = img.alt;
    });
});
