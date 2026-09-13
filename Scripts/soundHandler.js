document.addEventListener('DOMContentLoaded', () =>{

    //Audio Object Var - Preloaded
    const buttonClicked = new Audio('./Sounds/PageTurn.wav')

    buttonClicked.preload = 'auto';

    const buttonLinks = document.querySelectorAll('.fantasyButton');

    buttonLinks.forEach(link => {
        link.addEventListener('click', (e)=> {
            e.preventDefault();


            const proceed = () => {
                if (link.tagName === 'A'){
                    window.location.href=link.href;
                }
                else if (link.tagName === 'BUTTON' && link.form){
                    link.form.requestSubmit(link)
                }
            }

            buttonClicked.play().catch(error => {
                console.error('Error playing sound', error);
                proceed();
            })


            setTimeout(() => {
                proceed();
            }, 500);
            
        });
    });
})
