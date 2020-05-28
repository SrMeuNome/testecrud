$(document).ready(function()
    {
        $('#ano').mask('0000')
        $('#placa').mask('AAA AAAA', {'translation': {
                A: {pattern: /[A-Z0-9]/}
            }
        })
        
        $('#salvar').on('click',function ()
            {
                var marca = $('#marca').val()
                var modelo = $('#modelo').val()
                var placa = $('#placa').cleanVal()
                var ano = $('#ano').cleanVal()
                var cor = $('#cor').val()

                if(marca.length <= 0 || modelo.length <=0 || placa.length != 7 || ano.length != 4 || cor.length <= 0)
                {
                    alert('Todos os campos devem ser preenchidos corretamente!!!')
                    return false
                }
            }
        )
    }
)