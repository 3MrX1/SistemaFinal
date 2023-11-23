<?php
// URL do site de notícias
$url = "https://news.google.com/home?hl=pt-BR&gl=BR&ceid=BR:pt-419";

// Inicializa o cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição e obtém o conteúdo HTML
$html = curl_exec($ch);

// Verifica erros na requisição cURL
if (curl_errno($ch)) {
    die('Erro ao obter dados do site de notícias: ' . curl_error($ch));
}

// Fecha a sessão cURL
curl_close($ch);

// Cria um objeto DOMDocument e carrega o HTML obtido
$dom = new DOMDocument();
@$dom->loadHTML($html);

// Pega todos os elementos <a> dentro de <div class="noticia">
$noticias = $dom->getElementsByTagName('div');

// Exibe as notícias
echo '<h1>Mural de Notícias</h1>';
foreach ($noticias as $noticia) {
    // Exibe apenas notícias que têm a classe "noticia"
    if ($noticia->getAttribute('class') == 'noticia') {
        echo '<p>' . $noticia->nodeValue . '</p>';
    }
}
?>
