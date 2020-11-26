<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
 
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$ricon = array('01d'=>'🌞','02d'=>'🌤','03d'=>'☁️','04d'=>'🌥','09d'=>'🌦','10d'=>'🌧','11d'=>'⛈','13d'=>'❄️','50d'=>'💨','01n'=>'🌙','02n'=>'☁️','03n'=>'☁️','04n'=>'🌩','09n'=>'🌧','10n'=>'🌧','11n'=>'⛈','13n'=>'❄️','50n'=>'💨');

$obuhavo = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Tashkent,UZ&units=metric&appid=a9d86a9dc54f8caf39ac424735ffc2e6"),true);

$temp = $obuhavo['main']['temp'];
$icon = $obuhavo['weather'][0]['icon'];
// <<< Eslatma>>> <<< Barcha php koddagi 2 hour so'zi sayt ishlatadiganlar uchun! Webhostdagi 5 hour qiling >>>
$time = date("H:i",strtotime("5 hour"));
$soat = date("H:i",strtotime("5 hour"));
$kun = date("d.m.y",strtotime("5 hour"));
$kunm=date("d",strtotime("5 hour")); 
$yil = date("Y",strtotime("5 hour"));
$kunlar = date("d",strtotime("5 hour")); 


$kun = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["ⓞ","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①⓪","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②⓪","②①","②②","②③","②④","②⑤","②⑥","②⑦","②⑧","②⑨","③⓪","③①"], $kun);


$soat= str_replace('1', '❶', $soat);
$soat = str_replace('2', '❷', $soat);
$soat = str_replace('3', '❸', $soat);
$soat = str_replace('4', '❹', $soat);
$soat = str_replace('5', '❺', $soat);
$soat = str_replace('6', '❻', $soat);
$soat = str_replace('7', '❼', $soat);
$soat = str_replace('8', '❽', $soat);
$soat = str_replace('9', '❾', $soat);
$soat = str_replace('0', '⓿', $soat);



$kunr = date('z',strtotime('2 hour'));  
$i = 440; 
$m2 = $i-$kunr; 



$yil = str_replace(["2020","2021","2022","2023","2024","2025"],["❷ⓞ❷ⓞ","❷ⓞ❷❶","❷ⓞ❷❷","❷ⓞ❷❹","❷ⓞ❷❺"], $yil);

$kunlar = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["⓿","❶","❷","❸","❹","❺","❻","❼","❽","❾","❶⓿","❶❶","❶❷","❶❸","❶❹","❶❺","❶❻","❶❼","❶❽","❶❾","❷⓿","❷❶","❷❷","❷❸","❷❹","❷❺","❷❻","❷❼","❷❽","❷❾","❸⓿","❸❶"], $kunlar);

$okun=date("n"); 
$oynoms = "1ʏꙷᴀⷽɴᷡᴠͮᴀⷽʀᷢ1 2ғᷫᴇⷷᴠͮʀᷢᴀⷽʟᷞ2 3ᴍᷟᴀⷽʀᷢᴛͭ3 4ᴀⷽᴘᷮʀᷢᴇⷷʟᷞ4 5ᴍᷟᴀⷽʏꙷ5 6ɪͥʏꙷᴜͧɴᷡ6 7ɪͥʏꙷᴜͧʟᷞ7 8ᴀⷽᴠͮɢᷛᴜͧsᷤᴛͭ8 9sᷤᴇⷷɴᷡᴛͭᴀⷽʙⷡʀᷢ9 10ᴏⷪᴋⷦᴛͭᴀⷽʙⷡʀᷢ10 11ɴᷡᴏⷪʏꙷᴀⷽʙⷡʀᷢ11 12ᴅͩᴇⷷᴋⷦᴀⷽʙⷡʀᷢ12"; 
$ex7 = explode("$okun",$oynoms); 
$oy = "$ex7[1]"; 


