<?php
$data = '{
    "Afghanistan": "+93",
    "Albania": "+355",
    "Algeria": "+213",
    "American Samoa": "+1-684",
    "Andorra": "+376",
    "Angola": "+244",
    "Anguilla": "+1-264",
    "Antarctica": null,
    "Antigua and Barbuda": "+1-268",
    "Argentina": "+54",
    "Armenia": "+374",
    "Aruba": "+297",
    "Australia": "+61",
    "Austria": "+43",
    "Azerbaijan": "+994",
    "Bahamas": "+1-242",
    "Bahrain": "+973",
    "Bangladesh": "+880",
    "Barbados": "+1-246",
    "Belarus": "+375",
    "Belgium": "+32",
    "Belize": "+501",
    "Benin": "+229",
    "Bermuda": "+1-441",
    "Bhutan": "+975",
    "Bolivia": "+591",
    "Bosnia and Herzegovina": "+387",
    "Botswana": "+267",
    "Brazil": "+55",
    "British Indian Ocean Territory": null,
    "British Virgin Islands": "+1-284",
    "Brunei": "+673",
    "Bulgaria": "+359",
    "Burkina Faso": "+226",
    "Burundi": "+257",
    "Cambodia": "+855",
    "Cameroon": "+237",
    "Canada": "+1",
    "Cape Verde": "+238",
    "Cayman Islands": "+1-345",
    "Central African Republic": "+236",
    "Chad": "+235",
    "Chile": "+56",
    "China": "+86",
    "Christmas Island": "+61",
    "Cocos Islands": "+61",
    "Colombia": "+57",
    "Comoros": "+269",
    "Cook Islands": "+682",
    "Costa Rica": "+506",
    "Croatia": "+385",
    "Cuba": "+53",
    "Curacao": "+599",
    "Cyprus": "+357",
    "Czech Republic": "+420",
    "Democratic Republic of the Congo": "+243",
    "Denmark": "+45",
    "Djibouti": "+253",
    "Dominica": "+1-767",
    "Dominican Republic": "+1-809, +1-829, +1-849",
    "East Timor": "+670",
    "Ecuador": "+593",
    "Egypt": "+20",
    "El Salvador": "+503",
    "Equatorial Guinea": "+240",
    "Eritrea": "+291",
    "Estonia": "+372",
    "Ethiopia": "+251",
    "Falkland Islands": "+500",
    "Faroe Islands": "+298",
    "Fiji": "+679",
    "Finland": "+358",
    "France": "+33",
    "French Polynesia": "+689",
    "Gabon": "+241",
    "Gambia": "+220",
    "Georgia": "+995",
    "Germany": "+49",
    "Ghana": "+233",
    "Gibraltar": "+350",
    "Greece": "+30",
    "Greenland": "+299",
    "Grenada": "+1-473",
    "Guam": "+1-671"
}';


$json = json_decode($data, true);

$file = fopen("./country_phone.csv", "w");
fputcsv($file, ['country', 'phone']);
foreach ($json as $country => $phone) {
    if ($country == "Ghana") {
        // echo "I want to $country I would like $phone";
    }

    fputcsv($file, [$country, $phone]);
}

fclose($file);

// print_r($json);

$priority = '[
    {
      
        "id": 1,
        "category_name": "Payments"
    },
    {
      
        "id": 2,
        "category_name": "Fuel & Tank"
    },
    {
        
        "id": 3,
        "category_name": "Sales & Marketing"
    },
    {
        
        "id": 4,
        "category_name": "Miscellaneous"
    }
]';

$pushNotifications = json_decode($priority, true);



// foreach ($pushNotifications as $notification) {
//     print_r($notification["id"]);
// }

$a = array(
    array(
        "id" => "1",
        "category_name" => "Payments"
    ),
    array(
        "id" => "2",
        "category_name" => "Fuel & Tank"
    ),
    array(
        "id" => "3",
        "category_name" => "Sales & Marketing"
    ),
    array(
        "id" => "4",
        "category_name" => "Miscellaneous"
    )
);

// $b =  json_encode($a, true);
// foreach ($a as $b) {
//     $b = (object)$b;

//     print_r($b);
// }

// $json = json_encode($a);
// $obj = json_decode($json, false);



// foreach ($obj as $category) {
//     // echo $category->id . ': ' . $category->category_name . '<br>';
//     $pushNotificationsDetails = new stdClass();

//     $pushNotificationsDetails->id = $category->id;
//     $pushNotificationsDetails->category_name = $category->category_name;
//     $rows[] = $pushNotificationsDetails;
// }

// print_r($rows);



// $json = json_encode($rows);

// echo $json;

// $pushNotificationsDetails = new stdClass();

// $a = $pushNotificationsDetails;

// print_r($a);



// $std_array = array();
// foreach ($a as $sub_array) {
//     $std_array[] = json_decode(json_encode($sub_array), false);
// }
// print_r($std_array);
// $json = json_encode($std_array);

// echo $json;

// $pushNotificationsDetails = new stdClass();

// foreach ($std_array as $object) {
//     $pushNotificationsDetails->id =   $object->id;
//     $pushNotificationsDetails->category_name = $object->category_name;
// }

// $json = json_encode($pushNotificationsDetails);

// echo $json;

$payload = 2;

switch ($payload) {
    case 1:
        echo  "Payments";
        break;
    case 2:
        echo "Fuel";
        break;
    case 3:
        echo  "Sale";
        break;
    case 4:
        echo "Mark";
        break;
    default:

        break;
}
