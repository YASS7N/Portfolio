const urlParams = new URLSearchParams(window.location.search);
const queryStatus = urlParams.get('status'); // Renamed 'status' to 'queryStatus'

if (queryStatus === 'success') {
    Swal.fire({
        icon: 'success',
        title: 'Envoyé!',
        text: 'Votre message a été envoyé avec succès.',
        confirmButtonText: 'OK',
        confirmButtonColor: '#5cb85c'
    });
} else if (queryStatus === 'error') {
    Swal.fire({
        icon: 'error',
        title: 'Erreur',
        text: 'Une erreur est survenue. Veuillez réessayer.',
        confirmButtonText: 'OK',
        confirmButtonColor: '#e63946'
    });
}
