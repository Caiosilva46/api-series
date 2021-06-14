# API SERIES


## Configurações Recomendadas para rodar a aplicação.

A estrutura do Lumen tem alguns requisitos de sistema para o seu funcionamento.

 * PHP >= 7.3
 * OpenSSL PHP Extension
 * PDO PHP Extension
 * Mbstring PHP Extension



## Instalação Lumen aplicação.

 O Lumen utiliza o Composer para gerenciar suas dependências. Portanto, antes de usar o Lumen, certifique-se de ter o Composer instalado em sua máquina.

 * Encontrará o mesmo no seguinte dependências https://getcomposer.org/.


 Instale o Lumen com o seguinte comando "Composer create-project" em seu terminal:

 * composer create-project --prefer-dist laravel/lumen "nome-do-projeto"


## Servidor da aplicação.

 Para rodar o seu projeto localmente, você pode usar a máquina virtual Laravel Homestead, Laravel Valet ou o servidor de desenvolvimento PHP embutido:

 * php -S localhost:8000 -t public


## Configurações.

 Todas as opções de configuração para a estrutura do Lumen são armazenadas no arquivo .env. Depois de instalar o Lumen, você também deve configurar seu ambiente local.


## Chave de segurança.

 A próxima coisa que você deve fazer após instalar o Lumen é definir a chave do aplicativo como uma string aleatória. Normalmente, essa string deve ter 32 caracteres. A chave pode ser definida no arquivo de ambiente .env. Se você não renomeou o arquivo .env.example para .env, deve fazer isso agora. Se a chave do aplicativo não for definida, os dados criptografados do usuário não estarão seguros!

## Compatibilidade.

 Como o Lumen é um framework totalmente separado do Laravel, ele não oferece intencionalmente compatibilidade com nenhuma biblioteca adicional do Laravel como Cashier, Passport, Scout, etc. Se sua aplicação requer a funcionalidade fornecida por essas bibliotecas, por favor, use o framework Laravel.

 * Aplicação é compativel com os sistemas operacional Windowns e Linux.


 * Para mais informações acessar a documentação oficial do lumen https://lumen.laravel.com/.

