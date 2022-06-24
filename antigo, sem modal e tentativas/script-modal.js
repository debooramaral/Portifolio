/*--------------------------------------------------------------------modal*/

/*======================================show modal======================*/
const showModal = (openButton, modalContent) =>{
    const openBtn = document.getElementById(openButton),
    modalContainer = document.getElementById(modalContent)

    if(openBtn && modalContainer){
        openBtn.addEventListener('click', () => {
            modalContainer.classList.add('show-modal')
        })
    }
}
showModal('open-modal', 'modal-container')

/*======================================close modal======================*/
const closeBtn = document.querySelectorAll('.close-modal')

function closeModal(){
    const modalContainer = document.getElementById('modal-container')
    modalContainer.classList.remove('show-modal')
}
closeBtn.forEach(c => c.addEventListener('click', closeModal))

/*HTML

<section class="modal container" id="login-form">


        <button class="modal-button" id="open-modal">
            Faça Login ☻
        </button>
        <div class="modal-container" id="modal-container">
            <div class="modal-content">
                <div class="modal-close close-modal" title="Fechar">
                    <i class="fa-solid fa-xmark"></i>
                </div>

                <img src="imgs/meninati.jpg" alt="imagemform" class="modal-img">

                <h4 class="modal-title">Insira Seus Dados</h4>
                    <form>
                        <div class="user-box">
                            <input type="text" name="email" placeholder="nome@email.com.br" required="required">
                            <label class="email" id="email" name="email">E-Mail</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="password" placeholder="senha" required="required">
                            <label class="password" name="password">Senha</label>
                        </div>
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Vamos Lá !
                        </a>
                    </form>
                <p class="modal-description">Clique no Botão para Fechar</p>

                <button class="modal-button modal-button-width">Enviar</button>

                <button class="modal-button-link close-modal">
                    Fechar
                </button>
            </div>
        </div>
    </section>

    
    
CSS
/*--------------------------------------------------------section-modal-form-login*/


/*#login-form{
    font-family: 'Footlight MT';
    color: var(--cor2);
    position: relative;
}
#login-form button{
    cursor: pointer;
    border: none;
    outline: none;
    font-size: 25px;
}
#login-form img{
    max-width: 20%;
    height: auto;
    border-radius: 30px;
    background: none;
}
@media screen and (min-width: 968px){
    :root{
        --font-size: 1.5rem;
        --normal-font-size: 1rem;
    }
}
/*======modal=====*/
/*.container{
    margin-left: 1rem;
    margin-right: 1rem;
}
.modal{
    height: 65vh;
    display: grid;
    place-items: center;
}
.modal-button{
    display: inline-block;
    background: var(--cor3);
    color: var(--cor6);
    padding: 1rem 1.25rem;
    border-radius: .5rem;
    transition: .3s;
}
.modal-button:hover{
    background: var(--cor11);
}
.modal-container{
    position: absolute;
    top: 0;
    left: 0;
    background: var(--cor11);
    width: 100%;
    height: 100%;
    display: grid;
    align-items: flex-end;
    overflow: hidden;
    transition: all .3s;
    z-index: 1000;
    visibility: hidden;
    opacity: 0;
    /*===== efeito 3=====*/
    /*perspective: 1000px;*/
/*}
/*.modal-content{
    position: relative;
    background: var(--cor9);
    text-align: center;
    padding: 3rem 2rem 2rem;
    border-radius: 1rem 1rem 0 0;
    transition: all .3s;
    /*======= efeito 1======*/
/*    transform: translateY(10%);
    /*======= efeito 2======*/
    /*transform: scale(0.5) translateY(10%);*/
    /*======= efeito 3======*/
    /*transform-origin: 50% 100%;
    transform: rotateX(65deg) scale(.75) translateY(10%);*/
/*}
.modal-img{
    width: 150px;
    margin-bottom: .75rem;
}
.modal-close{
    display: inline-flex;
    background: var(--cor10);
    border-radius: .25rem;
    color: var(--cor3);
    font-size: 1.5rem;
    position: absolute;
    top: 2rem;
    right: 2rem;
    cursor: pointer;
}
.modal-title{
    font-size: 15pc;
    color: var(--cor2);
    font-weight: 500;
}
.modal-description{
    margin-bottom: 1.5rem;
}
.modal-button-width{
    width: 90%;
}
.modal-button-link{
    display: block;
    margin: 1rem auto 0;
    background: var(--cor4);
    color: var(--cor2);
    font-weight: 500;
}
/*show modal*/
/*.show-modal{
    visibility: visible;
    opacity: 1;
}
.show-modal .modal-content{
    /*===== efeito 1=====*/
   /* transform: translateY(0);
    /*===== efeito 2=====*/
   /* transform: scale(1) translateY(0);
    /*===== efeito 3=====*/
    /*transform: rotateX(0) scale(1) translateY(0);*/
/*}
/*============================breakpoints===============*/
/*dispositivo pequeno*/
/*@media screen and (min-width: 576px) {
    .modal-conten{
        margin: auto;
        width: 380px;
        border-radius: 1.25rem;
    }
    .modal-img{
        width: 170px;
    }
    
}
    

    
    
    */