$input = ["Bugun $kunlar -$oy ,⏰Soat 🇺🇿:$soat Dᴀǫɪǫᴀ O'ᴛᴅɪ!","🇺🇿Havo harorati ☁️ : + $temp °C $ricon[$icon] | $yil-yil ","🎄 Yangi Yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!","Bᴜɢᴜɴ: $kunlar-$oy"]; 
  $rand=array_rand($input); 
  $bio="$input[$rand]"; 

 $nik = ["Ⓝ︎Ⓤ︎Ⓡ︎Ⓢ︎Ⓐ︎Ⓘ︎Ⓓ︎Ⓧ︎Ⓞ︎Ⓝ︎","🔥GαɳɠʂƚҽR","😎๏кєภ 24 ร๏คՇ ๏ภɭคץภ2⃣4⃣","💰Mιʅʅισɳҽɾ🤑","🅤🅩🅑🅔🅚","🄺🄾🅁🄾🄻🄴🅅🅂🄺🄸🅈","🇺🇿Sιɱραƚιƈԋɳσ UȥႦҽƙ🇺🇿","🖤🌑Э̍т̍а̍ н̍о̍ч🌘̍🥀","🎧Mυʂιƈ LιVE🥀","👣Tιɱα Ⴆҽʅαɾυʂƙιx🥀","💧Oƙҽαɳ🌊","❤️ I ʅσʋҽ ყσυ Mαƚԋҽɾ❤️","✨₲ØⱠĐ☀️","🥀BαɾBσSSα😈","🎧MίYλGί🎧","『ᴋ』『ʀ』『ᴀ』『ꜱ』『ᴀ』『ᴠ』『ɪ』『ᴛ』『ꜱ』『ᴀ』","🅓🅔🅛🅐🅥🅞🅨 👨‍🏫","℘ąŋɖą🐼","✧P✧u✧b✧g✧ ✧🤙","🤪Nιƈƙ ყσ'ϙ🤨","❤️Ⓖⓡⓐⓕⓕ🥀","🔥℘ąɖıʂɧąƙɧ🔥","👑🇰 🇴 🇷 🇴 🇳 🇦 👑","Ⓙⓞⓝⓨ 🎤","🇺🇿ųʑცɛƙıʂɬąŋ🇺🇿","© Ďèvêløpèŕ ©"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";


$MadelineProto->account->updateProfile(['first_name'=>"
 $niktxt  》 ⏰$soat ",'about'=>"$bio "]);
$Bool = $MadelineProto->account->updateStatus(['offline' => false ]);

$vaqt = date('H:i', strtotime('5 hour'));

$logo = ["http://u793.xves.ru/SoatApi/Api(Kaba)/index.php?text=$time","http://u793.xves.ru/SoatApi/API(emoji)/index.php?text=$time","http://u792.xves.ru/papki/index.php?text=$time","http://u792.xves.ru/Api/api.php?text=$time","https://u957.xvest.ru/Api/api(1).php?text=$time","http://onlineuz.platinumhost.uz/OnlineWolf/index.php?text=Ferghana","https://yusuf7243.xvest.ru/UzBCoDeRChiK/Api/api.php?text=$time","https://u885.xvest.ru/Api/Api4/index.php?text=$time","https://u885.xvest.ru/Api/Api3/index.php?text=$time","https://u885.xvest.ru/Api/Api1/index.php?text=$time","https://u885.xvest.ru/Api/index.php?text=$time","http://1234b.xvest.ru/API/400.php?text=$time","http://niyoz.xostnet.uz/Apilar/Api2/api.php?text=$time","https://apilarod.000webhostapp.com/Api/index.php?text=$time","http://kode26.xostnet.uz/Api2/Coder.php?text=$time","https://kode26.xostnet.uz/Api6/index.php?text=$time","https://kode26.xostnet.uz/Api7/Ranaldo.php?text=$time","https://asilbeka0032.000webhostapp.com/mashina/api.php?text=$time","https://asilbeka0032.000webhostapp.com/lalala/api.php?text=$time","https://u885.xvest.ru/Api/Api5/index.php?text=$time","Https://niyoz.xostnet.uz/Apilar/Api3/Qizil/index.php?text=$time","Https://niyoz.xostnet.uz/Apilar/Api3/Oq/index.php?text=$time","http://u870.xvest.ru/Gradient/img_grad/index.php?text=$time","http://nurniyozov.free-xost.ru/ApilarDunyosi/text_grad/indexText.php?text=$time","http://u792.xves.ru/apiy/index.php?text=$time&ism=Xusan&x=120","https://u792.xves.ru/3/index.php?text=$time&ism=Xusan","https://damasbass.platinumhost.uz/Api/TypeApi.php?type=Round","https://nazirjon.xvest.ru/Apilar/Api/index.php?text=$time",""];
  $logorand=array_rand($logo);
  $logopic="$logo[$logorand]";



file_put_contents("photo.jpg",file_get_contents($logopic));
$Rasm = $MadelineProto->photos->updateProfilePhoto(['file' => "photo.jpg" ]);

if($Rasm){
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}

unlink("MadelineProto.log");
unlink("session.madeline");
unlink("photo.jpg");
?>