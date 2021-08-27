$service_urls = array('Youtube', 'Facebook', 'Linkedin','Twitter');

$service_string = 'buy USA facebook 100 follow';
foreach ($service_urls as $url) {
    if (stristr($service_string, $url)) { 
    //if (strpos($string, $url) !== FALSE) { 
        echo "Match found"; 
        echo "<br />";
        echo "Service Name is: ". $url;
        return true;
    }
}
echo "Not found!";
return false;
