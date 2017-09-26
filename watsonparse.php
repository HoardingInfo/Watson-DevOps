<?php
    //$myJSON = json_decode("https://my8.digitalexperience.ibm.com/api/eb0207e3-47c0-4504-8678-9438392009c3/delivery/v1/search?q=*:*&defType=edismax&indent=on&qf=name^20+type^10+description+creator+locale+lastModifier+tags+categories+text&wt=json&fq=classification:(content%20OR%20asset)&fq=isManaged:(%22true%22)&sort=lastModified%20desc");
    require_once 'vendor/autoload.php';
    echo "Hello Watson";
    
    $headers = array('Accept' => 'application/json');
    $data = array('name' => 'Monitoring as a cost optimization toll for AWS Lambda.pdf', 'classification' => 'asset');

    $body = Unirest\Request\Body::json($data);

    $response = Unirest\Request::post('https://my8.digitalexperience.ibm.com/api/eb0207e3-47c0-4504-8678-9438392009c3/delivery/v1/search?q=*:*&defType=edismax&indent=on&qf=name^20+type^10+description+creator+locale+lastModifier+tags+categories+text&wt=json&fq=classification:(content%20OR%20asset)&fq=isManaged:(%22true%22)&sort=lastModified%20desc', $headers, $body);

    echo $response->raw_body;


?>