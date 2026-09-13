document.addEventListener('DOMContentLoaded', () =>{

    //Audio Object Var - Preloaded
    const buttonClicked = new Audio('./Sounds/PageTurn.wav')

    buttonClicked.preload = 'auto';

    const buttonLinks = document.querySelectorAll('.fantasyButton');

    buttonLinks.forEach(link => {
        link.addEventListener('click', (e)=> {
            e.preventDefault();

            buttonClicked.play().catch(error => {
                console.error('Error playing sound', error);
            });

            setTimeout(() => {
                window.location.href=link.href;
            }, 500);
        });
    });
})
