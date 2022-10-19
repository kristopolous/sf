window.onload = function() {
  let aTag = document.getElementsByTagName('a'), linkList = [];

  for (var x = 0; x < aTag.length; x++) {
    if (aTag[x].hasAttribute('href') && aTag[x].getAttribute('href').includes('//')) {
      linkList.push(aTag[x].href.replace(/(_|\/|\?|&)/g, '$1<wbr>'));
      aTag[x].innerHTML += "<span class='link onlyprint'> [L" + linkList.length + "] </span>";
    } 
  }
  document.getElementById("print-links").innerHTML += "<ol><li>" + linkList.join("</li><li>") + "</li></ol>";
}
