$(document).ready(function () {
    $('#errolog').hide(); //Esconde o elemento com id errolog
    
     $('#MeuModal').modal('show');

    $('#btnEnviar').click(function (event) { 	//Ao submeter formulário
        event.preventDefault();

        var login = $('#username').val();	//Pega valor do campo email
        var senha = $('#password').val();	//Pega valor do campo senha

        $.ajax({
            type: 'post',
            url: 'login.php',
            data: 'username=' + login + '&password=' + senha,
            
            success: function (txt) {


                if (login && senha === "intoo")
                {
                    window.location = 'menu.php';
                }
                else {
                    bootbox.alert(txt);
                   
                }



            }
        });


    });
});