<?php 
ob_start(); 

error_reporting(0); 
date_default_timezone_set('Asia/Tehran');
$Sudo ="5463638796";//ایدی عددی ادیمن 
define('API_KEY','5719416112:AAEiiABcgxAVFERkAMxhLknrLcWqoblQDTQ');//توکن ربات هلپر
ini_set("log_errors","off");
function bot($method,$datas=[]){$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);$res = curl_exec($ch);
if(curl_error($ch)){var_dump(curl_error($ch));}else{return json_decode($res);}}
function GetMe(){return Bot('getMe');}
$bot = GetMe(); $botid = getMe() -> result -> username; $botname = getMe() -> result -> first_name; $botusername = getMe() -> result -> username;

$update = json_decode(file_get_contents('php://input'));$message = $update->message;$chat_id = $message->chat->id;
$message_id = $message->message_id;$from_id = $message->from->id;$fromid = $update->callback_query->from->id;
$firstname = $update->callback_query->from->first_name;$textmessage = $message->text;$inline = $update->inline_query->query;
$chatsid = $update->callback_query->from->id;$data = $update->callback_query->data;
$inline_message_id = $update->callback_query->inline_message_id;
$re_id = $update->message->reply_to_message->from->id;$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$edit = $update->edited_message->text;$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;$edit_for_id = $update->edited_message->from->id;
$membercall = $update->callback_query->id;
if(strpos($inline,'kosnell_') !== false ) {
$inlin = str_replace("kosnell_","",$inline);
bot("answerInlineQuery",[
"inline_query_id"=>$update->inline_query->id,
"results"=>json_encode([[
"type"=>"article",
"id"=>base64_encode(rand(5,555)),
"title"=>"♰♱ 𝑷𝒂𝒏𝒆𝒍 𝑴𝒂𝒏𝒂𝒈𝒆𝒓 𝑺𝒆𝒍𝒇  𝓜𝓻 𝓡𝓪𝓭𝓲 ♰♱",
"input_message_content"=>["parse_mode"=>"MarkDown","message_text"=>"♰♱ 𝑷𝒂𝒏𝒆𝒍 𝑴𝒂𝒏𝒂𝒈𝒆𝒓 𝑺𝒆𝒍𝒇  𝓜𝓻 𝓡𝓪𝓭𝓲 ♰♱"],
"reply_markup"=>["inline_keyboard"=>[
[["text"=>"⋐ 𝒍𝒐𝒄𝒌 𝒎𝒐𝒅𝒆𝒔 ⋑","callback_data"=>"lockmode"],
["text"=>"⋐ 𝑳𝒐𝒄𝒌 𝑨𝒄𝒕𝒊𝒐𝒏𝒔 ⋑","callback_data"=>"lockactions"]],

[["text"=>"⋐ 𝑰𝒏𝒇𝒐 ⋑","callback_data"=>"info"]],

[["text"=>"⋐ 𝑯𝒆𝒍𝒑 ⋑","callback_data"=>"Help"],
["text"=>"⋐ 𝑺𝒕𝒂𝒕𝒖𝒔 ⋑","callback_data"=>"Stats"]],

[["text"=>"⋐ 𝑬𝒙𝒊𝒕 ⋑","callback_data"=>"exit"]],]]]])]);}

