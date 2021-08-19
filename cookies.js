function cookies(functions) {

    const ctnr = document.querySelector('.cookies-container');
    const save = document.querySelector('.cookies-save'); /*Botão Aceitar Todos */
    const pref = document.querySelector('.cookies-pref'); /* Botão Preferencias */
    const pmod = document.querySelector('#js_pref-modal'); /* Janela Modal */
    const btnx = document.querySelector('.btn-close'); /* Botão Preferencias */

    if (!ctnr)
        return null;
    /* Pega as preferencias de cookies armazenadas em LocalStorage */
    const localPref = JSON.parse(window.localStorage.getItem('cookies-preferences'));
    if (localPref)
        activateFunctions(localPref);
    function getFormPref() {
        return [...document.querySelectorAll('[data-function]')]
                .filter((el) => el.checked)
                .map((el) => el.getAttribute('data-function'));
    }

    function activateFunctions(pref) {
        pref.forEach((f) => functions[f]());
        ctnr.style.display = 'none';
        window.localStorage.setItem('cookies-preferences', JSON.stringify(pref));
    }

    function handleSave() {
        const pref = getFormPref();
        activateFunctions(pref);
    }

    save.addEventListener('click', handleSave);
    pref.addEventListener('click', function () {
        pmod.style.display = 'block';
    });
    btnx.addEventListener('click', function () {
        pmod.style.display = 'none';
    });
}

function necessary() {
    console.log('Funções necessárias');
}
function analytics() {
    console.log('Funções analytics');
}

function marketing() {
    console.log('Função de marketing');
}


cookies({
    necessary,
    analytics,
    marketing

});

