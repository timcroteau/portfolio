function drawVisualization() {
  // Create and populate the data table.
  var data = google.visualization.arrayToDataTable([
    ['Tech', 'Usage'],
    ['Photoshop', 5],
    ['Fireworks', 3],
    ['Illustrator', 2],
    ['HTML5', 4],
    ['CSS3', 4],
    ['JavaScript/Jquery',2]
  ]);
  
  // Create and draw the visualization.
  new google.visualization.PieChart(document.getElementById('visualization')).
    draw(data, {
      chartArea:{left:20,top:0,width:"75%",height:"75%"},
      tooltip: {trigger:'none'},
      legend:{position:'left', alignment:'center'}, 
      slices: [{color: '#445555'}, {color: '#556666'}, {color: '#667777'}, {color:'#778888'}, {color:'#889999'}, {color: '#99cccc'}], 
      is3D:true });
}