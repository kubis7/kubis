// Pro animace nebo interakce, pokud jsou potřeba
document.querySelectorAll('a').forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.style.transform = "scale(1.1)";
    });
    item.addEventListener('mouseleave', () => {
        item.style.transform = "scale(1)";
    });
});
// Přidání posluchače události pro kliknutí kdekoliv na stránce
document.addEventListener('click', function(event) {
    // Vytvoření nového elementu pro fotbalový míč
    const ball = document.createElement('div');
    ball.className = 'football';

    // Nastavení pozice míče podle místa kliknutí
    ball.style.left = `${event.pageX - 25}px`; // -25 px pro vycentrování
    ball.style.top = `${event.pageY - 25}px`;

    // Přidání míče na stránku
    document.body.appendChild(ball);

    // Odstranění míče po skončení animace (1,5 sekundy)
    setTimeout(() => {
        ball.remove();
    }, 1500);
});

