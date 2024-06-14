    const signInBtns = document.getElementById("signIn");
    const signUpBtns = document.getElementById("signUp");
    const firstForm = document.getElementById("form1");
    const secondForm = document.getElementById("form2");
    const container = document.querySelector(".container");

    signInBtns.addEventListener("click",() => {
            container.classList.remove("right-panel-active");
        });

    signUpBtns.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

    firstForm.addEventListener("submit", (e) => {
        e.preventDefault();
        // Coloque aqui o código para processar o formulário de login
    });

    secondForm.addEventListener("submit", (e) => {
        e.preventDefault();
        // Coloque aqui o código para processar o formulário de cadastro
    });
