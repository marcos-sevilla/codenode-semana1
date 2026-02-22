/**
 * script.js - Lógica de validación para la Academia de Pintura
 * Proyecto: Miniature Painter Guides
 */

document.addEventListener('DOMContentLoaded', () => {
    const formulario = document.getElementById('registroForm');
    const mensajeJs = document.getElementById('mensajeJs');
    const btnEnviar = document.getElementById('btnEnviar');

    formulario.addEventListener('submit', function(e) {
        // Obtenemos el valor de la edad en el momento del envío
        const edad = parseInt(document.getElementById('edad').value);
        
        // Limpiamos mensajes previos
        mensajeJs.classList.add('hidden');
        mensajeJs.style.backgroundColor = "";

        // 1. Validación de edad mínima (Regla de negocio)
        if (edad < 12) {
            e.preventDefault(); // Evita que el formulario se envíe al PHP
            
            mensajeJs.textContent = "⚠️ Lo sentimos, debes tener al menos 12 años para inscribirte en la academia.";
            mensajeJs.style.backgroundColor = "rgba(220, 38, 38, 0.2)"; // Color de error
            mensajeJs.style.border = "1px solid #dc2626";
            mensajeJs.classList.remove('hidden');
            
            // Scroll suave hasta el mensaje de error
            mensajeJs.scrollIntoView({ behavior: 'smooth' });
        } else {
            // 2. Feedback visual de carga
            btnEnviar.textContent = "Procesando inscripción...";
            btnEnviar.style.opacity = "0.7";
            btnEnviar.disabled = true; // Evita múltiples clics
        }
    });
});