document.addEventListener('DOMContentLoaded', function() {
    // Configuración inicial de colores
    document.querySelector('.one').style.color = '#E74C3C';
    document.querySelector('.two').style.color = '#E74C3C';
    document.querySelector('.three').style.color = '#E74C3C';
    document.querySelector('.four').style.color = '#E74C3C';

    const textElements = document.querySelectorAll('.text');
    
    // Función para hacer parpadear un círculo aleatoriamente
    function blinkCircle(circle) {
        const duration = Math.random() * 300 + 200; // 200-500ms
        const delay = Math.random() * 1000; // Hasta 2s de espera
        
        setTimeout(() => {
            // circle.style.transform = 'scale(1.8)';
            circle.style.opacity = '1';
            circle.style.boxShadow = `0 0 10px 2px ${circle.parentElement.parentElement.style.color || '#fff'}`;
            
            setTimeout(() => {
                // circle.style.transform = 'scale(1)';
                circle.style.opacity = '0.5';
                circle.style.boxShadow = 'none';
                
                // Siguiente parpadeo
                blinkCircle(circle);
            }, duration);
        }, delay);
    }
    
    // Función para animar la aparición (scale y opacity)
    function animateEntrance() {
        textElements.forEach((el) => {
            const circles = el.querySelectorAll('.circle');
                circles.forEach(circle => {
                    blinkCircle(circle);
                });
        });
    }
    
    animateEntrance();
});