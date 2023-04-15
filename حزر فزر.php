<?php

ob_start();

$API_KEY = "6006725267:AAG4swLAvT0-KJwFfwZjQJ8V9vNQgFJF9tQ";

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
$url     = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch      = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res     = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}
$update  = json_decode(file_get_contents('php://input'));
$output  = json_decode(file_get_contents('php://input'), TRUE);
$message = $update->message;
$text    = $message->text;
$chat_id = $message->chat->id;
$name    = $message->from->first_name;
$owais   = 1287440172; //ايديك
$re7ab   = 583903746;
$mems    = explode("\n",file_get_contents("members.txt"));
$members = count($mems)-1;
$winn    = explode("\n",file_get_contents("winners.txt"));
$winnex  = count($winn);
$from_id = $message->from->id;
$cha = "https://t.me/releeif"; // معرف قناتك بدون @ ;
$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$ch&user_id=".$from_id);
$from_id    = $message->from->id;
$message    = $update->message;
$from_id    = $message->from->id;
$text       = $message->text;
$id         = $message->from->id; 
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game; 
$name       = $update->message->from->first_name;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$type       = $update->message->chat->type;
$message_id = $message->message_id;
$reply      = $message->reply_to_message->from->id;
$username   = $update->message->from->username;
$from_id    = $update->message->from->id;
$name       = $update->message->from->first_name;
$username   = $update->message->from->username;
$sudo       = 1287440172;
$title      =$message->chat->title; 
$user       = $message->from->username;

#                           من هنا الشروط بتبدا                               #



if ($update && !in_array($chat_id, $mems)) {
  file_put_contents("members.txt", $chat_id."\n",FILE_APPEND);
}



/*             ده شرط اجبار العضو على الاشتراك في القناة                    */


if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
  bot('sendMessage', [
  'chat_id'=>$chat_id,
  'text'=>"
  👨‍💻¦ لا تستطيع استخدام البوت لانك لست مشترك في القناة ؛🍂
  📬¦ عليڪك اولا الاشتراڪك في القناة  ؛ 🕸
  📡¦ رابط  القناهہ    •⊱ $cha ⊰•️
  –––––––––––––––
  - بعد الاشتراڪك ارسل { /start } ...
  ",]);return false;}




  //                     من هنا بيبدا البوت                                //



if($text == '/start'  && !in_array($chat_id, $mems)){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مرحبا بك في بوت المسابقة الثاني",
  ]);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"المسابقة المرة دي مختلفة شوية عن المرات الفاتت",
]);
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"المرة دي ح نحزر الايموجيز الصح
  اسهل مش كده ؟؟
  دايرين 2 ايموجيز و الترتيب مهم طبعا
     يعني
   
     💚🧡  

     ما زي
  
     🧡💚
  
  يلا عشان نسهل ليكم اكتر كمان 
  ح نديكم تلميحات على شكل الغاز
  اللغز ح يكون فيه ال 2 ايموجيز مع بعض 
  زابط كده ؟
  ",
]);
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"اللغز الاول : 
  
  ",
]);
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"اللغز تاني : 
  
  ",
]);
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"اللغز التالت : 
  
  ",
]);
}
 if ($text == '/start' && !in_array($chat_id, $winn) ){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"بالتوفيق 💚
      ",
  ]);
 }
 if ($text == $text and $text != '/start' and $text != '💚🧡'  and $text != '💜💚'  and $text != '💜💚'  && !in_array($chat_id, $winn)){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"اجابة غير صحيحة ☹️
      حاول مجددا 🤓
      ",
  ]);
 }
 
 if ($text == '💚🧡'  && !in_array($chat_id, $winn)){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"الللف الف الف مبروك ✨😍😍  
      اجابة صحيحة  🎉🎊
      ",
  ]);
   bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"قم باخذ لقطة للشاشة و ارسلها للمطور لاستلام جائزتك 
      ",
  ]);

  file_put_contents("winners.txt", $chat_id."\n",FILE_APPEND);
  bot('sendMessage',[
    'chat_id'=>$owais,
    'text'=>"عندك فائز 
    الاسم |    $name
    المعرف|   @$username
    
    ",
]);
bot('sendMessage',[
  'chat_id'=>$re7ab,
  'text'=>"عندك فائز 
  الاسم |    $name
  المعرف|   @$username
  
  ",
]);
bot('sendMessage',[
  'chat_id'=>-1001284452824,
  'text'=>" ✨مبروووك للفائز  
  الاسم |    $name
  المعرف|   @$username
  
  ",
]);
 } 

 if ($text == '💜💚' && !in_array($chat_id, $winn)  ){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"الللف الف الف مبروك ✨😍😍  
      اجابة صحيحة  🎉🎊
      ",
  ]);
   bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"قم باخذ لقطة للشاشة و ارسلها للمطور لاستلام جائزتك 
      المطور >> @this_is_owais <<
      ",
  ]);
  file_put_contents("winners.txt", $chat_id."\n",FILE_APPEND);
  bot('sendMessage',[
    'chat_id'=>$owais,
    'text'=>"عندك فائز 
    الاسم |    $name
    المعرف|   @$username
    
    ",
]);
bot('sendMessage',[
  'chat_id'=>$re7ab,
  'text'=>"عندك فائز 
  الاسم |    $name
  المعرف|   @$username
  
  ",
]);
bot('sendMessage',[
  'chat_id'=>-1001284452824,
  'text'=>" ✨مبروووك للفائز  
  الاسم |    $name
  المعرف|   @$username
  
  ",
]);
 } 

 if ($text == '💚💜' && !in_array($chat_id, $winn)){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"الللف الف الف مبروك ✨😍😍  
      اجابة صحيحة  🎉🎊
      ",
  ]);
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"قم باخذ لقطة للشاشة و ارسلها للمطور لاستلام جائزتك 
      المطور >> @this_is_owais <<
      ",
  ]);
  file_put_contents("winners.txt", $chat_id."\n",FILE_APPEND);
  bot('sendMessage',[
    'chat_id'=>$owais,
    'text'=>"عندك فائز 
    الاسم |    $name
    المعرف|   @$username
    
    ",
]);
bot('sendMessage',[
  'chat_id'=>$re7ab,
  'text'=>"عندك فائز 
  الاسم |    $name
  المعرف|   @$username
  
  ",
]);
bot('sendMessage',[
  'chat_id'=>-1001284452824,
  'text'=>" ✨مبروووك للفائز  
  الاسم |    $name
  المعرف|   @$username
  
  ",
]);
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"قم باخذ لقطة للشاشة و ارسلها للمطور لاستلام جائزتك 
    المطور >> @this_is_owais <<
    ",
]);
 } 
 
 if ($text == $text  && $text != '/info' && in_array($chat_id, $winn)){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"لقد فزت من قبل 
      لا يمكنك المشاركة مرة اخرى
      ",
  
    ]);
  }
  
  if($text == "/start" && !in_array($chat_id, $mems)  ) {
  
  bot('sendMessage',[
  'chat_id'=>$sudo,
  'text'=>"
  دخـل شـخـص للـبـوت 💗
  • الاسم ┊ $name ،
  • المعرف┊@$username ،
  • الايدي ┊ $from_id ،",
  ]);}
  
  if($text == '/info'  && $id == $sudo){
    bot('sendmessage',[
    'chat_id'=>$sudo,
    'text'=>"bot members are $members
winners are $winnex
    "
    
      ]);
  }
 