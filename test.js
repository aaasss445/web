var list = {
  "HTML 소개" : "html_introduction.html",
  "HTML 편집기" : "html_editors.html",
  "HTML 기본" : "html_basic.html",
  "HTML 요소" : "html_elements.html",
  "HTML 속성" : "html_attributes.html"
};

function listAdd(self) {
  var filename=document.URL.substring(document.URL.lastIndexOf("/") + 1, document.URL.length);
  for(var l in list){
    if (list[l] == filename) {
      $("#list").append('<li class="select"><a href=' + list[l] + '>' + l + '</a></li>');
    }
    else {
        $("#list").append('<li><a href=' + list[l] + '>' + l + '</a></li>');
    }
  }
}

function mainListAdd(self) {
  for(var l in list){
    $("ul").append('<li><a href=' + list[l] + '>' + l + '</a></li>');
  }
}

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
