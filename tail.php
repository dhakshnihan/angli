<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte2167.js?v=3.2.0"></script>

<script src="plugins/chart.js/Chart.min.js"></script>

<script src="./plugins/jsgrid/demos/db.js"></script>
  <script src="./plugins/jsgrid/jsgrid.min.js"></script>

<script src="dist/js/pages/dashboard3.js"></script>

<script>

    /* Main Cards */
    var ctx = document.getElementById('myChart1').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var ctx3 = document.getElementById('myChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C','D', 'E', 'F','G', 'H', 'I'],
        datasets: [
            {
                barPercentage: 0.9,
                categoryPercentage: 1,
                label: 'Dataset 2',
                data: [2, 3, 4, 5, 6, 7, 8, 9],
                borderColor: '#FF6384',
                backgroundColor: '#FFB1C1',
            }
        ]
        },
        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display:false
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        display: false 
                    },
                    gridLines: {
                        display:false
                    }
                }],
            },
            legend: {
                display: false
            },
        }
    });

    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C','D', 'E', 'F','G', 'H', 'I'],
        datasets: [
            {
                barPercentage: 0.9,
                categoryPercentage: 1,
                label: 'Dataset 2',
                data: [2, 3, 4, 5, 6, 7, 8, 9],
                borderColor: '#FF6384',
                backgroundColor: '#FFB1C1',
            }
        ]
        },
        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display:false
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        display: false 
                    },
                    gridLines: {
                        display:false
                    }
                }],
            },
            legend: {
                display: false
            },
        }
    });

    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C','D', 'E', 'F','G', 'H', 'I'],
        datasets: [
            {
                barPercentage: 0.9,
                categoryPercentage: 1,
                label: 'Dataset 2',
                data: [2, 3, 4, 5, 6, 7, 8, 9],
                borderColor: '#FF6384',
                backgroundColor: '#FFB1C1',
            }
        ]
        },
        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        display: false,
                    },
                    gridLines: {
                        display:false
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        display: false 
                    },
                    gridLines: {
                        display:false
                    }
                }],
            },
            legend: {
                display: false
            },
        }
    });


    /* Main Graph */
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Digital Goods',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
        },
        {
        label: 'Electronics',
        backgroundColor: 'rgba(210, 214, 222, 1)',
        borderColor: 'rgba(210, 214, 222, 1)',
        pointRadius: false,
        pointColor: 'rgba(210, 214, 222, 1)',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
        label: 'Computers',
        backgroundColor: 'rgba(210, 214, 222, 1)',
        borderColor: 'rgba(210, 214, 222, 1)',
        pointRadius: false,
        pointColor: 'rgba(210, 214, 222, 1)',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [50, 80, 40, 25, 66, 75, 80]
        },
    ]
    }

    var areaChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
        display: false
    },
    scales: {
        xAxes: [{
        gridLines: {
            display: false,
        }
        }],
        yAxes: [{
        gridLines: {
            display: false,
        }
        }]
    }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
    type: 'line',
    data: areaChartData,
    options: areaChartOptions
    })


    /* Js Grid Table */
    $(function () {
      $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",

        sorting: true,
        paging: true,

        data: db.clients,

        fields: [{
            name: "Name",
            type: "text",
            width: 150
          },
          {
            name: "Age",
            type: "number",
            width: 50
          },
          {
            name: "Address",
            type: "text",
            width: 200
          },
          {
            name: "Country",
            type: "select",
            items: db.countries,
            valueField: "Id",
            textField: "Name"
          },
          {
            name: "Married",
            type: "checkbox",
            title: "Is Married"
          }
        ]
      });
    });
</script>


</body>

</html>