if($data == "Stats" && $fromid == "$Sudo"){
    
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();

if (strpos(PHP_OS, 'L') !== false or strpos(PHP_OS, 'l') !== false) { $a = file_get_contents("/proc/meminfo");
 $b = explode('MemTotal:', $a)[1];
 $stats = explode(' kB', $b)[0] / 1024 / 1024;
if ($stats != 0) {$mem_total = $stats . 'GB';
} else { $mem_total = 'No Access';}} else {$mem_total = '!';}
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", ["text"=>"◉◉◉◉◉◉◉◉◉◉◉
☩ 𝑺𝒕𝒂𝒕𝒖𝒔 𝒊𝒔 : 
◉◉◉◉◉◉◉◉◉◉◉◉◉
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"☩ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$partmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$boldmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],["text"=>"$timename","callback_data"=>"text"]],
[["text"=>"☩ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],["text"=>"$timebio","callback_data"=>"text"]],
[["text"=>"☩ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$italicmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$codingmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$deletedmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$hashtagmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$mentionmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$mention2mode","callback_data"=>"text"]],
[["text"=>"☩ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$underlinemode","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆","callback_data"=>"text"],["text"=>"$typing","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆","callback_data"=>"text"],["text"=>"$game","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆","callback_data"=>"text"],["text"=>"$voice","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐","callback_data"=>"text"],["text"=>"$video","callback_data"=>"text"]],
[["text"=>"☩ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"☩ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);}
if($data == "exit" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"⌔ 𝑪𝒍𝒐𝒔𝒆 𝑻𝒉𝒆  𝓜𝓻 𝓡𝓪𝓭𝓲 𝑷𝒂𝒏𝒆𝒍 ⌔","inline_message_id"=>$inline_message_id,
'parse_mode'=>"html"]);}
if($data == "back" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"•••• 𝑷𝒂𝒏𝒆𝒍 𝑴𝒂𝒏𝒂𝒈𝒆𝒓 𝑺𝒆𝒍𝒇  𝓜𝓻 𝓡𝓪𝓭𝓲 ••••","inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
"reply_markup"=>["inline_keyboard"=>[
[["text"=>"⊈ 𝑳𝒐𝒄𝒌 𝑴𝒐𝒅𝒆𝒔 ⊉","callback_data"=>"lockmode"],
["text"=>"⊈ 𝑳𝒐𝒄𝒌 𝑨𝒄𝒕𝒊𝒐𝒏𝒔 ⊉","callback_data"=>"lockactions"]],

[["text"=>"⊈ 𝑰𝒏𝒇𝒐 ⊉","callback_data"=>"info"]],

[["text"=>"⊈ 𝑯𝒆𝒍𝒑 ⊉","callback_data"=>"Help"],
["text"=>"⊈ 𝑺𝒕𝒂𝒕𝒖𝒔 ⊉","callback_data"=>"Stats"]],
[["text"=>"⊈ 𝑬𝒙𝒊𝒕 ⊉","callback_data"=>"exit"]],]]]])]);}
if($data == "text" && $fromid == "$Sudo"){bot('answercallbackquery', ['callback_query_id' =>$membercall,
'text' => "𝑻𝒉𝒊𝒔 𝒔𝒆𝒍𝒄𝒕𝒆𝒅 𝑵𝒐𝒕 𝑪𝒉𝒆𝒏𝒈𝒆𝒅\n𝑪𝒓𝒆𝒂𝒕𝒐𝒓 : Lashzi Azam\𝑩𝒐𝒕 Name : $botname
𝑩𝒐𝒕 𝑼𝒔𝒆𝒓𝒏𝒂𝒎𝒆 : @$botid
",'show_alert' =>true]);}
if($data == "Stats" && $fromid == "$Sudo"){
    
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();

if (strpos(PHP_OS, 'L') !== false or strpos(PHP_OS, 'l') !== false) { $a = file_get_contents("/proc/meminfo");
 $b = explode('MemTotal:', $a)[1];
 $stats = explode(' kB', $b)[0] / 1024 / 1024;
if ($stats != 0) {$mem_total = $stats . 'GB';
} else { $mem_total = 'No Access';}} else {$mem_total = '!';}
bot("editmessagetext", ["text"=>"●●●●●●●●●●●●●●●●●●●●
☩ 𝑺𝒕𝒂𝒕𝒖𝒔 𝒊𝒔 : 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"☩ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$partmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$boldmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],["text"=>"$timename","callback_data"=>"text"]],
[["text"=>"☩ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],["text"=>"$timebio","callback_data"=>"text"]],
[["text"=>"☩ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$italicmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$codingmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$deletedmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$hashtagmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$mentionmode","callback_data"=>"text"]],
[["text"=>"☩ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$mention2mode","callback_data"=>"text"]],
[["text"=>"☩ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],["text"=>"$underlinemode","callback_data"=>"text"]],
[["text"=>"☩ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"text"]],
[["text"=>"☩ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆","callback_data"=>"text"],["text"=>"$typing","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆","callback_data"=>"text"],["text"=>"$game","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆","callback_data"=>"text"],["text"=>"$voice","callback_data"=>"text"]],
[["text"=>"☩ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐","callback_data"=>"text"],["text"=>"$video","callback_data"=>"text"]],
[["text"=>"☩ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"☩ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);}
if($data == "Help" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎ 
♡ 𝑯𝒆𝒍𝒑 𝑭𝒐𝒓  𝓜𝓻 𝓡𝓪𝓭𝓲 𝑺𝒆𝒍𝒇 ♡
◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎ 
1 ☈ 𝑯𝒆𝒍𝒑 𝑴𝒂𝒏𝒂𝒈𝒆𝒓
◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎
2 ☈ 𝑯𝒆𝒍𝒑 𝒂𝒅𝒗𝒂𝒏𝒄𝒆𝒅
◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎
3 ☈ 𝑯𝒆𝒍𝒑 𝑨𝒄𝒕𝒊𝒐𝒏𝒔
◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎
4 ☈ 𝑯𝒆𝒍𝒑 𝑴𝒐𝒅𝒆𝒔
◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎
5 ☈ 𝑯𝒆𝒍𝒑 𝑭𝒖𝒏
◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎◎","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"❶","callback_data"=>"1"],
["text"=>"❷","callback_data"=>"2"],
["text"=>"❸","callback_data"=>"3"],
["text"=>"❹","callback_data"=>"4"],
["text"=>"❺","callback_data"=>"5"]],
[["text"=>"☩ ⌫ ☩","callback_data"=>"back"]],]])]);}
if($data == "1" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
⌯⌯ 𝑺𝒆𝒔𝒆𝒊𝒐𝒏 𝑴𝒂𝒏𝒂𝒈𝒆𝒓 ⌯⌯
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/signal ` (𝑶𝒏) یا (𝑶𝒇𝒇) 
▽ ⌬ خاموش و روشن کردن ربات ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `ping `
▽ ⌬ دریافت وضعیت ربات ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `block ` (UserName) یا Rreply) 
▽ ⌬ بلاک کردن شخصی  ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `unblock ` (UserName) یا Rreply) 
▽ ⌬ آزاد کردن شخصی از بلاک  ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/restart`
▽ ⌬ برای 0 کردن حافظه ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `clean all`
▽ ⌬ پاکسازی تمامی پیام های گروه در صورت ادمین بودن ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `setname ` (YourName)
▽ ⌬ تغییر اسم اکانت ⌬  
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `setbio ` (Yourbio)
▽ ⌬ تغییر اسم بیو اکانت ⌬  
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `status `
▽ ⌬ دریافت وضعیت . . . ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `setenemy ` (Reply) or (InPV)
▽ ⌬ افزودن یک کاربر به لییست دشمنان ⌬ 
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `delenemy ` (Reply) or (InPV)
▽ ⌬ حذف یک کاربر به لیست دشمنان ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `enemylist`
▽ ⌬ نمایش لیست دشمنان ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `cleanenemylist`
▽ ⌬ پاکسازی لیست دشمنان ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"⓵","callback_data"=>"1"],
["text"=>"❷","callback_data"=>"2"],
["text"=>"❸","callback_data"=>"3"],
["text"=>"❹","callback_data"=>"4"],
["text"=>"❺","callback_data"=>"5"]],
[["text"=>"☩ ⌫ ☩","callback_data"=>"back"]],]])]);}
if($data == "2" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
⌯⌯ 𝑺𝒆𝒂𝒔𝒊𝒐𝒏 𝑨𝒅𝒗𝒂𝒏𝒄𝒆𝒅 ⌯⌯
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `number | شمارت ` [Reply] یا [InPV] 
▽ ⌬ دریافت شماره کاربر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `num | شماره ی ` [UserID] 
▽ ⌬ دریافت شماره کاربر آیدی عددی ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/info ` [UserName] یا [UserID] 
▽ ⌬ دریافت اطلاعات کاربر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/gpinfo ` 
▽ ⌬ دریافت اطلاعات گروه ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/flood ` [Count] [Text]
▽ ⌬ ارسال اسپم یک متن به تعداد دلخواه⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/save ` [Reply] 
▽ ⌬ سیو کردن پیام و محتوا  در پیوی خود ربات ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/id ` [reply] 
▽ ⌬ دریافت ایدی عددی کابر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `!php ` Code 
▽ ⌬ اجرای کد های زبان PHP ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `whois ` Domain 
▽ ⌬ دریافت اطلاعات دامنه مورد نظر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `scr ` Url 
▽ ⌬ دریافت اسکرین شات از سایت مورد نظر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `ping ` Url 
▽ ⌬ دریافت پینگ سایت مورد نظر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `brc ` Url 
▽ ⌬ ساخت QR برای لینک مورد نظر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `git ` (username/project) or (Url)
▽ ⌬ دانلود فایل فشرده یک سورس از گیتهاب ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `user ` UserID
▽ ⌬ منشن کردن یک شخص از طریق آیدی عددی ⌬ 
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"❶","callback_data"=>"1"],
["text"=>"⓶","callback_data"=>"2"],
["text"=>"❸","callback_data"=>"3"],
["text"=>"❹","callback_data"=>"4"],
["text"=>"❺","callback_data"=>"5"]],
[["text"=>"☩ ⌫ ☩","callback_data"=>"back"]],]])]);}
if($data == "3" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽  ⌯⌯ 𝑺𝒆𝒂𝒔𝒆𝒊𝒐𝒏 𝑴𝒐𝒅𝒆𝒔 ⌯⌯
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `poker ` on یا off 
▽ ⌬ حالت جواب خودکار به پوکر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `part ` on یا off 
▽ ⌬ حالت حرف به حرف نوشتن ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `hashtag ` on یا off 
▽ ⌬ حالت نوشتن متن با هشتگ ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `italic ` on یا off 
▽ ⌬ حالت نوشتن متن به صورت کج ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `coding ` on یا off 
▽ ⌬ حالت نوشتن متن به صورت تکی و کدینگ ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `underline ` on یا off 
▽ ⌬ حالت نوشتن متن به صورت زیر خط دار ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `deleted ` on یا off 
▽ ⌬ حالت نوشتن متن به صورت خط خورده  ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `bold ` on یا off 
▽ ⌬ حالت نوشتن متن به صورت ضخیم ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `mention ` on یا off 
▽ ⌬ حالت نوشتن متن با منشن کردن روی آیدی اکانت ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `mention2 ` on یا off 
▽ ⌬  نوشتن متن با منشن کردن روی آیدی اکانت فرد ریپلای شده ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `reverse ` on یا off 
▽ ⌬ حالت نوشتن متن به صورت معکوس ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `time name ` on یا off 
▽ ⌬ حالت ساعت در اسم ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ `time bio ` on یا off 
▽ ⌬ حالت ساعت در بیو ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `online ` on یا off 
▽ ⌬ حالت همیشه آنلاین ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"❶","callback_data"=>"1"],
["text"=>"❷","callback_data"=>"2"],
["text"=>"⓷","callback_data"=>"3"],
["text"=>"❹","callback_data"=>"4"],
["text"=>"❺","callback_data"=>"5"]],
[["text"=>"☩ ⌫ ☩","callback_data"=>"back"]],]])]);}
if($data == "4" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ ** 𝑺𝒆𝒔𝒆𝒊𝒐𝒏 𝑨𝒄𝒕𝒊𝒐𝒏 **
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `ac type ` on یا off 
▽ ⌬ اکشن ارسال وضعیت درحال نوشتن ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `ac voice ` on یا off 
▽  ⌬ اکشن وضعیت درحال ارسال صدا ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `ac video ` on یا off 
▽ ⌬ اکشن وضعیت درحال ارسال ویدئو ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `ac game ` on یا off 
▽ ⌬ اکشن وضعیت درحال بازی کردن ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"❶","callback_data"=>"1"],
["text"=>"❷","callback_data"=>"2"],
["text"=>"❸","callback_data"=>"3"],
["text"=>"⓸","callback_data"=>"4"],
["text"=>"❺","callback_data"=>"5"]],
[["text"=>"☩ ⌫ ☩","callback_data"=>"back"]],]])]);}
if($data == "5" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
 ⌯⌯ Seasion Fun ⌯⌯
 ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/blue ` + نوشته شما 
▽ ⌬ ابی کردن نوشته شما ⌬
 ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/google ` + متن مورد نظر
▽ ⌬ جستجو متن شما در گوگل ⌬
 ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/mame ` + نام 
▽ ⌬ اندازه ممه فرد موردنظر ⌬
 ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/kir ` + نام 
▽ ⌬ اندازه کیر شخص موردنظر ⌬
 ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/gay ` + نام
▽ ⌬ درصد گی بودن شخص موردنظر ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/music ` [TEXT] 
▽ ⌬ موزیک درخواستی ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/gif ` [Text] 
▽ ⌬ گیف درخاستی ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/pic ` [Text] 
▽ ⌬ عکس درخاستی ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/apk ` [Text] 
▽ ⌬ برنامه درخاستی ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/like ` [Text] 
▽ ⌬ گذاشتن دکمه شیشه ای لایک زیر متن ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ `/upload ` [URL] 
▽ ⌬ اپلود فایل از لینک ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ `/meme ` [Text] 
▽ ⌬ ویس درخاستی از ربات پرشین میم ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/giff ` [Text] 
▽ ⌬ گیف درخاستی با متن دلخواه ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `font ` [Text] 
▽ ⌬ ساخت فونت اسم لاتین شما با 125 مدل مختلف ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `fafont ` [Text] 
▽ ⌬ ساخت فونت اسم فارسی شما با 10 مدل مختلف ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `age ` (Y)(M)(D) 
▽ ⌬ درخاست محاسبه سن شما ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `arz`
▽ ⌬ دریافت قیمت ارز ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ `rev ` [Text] 
▽ ⌬ معکوس کردن جمله شما ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ `meane ` [Text] 
▽ ⌬ دریافت معانی کلمات فارسی ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ `kalame ` [Level] 
▽ ⌬ دریافت بازی از ربات کلمه ⌬
▽ (مبتدی|ساده|متوسط|سخت|وحشتناک)
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ `fal` 
▽ ⌬ دریافت فال حافظ ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/icon ` [Text] 
▽ ⌬ آیکون با کلمه درخاستی و شکلک رندوم ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ 
▽ `/lid ` [ID] 
▽ ⌬ برای دریافت لینک آیکون مورد نظر در پیوی خودتان ⌬
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
▽ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆 : ⌬$mem_using⌬ ᴍɢ
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"❶","callback_data"=>"1"],
["text"=>"❷","callback_data"=>"2"],
["text"=>"❸","callback_data"=>"3"],
["text"=>"❹","callback_data"=>"4"],
["text"=>"⓹","callback_data"=>"5"]],
[["text"=>"☩ ⌫ ☩","callback_data"=>"back"]],]])]);}
//===============================================
if($data == "info" && $fromid == "$Sudo"){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
bot("editmessagetext", [
"text"=>"๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑭𝒊𝒓𝒔𝒕 𝑵𝒂𝒎𝒆 ⌭ `𝑨𝑴𝑰𝑹` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑳𝒂𝒔𝒕 𝑵𝒂𝒎𝒆 ⌭ `𝑳𝒂𝒔𝒉𝒊 𝑨𝒛𝒂𝒎` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑼𝒔𝒆𝒓𝒏𝒂𝒎𝒆 ⌭ `@AmirPhP` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑼𝒔𝒆𝒓 𝒊𝒅 ⌭ `358165791` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑷𝒉𝒐𝒏𝒆 ⌭ `+98 90* *** **85` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑬𝒎𝒂𝒊𝒍 ⌭ `a******s@gmail.com` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• Base For ⌭ `Smoke_Team` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑷𝒊𝒏𝒈 ⌭ `$load[0]` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
• 𝑹𝒂𝒎 ⌭ `$mem_using` ⌭
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
}

if($data == "back" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"𝒘𝒂𝒊𝒕"]);
bot("editmessagetext", [
"text"=>"♰♱ 𝑷𝒂𝒏𝒆𝒍 𝑴𝒂𝒏𝒂𝒈𝒆𝒓 𝑺𝒆𝒍𝒇  𝓜𝓻 𝓡𝓪𝓭𝓲 ♰♱","inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⊈ 𝑳𝒐𝒄𝒌 𝑴𝒐𝒅𝒆𝒔 ⊉","callback_data"=>"lockmode"],
["text"=>"⊈ 𝑳𝒐𝒄𝒌 𝑨𝒄𝒕𝒊𝒐𝒏𝒔 ⊉","callback_data"=>"lockactions"]],

[["text"=>"⋐ 𝑰𝒏𝒇𝒐 ⋑","callback_data"=>"info"]],

[["text"=>"⊈ 𝑯𝒆𝒍𝒑 ⊉","callback_data"=>"Help"],
["text"=>"⊈ 𝑺𝒕𝒂𝒕𝒖𝒔 ⊉","callback_data"=>"Stats"]],

[["text"=>"⊈ 𝑬𝒙𝒊𝒕 ⊉","callback_data"=>"exit"]],]])]);}



//=====================================================
if($data == "lockmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
bot("editmessagetext", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
}   
//==========================================================
if($data == "partmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($partmode == "on"){
file_put_contents('part.txt','off');
$partmode=file_get_contents("part.txt");
}else{
    file_put_contents('part.txt','on');
    $partmode=file_get_contents("part.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
}   
//=======================================================================
if($data == "timename" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($timename == "on"){
file_put_contents('timename.txt','off');
$timename=file_get_contents("timename.txt");
}else{
    file_put_contents('timename.txt','on');
    $timename=file_get_contents("timename.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
}   
//=======================================================================
if($data == "hashtagmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($hashtagmode == "on"){
file_put_contents('hashtag.txt','off');
$hashtagmode=file_get_contents("hashtag.txt");
}else{
    file_put_contents('hashtag.txt','on');
    $hashtagmode=file_get_contents("hashtag.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],
/*
─═ঊঈঊঈ═─╮
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
https://t.me/Smoke_Team
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
اسموک تیم
انواع سورس
رایگان و دیباگ
ادرس کانال
https://t.me/Smoke_Team
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
سورس سلف اسموک همراه با پنل شیشه ای
بخاطر یه عده حرومزاده لاشی صفت ولد سگ اپن شد 
اینا شیر ننه نخوردن شیر سگ خوردن
مادر همشونو میگام
منبع رو ببینم پاک کردی ننتو میگام کونی
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
نوشته شده توسط = @AQUARVIS
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
https://t.me/Smoke_Team
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
نوب بازی نکن و منبع بزن
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
https://t.me/Smoke_Team
๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑-=
─═ঊঈঊঈ═─╯
*/
[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
} 
//=======================================================================
if($data == "timebio" && $fromid == "$Sudo"){
    $partmode=file_get_contents("part.txt");
    $timename = file_get_contents("timename.txt");
    $timebio = file_get_contents("timebio.txt");
    $hashtagmode=file_get_contents("hashtag.txt");
    $mentionmode=file_get_contents("mention.txt");
    $boldmode=file_get_contents("bold.txt");
    $italicmode=file_get_contents("italic.txt");
    $underlinemode=file_get_contents("underline.txt");
    $deletedmode=file_get_contents("deleted.txt");
    $mention2mode = file_get_contents("mention2.txt");
    $codingmode = file_get_contents("coding.txt");
    $profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
    $reversemode = file_get_contents("reversemode.txt");
    $mem_using = round(memory_get_usage() / 1024 / 1024,1);
    $load = sys_getloadavg();    
    if ($timebio == "on"){
    file_put_contents('timebio.txt','off');
    $timebio=file_get_contents("timebio.txt");
    }else{
        file_put_contents('timebio.txt','on');
        $timebio=file_get_contents("timebio.txt");
    }
    bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
    ⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
    ●●●●●●●●●●●●●●●●●●●●
    ","inline_message_id"=>$inline_message_id,
    'parse_mode'=>"MarkDown",
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[
    [["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$partmode","callback_data"=>"partmode"]],
    
    [["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$boldmode","callback_data"=>"boldmode"]],
    
    [["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
    ["text"=>"$timename","callback_data"=>"timename"]],
    
    [["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
    ["text"=>"$timebio","callback_data"=>"timebio"]],
    
    [["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$italicmode","callback_data"=>"italicmode"]],
    
    [["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$codingmode","callback_data"=>"codingmode"]],
    
    [["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$deletedmode","callback_data"=>"deletedmode"]],
    
    [["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],
    
    [["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$mentionmode","callback_data"=>"mentionmode"]],
    
    [["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$mention2mode","callback_data"=>"mention2mode"]],
    
    [["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$underlinemode","callback_data"=>"underlinemode"]],
    
    [["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$reversemode","callback_data"=>"reversemode"]],
    
    [["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
    ["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
    [["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
    ],
    
    [["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
    ["text"=>"$load[0]","callback_data"=>"text"]],
    
    [["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
    ["text"=>"$mem_using","callback_data"=>"text"]],
    
    [["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
    ]])]);
    }     
//=======================================================================
if($data == "mentionmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($mentionmode == "on"){
file_put_contents('mention.txt','off');
$mentionmode=file_get_contents("mention.txt");
}else{
    file_put_contents('mention.txt','on');
    $mentionmode=file_get_contents("mention.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
}   
//=======================================================================
if($data == "boldmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($boldmode == "on"){
file_put_contents('bold.txt','off');
$boldmode=file_get_contents("bold.txt");
}else{
    file_put_contents('bold.txt','on');
    $boldmode=file_get_contents("bold.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
} 
//=======================================================================
if($data == "italicmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($italicmode == "on"){
file_put_contents('italic.txt','off');
$italicmode=file_get_contents("italic.txt");
}else{
    file_put_contents('italic.txt','on');
    $italicmode=file_get_contents("italic.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
} 
//=======================================================================
if($data == "underlinemode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($underlinemode == "on"){
file_put_contents('underline.txt','off');
$underlinemode=file_get_contents("underline.txt");
}else{
    file_put_contents('underline.txt','on');
    $underlinemode=file_get_contents("underline.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
} 
//=======================================================================
if($data == "deletedmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($deletedmode == "on"){
file_put_contents('deleted.txt','off');
$deletedmode=file_get_contents("deleted.txt");
}else{
    file_put_contents('deleted.txt','on');
    $deletedmode=file_get_contents("deleted.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
} 
//=======================================================================
if($data == "mention2mode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");

$profname = file_get_contents("profname.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($mention2mode == "on"){
file_put_contents('mention2.txt','off');
$mention2mode=file_get_contents("mention2.txt");
}else{
    file_put_contents('mention2.txt','on');
    $mention2mode=file_get_contents("mention2.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],

[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
} 
//=======================================================================
if($data == "codingmode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($codingmode == "on"){
file_put_contents('coding.txt','off');
$codingmode=file_get_contents("coding.txt");
}else{
    file_put_contents('coding.txt','on');
    $codingmode=file_get_contents("coding.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
} 
//=======================================================================
if($data == "onlinemode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($onlinemode == "on"){
file_put_contents('online.txt','off');
$onlinemode=file_get_contents("online.txt");
}else{
    file_put_contents('online.txt','on');
    $onlinemode=file_get_contents("online.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
}    
//=======================================================================
if($data == "reversemode" && $fromid == "$Sudo"){
$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$timebio = file_get_contents("timebio.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();    
if ($reversemode == "on"){
file_put_contents('reversemode.txt','off');
$reversemode=file_get_contents("reversemode.txt");
}else{
    file_put_contents('reversemode.txt','on');
    $reversemode=file_get_contents("reversemode.txt");
}
bot("editMessageReplyMarkup", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑷𝒂𝒓𝒕 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],

[["text"=>"⌭ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$timename","callback_data"=>"timename"]],

[["text"=>"⌭ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐","callback_data"=>"text"],
["text"=>"$timebio","callback_data"=>"timebio"]],

[["text"=>"⌭ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],

[["text"=>"⌭ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],

[["text"=>"⌭ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],

[["text"=>"⌭ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],

[["text"=>"⌭ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],

[["text"=>"⌭ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],

[["text"=>"⌭ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],

[["text"=>"⌭ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);
}    
//=============================================================================
if($data == "lockactions" && $fromid == "$Sudo"){
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
//if(){
bot("editmessagetext", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆","callback_data"=>"text"],
["text"=>"$typing","callback_data"=>"typing"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$game","callback_data"=>"game"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆","callback_data"=>"text"],
["text"=>"$voice","callback_data"=>"voice"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐","callback_data"=>"text"],
["text"=>"$video","callback_data"=>"video"]],

[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);


}
    
//=============================================================================
if($data == "typing" && $fromid == "$Sudo"){
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
if($dataa['typing'] == "on"){
    $dataa['typing'] = "off";
    file_put_contents("data.json", json_encode($dataa));
    $typing = $dataa['typing'];
}else{
    $dataa['typing'] = "on";
    file_put_contents("data.json", json_encode($dataa));
    $typing = $dataa['typing'];
}
bot("editmessagetext", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆","callback_data"=>"text"],
["text"=>"$typing","callback_data"=>"typing"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$game","callback_data"=>"game"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆","callback_data"=>"text"],
["text"=>"$voice","callback_data"=>"voice"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐","callback_data"=>"text"],
["text"=>"$video","callback_data"=>"video"]],

[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);


}
//=============================================================================
if($data == "game" && $fromid == "$Sudo"){
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
if($dataa['game'] == "on"){
    $dataa['game'] = "off";
    file_put_contents("data.json", json_encode($dataa));
    $game = $dataa['game'];
}else{
    $dataa['game'] = "on";
    file_put_contents("data.json", json_encode($dataa));
    $game = $dataa['game'];
}

bot("editmessagetext", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆","callback_data"=>"text"],
["text"=>"$typing","callback_data"=>"typing"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$game","callback_data"=>"game"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆","callback_data"=>"text"],
["text"=>"$voice","callback_data"=>"voice"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐","callback_data"=>"text"],
["text"=>"$video","callback_data"=>"video"]],

[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);


}
//=============================================================================
if($data == "voice" && $fromid == "$Sudo"){
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
if($dataa['voice'] == "on"){
    $dataa['voice'] = "off";
    file_put_contents("data.json", json_encode($dataa));
    $voice = $dataa['voice'];
}else{
    $dataa['voice'] = "on";
    file_put_contents("data.json", json_encode($dataa));
    $voice = $dataa['voice'];
}
bot("editmessagetext", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆","callback_data"=>"text"],
["text"=>"$typing","callback_data"=>"typing"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$game","callback_data"=>"game"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆","callback_data"=>"text"],
["text"=>"$voice","callback_data"=>"voice"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐","callback_data"=>"text"],
["text"=>"$video","callback_data"=>"video"]],

[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);


} 
//=============================================================================
if($data == "video" && $fromid == "$Sudo"){
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
if($dataa['video'] == "on"){
    $dataa['video'] = "off";
    file_put_contents("data.json", json_encode($dataa));
    $video = $dataa['video'];
}else{
    $dataa['video'] = "on";
    file_put_contents("data.json", json_encode($dataa));
    $video = $dataa['video'];
}
bot("editmessagetext", ["text"=>"●●●●●●●●●●●●●●●●●●●●
⌭ 𝑶𝒏 𝑶𝒓 𝑶𝑭𝑭 𝒀𝒐𝒖𝒓 𝑴𝒐𝒅𝒆𝒔 
●●●●●●●●●●●●●●●●●●●●
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆","callback_data"=>"text"],
["text"=>"$typing","callback_data"=>"typing"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆","callback_data"=>"text"],
["text"=>"$game","callback_data"=>"game"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆","callback_data"=>"text"],
["text"=>"$voice","callback_data"=>"voice"]],

[["text"=>"⌭ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐","callback_data"=>"text"],
["text"=>"$video","callback_data"=>"video"]],

[["text"=>"⌭ ๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑๑ ⌭","callback_data"=>"text"],
],

[["text"=>"⌭ 𝑷𝒊𝒏𝒈","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],

[["text"=>"⌭ 𝑹𝒂𝒎 𝒖𝒔𝒂𝒈𝒆","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],

[["text" => "☩ ⌫ ☩", "callback_data" => "back"]],
]])]);

} 