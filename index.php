<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script language='javascript'>
var app = new Vue({
  el: '#app',
  data: {
    message: '안녕하세요 Vue!'
  }
})
</script>
</head>

<body>

<div id="app">
  {{ message }}
</div>

</body>
</html>