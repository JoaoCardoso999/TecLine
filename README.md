# TECLINE

Destinado à criação de uma loja virtual de vendas de **hardware** e acessórios de computador e informática.

## 📄 Documentação dos Códigos do Projeto

### 🌐 HTML

HTML é uma linguagem de marcação que permite ao navegador web entender a estrutura do nosso site (menu, tabela, imagens, etc).

---

### 🏷️ Tags HTML

- `<!DOCTYPE html>`: Informa que o arquivo é do tipo HTML.  
- `<html>`: Informa o começo do código em HTML.  
- `</html>`: Informa o final do código HTML.  
- `<head>`: Utilizado para configuração da página.  
- `<meta>`: Utilizado para configurações de idioma, responsividade e segurança.  
- `<title>`: Define o nome que aparece na aba do navegador.  
- `<link>`: Conecta nossa página com outros arquivos/URLs externas.  
- `href`: Onde colocamos endereços de arquivos, sites, ícones, imagens, etc.  
- `</head>`: Final da área de configurações da página.  
- `<body>`: Início do corpo do site. É aqui que ficam os códigos de tudo que é mostrado.  
- `<div>`: Divide/organiza partes da tela, criando espaços para os elementos.  
- `<section>`: Utilizado para criar seções na tela.  
- `<h1>` a `<h6>`: Criam títulos de diferentes níveis.  
- `<form>`: Indica uma área de formulário.  
- `<label>`: Texto dos formulários (apenas leitura), como nomes dos campos.  
- `<input>`: Caixas de digitação para capturar dados do usuário.  
- `<button>`: Botão interativo. Pode ser do tipo `submit` ou `button`.  
- `<a>`: Cria links e elementos clicáveis.  
- `<p>`: Cria parágrafos de texto.  
- `<video>`: Insere vídeos na página.  
- `class`: Atribui classes às tags, utilizadas para aplicar CSS.  
- `lang`: Define o idioma do site.  
- `<header>`: Cabeçalho do site.  
- `<footer>`: Rodapé do site.  
- `<script>`: Inserção de códigos JavaScript/back-end.  
- `alt`: Texto alternativo para imagens e vídeos indisponíveis.  
- `placeholder`: Texto que aparece em `input` e desaparece ao digitar.  
- `<nav>`: Cria menus de navegação.  
- `<main>`: Contém o conteúdo principal do site.  
- `<i>`: Usada para ícones.  
- `<li>`: Itens de lista.  
- `<table>`: Cria tabelas.  
- `<option>`: Opções dentro de um menu seletor.  
- `<select>`: Cria menus de seleção.  
- `src`: Caminho de arquivos (imagens, vídeos, scripts, etc).

---

## 🎨 CSS

É uma folha de estilização dos elementos da página. Aqui são configuradas cores, tamanhos, espaços, etc.

### Elementos de estilos

- `.nomedaclasse {}` : Esta parte é destinada a informar qual a classe que vai receber as configurações de estilo, que ficam dentro das chaves.  
- `background-color` : Utilizada para definir a cor de fundo do elemento.  
- `padding` : Utilizado para definir o espaço interno de um elemento (geralmente usado em divs, header, footer, button, e outros elementos que possuem uma área).  
- `color` : É utilizado para colocar cor no texto.  
- `align-items` : Utilizado para alinhar os elementos que estão dentro do elemento da classe.  
- `center` : Centralizar.  
- `bottom` : Parte inferior.  
- `top` : Parte superior.  
- `left` : Esquerda.  
- `right` : Direita.  
- `display` : É utilizado para redimensionar o tamanho dos elementos (geralmente utilizamos o `flex` nele).  
- `justify-content` : Define a posição do elemento (`end`, `start`, `center`, `space-between` - coloca os elementos separados igualmente).  
- `font-size` : Configura o tamanho da fonte do texto.  
- `font-weight` : Configura o estilo da fonte (`bold`, `semibold`).  
- `width` : Define a largura em px.  
- `height` : Define a altura em px.  
- `max-width` : Largura máxima.  
- `max-height` : Altura máxima.  
- `margin: 0px 0px 0px 0px` : Define as margens ao redor.  
- `margin-top` : Define margens para o topo.  
- `margin-bottom` : Define margens para baixo.  
- `margin-left` : Define margens para a esquerda.  
- `margin-right` : Define margens para a direita.  
- `border` : Define se o elemento vai ter borda.  
- `border-radius` : Define o arredondamento da borda.  
- `border-color` : Define a cor da borda.  
- `border-width` : Define a largura da borda.  
- `gap` : Define espaço entre elementos.  
- `cursor` : Define as configurações do cursor do mouse ao passá-lo/clicar sobre um elemento (ponteiro, seta, etc).  
- `font-family` : Define o tipo de fonte.  
- `transition` : Define transições/animações para os elementos.  
- `hidden` : Esconde/oculta o elemento.  
- `box-shadow` : Aplica sombra sobre o elemento.  
- `text-align` : Alinhamento do texto.  
- `outline` : Define configuração de linha.  
- `z-index` : Controla a ordem de sobreposição de elementos alinhados. Informa se o elemento vai ficar fixo no lugar, se ele é o primeiro, se ele fica atrás, etc.

## Bootstrap

É um framework que já vem com várias classes estilizadas de CSS, prontas para uso. Então, ao invés de ficar configurando o arquivo CSS, você só precisa chamar o nome das classes do Bootstrap dentro do HTML que ele já configura os elementos.

### Classes do Bootstrap

- `container` : deixa a div no centro da tela.  
- `container-fluid` : deixa a div se expandir junto com a tela.  
- `row` : faz com que os elementos dentro da div fiquem na mesma linha.  
- `col-1` até `col-12` : define quais colunas o elemento ocupa.  
- `w-100` : define que o elemento ocupa 100% da largura.  
- `h-100` : define que o elemento ocupa 100% da altura.  
- `bg-white` : define cor de fundo branca.  
- `mb-1` até `mb-5` : define margem para baixo.  
- `mt-1` até `mt-5` : define margem para o topo.

