<div class="row">
    <div class="colg s10">
        <h5>Cadastro de Disciplina</h5>
        <blockquote>
            Formulário para cadastramento de uma disciplina. Informe todos os campos corretamente.
        </blockquote>
        <form action="" method="post">
            <div class="row">
                <div class="input-field col s10 l10">
                    <input type="text" name="disc_nome" id="disc_nome">
                    <label for="disc_nome">Nome da Disciplina</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s5 l5">
                    <input type="text" name="disc_codigo" id="disc_codigo">
                    <label for="disc_codigo">Código da Disciplina</label>
                </div>

                <div class="input-field col s5 l5">
                    <input type="text" name="disc_turma" id="disc_turma">
                    <label for="disc_turma">Turma</label>
                </div>
            </div>

            <!--    Campo de seleção    -->
            <div class="row">
                <div class="input-field col s5 l5">
                    <select name="disc_curso" id="disc_curso">
                        <option value="" disabled selected>Escolha um curso</option>
                        <option value="">Matemática</option>
                        <option value="">Eng. Computação</option>
                        <option value="">Eng. Controle e Automação</option>
                        <option value="">Eng. Eletrônica</option>
                        <option value="">Eng. Elétrica</option>
                        <option value="">Eng. Mecânica</option>
                        <option value="">Eng. Software</option>
                    </select>
                    <label for="disc_curso">Curso</label>
                </div>
            
            <!--    Campo de escolha do Horário -->
                <div class="col s5 l5">
            <!--    Modal com a tabela de horários -->
                    <a href="#modal1" class="waves-effect waves-light btn-flat modal-trigger blue-text">Horários</a>

                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Tabela de Horários</h4>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="iput-field col s10 l10">
                    <p>Grupo da Disciplina</p>
                    <p class="range-field">
                        <input type="range" name="disc_grupo" id="disc_grupo" min="1" max="21">
                    </p>
                    <label for="disc_grupo">Deslize o ponto azul pela linha</label>
                </div>
            </div>

            <div class="row">
                <input type="submit" class="waves-effect waves-light btn col s4 offset-s3" value="Cadastrar">
            </div>
        </form>
    </div>
</div>
<!--    Script JQuery para alguns componentes do formulário -->
<script>
    $(document).ready(function() {
        $('select').material_select();
    });

    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            alert("Selecione os horários em que a disciplina será ministrada");
            console.log(modal, trigger);
        },
        complete: function() { alert('Fechado. Dados salvos no banco de dados'); } // Callback for Modal close
        }
    );
          
</script>