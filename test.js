function night_day(self) {
  var target = document.querySelector('body');
  if(self.value === 'night'){
    target.style.backgroundColor='black';
    target.style.color='white';
    document.querySelector('#headgrid').style.borderColor='white';
    document.querySelector('a').style.color='white';
    self.value = 'day';

    var links = document.querySelectorAll('a');
    var i =0;
    while(i<links.length){
      links[i].style.color = 'white';
      i = i + 1;
    }
  } else {
    target.style.backgroundColor='white';
    target.style.color='black';
    document.querySelector('#headgrid').style.borderColor='black';
    document.querySelector('a').style.color='black';
    self.value = 'night';

    var links = document.querySelectorAll('a');
    var i =0;
    while(i<links.length){
      links[i].style.color = 'black';
      i = i + 1;
    }
  }
}
// function code(code) {
//   document.write("&lt"+code+"&gt");
// }
// function ln(self) {
//   document.write("<br>");
// }
