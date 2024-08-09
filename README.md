# custom_theme

A ideia aqui é ter maior poder sobre o Wordpress, usando o que ele te convida a usar.\
A metodologia classica de desenvolvimento é:
 1. Voce compra um tema pronto
 2. Voce compra os plugins necessários
 3. Voce instala os plugins necessários (e torce para rodar e não bugar)

Só, que tudo isso vai grana... A pior parte é:
 - Nem sempre se aproveita todas as funcionalidades (e as funcionalidades não utilizadas viram um **overhead** e pesa sua pagina desnecessariamente)
 - Nem sempre voce encontra um tema ou plugin com todas as funcionalidades desejadas.

Desenvolver temas e plugins customizados resolve esses "*corner cases*".

## TEMAS:
 O WP faz o seguinte:
  - Ele chama as tags do banco de dados
  - Aplica os HTML, CSS e PHP do tema
 O tema amplia APENAS funcionalidades visuais.
 Sendo assim se pergunte:
  - Se o negócio por algum motivo mudar o TEMA.. Minha pagina ainda se comporta da mesma meneira? Se a resposta for sim: voce criou um tema. Se a resposta for não voce criou um plugin.
  - Temas não lidam com funcionalidades criticas. Plugins, sim.
  
## PLUGIN:
Plugins controlam **COMPORTAMENTOS e FUNCIONALIDADES**. Inclusive funcionalidades CRITICAS.

## DOCKERIZED
Como esse git tem finalidade fazer testes e provas de conceito e *DESCARTAR* as senhas e ambientes estarão disponíveis. Esse docker serve para isso... Para voce não precisar instalar os XAMPS, MAMPS, WAMPS, QualquerCoisaMPS, ElefaMPS.... Mas se quiser usar, simplesmente substitua as pastas wp-content e os backups dos banco de dados e tudo deveria funcionar normalmente.\
Se voce quiser carregar esse ambiente em produção, voce tem dois caminhos:
 - Criar uma imagem docker e carregar imagem la na nuvem :>
 - Rezar para Deus, usar um plugin de migração, e torcer para tudo rodar :>
 - Vale a pena dev local e deploy... Mas as complicações podem ser imensas.. Esta disposto a isso? A vida é feita de escolhas dificeis...
De qualquer forma, em um mundo ideal onde voce conseguiu instalar o Docker e só esta interessado em usar esse repo para testes e POCS, seguem comandos que podem úteis:
~~~
docker volume rm $(docker volume ls -qf dangling=true)
~~~
(Vale ressaltar que eu não criei nenhum volume virtual do DOCKER... então voce não vai precisar dele *~provavelmente*)

## Boas Práticas
 - Cada linha de codigo que voce desenvolve: é uma linha de código que voce pode precisar dar manutenção. O caso de uso do WP é ***LOW CODE*** ... Tente manter o máximo LOW CODE possível.
 - Evite usar funcionalidades de outros plugins e temas pre-existentes nas suas funcionalidade... Pois eles podem atualizar: vincule sempre que possível suas funcionalidades apenas às funcionalidades base do Wordpress.
    - Se voce usar funcionalidades de outros plugins e temas pre-existentes... pelo menos deixe tudo documentado
    - Importante registrar as versões dos plugins, temas, WP, versão do php e versão do banco de dados
 - Evite fazer codigos macarrônicos ou de complexidade desnecessária:
    - YAGNI
    - DRY
    - Use "*Design Patterns*" ***SOMENTE*** quando necessário: acredite.. eles vão voltar e cobrar sua cabeça mais tarde.
 - Se voce conseguir gerar um plugin que oferece interface de usuario para mexer la na UI do admin... voce cozinhou! (porque apesar de voce ter codado... agora sua ferramenta virou lowcode)

## REFERÊNCIAS
 - [WP DOC para DEVs: Temas](https://developer.wordpress.org/themes/)
 - [WP DOC para DEVs: Plugins](https://developer.wordpress.org/plugins/)

