 
    <div id="templatemo_contact_map"></div>
    <script>
      function initMap() {
        var Pulchowk = {lat: 27.681962, lng: 85.318831};
        var map = new google.maps.Map(document.getElementById('templatemo_contact_map'), {
          zoom: 2,
          center: Pulchowk
        });
        var marker = new google.maps.Marker({
          position: CIDS,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn9aLsmlbuXnPTUxpjzIt4d2HhnBA3vOA&callback=initMap">
    </script>