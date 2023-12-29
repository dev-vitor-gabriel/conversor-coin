async function converte_valor() {
    try {
        let response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        let data = await response.json();

        let dolar_value = data.rates.BRL; // Obtém a taxa de câmbio atual do dólar para o real
        let value_real = document.getElementById('money-value');

        let total_convert = value_real.value / dolar_value;
        let value_final = total_convert.toFixed(2);

        alert("Seu valor em Dólar é: USD " + value_final);
        document.getElementById('money-value').value = '';
    } catch (error) {
        console.error('Erro ao buscar a cotação do dólar:', error);
        alert('Desculpe, ocorreu um erro ao buscar a cotação do dólar.');
    }
}
