var ContactPage = function () {

    return {

    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,
				lat: -12.1170128,
				lng: -77.0145437,
				zoom: 16
			  });

			  var marker = map.addMarker({
				lat: -12.1170528,
				lng: -77.0136907,
	            title: 'Control Empresarial Group, S.A.C.'
		       });
			});
        },

        //Panorama Map
  //       initPanorama: function () {
		//     var panorama;
		//     $(document).ready(function(){
		//       panorama = GMaps.createPanorama({
		//         el: '#panorama',
		//         lat : -12.1170128,
		//         lng : -77.0145437
		//       });
		//     });
		// }

    };
}();