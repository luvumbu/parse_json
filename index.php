<!DOCTYPE html>
<html>
<body>

<h2>Use the XMLHttpRequest to get the content of a file.</h2>
<p>The content is written in JSON format, and can easily be converted into a JavaScript object.</p>

<p id="demo"></p>

<script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    document.getElementById("demo").innerHTML = myObj[1].name;
  }
};
xmlhttp.open("GET", "demo.json", true);
xmlhttp.send();
</script>

<p>Take a look at <a href="demo.json" target="_blank">json_demo.txt</a></p>

</body>
</html>
