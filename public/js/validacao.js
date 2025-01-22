
// Função para validar o formulário
    document.getElementById("formulario").addEventListener("submit", function(event) {
        var cpf = document.getElementById("cpf").value;
        var creci = document.getElementById("creci").value;
        var nome = document.getElementById("nome").value;

        // Verificar se algum campo está vazio
        if (cpf === "" || creci === "" || nome === "") {
            event.preventDefault(); // Impede o envio do formulário
            document.getElementById("error-message").style.display = "block"; // Exibe a mensagem de erro
        } 
    });

