<!DOCTYPE html>
<html>
<body>

<button onclick="getLocation()">Get Location</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this device.";
  }
}+

function showPosition(position) {
var lat= position.coords.latitude;
var long= position.coords.longitude;
document.write(lat);
document.write(long);
}
</script>

</body>
</html>
