## PHP: Formulários

**Desenvolvimento de Aplicações Web - COLTEC/MG**

**João Eduardo Montandon (Exercícios elaborados por André Luiz F. Alves)**

1. Faça uma página HTML com um formulário, contendo os seguintes itens:
    * Nome (input)
    * Email (input)
    * Endereço (input)
    * Profissão (Analista de Sistemas, Desenvolvedor, Gerente de Projetos, DBA)
    * Sexo (Masculino e Feminino)
    * Login
    * Senha
    * Fale Conosco
    * deseja receber nossas promoções?
    * Botão de confirmação
    * Botão de limpar formulário
    * 
OBS: A ação do formulário deverá ser do tipo GET

2. O formulário da questão anterior deve redirecionar para uma página PHP que irá exibir os dados no formato de uma tabela em HTML.

3. Refazer a questão 1 e 2 alterando a ação para o tipo POST. Qual a diferença entre GET e POST??

4. Realizar as seguintes formatações para os dados que serão exibidos na tabela HTML:
    * Nome: Colocar uma função para que independente de como o nome seja digitado no formulario, ele ser exibido com todas as letras em minusculos, exceto as iniciais
    * E-mail: todo em maiusculo
    * Endereço igual a formatação de nome
    * Senha: caso a senha tenha contenha um quantidade de caracteres menor que 6, escrever a seguinte mensagem ao lado da senha: 'É recomendado uma senha com mais de 6 caracteres!!!
    * Data atual: acrescente uma linha em que é exibida a data atual

### Formulários: Parte 2

1. Implemente um formulário para realizar o login de usuário. O usuário poderá entrar no sistema desde que seu login e senha sejam, respectivamente, admin e admin123. Caso o usuário forneça dados diferentes, uma mensagem de erro deverá ser exibida na página.

2. Implemente um formulário para cálculo da alíquota do imposto de renda. O usuário deverá fornecer a sua renda anual e o número de dependentes. A alíquota é calculada com base nesta fórmula.

3. Faça um formulário que contenha cinco campos, a sua escolha. Então escolha dois desses campos deverão ser obrigatórios. Implemente a validação desses campos.

4. Implemente um formulário para cadastro de alunos na OBI. O aluno deverá fornecer os seguintes dados:
    * Nome
    * Data de Nascimento
    * E-mail
    * Sexo
    * Escola
    * Ano/Série
    * Linguagem favorita (Java, C/C++, JavaScript, C#, PHP)
    * Nível (Nível 1, Nível 2, Universitário)
    * Data Da Prova
    * Deseja receber nossa newsletter?

Ao submeter o formulário, você deverá gerar uma página com a ficha de cadastro com base nos dados fornecidos. Utilize essa figura como exemplo.
