$phone = core::gpc("phone", "P");
$imei = core::gpc("imei", "P");
$appversion = core::gpc("appversion", "P");
$androidversion = core::gpc("androidversion", "P");
$mobiletype = core::gpc("mobiletype", "P");
$user["phone"] = $phone;
$user["imei"] = $imei;
$user["appversion"] = $appversion;
$user["androidversion"] = $androidversion;
$user["mobiletype"] = $mobiletype;
