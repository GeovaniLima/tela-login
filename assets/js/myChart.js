const ctx = document.getElementById('myChart').getContext("2d")

const labels = [
  '2013',
  '2014',
  '2015',
  '2016',
  '2017',
  '2018',
  '2019',
  '2020',
  '2021',
  '2022'
]

const data = {
  labels,
  datasets: [{
    data: [211, 299, 189, 344, 411, 375, 499, 350, 300, 520],
    label: "Faturamento Anual",
    fill: true,
    backgroundColor: '#0F876E'
  }]
}

const config = {
  type: 'line',
  data,
  options: {
    responsive: true,
    radius: 4,
    scales: {
      y: {
        ticks: {
          callback: function(value) {
            let finalValue = value.toFixed(2)
            return 'R$ ' + finalValue.replace('.', ',') + ' milhões'
          }
        }
      }
    }
  }
};

const myChart = new Chart(ctx, config)