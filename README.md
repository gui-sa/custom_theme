# custom_theme

A ideia aqui é ter maior poder sobre o Wordpress, usando o que ele te convida a usar.\
A metodologia classica de desenvolvimento é:
 1. Voce compra um tema pronto
 2. Voce compra os plugins necessários
 3. Voce instala os plugins necessários (e torce para rodar e não bugar)

Só, que tudo isso vai grana... A pior parte é:
 - Nem sempre se aproveita todas as funcionalidades (e as funcionalidades não utilizadas viram um overhead e pesa sua pagina desnecessariamente)
 - Nem sempre voce encontra um tema ou plugin com todas as funcionalidades desejadas.

Desenvolver temas e plugins customizados resolve esses "*corner cases*".

## Boas Práticas
 - Cada linha de codigo que voce desenvolve: é uma linha de código que voce pode precisar dar manutenção. O caso de uso do WP é ***LOW CODE*** ... Tente manter o máximo LOW CODE possível.
 - Evite usar funcionalidades de outros plugins e temas pre-existentes nas suas funcionalidade... Pois eles podem atualizar: vincule sempre que possível suas funcionalidades apenas às funcionalidades base do Wordpress.
    - Se voce usar funcionalidades de outros plugins e temas pre-existentes... pelo menos deixe tudo documentado
    - Importante registrar as versões dos plugins, temas, WP, versão do php e versão do banco de dados
 - Evite fazer codigos macarrônicos ou de complexidade desnecessária:
    - YAGNI
    - DRY
    - Use "*Design Patterns*" ***SOMENTE*** quando necessário: acredite.. eles vão voltar e cobrar sua cabeça mais tarde.

## REFERÊNCIAS
 - [WP DOC para DEVs: Temas](https://developer.wordpress.org/themes/)

