function makeHttpRequest(url, parameters, callback_function, syncronous, return_xml){
    var http_request, response, i;
    var activex_ids = [
    'MSXML2.XMLHTTP.3.0',
    'MSXML2.XMLHTTP',
    'Microsoft.XMLHTTP'
    ];

    if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+...
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            http_request.overrideMimeType('text/xml');
        }
    } else if (window.ActiveXObject) { // IE6 and older
        for (i = 0; i < activex_ids.length; i++) {
            try {
                http_request = new ActiveXObject(activex_ids[i]);
            } catch (e) {}
        }
    }

    if (!http_request) {
        alert('Unfortunatelly you browser doesn\'t support this feature.');
        return false;
    }
    if(!syncronous)
    http_request.onreadystatechange = function() {
        if (http_request.readyState !== 4) {
            // not ready yet
            return;
        }
        if (http_request.status !== 200) {
            // ready, but not OK
            //alert('There was a problem with the request.(Code: ' + http_request.status + ')');
            return;
        }
        if (return_xml) {
            response = http_request.responseXML;
        } else {
            response = http_request.responseText;
        }
        // invoke the callback
        callback_function(response);
    };
    //alert(parameters);
    if(!syncronous){ 
        http_request.open('POST', url, true);
    } else {
        http_request.open('POST', url, false);
    }
        http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       // http_request.setRequestHeader("Content-length", parameters.length);
       // http_request.setRequestHeader("Connection", "close");
        http_request.send(parameters);
    
    //if syncronous is true then we will wait for the 
    if(syncronous) return http_request.responseText;
}
