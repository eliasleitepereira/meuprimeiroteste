function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(-23.5481863,-46.6503683,17),
    zoom:17,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);