        Bot رَِاَِدَِیَِ صَِلَِفَِمَِــَِ[-🌹-]  [♥️]  |        @radi_self ||   
  <?php 
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
ارتقای سلف | دیباگ سورس میدلاین|تبچی پیشرفته  
میتوانید در کانال زیر مشاهده کنید !
 @RADI_SELF
*/
error_reporting(0);  
ini_set("log_errors","off");
ini_set('display_errors','1');
ini_set('memory_limit' , '-1');
ini_set('max_execution_time','0');
ini_set('display_startup_errors','1');
 if(!is_dir('data')) mkdir('data');
 if(!file_exists('data/gif.txt')) file_put_contents("data/gif.txt","https://t.me/self_radim/749");
 if(!file_exists('data/sti.txt')) file_put_contents("data/sti.txt","https://t.me/self_radim/750");
 if(!file_exists('data/voise.txt')) file_put_contents("data/voise.txt","https://t.me/self_radim/751");
if(!file_exists('data/caption.txt')) file_put_contents("data/caption.txt","@radi_self");
if(!file_exists('settimename.txt')) file_put_contents("settimename.txt","@RADI_SELF");  
if(!file_exists('settimebio.txt')) file_put_contents("settimebio.txt","@RADI_SELF");
if(!file_exists('data/comment.txt')) file_put_contents("data/comment.txt","@radi_self"); 
if(!file_exists('data/comment2.txt')) file_put_contents("data/comment2.txt","@radi_self"); 
if(!file_exists('data/comment3.txt')) file_put_contents("data/comment3.txt","@radi_self"); 
if(!file_exists('data/comment4.txt')) file_put_contents("data/comment4.txt","@radi_self"); 
if (!file_exists('data/camentgif.txt')) {
    file_put_contents('data/camentgif.txt', 'off');
}
if (!file_exists('data/camentvoise.txt')) {
    file_put_contents('data/camentvoise.txt', 'off');
}
if (!file_exists('data/camentsticker.txt')) {
    file_put_contents('data/camentsticker.txt', 'off');
}
if(!file_exists('data.json')){
file_put_contents('data.json', '{"power":"on","adminStep":"","markread":"off","typing":"off","voice":"off","locklink":"off","locktg":"off","lockphoto":"off","lockforward":"off","lockgp":"off","lockpv1":"off","typingpv":"off","lockpv":"off","actionsticker":"off","video":"off","game":"off", "answering":[],"enemies":[],"settyping":[],"foshlist":[],"admins":[]}');
}
if(!file_exists('online.txt')){
file_put_contents('online.txt','off');
} 
if(!file_exists('bold.txt')){
file_put_contents('bold.txt','off');
}
if(!file_exists('part.txt')){
file_put_contents('part.txt','off');
}
if (!file_exists('italic.txt')) {
    file_put_contents('italic.txt', 'off');
}
if (!file_exists('mention.txt')) {
    file_put_contents('mention.txt', 'off');
}
if (!file_exists('mention2.txt')) {
    file_put_contents('mention2.txt', 'off');
}
if (!file_exists('coding.txt')) {
    file_put_contents('coding.txt', 'off');
}
if (!file_exists('underline.txt')) {
    file_put_contents('underline.txt', 'off');
}
if (!file_exists('profname.txt')) {
    file_put_contents('profname.txt', 'off');
}
if (!file_exists('bioname.txt')) {
    file_put_contents('bioname.txt', 'off');
}
if (!file_exists('reversemode.txt')) {
    file_put_contents('reversemode.txt', 'off');
}
if (!file_exists('deleted.txt')) {
    file_put_contents('deleted.txt', 'off');
}
if (!file_exists('timename.txt')) {
    file_put_contents('timename.txt', 'off');
}
if (!file_exists('timebio.txt')) {
    file_put_contents('timebio.txt', 'off');
}
if (!file_exists('timepic.txt')) {
    file_put_contents('timepic.txt', 'off');
}
if (!file_exists('hashtag.txt')) {
    file_put_contents('hashtag.txt', 'off');
}
if (!file_exists('cament.txt')) {
    file_put_contents('cament.txt', 'off');
}
if (!file_exists('cament2.txt')) {
    file_put_contents('cament2.txt', 'off');
}
if (\file_exists(__DIR__.'/vendor/autoload.php')) {
    include __DIR__.'/vendor/autoload.php';
} else {
    if (!\file_exists(__DIR__.'/madeline.php')) {
        \copy('https://phar.madelineproto.xyz/madeline.php',__DIR__.'/madeline.php');
    }
    /** 
     */
    include __DIR__.'/madeline.php';
}
  include 'jdf.php'; 
use \danog\MadelineProto\API; 
use danog\MadelineProto\RPCErrorException;
use \danog\Loop\Generic\GenericLoop; 
use danog\MadelineProto\Logger;
use danog\MadelineProto\Settings;
use \danog\MadelineProto\EventHandler;
//=====================================
date_default_timezone_set('Asia/Tehran'); 
//=======================================
class XHandler extends EventHandler
{
    const Admins = [ ];//id admin
    const Report = ' ';//user reporter 
    
    public function getReportPeers()
    {
        return [self::Report];
    }
    
    public function genLoop()
    {
        yield $this->account->updateStatus([
            'offline' => false
        ]);
          if (file_get_contents('timebio.txt') == 'on') {
    $time = date("H:i");
    $fonts =  [["⁰", "₁", "²", "₃", "⁴", "₅", "⁶", "₇", "⁸", "₉"]];
    $time = date("H:i");
    $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H:i")); 
    $day_name = jdate('l');
       $ja1 =   file_get_contents('settimebio.txt') ;
    $this->account->updateProfile(['about' => "$ja1 |ᴛɪᴍᴇ :$time2 || $day_name"]);
}
//================================
          if (file_get_contents('timepic.txt') == 'on') {
header('Content-Type: image/png');
date_default_timezone_set('Asia/Tehran');
$im = imagecreatefromjpeg('photo.jpg');
$white = imagecolorallocate($im,255,255,255);
$whit = imagecolorallocate($im,0,204,255);
$grey = imagecolorallocate($im, 128, 127, 128);
$red = imagecolorallocate($im, 255, 0, 0);
$black = imagecolorallocate($im, 0, 0, 0);
$text = date('H:i');
$font = './f.ttf';
imagettftext($im, 40, 0, 270, 550, $red, $font, $text);
imagepng($im,'photo.jpg');
imagedestroy($im); 
  yield $this->photos->updateProfilePhoto(['remove']);
  yield $this->sleep(2);
 yield $this->photos->uploadProfilePhoto(['file' => 'photo.jpg']);  
}
//=================================
if (file_get_contents('timename.txt') == 'on') {
   $time = date("H:i"); 
   $f1 = array("¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹","⁰");
$f2 = array("1","²","3","⁴","5","⁶","7","⁸","9","⁰"); 
$ar = array($f1,$f2 );
$arrr = array(1,2,3,4,5,6,7,8,9,0);
$tip = $ar[array_rand($ar)];
$tiimm = str_replace($arrr,$tip,$time);
    $bk = ["❤️" , "🧡","💛","💚", "💙","💜","🖤","🤍",  "🤎"];
    $Aa = $bk[rand(0, count($bk)-1)];
       $ja1 =   file_get_contents('settimename.txt') ;
    $this->account->updateProfile(['first_name' => "$ja1 $Aa $tiimm "]);
}
        /*yield $this->messages->sendMessage([
            'peer'    => self::Admins[0],
            'message' => 'Generic Loop Start At : ' . date('H:i:s')
        ]);*/
        return 60000;
    }
//=======================================      
function sendOrEdit($update,$text,$parse_mode="markdown"){
    if($update['message']['out']){
        yield $this->messages->editMessage(['peer' =>  yield $this->getID($update),'id' => $update['message']['id'],  'message' => $text,'parse_mode'=>$parse_mode ,'no_webpage' => true]); 
    }else{
        yield $this->messages->sendMessage(['peer' => yield $this->getID($update) ,'reply_to_msg_id' => $update['message']['id'], 'message' => $text,'parse_mode'=>$parse_mode ,'no_webpage' => true]);}}    
    public function onStart()
    {
        $genLoop = new GenericLoop([$this, 'genLoop'], 'update Status');
        $genLoop->start();
    }
    
    public function onUpdateNewChannelMessage($update)
    {
        yield $this->onUpdateNewMessage($update);
    }
    
    public function onUpdateNewMessage($update)
    {
        if (time() - $update['message']['date'] > 2) {
            return;
        } 
try { 
$text = $update['message']['message']?? null;
$msg_id =$update['message']['id']?? 0;
$message = $update['message'] ?? []; 
$MadelineProto = $this;
$me = yield $MadelineProto->get_self();
$admin = $me['id'];
$chID = yield $MadelineProto->get_info($update);
$peer = $chID['bot_api_id'];
$type3 = $chID['type'];
$data = json_decode(file_get_contents("data.json"), true);
$step = $data['adminStep'];
$op = @$update['pts'];
 $replyToId = $update['message']['reply_to']['reply_to_msg_id']?? 0;
$from_id = $update['message']['from_id']['user_id']?? 0; 
$url = "https://radim.ga/9"; // آدرس پوشه ای که سورس داخلشه رو بزارید
$helper = "@aliradi34345bot"; // آیدی ربات هلپر همراه با @
if(!file_exists('ooo')){
file_put_contents('ooo', '');
}
if(file_exists('ooo') && file_get_contents('online.txt') == 'on' && (time() - filectime('ooo')) >= 30){
   @unlink('ooo');
   @file_put_contents('ooo', '');
   yield $MadelineProto->account->updateStatus(['offline' => false]);
  }
$partmode=file_get_contents("part.txt");
$timename =  file_get_contents("timename.txt"); 
$timebio =  file_get_contents("timebio.txt"); 
$hashtagmode=file_get_contents("hashtag.txt"); 
$mentionmode= file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode= file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode =  file_get_contents("mention2.txt");
$codingmode =file_get_contents("coding.txt");
$profname = file_get_contents("profname.txt");
$bioname =file_get_contents("bioname.txt");
$reversemode = file_get_contents("deleted.txt");
$onlinemode =file_get_contents("online.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);   
$dastoorat =
[
"رهنما",
"help",
"ریستارت",
"restart",
"مصرف",
"وضعیت",
"status",
"ماشین",
"شمارت",
"شماره ی",
"num",
"number",
"شماره",
"بکیرم",
"قلب",
"time name on",
"part on",
"hashtag on",
"bold on",
"italic on",
"selfradi on",
"mention on",
"underline on",
"deleted on",
"mention2 on",
"bot on",
"/help",
"پینگ",
"ربات",
"time name off",
"part off",
"hashtag off",
"selfradi off",
"mention off",
"bold off",
"italic off",
"underline off",
"deleted off",
"mention2 off",
"ساک ایت",
"coding off",
"reverse on",
"reverse off",
"coding on",
"arz",
"ارز",
]; 
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
//============ Bot On | Off ==============
if($from_id == $admin|| isset($data[ 'admins' ][ $from_id ])  ){
if(preg_match("/^[\/\#\!]?(selfradi) (on|off)$/i", $text, $m)){ 
$data['power'] = $m[2];
 file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑺𝒆𝒍𝒇 𝑺𝒊𝒈𝒂𝒏𝒍 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
if(preg_match( "/^[#\!\/](Addadmin) (.*)$/", $text, $text1 )){
if ( $from_id == $admin ) {
$id = $text1[ 2 ];
if ( !isset( $data[ 'admins' ][ $id ] ) ) {
$data[ 'admins' ][ $id ] = $id;
yield Amp\File\put('data/data.json',json_encode($data));
yield $this->messages->sendMessage(['peer' => $peer, 'message' => '√ بـا مـوفـقـیـت ادمـیـن شـد']);
} else {
yield $this->messages->sendMessage(['peer' => $peer, 'message' => "★ در لـیـسـت ادمـیـن هـا وجـود دارد"]);
}
} else {
yield $this->messages->sendMessage(['peer' => $peer, 'message' => "× شـما ســازنـده سلف نـیـسـتـیـد"]);
}
}
 switch (strtolower($text)) {
    case 'clean admins' :
 if ( $from_id == $admin) {
$data[ 'admins' ] = [];
yield Amp\File\put('data/data.json',json_encode($data));
yield $this->messages->sendMessage(['peer' => $peer,'message' => "🚫 تـمـامـی ادمـیـن هـا عـزل شـدنـد"]);
} else {
yield $this->messages->sendMessage(['peer' => $peer,'message' => "× شـما ســازنـده سلف نـیـسـتـیـد"]);
}
 break;
    case 'adminlist' :
 if($from_id == $admin  ) {
if(count( $data[ 'admins' ] ) > 0 ) {
$txxxt = "لیست ادمین ها : \n";
$counter = 1;
foreach ( $data[ 'admins' ] as $k ) {
$txxxt .= "$counter: <code>$k</code>\n";
$counter++;
}
yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txxxt, 'parse_mode' => 'html']);
} else {
yield $this->messages->sendMessage(['peer' => $peer, 'message' => "💯 ادمـیـنـی وجـود نـدارد"]);
}
} else {
yield $this->messages->sendMessage(['peer' => $peer, 'message' => "× شـما ســازنـده سلف نـیـسـتـیـد"]);
}}
//============== Part Mode On | Off ===============
if(preg_match("/^[\/\#\!]?(part) (on|off)$/i", $text, $m)){ 
 file_put_contents('part.txt', $m[2]); 
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑷𝒂𝒓𝒕 𝑴𝒐𝒅𝒆 $m[2]"]);

}
elseif(preg_match("/^[\/\#\!]?(timebio) (on|off)$/i", $text, $m)){ 
 file_put_contents('timebio.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎  𝒕𝒊𝒎𝒆 𝒃𝒊𝒐  $m[2]"]);

}
elseif(preg_match("/^[\/\#\!]?(time name) (on|off)$/i", $text, $m)){ 
 file_put_contents('timename.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝒕𝒊𝒎𝒆 𝒏𝒂𝒎𝒆   $m[2]"]);

}
elseif(preg_match("/^[\/\#\!]?(timepic) (on|off)$/i", $text, $m)){ 
 file_put_contents('timepic.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎   𝒕𝒊𝒎𝒆 𝒑𝒓𝒐𝒇𝒊𝒍𝒆   $m[2]"]);

}
elseif(preg_match("/^[\/\#\!]?(cament) (on|off)$/i", $text, $m)){ 
 file_put_contents('cament.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎  𝒄𝒂𝒎𝒆𝒏𝒕 $m[2]"]);

}
elseif(preg_match("/^[\/\#\!]?(cament2) (on|off)$/i", $text, $m)){ 
 file_put_contents('cament2.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎  𝒄𝒂𝒎𝒆𝒏𝒕 2 $m[2]"]);

}
//============== HashTag Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(hashtag) (on|off)$/i", $text, $m)){ 
 file_put_contents('hashtag.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆 $m[2]"]);
}
//============== Mention Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(mention) (on|off)$/i", $text, $m)){ 
 file_put_contents('mention.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆 $m[2]"]);
}
//============== Mention 2 Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(mention2) (on|off)$/i", $text, $m)){ 
 file_put_contents('mention2.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆 $m[2]"]);
}
//============== UnderLine Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(underline) (on|off)$/i", $text, $m)){ 
 file_put_contents('underline.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆 $m[2]"]);
}
//============== bold Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $text, $m)){ 
 file_put_contents('bold.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑩𝒐𝒍𝒅 𝒎𝒐𝒅𝒆 $m[2]"]);
}
//============== italic Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $text, $m)){ 
 file_put_contents('italic.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆 $m[2]"]);
}
//============== Coding Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(coding) (on|off)$/i", $text, $m)){ 
 file_put_contents('coding.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆 $m[2]"]);
} 
//
//============== Reverse Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(reverse) (on|off)$/i", $text, $m)){ 
 file_put_contents('deleted.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆 $m[2]"]);
}
//============== Online Mode On | Off ===============
elseif(preg_match("/^[\/\#\!]?(online) (on|off)$/i", $text, $m)){ 
 file_put_contents('online.txt', $m[2]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆  $m[2]"]);
}
//===============LOck   ======================================
elseif(preg_match("/^[\/\#\!]?(locklink) (on|off)$/i", $text, $m)){ 
$data['locklink'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆  𝒍𝒐𝒄𝒌𝒍𝒊𝒏𝒌 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
elseif(preg_match("/^[\/\#\!]?(locktg) (on|off)$/i", $text, $m)){ 
$data['locktg'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆  𝒍𝒍𝒐??𝒌 𝑻𝒂𝒈 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
elseif(preg_match("/^[\/\#\!]?(lockforward) (on|off)$/i", $text, $m)){ 
$data['lockforward'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆    𝒍𝒐𝒄𝒌𝒇𝒐𝒓𝒘𝒂𝒓𝒅 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
elseif(preg_match("/^[\/\#\!]?(lockphoto) (on|off)$/i", $text, $m)){ 
$data['lockphoto'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆  𝒍𝒐𝒄𝒌 𝒑𝒉𝒐𝒕𝒐 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
elseif(preg_match("/^[\/\#\!]?(lockgp) (on|off)$/i", $text, $m)){ 
$data['lockgp'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆  𝒍𝒐𝒄𝒌 𝒈𝒓𝒐𝒖𝒉 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}  
elseif(preg_match("/^[\/\#\!]?(typingpv) (on|off)$/i", $text, $m)){ 
$data['typingpv'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆  𝒕𝒚𝒑𝒊𝒏𝒈𝒑𝒗 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
//
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/ 
//============== Typing Actions On | Off ===============
elseif(preg_match("/^[\/\#\!]?(ac type) (on|off)$/i", $text, $m)){ 
$data['typing'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆 𝑻𝒚𝒑𝒆 𝑨𝒄𝒕𝒊𝒐𝒏 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
//============== video Actions On | Off ===============
elseif(preg_match("/^[\/\#\!]?(ac video) (on|off)$/i", $text, $m)){ 
$data['video'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆 𝑽𝒊𝒅𝒆𝒐 𝑨𝒄𝒕𝒊𝒐𝒏 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
//============== game Actions On | Off ===============
elseif(preg_match("/^[\/\#\!]?(ac game) (on|off)$/i", $text, $m)){ 
$data['game'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆 𝑮𝒂𝒎𝒆 𝑨𝒄𝒕𝒊𝒐𝒏 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
elseif(preg_match("/^[\/\#\!]?(actionsticker) (on|off)$/i", $text, $m)){ 
$data['actionsticker'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧   𝙖𝙘𝙩𝙞𝙤𝙣𝙨𝙩𝙞𝙘𝙠𝙚𝙧 𝑨𝒄𝒕𝒊𝒐𝒏 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
//============== voice Actions On | Off ===============
elseif(preg_match("/^[\/\#\!]?(ac voice) (on|off)$/i", $text, $m)){ 
$data['voice'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧ 𝑻𝒉𝒆 𝑽𝒐𝒊𝒄𝒆 𝑨𝒄𝒕𝒊𝒐𝒏 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
elseif(preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $text, $m)){ 
$data['lockpv'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧  𝒍𝒐𝒄𝒌𝒑𝒗   𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
elseif(preg_match("/^[\/\#\!]?(lockpv1) (on|off)$/i", $text, $m)){ 
$data['lockpv1'] = $m[2];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❧   𝒍𝒐𝒄𝒌𝒑𝒗1 𝑰𝒔 𝑵𝒐𝒘 $m[2]"]);
}
//=========================
elseif(preg_match('/^(settimename (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => 'با موفقیت اسم تایم پروفایل تنظیم شد!   
', 'reply_to_msg_id' => $msg_id]);
file_put_contents('settimename.txt', $m[2]);
}
elseif(preg_match('/^(settimebio (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => ' با موفقیت  متن بیو تایم عوض شد!
', 'reply_to_msg_id' => $msg_id]);
file_put_contents('settimebio.txt', $m[2]);
}
elseif(preg_match('/^(setcament (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => ' با موفقیت  متن کامنت   عوض شد!
', 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/comment.txt', $m[2]);
}
elseif(preg_match('/^(setcament1 (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => ' با موفقیت  متن کامنت 2  عوض شد!
', 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/comment2.txt', $m[2]);
}
elseif(preg_match('/^(setcament3 (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => ' با موفقیت   متن کامنت3    عوض شد!
', 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/comment3.txt', $m[2]);
}
elseif(preg_match('/^(setcament4 (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => ' با موفقیت   متن کامنت4    عوض شد!
', 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/comment4.txt', $m[2]);
}
//========================================
  elseif (preg_match("/^[\/\#\!]?(pin)$/si", $text)) {
                    if ($type3 == 'supergroup' or $type3 == 'chat') {
                        $gmsg = $update['message']['reply_to']['reply_to_msg_id'] ?? 0;
                        yield $this->messages->updatePinnedMessage(['silent' => true, 'unpin' => false, 'pm_oneside' => false, 'peer' => $peer, 'id' => $gmsg,]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "❧  𝑷𝒊𝒏𝒏𝒆𝒅!", 'parse_mode' => 'Markdown']);
                    }
                }
  elseif (preg_match("/^[#!\/]?(join) (.*)$/i", $text, $mch)) {
                    $join = yield $this->channels->joinChannel([
                        'channel' => "$mch[2]",
                    ]);
                    if (isset($join))
                        yield $this->messages->sendMessage([
                            'peer' => $peer,
                            'reply_to_msg_id' => $msg_id,
                            'message' => "❧  𝑱𝒐𝒊𝒏 𝒕𝒐 $mch[2]",
                            'parse_mode' => "html"
                        ]);
                }
                   elseif (preg_match("/^[\/\#\!]?(corona) (.*)$/si", $text, $p)) {
                    $cron = $p[2];
                    $linkcrona = json_decode(yield get("https://api.codebazan.ir/corona/?type=country&country=$cron"), true);
                    $link22 = $linkcrona["result"];
                    $crona1 = $link22['last_updated'];
                    $crona2 = $link22['continent'];
                    $crona3 = $link22['country'];
                    $crona4 = $link22['cases'];
                    $crona5 = $link22['deaths'];
                    $crona6 = $link22['recovered'];
                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => " 
آخرین بروزرسانی♻️:
$crona1
کشور🚩: 
$crona3 
امار مبتلایان⚠️: 
$crona4 
امار مرگ و میر🔴: 
$crona5 
امار بهبود یافته🟢 : 
$crona6 
"]);
                }
//=======================================
elseif (preg_match("/^[\/\#\!]?(setanswer) (.*)$/si", $text)) {
          $ip4 = trim(str_replace("/setanswer ", "", $text));
          $ip3 = trim(str_replace("!setanswer ", "", $ip4));
          $ip2 = trim(str_replace("#setanswer ", "", $ip3));
          $ip1 = trim(str_replace("\setanswer ", "", $ip2));
          $ip = trim(str_replace("setanswer ", "", $ip1));
          $ip = explode("|", $ip . "|||||");
          $txxt = trim($ip[0]);
          $answeer = trim($ip[1]);
          if (!isset($data['answering'][$txxt])) {
            $data['answering'][$txxt] = $answeer;
            file_put_contents("data.json", json_encode($data));
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "کلمه جدید به لیست پاسخ شما اضافه شد👌🏻"]);
          } else {
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "این کلمه از قبل موجود است :/"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(delanswer) (.*)$/si", $text)) {
          preg_match("/^[\/\#\!]?(delanswer) (.*)$/si", $text, $text);
          $txxt = $text[2];
          if (isset($data['answering'][$txxt])) {
            unset($data['answering'][$txxt]);
            file_put_contents("data.json", json_encode($data));
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "کلمه مورد نظر از لیست پاسخ حذف شد👌🏻"]);
          } else {
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "این کلمه در لیست پاسخ وجود ندارد :/"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(clean answers)$/si", $text)) {
          $data['answering'] = [];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "AnswerList Is Now Empty!"]);
        } elseif (preg_match("/^[\/\#\!]?(answerlist)$/si", $text)) {
          if (count($data['answering']) > 0) {
            $txxxt = "لیست پاسخ ها :
";
            $counter = 1;
            foreach ($data['answering'] as $k => $ans) {
              $txxxt .= "$counter: $k => $ans \n";
              $counter++;
            }
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
          } else {
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "پاسخی وجود ندارد!"]);
          }
        }
//=====================================
elseif($text == 'به عکس' or $text == 'به گیف'  ){
 yield $this->messages->sendMessage(['peer'=>'@Stickerdownloadbot','message'=>'/start' ]);
    if (isset($update['message']['reply_to']['reply_to_msg_id'])) {
        $smoke = $update['message']['reply_to']['reply_to_msg_id'];
        if($type3 == "supergroup"||$type3 == "chat"){
            $messeg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$smoke],]);
        }else{
            $messeg = yield $MadelineProto->messages->getMessages(['id' => [$smoke],]);
        }
        if (isset($messeg['messages'][0]['media']['document']['attributes']['1']['alt'])) {
            $media = $messeg['messages'][0]['media'];
            yield $MadelineProto->messages->editMessage(['peer' => $peer,
            'id' => $msg_id,
            'message' => "در حال تبدیل... . !",
            'parse_mode'=>"MarkDown"]);
            $MadelineProto->messages->sendMedia(['peer' => "@Stickerdownloadbot", 'media' => $media]);
            file_put_contents("smkmsgid.txt",$msg_id);
            file_put_contents("smkpeer.txt","$peer");
}}}
//=======================================
elseif (preg_match('/^[\/\#\!\.]?(بصبر دان شه)$/si', $text)) {
                    if ( $type3 == "user") {
                        $ier = yield $this->messages->getMessages([
                            'peer' => $peer,
                            'id' => [$update['message']['reply_to']['reply_to_msg_id']]
                        ]);
                    } elseif ( $type3 == "supergroup") {
                        $ier = yield $this->channels->getMessages([
                            'channel' => $peer,
                            'id' => [$update['message']['reply_to']['reply_to_msg_id']]
                        ]);
                    }
                    $file = isset($ier['messages'][0]['media']) ? $ier['messages'][0]['media'] : "none";
                    if ($file != "none") {
                        $output_file_name = yield $this->downloadToFile($file, getcwd() . '/data/radi-self.jpg');
                        yield $this->messages->sendMedia([
                            'peer' =>  $admin,
                            'media' => [
                                '_' => 'inputMediaUploadedDocument',
                                'file' => 'data/radi-self.jpg',
                                'attributes' => [[
                                    '_' => 'documentAttributeFilename',
                                    'message' => "♛َِـَِבَِاَِنَِلَِوَِـَِבَِ شَِـَِבَِـَِہَِ تَِوَِسَِطَِ سَِلَِـَِ؋َِ رَِاَِـَِבَِےَِ !َِ!َِ!َِ!َِ!َِ",
                                    'file_name' => 'radi-self.jpg'
                                ]]
                            ]
                        ]);
                    } 
                    unlink("data/radi-self.jpg");
                }
//================================
 elseif($text == 'ban'  ){
$replyToUserId = yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$message['reply_to']['reply_to_msg_id']]
])['messages'][0]['from_id']['user_id']; 
                            $ban = ['_' => 'chatBannedRights', 'view_messages' => true, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                               $this->channels->editBanned(['channel' => $peer, 'participant' => $replyToUserId,  'banned_rights' => $ban]);
                            (yield $this->sendOrEdit($update,
"کاربر $replyToUserId از گروه محروم شد 
                             " )); 
                        } 
 elseif($text == 'unban'  ){    
     $replyToUserId = yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$message['reply_to']['reply_to_msg_id']]
])['messages'][0]['from_id']['user_id'];  
                            $unban = ['_' => 'chatBannedRights', 'view_messages' => false, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 99999];
                          $this->channels->editBanned(['channel' => $peer, 'participant' => $replyToUserId, 'banned_rights' => $unban]);                       
                            (yield $this->sendOrEdit($update,
"کاربر $replyToUserId از لیست سیاه حذف شد✔️
   
                             " )); }
//==============================
elseif($text == 'mute'  ){     
     $replyToUserId = yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$message['reply_to']['reply_to_msg_id']]
])['messages'][0]['from_id']['user_id'];   
  $mute = ['_' => 'chatBannedRights', 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                             $this->channels->editBanned(['channel' => $peer, 'participant' => $replyToUserId, 'banned_rights' => $mute]);
                            (yield $this->sendOrEdit($update,
"کاربر $replyToUserId  به لیست سکوت اضافه شد❗️ 
                             " )); 
                        } 
elseif($text == 'unmute'  ){   
     $replyToUserId = yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$message['reply_to']['reply_to_msg_id']]
])['messages'][0]['from_id']['user_id'];  
                            $unmute = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 9999];
                           $this->channels->editBanned(['channel' => $peer, 'participant' => $replyToUserId, 'banned_rights' => $unmute]); 
                            (yield $this->sendOrEdit($update,
"کاربر  $replyToUserId  از لیست سکوت حذف شد✔️
 
                            " )); }
//================================
 elseif(preg_match("/^\/[Tt][Aa][Ss]\s(\d)/", $text, $rr)) {
@touch("tas.txt");
@file_put_contents("tas.txt", $rr[1]);
$diceo = ['_' => 'inputMediaDice', 'emoticon' => '🎲'];
yield $this->messages->sendMessage(['peer' => $peer,'reply_to_msg_id' => $msg_id,'message' => "ˢⓔＮᎶƗℕᎶ   ⁅ $rr[1] ⁆   :-)", 'parse_mode' => 'markdown' ]);
yield $this->messages->sendMedia(['peer'=>$peer,'media'=>$diceo,'message'=>"🎲"]);}
if(isset($update['message']['media']['_'])){
if($update['message']['media']['_'] == "messageMediaDice"){
if(is_numeric(file_get_contents("tas.txt"))){
$valueo = $update['message']['media']['value'];
if(file_exists("tas.txt") and $valueo != file_get_contents("tas.txt")){
yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
$diceo = ['_' => 'inputMediaDice', 'emoticon' => '🎲'];
yield $this->messages->sendMedia(['peer'=>$peer,'media'=>$diceo,'message'=>"🎲"]);
} else {
unlink("tas.txt");}}}}  
//============== Help User ==============
elseif($text == 'help' or $text == 'Help' or $text == 'رهنما'){
	 yield $this->channels->joinChannel(['channel' => "@RADI_SELF" ]);
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☈ 𝑯𝒆𝒍𝒑 𝑺𝒆𝒏 𝑭𝒐𝒓 𝒀𝒐𝒖 "]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
" 
♥ 𝑯𝒆𝒍𝒑 𝓢𝓮𝓵𝓯 𝓜𝓻 𝓡𝓪𝓭𝓲 ♥
☷☷☷☷☷☷☷☷☷☷☷☷☷☷☷☷☷ 
☈ `/mnghelp`
☊ دریافت راهنمای مدیریتی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/toolshelp`
☊ دریافت راهنمای کاربردی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/modehelp`
☊ دریافت راهنمای مود ها
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/achelp`
☊ دریافت راهنمای اکشن ها
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/funhelp`
☊ دریافت راهنمای سرگرمی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/game`
☊ دریافت راهنمای بازی ها
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/answer`
☊ بخش دریافت پاسخ سریع
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/panel`
☊ دریافت پنل مدیریت
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ 𝑹𝒂𝒎 𝑼𝒔𝒂𝒈𝒆  : $mem_using 𝒎𝒈
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯

",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id, 'disable_web_page_preview' => true ]);
}
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
//============== Help User ==============
elseif($text == '/modehelp' or $text == 'modehelp' or $text == 'رهنمای مود'){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☄ 𝑴𝒐𝒅𝒆 𝑯𝒆𝒍𝒑 𝑺𝒆𝒏𝒅 𝑭𝒐𝒓 𝒀𝒐𝒖 !"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
☄ 𝑺𝒆𝒂𝒔𝒊𝒐𝒏 𝑴𝒐𝒅𝒆 𝑯𝒆𝒍𝒑  
☷☷☷☷☷☷☷☷☷☷☷☷☷☷☷☷☷  
☈ `part ` on یا off 
☊ حالت حرف به حرف نوشتن 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `hashtag ` on یا off 
☊ حالت نوشتن متن با هشتگ 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `italic ` on یا off 
☊ حالت نوشتن متن به صورت کج 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `coding ` on یا off 
☊ حالت نوشتن متن به صورت تکی و کدینگ 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `underline ` on یا off 
☊ حالت نوشتن متن به صورت زیر خط دار 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `bold ` on یا off 
☊ حالت نوشتن متن به صورت ضخیم 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `mention ` on یا off 
☊ حالت نوشتن متن با منشن کردن روی آیدی اکانت 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `mention2 ` on یا off 
☊ حالت نوشتن متن با منشن کردن روی آیدی اکانت فرد ریپلای شده 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `reverse ` on یا off 
☊ حالت نوشتن متن به صورت معکوس
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
settimename [text]
☊ تنظیم متن  تایم اسم در حالت ساعت
☈ `time name ` on یا off 
☊ حالت ساعت در اسم 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
settimebio [text]
☊ تنظیم متن بیو در حالت ساعت
☈ `timebio` on یا off 
☊ حالت ساعت در بیو 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `timepic ` on یا off 
☊ تایم پروفایل 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `online ` on یا off 
☊ حالت همیشه آنلاین
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `lockpv ` on یا off 
☊  حالت قفل پیوی  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━
☈ ` lockpv1 ` on یا off 
☊ حالت میوت پیوی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━
☈ 𝑹𝒂𝒎 𝑼𝒔𝒂𝒈𝒆  : $mem_using 𝒎𝒈
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id, 'disable_web_page_preview' => true ]);
}
elseif($text == '/achelp' or $text == 'achelp' or $text == 'رهنمای اکشن'){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☘ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑯𝒆𝒍𝒑 𝑺𝒆𝒏𝒅 𝑭𝒐𝒓 𝒀𝒐𝒖 !"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
☘ 𝑺𝒆𝒂𝒔𝒊𝒐𝒏 𝑯𝒆𝒍𝒑 𝑨𝒄𝒕𝒊𝒐𝒏 ☘
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `ac type ` on یا off 
☊ اکشن ارسال وضعیت درحال نوشتن
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `ac voice ` on یا off 
☊ اکشن وضعیت درحال ارسال صدا
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `ac video ` on یا off 
☊ اکشن وضعیت درحال ارسال ویدئو
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `ac game ` on یا off 
☊ اکشن وضعیت درحال بازی کردن
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ ` actionsticker` on یا off 
☊حالت سرچ استیکر در گروه 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ ` typingpv` on یا off 
☊ حالت تایپینگدر پیوی
☈ ` settyping`  
☊ ست کردن کاربر در پیوی 
☈ ` delsettyping`  
☊ حذف کردن کاربر در پیوی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ 𝑹𝒂𝒎 𝑼𝒔𝒂𝒈𝒆  : $mem_using 𝒎𝒈
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id, 'disable_web_page_preview' => true ]);
}
elseif($text == '/answer'    ){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☘   𝒂𝒏𝒔𝒘𝒆𝒓  𝑯𝒆𝒍𝒑 𝑺𝒆𝒏𝒅 𝑭𝒐𝒓 𝒀𝒐𝒖 !"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
☘ 𝑺𝒆𝒂𝒔𝒊𝒐𝒏 𝑯𝒆𝒍𝒑 𝑨𝒄𝒕𝒊𝒐𝒏 ☘
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ ` setanswer ` text || javabtext  
☊ اکشن ارسال وضعیت درحال نوشتن
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `  delanswer`  [text]
☊ اکشن وضعیت درحال ارسال صدا
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `answerlist`  
☊ دریافت لیست پاسخ ها   
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `clean answers`  
☊  پاکسازی لیست پاسخ ها
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ 𝑹𝒂𝒎 𝑼𝒔𝒂𝒈𝒆  : $mem_using 𝒎𝒈
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id, 'disable_web_page_preview' => true ]);
}
 elseif($text == 'settyping'    and $type3 == 'user'){          
$mee = yield $this->get_full_info($peer);
                                $me = $mee['User'];
                                $me_id = $me['id'];
                                $me_name = $me['first_name']; 
                                if (!in_array($me_id, $data['settyping'])) {
                                    $data['settyping'][] = $me_id;
yield Amp\File\put('data.json',json_encode($data));
yield $this->sendOrEdit($update,
"↜ 𝑼𝒔𝒆𝒓`$me_name`  𝑨 𝒍𝒊𝒔𝒕 𝒐𝒇 𝒕𝒚𝒑𝒊𝒏𝒈 𝒎𝒐𝒅𝒆𝒔 𝒊𝒔 𝒂𝒅𝒅𝒆𝒅 "
                        );       
}      }   
 elseif($text == 'delsettyping'    and $type3 == 'user'){   
 unset($data['settyping'][array_search($m[2], $data['settyping']) ]);     
 yield Amp\File\put('data.json',json_encode($data));
yield $this->messages->sendMessage(['peer' => $peer, 'message' => '❌ 𝑻𝒉𝒆 𝒖𝒔𝒆𝒓 𝒘𝒂𝒔 𝒔𝒖𝒄𝒄𝒆𝒔𝒔𝒇𝒖𝒍𝒍𝒚 𝒅𝒆𝒍𝒆𝒕𝒆𝒅 𝒘𝒉𝒊𝒍𝒆 𝒕𝒚𝒑𝒊𝒏𝒈']); 
}  
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
//============== Fun Help User ==============
elseif($text == '/funhelp' or $text == 'funhelp' or $text == 'رهنمای فان'){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "⌬ 𝑭𝒖𝒏 𝑯𝒆𝒍𝒑 𝑺𝒆𝒏𝒅 𝑭𝒐𝒓 𝒀𝒐𝒖 !"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
⌬ 𝑭𝒖𝒏 𝑯𝒆𝒍𝒑 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `hokm4`
☊ برات حکم 4 نفره میاره با دوستت بازی کنی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `hokm2`
☊ برات حکم 2 نفره میاره با دوستت بازی کنی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `sang`
☊ برات سنگ کاغذ قیچی میارع 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `jh`
☊ برات جرعت حقیت میفرسته تا با دوستات بازی کنی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `minrob`
☊ برات بازی مین روب رو میفرسته
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/youtube` + متن
☊ براتون تو یوتیوب سرچ میکنه
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `doz` 
☊ بازی دوز رو برات میارع
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `joke`
☊ جوک میفرسته برات
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `دانلود ` + text
☊ برات دانلود میکنه هرچیزی ک بگی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `proxy ` 
☊ برات پروکسی میفرسته 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/google ` متن مورد نظر
☊ متن شمارا در گوگل سرچ میکند 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/Bule ` [TEXT] 
☊ موزیک درخواستی 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/mame ` اسم فرد موردنظر
☊ اندازه ممه فرد مورد نظر
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/Kir ` + اسم فرد 
☊ اندازه کیر فرد مورد نظر
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/gay ` + اسم فرد 
☊ درصد گی بودن فرد مورد نظر 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/music ` [TEXT] 
☊ موزیک درخواستی 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `/gif ` [Text] 
☊ گیف درخاستی 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/pic ` [Text] 
☊ عکس درخاستی 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/apk ` [Text] 
☊ برنامه درخاستی 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/like ` [Text] 
☊ گذاشتن دکمه شیشه ای لایک زیر متن 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/upload ` [URL] 
☊ اپلود فایل از لینک 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/meme ` [Text] 
☊ ویس درخاستی از ربات پرشین میم 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/giff ` [Text] 
☊ گیف درخاستی با متن دلخواه 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `font ` [Text] 
☊ ساخت فونت اسم لاتین شما با 125 مدل مختلف
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `fafont ` [Text] 
☊ ساخت فونت اسم فارسی شما با 10 مدل مختلف 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `age ` (Y)(M)(D) 
☊ درخاست محاسبه سن شما 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `arz`
☊ دریافت قیمت ارز
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `rev ` [Text] 
☊ معکوس کردن جمله شما
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `meane ` [Text] 
☊ دریافت معانی کلمات فارسی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `kalame ` [Level] 
☊ دریافت بازی از ربات کلمه
☊ (مبتدی|ساده|متوسط|سخت|وحشتناک)
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `fal` 
☊ دریافت فال حافظ
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/icon ` [Text] 
☊ آیکون با کلمه درخاستی و شکلک رندوم
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/lid ` [ID] 
☊ برای دریافت لینک آیکون مورد نظر در پیوی خودتان
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `بصبر دان شه`   (reply)
☊ دانلودعکس زماندار
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `cament`    on|off
☊ کامنت روشن و خاموش
☈ `setcament` [text]
☊ تنظیم متن کامنت
➤ ` seetextcament`   
دیدن متن کامنت نوع اول[🌹]
☈ `cament2`    on|off
☊ کامنت 1-2-3
setcament1 [text]
setcament2 [text]
setcament3 [text]
➤ ` seetextcament2`   
دیدن متن کامنت نوع دوم[🌹]
╰━━━━━━<▪️ ʀᴀᴅɪ ▪️>>━━━━━╯
➤ ` camentsticker`   on|off
کامنت استیکر[🌹]
➤ ` camentgif`   on |off
کامنت گیف[🌹]
➤ ` camentvoise`   on|off
کامنت ویس[🌹]
╰━━━━━━<▪️ ʀᴀᴅɪ ▪️>>━━━━━╯ 
➤ ` clean allcament`  
پاکسازی کامنت های ست شده [🌹]
╰━━━━━━<▪️ ʀᴀᴅɪ ▪️>>━━━━━╯   
➤ ` setcaption`  [text]
تنظیم متن کامنت اول مدیا(گیف|ویس|استیکر) [🌹] 
➤ ` setgif`  [text]
تنظیم لینک کانالی که گیف موجود است[🌹] 
➤ ` setsti`  [text]
تنظیم لینک کانالی که استیکر موجود است[🌹] 
➤ ` setvoise`  [text]
تنظیم لینک کانالی که ویس موجود است[🌹]
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `تبدیل به عکس/تبدیل به گیف`   (reply)
☊ تبدیل استیکر به عکس ویا تبدیل استیکر متحرک به گیف 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ 𝑹𝒂𝒎 𝑼𝒔𝒂𝒈𝒆  : $mem_using 𝒎𝒈
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id, 'disable_web_page_preview' => true ]);
}
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
elseif($text == "راش نشون بده" or $text == "جذابیت نشون بده" or $text == "کراش کو"){
  
    yield $this->messages->editMessage([
          'peer' => $peer,
          'id' => $msg_id,
          'message' => "بیا ببین",
          'parse_mode'=>'MarkDown'
    ]);

    $this->messages->sendMedia([
        'peer' => $update , 
        'media' =>   [
             '_' => 'inputMediaUploadedDocument', 
             'file' =>__DIR__."/data/sb.",
             'attributes' => [
                   '_' => 'documentAttributeVideo'
             ]
        ],
        'message' => "جذابع نه؟خخ"
    ]);
}
elseif(preg_match("/^[\/\#\!]?(camentsticker) (on|off)$/i", $text, $m)){ 
 file_put_contents('data/camentsticker.txt', $m[2]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer,'reply_to_msg_id' => $msg_id,'message' => "☆ 𝒄𝒂𝒎𝒆𝒏𝒕𝒔𝒕𝒊𝒄𝒌𝒆𝒓 $m[2]"]); 
}
elseif(preg_match("/^[\/\#\!]?(camentgif) (on|off)$/i", $text, $m)){ 
 file_put_contents('data/camentgif.txt', $m[2]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer,'reply_to_msg_id' => $msg_id,'message' => "☆  𝒄𝒂𝒎𝒆𝒏𝒕𝒈𝒊𝒇 $m[2]"]); 
} 
elseif(preg_match("/^[\/\#\!]?(camentvoise) (on|off)$/i", $text, $m)){ 
 file_put_contents('data/camentvoise.txt', $m[2]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer,'reply_to_msg_id' => $msg_id,'message' => "☆ 𝒄𝒂𝒎𝒆𝒏𝒕𝒗𝒐𝒊𝒔𝒆 $m[2]"]); 
}  
elseif(preg_match('/^(setcaption (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => "☆ 𝑺𝒆𝒕 𝒄𝒂𝒑𝒕𝒊𝒐𝒏
", 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/caption.txt', $m[2]);
}
elseif(preg_match('/^(setvoise (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => "☆ Set voise is Set
", 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/voise.txt', $m[2]);
}
elseif(preg_match('/^(setsti (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => "☆ Set Sticker is Set
", 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/sti.txt', $m[2]);
}
elseif(preg_match('/^(setgif (.*))$/i',$text,$m)){
yield $this->messages->sendMessage(['peer' => $update, 'message' => "☆  Set Gif is SeT
", 'reply_to_msg_id' => $msg_id]);
file_put_contents('data/gif.txt', $m[2]);
}
//=========
elseif(  $text == 'seetextcament'){
     if($type3 == "supergroup"||$type3 == "user"){
         $ja1 =   file_get_contents('data/comment.txt');
yield $this->messages->sendMessage(['peer' => $admin, 'reply_to_msg_id' => $msg_id ,
'message' => " 
**setcament** : `$ja1`
", 'parse_mode'=>"MarkDown"]); 
}}  
 elseif(  $text == 'seetextcament2'){
     if($type3 == "supergroup"||$type3 == "user"){
         $ja1 =   file_get_contents('data/comment2.txt');
         $ja2 =   file_get_contents('data/comment3.txt');
          $ja3 =   file_get_contents('data/comment4.txt');
yield $this->messages->sendMessage(['peer' => $admin, 'reply_to_msg_id' => $msg_id ,
'message' => " 
**setcament2** : `$ja1`
**setcament3** : `$ja2`
**setcament4** : `$ja3`
", 'parse_mode'=>"MarkDown"]); 
}} 
elseif(  $text == 'clean allcament'){
$files = glob('data/*');
foreach($files as $file) {
unlink($file);
yield $this->messages->sendMessage(['peer' => $admin, 'reply_to_msg_id' => $msg_id ,
'message' => "**𝒄𝒍𝒆𝒂𝒏 𝑪𝒂𝒎𝒆𝒏𝒕 𝑻𝑬𝑿𝑻**
", 'parse_mode'=>"MarkDown"]); 
yield $this->restart();
} }
//============== Manage Help User ==============
elseif($text == '/mnghelp' or $text == 'mnghelp' or $text == 'رهنمای مدیریت'){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "♛ 𝑴𝒂𝒏𝒂𝒈𝒆 𝑯𝒆𝒍𝒑 𝑺𝒆𝒏𝒅 𝑭𝒐𝒓 𝒀𝒐𝒖 !"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
" 
♛ 𝑺𝒆𝒂𝒔𝒊𝒐𝒏 𝑴𝒂𝒏𝒂𝒈𝒆𝒓 ♛ 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/selfradi ` [on] یا [off] 
☊ خاموش و روشن کردن ربات 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
» افـزودن ادمـیـن جـدیـد  
!Addadmin (Userid)  
» پـاکـسـازی تـمـامـی ادمـیـن هـا  
clean admins 
» دریـافـت لـیـسـت ادمـیـن هـا  
adminlist
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `ping `
☊ دریافت وضعیت ربات 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `config `
☊ پیکربندی ربات - جوین در کانال های لازم
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `block ` [inpv] یا Rreply] 
☊ بلاک کردن شخصی خاص در ربات 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `unblock ` [inpv] یا Rreply] 
☊ آزاد کردن شخصی خاص از بلاک در ربات 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/restart`
☊ برای 0 کردن حافظه 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `clean all`
☊ پاکسازی تمامی پیام های گروه در صورت ادمین بودن 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `setusername ` Your username
☊ تغییر یوزرنیم اکانت
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `setname ` YourName 
☊ تغییر اسم اکانت 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `setbio ` Your Bio 
☊ تغییر بیو اکانت 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `status `
☊ دریافت وضعیت مود ها و . . . 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `setenemy ` (Reply) or (InPV)
☊ افزودن یک کاربر به لییست دشمنان
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `delenemy ` (Reply) or (InPV)
☊ حذف یک کاربر به لیست دشمنان
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `enemylist`
☊ نمایش لیست دشمنان
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `cleanenemylist`
☊ پاکسازی لیست دشمنان
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `addfosh (text)`
☊  اضافه کردن فوش دلخواه
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `cleanfosh  `
☊  پاکسازی همه فوش ها
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `locklink  ` on| off
☊ قفل لینک
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `lockphoto  ` on| off
☊  قفل عکس
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `lockforward  ` on| off
☊  قفل فوروارد 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `lockgp  ` on| off
☊  قفل گروه
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `locktg  ` on|off
☊  قفل تگ
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `pin  `  (reply to massge in the grouh) 
☊  پین کردن پیام در گروه
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `join  `  (link) 
☊   جوین در کانال یا گروه
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `baha`  
☊  تک کردن تمامی اعضای گروه 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ ` ban `  (reply)
☊ بن کردن کاربر بصورت ریپلای 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `mute`   (reply)
☊ سکوت کردن کاربر بصورت ریپلای
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ ` unban `  (reply)
☊  حذف بن کردن بصورت ریپلای
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ `unmute`   (reply)
☊  حذف سکوت بصورت ریپلای
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☈ 𝑹𝒂𝒎 𝑼𝒔𝒂𝒈𝒆  : $mem_using 𝒎𝒈
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id, 'disable_web_page_preview' => true ]);
}
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
//============== Help User ==============
elseif($text == '/toolshelp' or $text == 'toolshelp' or $text == 'رهنمای کاربردی'){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "♅ 𝑨𝒅𝒗𝒂𝒏𝒄𝒆𝒅 𝑯𝒆𝒍𝒑 𝑺𝒆𝒏𝒅 𝑭𝒐𝒓 𝒀𝒐𝒖 !"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
♅ 𝑺𝒆𝒂𝒔𝒊𝒐𝒏 𝑨𝒅𝒗𝒂𝒏𝒄𝒆𝒅 ♅
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `number | شمارت ` [Reply] یا [InPV] 
☊ دریافت شماره کاربر
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `num | شماره ی ` [UserID] 
☊ دریافت شماره کاربر آیدی عددی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/info ` [UserName] یا [UserID] 
☊ دریافت اطلاعات کاربر 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/gpinfo ` 
☊ دریافت اطلاعات گروه 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ ` corona `  (name conture)
☊  دریافت امار کرونا کشورها 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ ` flood2 ` [Count] [Text]
☊ ارسال اسپم یک متن به تعداد دلخواه
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ ` flood` [Count] [Text]
☊  ارسال اسپم بصورت ادیتی 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/save ` [Reply] 
☊ سیو کردن پیام و محتوا  در پیوی خود ربات 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `/id ` [reply] 
☊ دریافت ایدی عددی کابر 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `!php ` Code 
☊ اجرای کد های زبان PHP 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `whois ` Domain 
☊ دریافت اطلاعات دامنه مورد نظر 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `scr ` Url 
☊ دریافت اسکرین شات از سایت مورد نظر 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `ping ` Url 
☊ دریافت پینگ سایت مورد نظر 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `brc ` Url 
☊ ساخت QR برای لینک مورد نظر
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `git ` (username/project) or (Url)
☊ دانلود فایل فشرده یک سورس از گیتهاب
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ `user ` UserID
☊ منشن کردن یک شخص از طریق آیدی عددی
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☈ 𝑹𝒂𝒎 𝑼𝒔𝒂𝒈𝒆  : $mem_using 𝒎𝒈
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id, 'disable_web_page_preview' => true ]);
}
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
//=========== Music ================
elseif(preg_match('/^(addfosh (.*))$/i',$text,$text1)){  
$id = $text1[2];
if(!isset($data['foshlist'][$id])){
$data['foshlist'][] = $id;
file_put_contents("data.json", json_encode($data));
yield $this->sendOrEdit($update,
"بَِـَِہَِ لَِیَِسَِتَِ ؋َِـَِوَِشَِ اَِـَِ؋َِـَِزَِوَِـَِבَِـَِہَِ شَِـَِבَِ.َِ.َ[🌹]ِ.َِ!َِ ");
}else{
yield $this->messages->sendMessage(['peer' => $peer, 'message' => "♦️ فوش از قــبــل ثــبــت شــده بــود"]);  
}
}
elseif ($text == "cleanfosh"   ){
$data['foshlist'] = [];
file_put_contents("data.json", json_encode($data)); 
yield $this->messages->sendMessage(['peer' => $peer, 'message' => "📇 لــیــســت فوش پـاکـسـازی شـد"]);  }
//\\\\\\\\\\\\\\\\\\\\\\\
elseif ($text == "panel" or $text == "/panel" or $text == "پنلل"){ 
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "» ᴏᴘᴇɴ ᴛʜᴇ ᴘᴀɴᴇʟ . • . !", 'parse_mode' => 'MarkDown']);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => $helper, 'peer' => $peer, 'query' => "kosnell_", 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
elseif($text == '/game' or $text == 'game' or $text == 'بازی'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☭ 𝑶𝒑𝒆𝒏 𝑻𝒉𝒆 𝑯𝒆𝒍𝒑 𝑮𝒂𝒎𝒆", 'parse_mode' => 'MarkDown']);

yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
☭ 𝑺𝒆𝒂𝒔𝒊𝒐𝒏 𝑮𝒂𝒎𝒆 𝑯𝒆𝒍𝒑 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ عشقم
عشقم 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️هه
بزن ببین چی میشه
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️آدم فضایی  
آدم فضایی پیدا میکنی👽  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️موشک   
به سفینه موشک پرت میکنی🚀  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️پول  
پول آتیش میزنه🔥  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️خزوخیل  
باکاراش عنت میاد😕  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️روح  
روحه میترسونش👻  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️برم خونه  
پیچوندن کسی خیلی حرفه ای😁  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️شکست عشقی   
عاقبت فرار از خونس😒  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️عقاب   
عقابه شکارش میکنه🤗  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️حموم  
درحموم باز میکنی🤣  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️آپدیت  
سرور آپدیت میشه😶  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️بکشش   
جنایتکار کشته میشه😝  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️مسجد   
پسره میره مسجد📿  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️کوسه  
کوسه بهش حمله میکنه⛑  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️بارون  
رعد و برق وبارون🌧  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️شب خوش  
میخابی🥱  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️برم بخابم  
میره و میخابه😴  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️بادکنک  
بت چاقو بادکنک پاره میکنی😆  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️فوتبال  
توپو میکنه تو دروازه😅  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️فیشینگ  
کارتو تضمینی میشوره💰  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️غرقش کن  
غرقش میکنه😁  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️فضانورد  
من میگم ایران قویه🇮🇷  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️بزن قدش  
میزنین قدش🧤  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️عشقمی  
یه فیل و یه قلب❤  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ ️فاک  
بهش فاک میده⚠️  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯ 
☭ شمارش  
شمارشش میزنی💫  
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️بکیرم
بکیرم با ایموجی😷
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️ماشین
ماشین با ایموجی🏎
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️موتور
تصادف میکنی🛵
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️پنالتی
پنالتی میکنه تو گل🏟
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️تاس
دریافت تاس رندوم🎲
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️روانی
میان میبرنش تیمارستان🚑
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️ساک
گاز میگیره🤐
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️جق
کمر نمیمونه💦
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️عشق
ب عخشت میرسی🤤
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️بخند کیر نشه
میخندنن کیر نشه😂
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️بمیر کرونا
کرونا میکشه 🔫
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️انگش
انگشش میکنه 🍑
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️جقیم
کمرد نمونده والا۲
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️ریدیم
میرینه بهش🤎
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️کون سفید
بزن ببین چی میشه💦
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️کیر خر
کیر خر میدش😐
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️مربع 2
بزن رقش مربعاس⬜️
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️مکعب
بزن رقص مکعباس⬛️
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️رقص
مربعا و مکعبا میرقصن😎
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️خار
کاکتوسه بادکنک بغل میکنه 🌵 
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️رقص مربع
بازم رقص🤦🏻‍♂
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️گلب
قلب های جدید🤤
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️مربع2
بزن ببین چی میشه دیگه😐
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️قلب2
قلب های باحال👌
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️رقص2
موج مکزیکی 🕺
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️کیر2
کیر با مربع😝
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️بکیرم2
بکیرت میگیریش🏳‍🌈
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️زنبور2
اینسری فرار میکنه 🤙
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
☭ ️زنبور
بازم زنبور😂
╰━━━━━━ꜱᴇʟꜰ ᴍʀ ʀᴀᴅɪ━━━━━╯
",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
// ================= 
//= ================ ===========
elseif ($text == 'هه') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
__________$$$$$___________$$$$$__________
_________$$$$$$$_________$$$$$$$_________
_________$$$$$$$_________$$$$$$$_________
__________$$$$$___________$$$$$__________
__$$$$_____________________________$$$$__
_$$$$$$___________________________$$$$$$_
__$$$$$$_________________________$$$$$$__
___$$$$$$_______________________$$$$$$___
____$$$$$$$___________________$$$$$$$____
______$$$$$$$_______________$$$$$$$______
_________$$$$$$___________$$$$$$_________
___________$$$$$$$$$$$$$$$$$$____________
______________$$$$$$$$$$$$_______________
کص ننت دا']);
}
//============ ===============
elseif ($text == 'عشقم') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  _____xxxxxxxx________xxxxxxxx
____xxxxxxxxxx______xxxxxxxxxxx
___xxxxxxxxxxxxx___xxxxxxxxxxxxx
___xxxxxxxxxxxxxx_xxxxxxxxxxxxxx
___xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
____xxxxxxxxxxxxxxxxxxxxxxxxxxxx
_____xxxxxxxxxxxxxxxxxxxxxxxxxx
______xxxxxxxxxxxxxxxxxxxxxxx
_________xxxxxxxxxxxxxxxxxx
___________xxxxxxxxxxxxx
_____________xxxxxxxxx
______________xxxxxx
_______________xxxx
_______________xxx']);
}
// =================== 
//============ game =====================
elseif ($text == 'ماشین' or $text == 'car') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣________________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣_______________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣______________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣_____________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣____________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣___________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣__________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣_________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣________🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣_______🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣______🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣____🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣___🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣__🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💣_🏎']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💥BOOM💥']);
}
elseif ($text == 'موتور' or $text == 'motor' or $text == 'شوتور') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧___________________🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧_________________🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧_______________🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧_____________🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧___________🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧_________🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧_______🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧_____🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧____🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧__🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧_🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚧🛵']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'وای تصادف شد']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'وای موتورم بـگا رف']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ریدم تو موتورم']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💥BOOM💥']);
}
 elseif($text=='امام' or $text=='البرز'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '
⣿⣿⣿⣿⣿⡿⠋⠁⠄⠄⠄⠈⠘⠩⢿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⠃⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠻⣿⣿⣿⣿
⣿⣿⣿⣿⠄⠄⣀⣤⣤⣤⣄⡀⠄⠄⠄⠄⠙⣿⣿⣿
⣿⣿⣿⣿⡀⢰⣿⣿⣿⣿⣿⢿⠄⠄⠄⠄⠄⠹⢿⣿
⣿⣿⣿⣿⣿⡞⠻⠿⠟⠋⠉⠁⣤⡀⠄⠄⠄⠄⠄⠄
⣿⣿⣿⣿⣿⣿⣶⢼⣷⡤⣦⣿⠛⡰⢃⠄⠐⠄⠄⢸
⣿⣿⣿⣿⣿⣿⣿⡯⢍⠿⢾⡿⣸⣿⠰⠄⢀⠄⠄⡬
⣿⣿⣿⣿⣿⣿⣿⣴⣴⣅⣾⣿⣿⡧⠦⡶⠃⠄⠠⢴
⣿⣿⣿⣿⠿⠍⣿⣿⣿⣿⣿⣿⣿⢇⠟⠁⠄⠄⠄⠄
⠟⠛⠉⠄⠄⠄⡽⣿⣿⣿⣿⣿⣯⠏⠄⠄⠄⠄⠄⠄
⠄⠄⠄⢀⣾⣾⣿⣤⣯⣿⣿⡿⠃⠄⠄⠄⠄⠄⠄⠄
فرزند لاشی اعظم هستم']);
}

elseif($text=='پنالتی' or $text=='فوتبال'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️





😐          ⚽️
?? 
👖
////////////////////
"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️




😐
👕       ⚽️
👖
////////////////////
"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️




😐
👕 ⚽️
👖
////////////////////
"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️



⚽️
😐
👕 
👖
////////////////////
"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️

⚽️


??
👕 
👖
////////////////////
"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⚽️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️




😐
👕 
👖
////////////////////
"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⚽️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️



💭Gooooooooolllllllll       
😐
👕 
👖
////////////////////
"]);
}


elseif($text=='tas' or $text=='تاس'){
$tas="
-+-+-+-+-+-+
|  012   |
|  345    |
|  678   |
-+-+-+-+-+-+";
$rand002=rand(1,6);
if($rand002==1){$tas=str_replace(4,"🖤",$tas);}
if($rand002==2){$tas=str_replace([0,8],"❤️",$tas);}
if($rand002==3){$tas=str_replace([0,4,8],"💛",$tas);}
if($rand002==4){$tas=str_replace([0,2,6,8],"💙",$tas);}
if($rand002==5){$tas=str_replace([0,2,6,8,4],"💜",$tas);}
if($rand002==6){$tas=str_replace([0,2,6,8,3,5],"💚",$tas);}

$tas=str_replace(range(0,8),'   ',$tas);

$ed = $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>$tas, 'parse_mode' => 'HTML' ]);
}
elseif($text=='الو تیمارستان' or $text=='روانی'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀________________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀_______________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀______________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀_____________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀____________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀___________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀__________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀_________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀________🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀_______🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀______🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀____🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀___🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀__🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶🏿‍♀_🚑']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'قان قان گرفتیمش خودع کزخلشع😐🚶‍♂️']);
}

elseif($text=='ساک' or $text=='suck'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣 <=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣==']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🗣<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'اخ اخ گاز گرفتی ک😐']);

}
elseif($text=='جق' or $text=='jaq'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'درحال جق....']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<👌🏻=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<==👌🏻===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<===👌🏻==']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<==👌🏻===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<👌🏻=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<===👌🏻==']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<==??🏻===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💦💦<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'کمر نموند برامون بمولا😐']);
}
elseif($text=='عشق' or $text=='love'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀________________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀_______________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀______________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀_____________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀____________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀___________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀__________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀_________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀_______🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀______🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀____🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀___🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🚶‍♀__🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'🚶‍♀_🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💙love💙']);
}

elseif ($text == 'آدم فضایی') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽                     🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽                    🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽                   🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽                  🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽                 🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽                🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽               🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽              🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽             🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽            🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽           🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽          🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽         🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽        🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽       🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽      🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽     🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽    🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽   🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽  🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽 🔦😼"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👽🔦🙀"]);
}
elseif($text == "هلیکوپتر"){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id ,'message' => "
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬                                  
╬═╬                    
╬═╬     
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
" ]);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬                                  
╬═╬                    
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬                                  
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬
']);
  yield $MadelineProto->sleep(1);                      
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬
╬═╬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬ 
╬═╬
╬═╬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬ 
╬═╬
╬═╬ 
╬═╬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬
╬═╬
╬═╬
╬═╬ 
╬═╬
╬═╬ 
╬═╬
']);
  yield $MadelineProto->sleep(1);                   
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═
']);
}
elseif ($text == 'موشک' or $text=='حمله'  or $text=='سفینه بترکون') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                                🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                               🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                              🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                             🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                            🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                           🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                          🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                         🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                        🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                       🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                      🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                     🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                   🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                  🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                 🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀                🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀               🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀              🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀            🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀           🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀          🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀         🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀        🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀       🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀      🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀     🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀    🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀   🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀  🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀 🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍🚀🛸"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌍💥Boom💥"]);
}
elseif ($text == 'پول' or $text=='دلار'  or $text=='ارباب شهر من') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌                    💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌                   💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌                 💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌                💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌               💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌              💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌             💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌            💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌           💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌          💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥                     💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌        💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌       💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌      💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌     💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌    💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌   💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌  💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌ 💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥            ‌💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥           💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥          💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥         💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥        💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥       💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥      💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥     💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥    💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥   💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥  💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔥 💵"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💸"]);
}
elseif ($text == 'با کارای ت باید چالش سعی کن نرینی بزارن' or $text == 'خزوخیل') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩               🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩              🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩             🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩            🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩           🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩          🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩         🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩        🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩       🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩      🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩     🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩    🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩   🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩  🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💩 🤢"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤮🤮"]);
}
elseif ($text == 'جن' or $text=='روح'  or $text=='روحح') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                                   🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                                  🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                                 🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                                🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                               🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                              🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                             🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                            🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                           🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                          🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                         🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                        🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                       🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                      🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                     🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                    🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                   🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                  🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻                 🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻               🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻              🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻             🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻            🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻           🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻          🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻         🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻        🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻       🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻      🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻     🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻    🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻   🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻  🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻 🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👻🙀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☠بگارف☠"]);
}
elseif ($text == 'برم خونه' or $text == 'رسیدم خونه') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠              🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠             🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠            🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠           🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠          🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠         🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠        🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠       🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠      🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠     🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠    🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠   🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠  🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠 🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏠🚶‍♂"]);
}
elseif ($text == 'قلب') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❤️🧡💛💚"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💜💙🖤💛"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤍🤎💛💜"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💚❤️🖤🧡"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💜💚🧡🖤"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤍🧡🤎💜"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💙🧡💜🧡"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💚💛💙💜"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🖤💛💙🤍"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🖤🤍💙❤"]);
}
elseif ($text == 'فرار از خونه' or $text=='شکست عشقی') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡 💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡  💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡   💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡    💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡     💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡      💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡       💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡        💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡         💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡          💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡           💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡            💃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡              💃💔👫"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡                 🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡               🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡             🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡           🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡         🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡       🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡     🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡  🚶‍♀"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏡🚶‍♀"]);
}
elseif ($text == 'عقاب' or $text=='ایگل'  or $text=='پیشی برد') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍                         🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍                      🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍                    🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍                  🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍                🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍               🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍              🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍            🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍           🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍          🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍         🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍        🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍       🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍      🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍     🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍    🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍   🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍 🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🐍🦅"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "پیشی برد😹"]);
}
elseif ($text == 'حموم' or $text=='حمام'  or $text=='حمومم') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪                  🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪                 🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪                🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪              🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪             🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪            🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪           🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪          🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪         🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪        🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪       🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪      🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪     🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪    🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪   🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪  🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪 🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛁🚪🗝🤏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛀💦😈"]);
}
elseif ($text == '/update' or $text=='اپدیت'  or $text=='آپدیت شو') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️10%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️20%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️30%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️40%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️50%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️60%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️▪️70%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️▪️▪️80%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "▪️▪️▪️▪️▪️▪️▪️▪️▪️90%"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❗️EROR❗️"]);
}
elseif ($text == 'جنایتکارو بکش' or $text=='بکشش'  or $text=='خایمالو بکش') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂                 • 🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂                •  🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂               •   🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂              •    🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂             •     🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂            •      🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂           •       🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂          •        🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂         •         🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂        •          🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "??       •           🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂      •            🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂     •             🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂    •              🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂   •               🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂  •                🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂 •                 🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😂•                  🔫🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤯                  🔫 🤠"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "فرد جنایتکار کشته شد :)"]);
}
elseif ($text == 'بریم مسجد' or $text == 'مسجد') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌                  🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌                 🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌                🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌               🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌              🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌             🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌            🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌           🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌          🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌         🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌        🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌       🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌      🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌     🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌    🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌   ??‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌  🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌 🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🕌🚶‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "اشهدان الا الا الله📢"]);
}
elseif ($text == 'کوسه' or $text == 'وای کوسه') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝┄┅┄┅┄┄┅🏊‍♂┅┄┄┅??"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝┄┅┄┅┄┄🏊‍♂┅┄┄🦈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝┄┅┄┅┄🏊‍♂┅┄🦈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝┄┅┄┅🏊‍♂┅┄🦈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝┄┅┄🏊‍♂┅┄🦈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝┄┅🏊‍♂┅┄🦈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝┄🏊‍♂┅┄🦈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🏝🏊‍♂┅┄🦈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "اوخیش شانس آوردما :)"]);
}
elseif ($text == 'بارون') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️                ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️               ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️              ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️             ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️            ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️           ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️          ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️         ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️        ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️       ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️      ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️     ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️    ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️   ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️  ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☁️ ⚡️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "⛈"]);
}
elseif ($text == 'بادکنک') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪                🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪               🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪              🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪             🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪            🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪           🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪          🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪         🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪        🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪       🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪      🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪     🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪    🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪   🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪  🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪 🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔪🎈"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💥Bomm💥"]);
}
elseif ($text == 'شب خوش' or $text == 'شب بخیر ') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜              🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜             🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜            🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜           🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜          🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜         🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜        🙃"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜       😕"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜      ☹️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜     😣"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜    😖"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜   😩"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜  🥱"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌜 🥱"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "😴"]);
}
elseif ($text == 'فیشینگ' or $text == 'فیش ') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣           💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣          💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣         💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣        💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣      💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣     💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣    💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣   💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣  💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣 💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👺🎣💳"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "💵🤑میشورم 100درصد ورمیدارم تبرم نیسم🤑💵"]);
}
elseif ($text == ' گل بزن ' or $text=='فوتبال'  or $text=='توی دروازه') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟          ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟         ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟        ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟       ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟      ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟     ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟    ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟   ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟  ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟 ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟  ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟   ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟    ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟     ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟      ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟       ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟        ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟         ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "👟          ⚽️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "(توی دروازه🔥)"]);
}
elseif ($text == 'برم بخابم') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏                🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏               🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏              🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏             🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏            🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏           🚶🏻‍♂️"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏          🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏         🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏        🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏       🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏      🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏     🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏    🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏   🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏  🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛏 🚶🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🛌"]);
}
elseif ($text == 'غرقش کن') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊              🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊             🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊            🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊           🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊          🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊         🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊        🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊       🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊      🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊     🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊    🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊   🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊  🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🌬🌊 🏄🏻‍♂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "غرق شد🙈"]);
}
elseif ($text == 'فضانورد') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀              🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀             🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀            🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀           🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀          🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀         🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀        🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀       🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀      🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀     🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀    🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀   🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀  🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🧑‍🚀 🪐"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🇮🇷من میگم ایران قویه🇮🇷"]);
}
elseif ($text == 'بزن قدش' or $text=='ایول') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻                    🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻                   🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻                  🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻                 🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻                🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻               🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻              🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻             🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻            🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻           🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻          🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻         🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻        🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻       🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻      🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻     🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻    🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻   🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻  🤛🏻"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🤜🏻🤛🏻"]);
}
elseif ($text == 'فیل' or $text == 'عشقمی') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
░░▒░░█░ 
░░▒░█ 
░░░█ 
░░█░░░░███████ 
░██░░░██▓▓███▓██▒ 
██░░░█▓▓▓▓▓▓▓█▓████ 
██░░██▓▓▓(◐)▓█▓█▓█ 
███▓▓▓█▓▓▓▓▓█▓█▓▓▓▓█ 
▀██▓▓█░██▓▓▓▓██▓▓▓▓▓█ 
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
░░▒░░█░ 
░░▒░█ 
░░░█ 
░░█░░░░███████ 
░██░░░██▓▓███▓██▒ 
██░░░█▓▓▓▓▓▓▓█▓████ 
██░░██▓▓▓(◐)▓█▓█▓█ 
███▓▓▓█▓▓▓▓▓█▓█▓▓▓▓█ 
▀██▓▓█░██▓▓▓▓██▓▓▓▓▓█ 
░▀██▀░░█▓▓▓▓▓▓▓▓▓▓▓▓▓█ 
░░░░▒░░░█▓▓▓▓▓█▓▓▓▓▓▓█ 
░░░░▒░░░█▓▓▓▓█▓█▓▓▓▓▓█ 
░▒░░▒░░░█▓▓▓█▓▓▓█▓▓▓▓█ 
░▒░░▒░░░█▓▓▓█░░░█▓▓▓█ 
░▒░░▒░░██▓██░░░██▓▓██
"]);
}
elseif($text=='فاک' or $text=='fuck'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🏿🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🖕🏿']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🏿🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿🖕🖕🏿🖕🖕🏿🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🏿🖕🖕🏿🖕🖕🏿']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🖕']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕fucking you🖕🏿']);
}
elseif($text == '/test'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️']); 
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => ' ⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛ ']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'تست سرعت انجام شد!
🧭 سرعت ربات :
♻️ ⁸ᴍɢₛ']);
}
elseif ($text == 'بشمار' or $text == 'شمارش') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '» . . . !️']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❶"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❷"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❸"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❹"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❺"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❻"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❼"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❽"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❾"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "❶⓿"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓫"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓬"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓭"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓮"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓰"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓱"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓰"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓳"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "⓴"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "㉑"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "㉒"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "㉓"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "㉔"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "㉕"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "🤣🤣 xD LOL"]);
}
elseif($text=='بخند کیر نشه' or $text=='بخند'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😐😂😐😂😐😂😐
😂        👇🏻           😂
😐         👇🏻          😐
😂👉🏿👉🏿😐👈🏿👈🏿😂
😐          👆🏻          😐
😂          👆🏻          😂
😐 😂😐😂😐😂😐']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😂😐😂😐😂😐😂
😐        👇🏿           😐
😂         👇🏿          😂
😐👉🏻👉🏻😐👈🏻👈🏻😐
😂          👆🏿          😂
😐          👆🏿          😐
😂 😐😂😐😂😐😂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '😐😂😐😂😐😂😐
😂        👇🏻           😂
😐         👇🏻          😐
😂👉🏿👉🏿😐👈🏿👈🏿😂
😐          👆🏻          😐
😂          👆🏻          😂
😐 😂😐😂😐😂😐']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😂😐😂😐😂😐😂
😐        👇🏿           😐
😂         👇🏿          😂
😐👉🏻👉🏻😐👈🏻👈🏻😐
😂          👆🏿          😂
😐          👆🏿          😐
😂 😐😂😐😂😐😂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😐😂😐😂😐😂😐
😂        👇🏻           😂
😐         👇🏻          😐
😂👉🏿👉🏿😐👈🏿👈🏿😂
😐          👆🏻          😐
😂          👆🏻          😂
😐 😂😐😂😐😂😐']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😂😐😂😐😂😐😂
😐        👇🏿           😐
😂         👇🏿          😂
😐👉🏻👉🏻😐👈🏻👈🏻😐
😂          👆🏿          😂
😐          👆🏿          😐
😂 😐😂😐😂😐😂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😐😂😐😂😐😂😐
😂        👇🏻           😂
😐         👇🏻          😐
😂👉🏿👉🏿😐👈??👈🏿😂
😐          👆🏻          😐
😂          👆🏻          😂
😐 ??😐😂😐😂😐']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😂😐😂😐😂😐😂
😐        👇🏿           😐
😂         👇🏿          😂
😐👉🏻👉🏻😐👈🏻👈🏻😐
😂          👆🏿          😂
😐          👆🏿          😐
😂 😐😂😐😂😐😂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😐😂😐😂😐😂😐
😂        👇🏻           😂
😐         👇🏻          😐
😂👉🏿👉🏿😐👈🏿👈🏿😂
😐          👆🏻          😐
😂          👆🏻          😂
😐 😂😐😂😐😂😐']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😂😐😂😐😂😐😂
😐        👇🏿           😐
😂         👇🏿          😂
😐👉🏻👉🏻😐👈🏻👈🏻😐
😂          👆🏿          😂
😐          👆🏿          😐
😂 😐😂😐😂😐😂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😐😂😐😂😐😂😐
😂        👇🏻           😂
😐         👇🏻          😐
😂👉🏿👉🏿😐👈🏿👈🏿😂
😐          👆🏻          😐
😂          👆🏻          😂
😐 😂😐😂😐😂😐']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😂😐😂😐😂😐😂
😐        👇🏿           😐
😂         👇🏿          😂
😐👉🏻👉🏻😐👈🏻👈🏻😐
😂          👆🏿          😂
😐          👆🏿          😐
😂 😐😂😐??😐😂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😐😂😐😂😐😂😐
😂        👇🏻           😂
😐         👇🏻          😐
😂👉🏿👉🏿😐👈🏿👈🏿😂
😐          👆🏻          😐
😂          👆🏻          😂
😐 😂😐😂😐😂😐']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
😂😐😂😐😂😐😂
😐        👇🏿           😐
😂         👇🏿          😂
😐👉🏻👉🏻😐👈🏻👈🏻😐
😂          👆🏿          😂
😐          👆🏿          😐
😂 😐😂😐😂😐😂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'خندیدم بسه از این مطالب خنده دار نفرس😐']);
}
elseif ($text == 'بمیر کرونا' or $text == 'Corona') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   •   •   •   •   •   •   ◀  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   •   •   •   •   •   ◀   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   •   •   •   •   ◀   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   •   •   •   ◀   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   •   •   ◀   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   •   ◀   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   •   ◀   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   •   ◀   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  •   ◀   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🦠  ◀   •   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💥  •   •   •   •   •   •   •   •   •   •  🔫']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💉💊💉💊💉💊💉💊']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'we wine']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'Corona Is Dead']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'وای کرونارو گاییدیم']);
}
elseif ($text == 'انگش' or $text == 'بارماخ') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑________________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑_______________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑______________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑_____________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑____________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑___________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑__________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑_________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑________👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑_______👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑______👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑____👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑___👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑__👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍑_👈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '✌انگشت شد✌']);
}
elseif ($text == 'جقیم' or $text == 'jagh2') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B=======✊🏻=D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B=====✊🏻===D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B==✊🏻======D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B✊🏻========D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B===✊🏻=====D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B=====✊🏻===D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B=======✊🏻=D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B====✊🏻====D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B==✊??======D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B✊🏻========D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B==✊🏻======D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B====✊🏻====D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B======✊🏻==D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B========✊🏻D']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'B========✊🏻D💦💦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'message' => 'کمر نموند برامون بمولا']);
}

elseif ($text == 'ریدیم' or $text == 'goh') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒
💩









🧑‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒

💩








🧑‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒


💩






🧑‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒



💩





??‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒




💩




🧑‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒






💩


🧑‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒







💩

🧑‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🐒








💩
🧑‍🦯']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'چیو نگاه میکنی ریدیم ب هیکل یاروع دیگ😂']);
}
elseif($text == 'سفید کون' or $text == 'کون سفید'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'message' => "کون"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "کون سفید"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "کون سفید من"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "کون سفید من چطورع"]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "یع دس مرامی دارکوبی بزن❤️"]);
yield $MadelineProto->sleep(1);
}
elseif ($text == 'کیرخر' or $text == 'kir') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩💩💩
💩💩💩
🖕🖕🖕
💥💥💥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '😂💩🖕
🖕😐🖕
😂🖕😂
💩💩💩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '😐💩😐
💩😂🖕
💥💩💥
🖕🖕😐']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🤤🖕😐
😏🖕😏
💩💥💩
💩🖕😂']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩💩💩
🤤🤤🤤
💩👽💩
💩😐💩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '😐🖕💩
💩💥💩
💩🖕💩
💩💔😐']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩💩🖕💩
😐🖕😐🖕
💩🤤🖕🤤
🖕😐💥💩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💥😐🖕💥
💥💩💩💥
👙👙💩💥
💩💔💩👙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩👙💥🖕
💩💥🖕💩
👙??🖕💥
💩😐👙🖕
💥💩💥💩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩😐🖕💩
💩🖕💥
👙🖕💥
👙🖕💥
💩💥🖕
😂👙🖕
💩💥👙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🤤😂🖕👙
😏🖕💥👙🖕🖕
😂🖕👙💥??🖕
😂🖕👙🖕😂🖕
💔🖕🖕🖕🖕🖕
💩💩💩💩
💩👙💩👙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🤫👙💩😂
💩🖕💩👙💥💥
💩💩💩💩💩💩
💩😐💩😐💩😐
😃💩😃😃💩💩
🤤💩🤤💩🤤💩
💩👙💩😐🖕💩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩🖕💥👙💥
💩👙💥🖕💥👙
👙🖕💥💩💩💥
👙🖕💥💩💥😂
💩💥👙🖕💩🖕
💩👙💥🖕💥😂
💩👙💥🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩👙💥👙👙
💩👙💥🖕💩😂
💩👙💥🖕💥👙
💩👙💥🖕💩👙
💩👙💥🖕😂😂
💩👙💥🖕😂😂
💩👙💥🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💩💩💩💩💩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '|همش تو کص ننه بدخواه😂🖕|']);
}
elseif ($text == 'مربع 2' or $text == 'mr1') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥??🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟥
🟥🟩🟩🟩🟩🟩🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💙💙💙💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '❣️I Love❣️']);
}
elseif ($text == 'مکعب' or $text == 'mr') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥??🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟥
🟥🟩🟩🟩🟩🟩🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶??🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💙💙💙💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '👑entire??']);
}
elseif ($text == 'چنگیز' or $text == 'changiz') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '   
*／ イ  *   　　　((( ヽ*♤
​(　 ﾉ　　　　 ￣Ｙ＼​
​| (＼　(\🎩/)   ｜    )​♤
​ヽ　ヽ` ( ͡° ͜ʖ ͡°) _ノ    /​ ♤
　​＼ |　⌒Ｙ⌒　/  /​♤
　​｜ヽ　 ｜　 ﾉ ／​♤
　 ​＼トー仝ーイ​♤
　　 ​｜ ミ土彡 |​♤
​) \      °     /​♤
​(     \       /​l♤
​/       / ѼΞΞΞΞΞΞΞD​💦
​/  /     /      \ \   \​ 
​( (    ).           ) ).  )​♤
​(      ).            ( |    |​ 
​|    /                \    |​♤
☆͍ 。͍✬͍​͍。͍☆͍​͍​͍
͍​͍ ​͍​͍☆͍。͍＼͍｜͍／͍。͍ ☆͍ ​͍✬͍​͍ ☆͍​͍​͍​͍
​͍ ͍​͍  *͍The selfradi Self Cli*
͍ ​͍​͍​͍☆͍。͍／͍｜͍＼͍。͍ ☆͍ ​͍✬͍​͍☆͍​͍​͍​͍
​͍​͍​͍。͍☆͍ 。͍✬͍​͍。͍☆͍​͍​͍​͍']);
}
elseif ($text == 'بکنش' or $text == 'کونش بزار'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'امیر گاییدتت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'فاضلاب شمال شرق مشهد تو کص ننت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'کیر گراز وحشی تو مادرت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'اونجا که شاعر میگه یه کیر دارم شاه نداره تو ننت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'پایه تختم تو کونت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'کلا کص ننت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'الکی بی دلیل کص ننت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'بابات چه ورقیه']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'دست زدم به کون بابات دلم رفت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'به بابات بگو سفید کنه شب میام بکنم']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'کص ننت؟']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'ایمیل عمتو لطف کن']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'کوننده خونه ای که عمت توش پول درمیاره نوشتم رو کیرم']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'کص ننت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'کص پدرت']);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'یک فرزند جدید داری امیر']);
}
elseif($text=='کصننت' or $text=='ksnne'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'کـــ']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'کــص']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'کــص ن']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'کـــص نـــنـ']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'کـــص نـنـتـ']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💝کص نـنـت']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☘کـــص نـنـت دیگه☘']);
}
elseif($text=='پشم' or $text== 'پشمام'){
  yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀️']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'پشم دیگه ندارم ولی برگام ریخت بمولا']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍂🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍂🍁🌱🌿🍂🍁🌱🌿🍂🍁🌱🌿🍂🍁🌱🌿']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🍃🍂🍁🌱🌿☘️🍀🍃🍁🍂🌿🌱☘️🍀🍃']);
  
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'دیگه برگی برام نمونده ']);
  sleep(2);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => 'پشمای عمو امیر ریخ']);
  }
elseif ($text == 'فاک' or $text == 'fuck') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🏿🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🖕🏿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🏾🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🏿🖕🖕🏿🖕🖕🏿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿🖕🖕🏿🖕🖕🏿🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🖕🖕🖕🖕🖕']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖕🏿??🏿🖕🏿🖕🏿🖕🏿🖕🏿']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖤fucking you🖤']);
}
elseif ($text == 'رقص' or $text == 'danc') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥
🟥🔲🔳🔲🟥
🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🔳🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🟪🟪🟪
🟪🔲🔳🔲🟪
🟪🟪🟪🟪🟪
🟪🟪🟪🟪🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🔲🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🔲🟪🟪
🟪🟪🟪🟪🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🔳🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🟪🟪🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟪🟪🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🟪🟪🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🟦🟦
🟦🔲🔳🔲🟦
🟦🟦🟦🟦🟦
🟦🟦🟦🟦🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🟦🟦🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🔳🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🟦🟦🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟦🟦🟦🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🟦🟦🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '◻️🟩🟩◻️◻️
◻️◻️🟩◻️🟩
🟩🟩🔳🟩🟩
🟩◻️🟩◻️◻️
◻️◻️🟩🟩◻️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟩⬜️⬜️🟩🟩
🟩🟩⬜️🟩⬜️
⬜️⬜️🔲⬜️⬜️
⬜️🟩⬜️🟩🟩
🟩🟩⬜️⬜️🟩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌹entire🌹']);
}
elseif ($text == 'bott' or $text == 'creator' or $text == 'سازنده') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "@RADI_SELF || radi #Turk"]);
  }
elseif ($text == 'خار' or $text == 'کاکتوس') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــــ 🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ــ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵ـ🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵💥🎈']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💥Bommmm💥']);
}
elseif ($text == 'رقص مربع' or $text == 'دنس') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥??🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥??🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧??🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧??🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '??🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧??🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧??🟧🟧🟧
🟧🟧??🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟪🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟪🟪🟪🟧🟧🟧
🟧🟧🟧🟪🟧🟪🟧🟧🟧
🟧🟧🟧🟪🟪🟪🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟪🟪🟪🟪🟪🟧🟧
🟧🟧🟪🟧🟧🟧??🟧🟧
🟧🟧🟪🟧🟦🟧🟪🟧🟧
🟧🟧🟪🟧🟧🟧🟪🟧🟧
🟧🟧🟪🟪🟪🟪🟪🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟪🟪🟪🟪🟪🟪🟪🟧
??🟪🟧🟧🟧🟧🟧🟪🟧
🟧🟪🟧🟦🟦🟦🟧🟪🟧
🟧🟪🟧🟦🟧🟦🟧🟪🟧
🟧🟪🟧🟦🟦🟦🟧🟪🟧
🟧🟪🟧🟧🟧🟧🟧🟪🟧
🟧🟪🟪🟪🟪🟪🟪🟪🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟪🟪🟪🟪🟪🟪🟪🟪
🟪🟧🟧🟧🟧🟧🟧🟧🟪
🟪🟧🟦🟦🟦🟦🟦🟧🟪
🟪🟧🟦🟧🟧🟧🟦🟧🟪
🟪🟧🟦🟧⬜️🟧🟦🟧🟪
🟪🟧🟦🟧🟧🟧🟦🟧🟪
🟪🟧🟦🟦🟦🟦🟦🟧🟪
🟪🟧🟧🟧🟧🟧🟧🟧🟪
🟪🟪🟪🟪🟪🟪🟪🟪🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟦🟦🟦🟦🟦🟦🟦🟧
🟧🟦🟧🟧🟧🟧🟧🟦🟧
🟧🟦🟧⬜️⬜️⬜️🟧🟦🟧
🟧🟦🟧⬜️⬜️⬜️🟧🟦🟧
🟧🟦🟧⬜️⬜️⬜️🟧🟦🟧
🟧🟦🟧🟧🟧🟧🟧🟦🟧
🟧🟦🟦🟦🟦🟦??🟦🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟦🟦🟦🟦🟦🟦🟦🟦🟦
🟦🟧🟧🟧🟧🟧🟧🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧🟧🟧🟧🟧🟧🟧🟦
🟦🟦🟦🟦🟦🟦🟦🟦🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜️🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜️🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥⬜️⬜️🟥🟥🟥🟥
🟥🟥🟥🟥⬜⬜️🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥??🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥💙💙🟥🟥🟥🟥
🟥🟥🟥🟥💙💙🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟦🟦🟥🟥🟥🟥
🟥🟥🟥🟥🟦🟦🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟨🟨🟨🟨🟨🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟨🟨🟨🟨🟨🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟨🟨🟨🟨🟨🟨??🟥
🟥🟨🟪🟨🟨🟨🟨🟪🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟪🟨🟨🟨🟨🟪🟨🟥
🟥🟪🟨🟨🟨🟨🟨🟨🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟨🟨🟨🟨🟨🟨🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟨🟨🟨🟨🟨🟨🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟧🟨🟦🟦🟨🟧🟪🟥
🟥🟪🟧🟦🟨🟨🟦🟧🟪🟥
🟥🟪🟧🟦🟨🟨🟦🟧🟪🟥
🟥🟪🟧🟨🟦🟦🟨🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟧💛🟦🟦💛🟧🟪🟥
🟥🟪🟧🟦💛💛🟦🟧🟪🟥
🟥🟪🟧🟦💛💛🟦🟧🟪🟥
🟥🟪🟧💛🟦🟦💛🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪??💛💙💙💛🟧🟪🟥
🟥🟪🟧💙💛💛💙🟧🟪🟥
🟥🟪🟧💙💛💛💙🟧🟪🟥
🟥🟪🟧💛💙💙💛🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪🖤🖤🖤🖤🟪🟪🟥
🟥🟪🟧💛💙💙💛🟧🟪🟥
🟥🟪🟧💙💛💛💙🟧??🟥
🟥??🟧💙💛💛💙🟧🟪🟥
🟥🟪🟧💛💙💙💛🟧🟪🟥
🟥🟪🟪🖤🖤🖤🖤🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥💜🟩🟩🟩🟩🟩🟩💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🟧💛💙💙💛🟧💜🟥
??💜🟧💙💛💛💙🟧💜🟥
🟥💜🟧💙💛💛💙🟧💜🟥
🟥💜🟧💛💙💙💛🟧💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🟩🟩🟩🟩🟩🟩💜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥💜🟩🟩🟩??🟩🟩💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🟩🟩🟩🟩🟩🟩💜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥💜💚💚💚💚💚💚💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜💚💚💚💚💚💚💜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
❤️💜💚💚💚💚💚💚💜❤️
❤️💜💜🖤🖤🖤🖤💜💜❤️
❤️💜🧡💛💙💙💛🧡💜❤️
❤️💜🧡💙💛💛💙🧡💜❤️
❤️💜🧡💙💛💛??🧡💜❤️
❤️💜🧡💛💙💙💛🧡💜❤️
❤️💜💜🖤🖤🖤🖤💜💜❤️
❤️💜💚💚💚💚💚💚💜❤️
❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️◻️◽️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️◻️◽️▫️
⬜️⬜️⬜️⬜️⬜️⬜️◻️◽️◽️
⬜️⬜️⬜️⬜️⬜️⬜️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️⬜️◻️◽️▫️▫️
⬜️⬜️⬜️⬜️⬜️◻️◽️▫️▫️
⬜️⬜️⬜️⬜️⬜️◻️◽️◽️◽️
⬜️⬜️⬜️⬜️⬜️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️⬜️◻️◽️▫️▫️▫️
⬜️⬜️⬜️⬜️◻️◽️▫️▫️▫️
⬜️⬜️⬜️⬜️◻️◽️▫️▫️▫️
⬜️⬜️⬜️⬜️◻️◽️◽️◽️◽️
⬜️⬜️⬜️⬜️◻️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️◽️◽️◽️◽️
⬜️⬜️⬜️◻️◻️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️◽️◽️◽️◽️◽️
⬜️⬜️◻️◻️◻️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️◽️◽️◽️◽️◽️◽️
⬜️◻️◻️◻️◻️◻️◻️◻️◽️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️◽️◽️◽️◽️◽️◽️◽️
◻️◻️◻️◻️◻️◻️◻️◻️◻️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️◽️◽️◽️◽️◽️◽️◽️◽']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
}
elseif ($text == 'گلب' or $text == 'qlb2') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💚💛🧡❤️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💙💚💜🖤']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '❤️🤍🧡💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖤💜💙💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🤍🤎❤️💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🖤💜💚💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💝💘💗💘']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '❤️🤍🤎🧡']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💕💞💓🤍']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💜💙❤️🤍']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💙💜💙💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🧡💚🧡💙']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💝💜💙❤️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💞🖤💙💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '💛🧡❤️💚']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '😍Im crazy about you😍']);
}
elseif ($text == 'مربع2' or $text == 'mor') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟩🟨⬛️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟨🟩🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟦🟥🟩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⬜️⬛️⬜️🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟨🟦🟪🟩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬛️🟪🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟩🟫🟨']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🔳🔲◻️🟥']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '▪️▫️◽️◼️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '◻️◼️◽️▪️']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟪🟦🟨🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟥⬛️🟪🟩']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟧🟨🟥🟦']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🟩🟦🟩🟪']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🍁entire🍁']);
}
elseif ($text == 'قلب2' or $text == 'ghalb') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💙🧡💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍💙💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💙
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     💙
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💜💙
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💙🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
💙💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💙     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💙🧡💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍💙💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💙
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     💙
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💜💙
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💙🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
💙💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💙     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💙🧡💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍💙💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💙
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     💙
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💜💙
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💙🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
💙💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💙     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💙🧡💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍💙💛
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💙
💚     🤎
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     💙
❤️💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💜💙
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
❤️💙🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤍🧡💛
💚     🤎
💙💜🖤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
❤️💙🧡
🤎 ♡🤍
🖤💜💚
"]);
}
elseif ($text == 'رقص2' or $text == 'raqs') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~( ._.)--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--(._. )~-
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~( ._.)--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--(._. )~-
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~( ._.)--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--(._. )~-
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
-~(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
~-(._. )--

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)~-

"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
--( ._.)-~
تامام
"]);
}
elseif ($text == 'کیر2' or $text == 'kir2') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "


.                                🟦🟦🟦🟦🟦
        


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
         🟦



"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦
🟦       


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "


.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟦🟦🟦🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟦🟦🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟦🟥🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟦🟥🟥🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥??
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦🟦🟦🟦🟥
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦🟦🟦🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦🟦🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟦🟦🟦🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟦🟦🟥🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟦🟥🟥🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟦🟥
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟦🟦        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟦🟥        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟥🟥        🟦🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟥🟥        🟥🟦


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟥🟥        🟥🟥


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪??🟨🟧
🟥🟥
🟥🟥        🟥🟥


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦??
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦⬛️
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩⬛️🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨⬛️🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧⬛️🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                ⬛️🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         ⬛️
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         ⬛️
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         ??
         ⬛️
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     ⬛️
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨⬛️
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩⬛️🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪⬛️🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
⬛️     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️⬛️🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬛️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
⬛️⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬛️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
⬛️⬜️
🟩🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩⬛️        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
⬛️🟦        🟨🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        ⬛️🟧


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨⬛️


"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧

یاح یاح یاح
"]);
}
elseif ($text == 'بکشش' or $text == 'bokoshesh') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                     •🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                    • 🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                  •   🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                •     🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐              •       🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐            •         🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐           •          🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐         •            🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐       •              🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐     •                🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐   •                  🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐 •                    🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐•                     🔫
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😵                       🔫😏
"]);
}
elseif(strpos($text,"هوای ") !== false){
$part = trim(str_replace("هوای ","",$text));
$part = explode("|",$part."|||||");
$query = trim($part[0]);
$url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$query."&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
$city = $url["name"];
$deg = $url["main"]["temp"];
$type1 = $url["weather"][0]["main"];
if($type1 == "Clear"){
$tpp = 'آفتابی☀';
}
elseif($type1 == "Clouds"){
$tpp = 'ابری ☁☁';
}
elseif($type1 == "Rain"){
$tpp = 'بارانی ☔';
}
elseif($type1 == "Thunderstorm"){
$tpp = 'طوفانی ☔☔☔☔';
}
elseif($type1 == "Mist"){
$tpp = 'مه 💨';
}
if($city != ''){
$txt = "دمای شهر $city هم اکنون $deg درجه سانتی گراد می باشد

شرایط فعلی آب و هوا: $tpp";
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id, 'message' => $txt]);
}else{
$txt = "⚠️شهر مورد نظر شما يافت نشد";
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id, 'message' => $txt]);
}
}
elseif ($text == 'bk2' or $text == 'بکیرم2') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤        🤤
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤           🤤
🤤        🤤
🤤🤤🤤
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😂         😂
😂       😂
😂     😂
😂   😂
😂😂
😂   😂
😂      😂
😂        😂
😂          😂
😂            😂"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
👽👽👽          👽         👽
😍         😍      😍       😍
😎           😎    😎     😎
🤬        🤬       🤬   🤬
😄😄😄          🤓 🤓
🤨         😊      😋   😋
🤯           🤯    🤯     🤯
🤘           🤘    😘        😘
🤫       🤫        🙊          🙊
🤡🤡🤡          😗             🙊"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋??          💋            💋"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         ??      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           ??    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋??💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        😏       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
🤘           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           🤘    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        😏       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
🤘           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
??       💋        💋          💋
😏😏😏          😏            😏
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤬🤬🤬          🤬         🤬
😡         😡      😡       😡
🤬           🤬    🤬     🤬
😡        😡       😡   😡
🤬🤬🤬          🤬🤬
😡         😡      😡   😡
🤬           🤬    🤬      🤬
😡           😡    😡        😡
🤬       🤬        🤬          🤬
😡😡😡          😡            😡

بانک کشاورزی 😐"]);
}
elseif ($text == 'زنبور2' or $text == 'viz2') {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏥__________🏃‍♂️______________🐝']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏥______🏃‍♂️_______🐝']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏥______🏃‍♂️_____🐝']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏥___🏃‍♂️___🐝']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏥_🏃‍♂️_🐝']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'در رفت عه☹️🐝']);
}




elseif($text=='زنبور' or $text=='vizviz'){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂??_______🏃😱😳🚶‍♂________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥_______________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥______________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥_____________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥____________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥___________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥__________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥_________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥_______🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥______🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥____🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥___🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥__🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🏃‍♂😥_🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '👨‍🦽😭🥺']);
}
//-------------------- End Of Fun ---------------------
//================ Enemy Tools ================
elseif($text == 'delenemy' or $text == '/Delenemy'){
if ($replyToId){
if($type3 == 'supergroup' or $type3 == 'chat'){
$gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
$messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
$gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
$messag = $gms['messages'][0]['from_id']['user_id'];
if(in_array($messag, $data['enemies'])){
$k = array_search($messag, $data['enemies']);
unset($data['enemies'][$k]);
file_put_contents("data.json", json_encode($data,448));
yield $this->contacts->unblock(['id' => $messag]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "֍ 𝑻𝒉𝒆 [𝑼𝒔𝒆𝒓](tg://user?id=$messag) 𝑹𝒆𝒎𝒐𝒗𝒆𝒅 𝑭𝒐𝒓𝒎 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕.",'parse_mode'=>'MarkDown']);
}else{
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "֍ 𝑻𝒉𝒆 [𝑼𝒔𝒆𝒓](tg://user?id=$messag) 𝑹𝒆𝒎𝒐𝒗𝒆𝒅 𝑭𝒐𝒓𝒎 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕.",'parse_mode'=>'MarkDown']);
}
}
}
}
/* * * * * * * * * * * 
* * * * * * * * * * *
* * * * * * * * * * */
//==========//
elseif(($text == 'setenemy' or $text == '/Setenemy') && isset($update['message']['reply_to']) && $update['message']['peer_id']['_'] == 'peerChannel'){
    $replyToFromId = yield $this->channels->getMessages([
        'channel' => $peer,
        'id' => [$update['message']['reply_to']['reply_to_msg_id']]
    ])['messages'][0]['from_id']['user_id'];
    if($replyToFromId != self::Admins[0]){
        $data['enemies'][] = $replyToFromId;
        file_put_contents("data.json", json_encode($data,448));
    }
    yield $this->messages->editMessage([
        'peer' => $peer,
        'id' => $msg_id,
        'message' => "֍ 𝑻𝒉𝒆 [𝑼𝒔𝒆𝒓](tg://user?id=$replyToFromId) " . (in_array($replyToFromId, $data['enemies']) ? '𝑨𝒅𝒅𝒆𝒅':'𝑻𝒐') . ' 𝑨𝒅𝒅𝒆𝒅 𝑻𝒐 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕.',
        'parse_mode'=>'MarkDown'
    ]);
}
//==========//
elseif($text == 'setenemy' or $text == '/Setenemy' and $type == 'user'){
if(!in_array($peer, $data['enemies'])){
$data['enemies'][] = $peer;
file_put_contents("data.json", json_encode($data));
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "֍ 𝑻𝒉𝒆 [𝑼𝒔𝒆𝒓](tg://user?id=$peer) 𝑨𝒅𝒅𝒆𝒅 𝑻𝒐 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕.",'parse_mode'=>'MarkDown']);
}else {
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "֍ 𝑻𝒉𝒆 [𝑼𝒔𝒆𝒓](tg://user?id=$peer) 𝑨𝒅𝒅𝒆𝒅 𝑻𝒐 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕.",'parse_mode'=>'MarkDown']);
}}
//==========//
if($text == 'delenemy' or $text == '/Delenemy' and $type == 'user'){
if(in_array($peer, $data['enemies'])){
$k = array_search($peer, $data['enemies']);
unset($data['enemies'][$k]);
file_put_contents("data.json", json_encode($data,448));
yield $this->contacts->unblock(['id' => $peer]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "֍ 𝑻𝒉𝒆 [𝑼𝒔𝒆𝒓](tg://user?id=$peer) 𝑹𝒆𝒎𝒐𝒗𝒆𝒅 𝑭𝒐𝒓𝒎 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕.",'parse_mode'=>'MarkDown']);
}else{
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "֍ 𝑻𝒉𝒆 [𝑼????𝒓](tg://user?id=$peer) 𝑹𝒆𝒎𝒐𝒗𝒆𝒅 𝑭𝒐𝒓𝒎 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕.",'parse_mode'=>'MarkDown']);
}
} 
// List
elseif(preg_match("/^[\/\#\!]?(enemylist|انمی لیست)$/i", $text)){
if(count($data['enemies']) > 0){
$txxxt = "ᴇɴᴇᴍʏ ʟɪsᴛ :
";
$counter = 1;
foreach($data['enemies'] as $ene){
$mee = yield $MadelineProto->get_full_info($ene);
$me = $mee['User'];
$me_name = $me['first_name'];
$me_id = $me['id'];
$txxxt .= "▽ $counter ▽ [$me_name](tg://user?id=$me_id) \n";
$counter++;
}
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "$txxxt",'parse_mode'=>'MarkDown']);
} else{
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☣ 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕 𝑰𝑺 𝑵𝒐𝒘 𝑬𝒎𝒑𝒕𝒚",'parse_mode'=>'MarkDown']);
}}
// Clean List
elseif(preg_match("/^[\/\#\!]?(cleanenemylist|حذف انمی لیست)$/i", $text)){
$data['enemies'] = [];
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☣ 𝑬𝒏𝒆𝒎𝒚 𝑳𝒊𝒔𝒕 𝑰𝑺 𝑵𝒐𝒘 𝑬𝒎𝒑𝒕𝒚",'parse_mode'=>'MarkDown']);
}
//============== Ping ==============
elseif ($text == 'ping' or $text == '/ping' or $text == 'پینگ') {
    $MadelineProto->channels->joinChannel(['channel' => "@radi_turkm" ]);
$load = sys_getloadavg();
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑷𝒊𝒏𝒈 : **$load[0]**",'parse_mode'=>'MarkDown']);
}
elseif($text == 'ربات'){
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝓢𝓮𝓵𝓯 𝓜𝓻 𝓡𝓪𝓭𝓲 𝑰𝒔 𝑵𝒐𝒘 𝑶𝒏𝒍𝒊𝒏𝒆 "]);
}
//================ Restart ==================
elseif($text == '/restart' or $text == 'ریست'){
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑹𝒆𝒔𝒕𝒂𝒓𝒕𝒆𝒅 !"]);
$MadelineProto->restart();
}
//================ Usage ==================
elseif ($text == 'مصرف'  or $text == 'usage'){
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑹𝒂𝒎 𝑼𝒔𝒆𝒂𝒈𝒆 : **$mem_using** 𝒎𝒈",'parse_mode'=>'MarkDown']);
}
//============== Status ==============
elseif($text == 'وضعیت' or $text == 'status'){
    $MadelineProto->channels->joinChannel(['channel' => "@radi_turkm" ]);
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✎ 𝑮??𝒕𝒕𝒊𝒏𝒈 𝑺𝒕𝒂𝒕𝒖𝒔 . . . !",'parse_mode'=>'MarkDown']); 
$typing = $data['typing'];
$game = $data['game'];
$voice = $data['voice'];
$video = $data['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
$status = "
☍ 𝑺𝒕𝒂𝒕𝒖𝒔 𝑰𝒔 : 
▦▦▦▦▦▦▦▦▦▦▦▦▦▦
☌ 𝑩𝒊𝒐 : `$bioname`
☌ 𝑵𝒂𝒎𝒆 : `$profname`
☌ 𝑷𝒂𝒓𝒕 𝑴𝒐𝒅𝒆 : `$partmode`
☌ 𝑩𝒐𝒍𝒅  𝑴𝒐𝒅𝒆 : `$boldmode`
☌ 𝑻𝒊𝒎𝒆 𝑵𝒂𝒎𝒆 : `$timename`
☌ 𝑻𝒊𝒎𝒆 𝑩𝒊𝒐 : `$timebio`
☌ 𝑰𝒕𝒂𝒍𝒊𝒄 𝑴𝒐𝒅𝒆 : `$italicmode`
☌ 𝑪𝒐𝒅𝒊𝒏𝒈 𝑴𝒐𝒅𝒆 : `$codingmode`
☌ 𝑫𝒆𝒍𝒆𝒕𝒆𝒅 𝑴𝒐𝒅𝒆 : `$deletedmode`
☌ 𝑯𝒂𝒔𝒉𝒕𝒂𝒈 𝑴𝒐𝒅𝒆 : `$hashtagmode`
☌ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑴𝒐𝒅𝒆 : `$mentionmode`
☌ 𝑴𝒆𝒏𝒕𝒊𝒐𝒏 𝑻𝒐𝒘 𝑴𝒐𝒅𝒆 : `$mention2mode`
☌ 𝑼𝒏𝒅𝒆𝒓𝒍𝒊??𝒆 𝑴𝒐𝒅𝒆 : `$underlinemode`
☌ 𝑶𝒏𝒍𝒊𝒏𝒆 𝑴𝒐𝒅𝒆 : `$onlinemode`
☌ 𝑹𝒆𝒗𝒆𝒓𝒔 𝑴𝒐𝒅𝒆 : `$reversemode`
☌ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑻𝒚𝒑𝒆 : `$typing`
☌ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑮𝒂𝒎𝒆 : `$game`
☌ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒐𝒊𝒄𝒆 : `$voice`
☌ 𝑨𝒄𝒕𝒊𝒐𝒏 𝑽𝒊𝒅𝒆𝒐 : `$video`
▃▃▃▃▃▃▃▃▃▃▃▃▃▃
☌ 𝑷𝒊𝒏𝒈 : **$load[0]**
☌ 𝑹𝒂𝒎 𝑼𝒔𝒆𝒂𝒈𝒆 : **$mem_using** 𝒎𝒈
";
$MadelineProto->messages->sendMessage(['peer' => $peer,
'message'=> "$status",
'parse_mode' => 'MarkDown','reply_to_msg_id' => $message['id']]);
}}
//================ User Founder ================
elseif(preg_match("/^[\/\#\!]?(user) (.*)$/i", $text, $m)){ 
$link = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,
'id' => $msg_id,
'message' => "☇ [𝑪𝒍𝒊𝒄𝒌 𝑯𝒆𝒓𝒆](tg://user?id=$link) !",
'parse_mode'=>'MarkDown']);

}
//============== Upload ==============
 if(preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text,$a)){ 
$oldtime = time();
$link = $a[2];
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_NOBODY, TRUE);
$data = curl_exec($ch);
$size1 = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD); curl_close($ch);
$size = round($size1/1024/1024,1);
if($size <= 150){
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => '🌵 Please Wait...
💡 FileSize : '.$size.'MB']);
$path = parse_url($link, PHP_URL_PATH);
$filename = basename($path);
copy($link, "files/$filename");
yield $this->messages->sendMedia([
'peer' => $peer,
'media' => [
'_' => 'inputMediaUploadedDocument',
'file' => "files/$filename",
'attributes' => [['_' => 'documentAttributeFilename',
'file_name' => "$filename"]]],
'message' => "🔖 Name : $filename
💠 [Your File !]($link)
💡 Size : ".$size.'MB',
'parse_mode' => 'Markdown'
]);
$t=time()-$oldtime;
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✅ Uploaded ($t".'s)']);
unlink("files/$filename");
} else {
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => '⚠️ خطا : حجم فایل بیشتر 150MB است!']);
unset($t,$path,$filename,$oldtime,$size,$link);
}
}   
//============== Restart & Die ==============
elseif ($text == '/die;') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => '!.!.!.!']);
yield $this->restart();
die;
}
//============== Part Mode ==============
elseif($partmode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
$text = str_replace(" ","‌",$text);
for ($T = 1; $T <= mb_strlen($text); $T++) {
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => mb_substr($text, 0, $T)]);
yield $MadelineProto->sleep(0.1);
}
}
}}
//============== Reverse Mode ==============
elseif($reversemode == "on"){
if($update){
if(!in_array($text,$dastoorat)){
$mu = str_replace(" ","%20",$text);
$rev = file_get_contents("https://api.codebazan.ir/strrev/?text=".$mu);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>$rev ]);

}
}}
//============== HashTag Mode ==============
elseif($hashtagmode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
$text = str_replace(" ","_",$text);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "#$text"]);

}
}}
//============== Bold Mode ==============
elseif($boldmode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "**$text**",'parse_mode'=>'MarkDown']);

}
}}
//============== Italic Mode ==============
elseif($italicmode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<i>$text</i>",'parse_mode'=>'HTML']);

}
}}
//============== UnderLine Mode ==============
elseif($underlinemode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<u>$text</u>",'parse_mode'=>'HTML']);

}
}}
//============== Deleted Mode ==============
elseif($deletedmode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<del>$text</del>",'parse_mode'=>'HTML']);

}
}}

//============== Mention Mode ==============
elseif($mentionmode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "[$text](tg://user?id=$admin)",'parse_mode'=>'MarkDown']);
}
}}
//============== Mention 2 Mode ==============
elseif ($mention2mode == "on") {
 if ($update) {
  if($type3 == 'supergroup' or $type3 == 'chat'){
$replyToUserId = yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$message['reply_to']['reply_to_msg_id']]
])['messages'][0]['from_id']['user_id']; 
if( strlen($text) < 150){
    try{
yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "[$text](tg://user?id=$replyToUserId)",'parse_mode'=>'MarkDown']);
} catch (\danog\MadelineProto\RPCErrorException $e) { 
} catch (\danog\MadelineProto\Exception $e2) {
}
}}  } }
//============== Coding Mode ==============
elseif($codingmode == "on"){
if($update){
if(!in_array($text,$dastoorat) && strlen($text) < 150){
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "`$text`",'parse_mode'=>'MarkDown']);
}
}}
//============== Chat ID ==============
elseif($text == '/id' or $text == 'id'){
 if (isset($message['reply_to']['reply_to_msg_id'])) {
   if($type3 == 'supergroup' or $type3 == 'chat'){
$replyToUserId = yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$message['reply_to']['reply_to_msg_id']]
])['messages'][0]['from_id']['user_id'];
 yield $this->sendOrEdit($update,
"𝒚𝒐𝒖𝒓 𝒊𝒅 : ` $replyToUserId `  ");
} else {
	if($type3 == 'user'){
yield $this->sendOrEdit($update,
"𝒚𝒐𝒖𝒓 𝒊𝒅 : `$peer`" );
}}} else {
 yield $this->sendOrEdit($update,
"𝒈𝒓𝒐𝒖𝒉 𝒊𝒅 : `$peer`" );
}  }
//================ Flood ================
elseif(preg_match("/^[\/\#\!]?(flood2) ([0-9]+) (.*)$/i", $text, $m)){ 
$count = $m[2];
$txt = $m[3];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "∝ 𝑭𝒍𝒐𝒐𝒅𝒊𝒏𝒈 𝑻𝒆𝒙𝒕 ( `$txt` ) 𝑪𝒐𝒖𝒏𝒕 ( `$count` ) . . . !",'parse_mode' => 'markdown']);
for($i=1; $i <= $count; $i++){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
}
}
    elseif (preg_match("/^[\/#!]?([Ff][Ll][Oo][Oo][Dd]|فلود) ([0-9]+) (.*?)$/s", $text, $_)) {
                    $txt = "";
                    while ($_[2] && $_[2]--) {
                        $txt .= $_[3] . PHP_EOL;
                    }
                    yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => $txt]);
                }
//================ Cleaner ================
elseif($text == 'clean all' or $text == 'پاکسازی کلی'){
if($type3 == "supergroup"||$type3 == "chat"){
yield $MadelineProto->messages->sendMessage([
'peer' => $peer,
'reply_to_msg_id' => $msg_id,
'message'=> "𝑨𝒍𝒍 𝑮𝒓𝒐𝒖𝒑 𝑴𝒆𝒔𝒔𝒂𝒈𝒆 𝑫𝒆𝒍𝒕𝒆𝒅 !", 
'parse_mode'=> 'markdown' ,
'disable_web_page_preview'=>true,
]);
$array = range($msg_id,1);
$chunk = array_chunk($array,100);
foreach($chunk as $v){
sleep(0.05);
yield $MadelineProto->channels->deleteMessages([
'channel' =>$peer,
'id' =>$v
]);
}
}}
//================ Cleaner ================
elseif($text == 'config' or $text == 'پیکربندی'){
$MadelineProto->channels->joinChannel(['channel' => "@radi_turkm" ]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message'=> "𝑪𝒐𝒏𝒇𝒊𝒈 𝓢𝓮𝓵𝓯 𝓜𝓻 𝓡𝓪𝓭𝓲 𝑶𝒌 !", 'parse_mode'=>'MarkDown']);
}
//================ Fall ================
elseif($text == "fal" or $text == "fall" or $text == "فال"){
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$add = "http://www.beytoote.com/images/Hafez/".rand(1,149).".gif";
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "♇ 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑭𝒂𝒍𝒍 𝑯𝒂𝒇𝒆𝒛 𝑭𝒐𝒓 𝒀𝒐𝒖 . . . !",'parse_mode'=>'MarkDown']);
$inputMediaPhotoExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $add];
$MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaPhotoExternal ,'reply_to_msg_id' => $msg_id,'message' => "♇ 𝒀𝒐𝒖𝒓 𝑭𝒂𝒍𝒍 𝑯𝒂𝒇𝒆𝒛 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚"]);
}
} 
//================ Meaning ================
elseif(preg_match('~^معنی (.+)~s',$text,$match) and $match=$match[1] or preg_match('~^meane (.+)~s',$text,$match) and $match=$match[1]) {
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
preg_match('~<p class="">(.+?)</p>~si',file_get_contents('https://www.vajehyab.com/?q='.urlencode($match)),$p);
$p=trim(strip_tags(preg_replace(['~<[a-z0-9]+?>.+?</[a-z0-9]+?>|&.+?;~','~<br.+?>~s'],['',"\n"],$p[1])));
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "♃ 𝑴𝒆𝒂𝒏𝒊𝒏𝒈 ( `$match` ) 𝑭𝒂𝒓𝒔𝒊 𝑾𝒐𝒓𝒅 . . . !",'parse_mode'=>'MarkDown']);
if($p !=NULL){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "♃ کلمه اولیه : `$match`
» معنی :
» $p", 'parse_mode'=>"MarkDown",'reply_to_msg_id' => $msg_id,
]);
}else{
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "♃ 𝒀𝒐𝒖𝒓 𝑾𝒐𝒓𝒅 𝑵𝒐𝒕 𝑭𝒐𝒖𝒏𝒅 !", 'parse_mode'=>"MarkDown",'reply_to_msg_id' => $msg_id,
]);
}
}}
//================ Git Hub ================
elseif(preg_match("/^[\/\#\!]?(git) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu=$m[2];
$mu = str_replace("https://github.com/","",$mu);
$mu = str_replace("http://github.com/","",$mu);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "♃ 𝑮𝒆𝒕𝒕𝒊𝒏𝒈 𝑻𝒉𝒆 𝑭𝒊𝒍𝒆  ( `$mu` ) 𝑻𝒐 𝑻𝒉𝒆 𝑮𝒊𝒕 𝑯𝒖𝒃 . . . ! ",'parse_mode'=>"MarkDown"]);
$rev = "https://github.com/".$mu."/archive/master.zip";
$inputMediaDocumentExternal = ['_' => 'inputMediaDocumentExternal', 'url' => $rev];
$MadelineProto->messages->sendMedia(['peer' => $peer,
'media' => $inputMediaDocumentExternal ,
'reply_to_msg_id' => $msg_id,
'message' => "♃ 𝒀𝒐𝒖𝒓 𝑮𝒊𝒕 𝑯𝒖𝒃 𝑭𝒊𝒍𝒆 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚"]);
}
}

//================ Block & UnBlock ================
//==========//
elseif($text == 'unblock' or $text == '/unblock'){
if($type3 == 'supergroup' or $type3 == 'chat'){
    $gms = yield $this->channels->getMessages([
        'channel' => $peer,
        'id'      => [$replyToId]
    ]);
    $user = $gms['messages'][0]['from_id']['user_id'];
    yield $this->contacts->unblock([
        'id' => $user
    ]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "𝐒𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 𝐔𝐧𝐛𝐥𝐨𝐜𝐤𝐞𝐝 !"]);
} else {
if($type3 == 'user'){
yield $this->contacts->unblock(['id' => $peer]); yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "𝐒𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 ??𝐧𝐛𝐥𝐨𝐜𝐤𝐞𝐝 !"]);
}
}
} 
elseif($text == 'block' or $text == '/block'){
if($type3 == 'supergroup' or $type3 == 'chat'){
    $gms = yield $this->channels->getMessages([
        'channel' => $peer,
        'id'      => [$replyToId]
    ]);
    $user = $gms['messages'][0]['from_id']['user_id'];
    yield $this->contacts->block([
        'id' => $user
    ]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "𝐒𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 𝐛𝐥𝐨𝐜𝐤𝐞𝐝 !"]);
} else {
if($type3 == 'user'){
yield $this->contacts->block(['id' => $peer]); yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "𝐒𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 𝐛𝐥𝐨𝐜𝐤𝐞𝐝 !"]);
}
}
}
//================== Date =============
// ==================== Proxy =================
elseif ($text == 'پروکسی' or $text == 'proxy') {
  if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "◖ **Proxy List**
  ◖[Proxy 1](https://t.me/proxy?server=130.185.120.159&port=24953&secret=ee0587b4108c6ce5d2022ee02837975df4617276616e636c6f75642e636f6d)
  ◖[Proxy 2](https://t.me/proxy?server=Www.Png.jpg.ONLINE-POWER.dynu.com.&port=443&secret=ddf4359a9b325ff1d1e5084df0e0f7537b)
  ◖[Proxy 3](https://t.me/proxy?server=185.235.40.117&port=24953&secret=ee758d13fba78d6c1765fc0c7473a63c5b617276616e636c6f75642e636f6d) "]);
}}
//================ Reverse String ================
elseif(preg_match("/^[\/\#\!]?(rev|معکوس) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu=$m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "➹ 𝑹𝒆𝒗𝒆𝒓𝒔𝒊𝒏𝒈 𝑻𝒉𝒆 ( `$mu` ) 𝑻𝒆𝒙𝒕 . . . ! ",'parse_mode'=>"MarkDown"]);
$mu = str_replace(" ","%20",$mu);
$rev = file_get_contents("https://api.codebazan.ir/strrev/?text=".$mu);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 
$rev, 
'parse_mode'=>"MarkDown",'reply_to_msg_id' => $msg_id,
]);
}
}
//================ Farsi Font Maker ================
elseif(preg_match("/^[\/\#\!]?(fafont) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$matn = strtoupper("$m[2]");
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "➹ 𝑩𝒖𝒍𝒅𝒊𝒏𝒈 10 𝑭𝒂𝒓𝒔𝒊 𝑭𝒐𝒏𝒕 𝑭𝒐𝒓 ( `$m[2]` ) 𝑵𝒂𝒎𝒆 . . . ! ",'parse_mode'=>"MarkDown"]);
$fa = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی']; 
$_a = ['آ','اَِ','بَِ','پَِـَِـ','تَِـ','ثَِ','جَِ','چَِ','حَِـَِ','خَِ','دَِ','ذَِ','رَِ','زَِ','ژَِ','سَِــَِ','شَِـَِ','صَِ','ضَِ','طَِ','ظَِ','عَِ','غَِ','فَِ','قَِ','ڪَِــ','گَِــ','لَِ','مَِــَِ','نَِ','وَِ','هَِ','یَِ'];
$_b = ['آ','ا','بـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','پـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','تـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ثـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','جـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','چـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','حـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','خـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','د۪ٜ','ذ۪ٜ','ر۪ٜ','ز۪ٜ‌','ژ۪ٜ','سـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','شـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','صـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ضـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','طـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','ظـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','عـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','غـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','فـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','قـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','کـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','گـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','لـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','مـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','نـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','و','هـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','یـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ']; 
$_c= ['آ','ا','بـــ','پــ','تـــ','ثــ','جــ','چــ','حــ','خــ','دّ','ذّ','رّ','زّ','ژّ','ســ','شــ','صــ','ضــ','طــ','ظــ','عــ','غــ','فــ','قــ','کــ','گــ','لــ','مـــ','نـــ','وّ','هــ','یـــ']; 
$_d = ['آ','ا','بـ﹏ـ','پـ﹏ـ','تـ﹏ـ','ثـ﹏ــ','جـ﹏ــ','چـ﹏ـ','حـ﹏ـ','خـ﹏ـ','د','ذ','ر','ز','ژ','سـ﹏ـ','شـ﹏ـ','صـ﹏ــ','ضـ﹏ـ','طـ﹏ـ','ظـ﹏ــ','عـ﹏ـ','غـ﹏ـ','فـ﹏ـ','قـ﹏ـ','کـ﹏ـ','گـ﹏ـ','لـ﹏ــ','مـ﹏ـ','نـ﹏ـ','و','هـ﹏ـ','یـ﹏ـ']; 
$_e = ['آ','ا','ب̈́ـ̈́ـ̈́ـ̈́ـ','پ̈́ـ̈́ـ̈́ـ̈́ـ','ت̈́ـ̈́ـ̈́ـ̈́ـ','ث̈́ـ̈́ـ̈́ـ̈́ـ','ج̈́ـ̈́ـ̈́ـ̈́ـ','چـ̈́ـ̈́ـ̈́ـ','ح̈́ـ̈́ـ̈́ـ̈́ـ','خـ̈́ـ̈́ـ̈́ـ','د','ذ','ر','ز','ژ','سـ̈́ـ̈́ـ̈́ـ','شـ̈́ـ̈́ـ̈́ـ','ص̈́ـ̈́ـ̈́ـ̈́ـ','ض̈́ـ̈́ـ̈́ـ̈́ـ','ط̈́ـ̈́ـ̈́ـ̈́ـ','ظـ̈́ـ̈́ـ̈́ـ̈́ـ','ع̈́ـ̈́ـ̈́ـ̈́ـ','غ̈́ـ̈́ـ̈́ـ̈́ـ','فـ̈́ـ̈́ـ̈́ـ̈́ـ','قـ̈́ـ̈́ـ̈́ـ','کـ̈́ـ̈́ـ̈́ـ','گـ̈́ـ̈́ـ̈́ـ̈́ـ','ل̈́ـ̈́ـ̈́ـ̈́ـ','م̈́ـ̈́ـ̈́ـ̈́ـ','ن̈́ـ̈́ـ̈́ـ̈́ـ','و','ه̈́ـ̈́ـ̈́ـ̈́ـ','ی̈́ـ̈́ـ̈́ـ̈́ـ']; 
$_f = ['آ','اؒؔ','بـ͜͡ــؒؔـ͜͝ـ','پـ͜͡ــؒؔـ͜͝ـ','تـ͜͡ــؒؔـ͜͝ـ','ثـ͜͡ــؒؔـ͜͝ـ','جـ͜͡ــؒؔـ͜͝ـ','چـ͜͡ــؒؔـ͜͝ـ','حـ͜͡ــؒؔـ͜͝ـ','خـ͜͡ــؒؔـ͜͝ـ','د۠۠','ذ','ر','ز','ژ','سـ͜͡ــؒؔـ͜͝ـ','شـ͜͡ــؒؔـ͜͝ـ','صـ͜͡ــؒؔـ͜͝ـ','ضـ͜͡ــؒؔـ͜͝ـ','طـ͜͡ــؒؔـ͜͝ـ','ظـ͜͡ــؒؔـ͜͝ـ','عـ͜͡ــؒؔـ͜͝ـ','غـ͜͡ــؒؔـ͜͝ـ','فـ͜͡ــؒؔـ͜͝ـ','قـ͜͡ــؒؔـ͜͝ـ','کـ͜͡ــؒؔـ͜͝ـ','گـ͜͡ــؒؔـ͜͝ـ','لـ͜͡ــؒؔـ͜͝ـ','مـ͜͡ــؒؔـ͜͝ـ','نـ͜͡ــؒؔـ͜͝ـ','وۘۘ','هـ͜͡ــؒؔـ͜͝ـ','یـ͜͡ــؒؔـ͜͝ـ']; 
$_g= ['❀آ','ا','بـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','پـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','تـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ثـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','جـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','چـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','حैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','خـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــ','❀د','ذै','رؒؔ','ز۪ٜ❀','❀ژै','سـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','شـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','صैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ضैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','طैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ظैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','عـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','غـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','فـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','قـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ڪैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','گـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','لـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','مـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','نـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','وَّ','هـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','یـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ']; 
$_h = ['آٰٖـٰٖ℘ـَ͜✾ـ','اٰٖـٰٖ℘ـَ͜✾ـ','بٰٖـٰٖ℘ـَ͜✾ـ','پٰٖـٰٖ℘ـَ͜✾ـ','تٰٖـٰٖ℘ـَ͜✾ـ','ثٰٖـٰٖ℘ـَ͜✾ـ','جٰٖـٰٖ℘ـَ͜✾ـ','چٰٖـٰٖ℘ـَ͜✾ـ','حٰٖـٰٖ℘ـَ͜✾ـ','خٰٖـٰٖ℘ـَ͜✾ـ','دٰٖـٰٖ℘ـَ͜✾ـ','ذٰٖـٰٖ℘ـَ͜✾ـ','رٰٖـٰٖ℘ـَ͜✾ـ','زٰٖـٰٖ℘ـَ͜✾ـ','ژٰٖـٰٖ℘ـَ͜✾ـ','سٰٖـٰٖ℘ـَ͜✾ـ','شٰٖـٰٖ℘ـَ͜✾ـ','صٰٖـٰٖ℘ـَ͜✾ـ','ضٰٖـٰٖ℘ـَ͜✾ـ','طٰٖـٰٖ℘ـَ͜✾ـ','ظٰٖـٰٖ℘ـَ͜✾ـ','عٰٖـٰٖ℘ـَ͜✾ـ','غٰٖـٰٖ℘ـَ͜✾ـ','فٰٖـٰٖ℘ـَ͜✾ـ','قٰٖـٰٖ℘ـَ͜✾ـ','کٰٖـٰٖ℘ـَ͜✾ـ','گٰٖـٰٖ℘ـَ͜✾ـ','لٰٖـٰٖ℘ـَ͜✾ـ','مٰٖـٰٖ℘ـَ͜✾ـ','نٰٖـٰٖ℘ـَ͜✾ـ','وٰٖـٰٖ℘ـَ͜✾ـ','هٰٖـٰٖ℘ـَ͜✾ـ','یٰٖـٰٖ℘ـَ͜✾ـ'];
$_i = ['آ✺۠۠➤','ا✺۠۠➤','بـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','پـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','تـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','ث✺۠۠➤','جـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','چـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','حـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','خـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','د✺۠۠➤','ذ✺۠۠➤','ر✺۠۠➤','ز✺۠۠➤','ژ✺۠۠➤','سـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','شـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','صـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','ضـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','طـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','ظـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','عـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','غـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','فـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','قـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','کـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','گـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','لـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','مـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','نـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','و✺۠۠➤','ه➤','یـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤']; 
$_j = ['آ✭','ا✭','بـ͜͡ـ͜͡✭','پـ͜͡ـ͜͡✭','تـ͜͡ـ͜͡✭','ثـ͜͡ـ͜͡ـ͜͡✭','جـ͜͡ـ͜͡✭','چــ͜͡ـ͜͡✭','حـ͜͡ـ͜͡✭','خــ͜͡ـ͜͡✭','د✭','ذ✭','ر✭','ز͜͡✭','ـ͜͡ژ͜͡✭','ســ͜͡ـ͜͡✭','شـ͜͡ـ͜͡ـ͜͡✭','صـ͜͡ـ͜͡✭','ضـ͜͡ـ͜͡✭','طـ͜͡ـ͜͡✭','ظـ͜͡ـ͜͡✭','عـ͜͡ـ͜͡✭','غـ͜͡ـ͜͡✭','فــ͜͡ـ͜͡✭','قـ͜͡ـ͜͡ـ͜͡✭','ڪــ͜͡ـ͜͡✭','گـ͜͡ـ͜͡✭','لـ͜͡ـ͜͡ـ͜͡✭','مـ͜͡ـ͜͡ـ͜͡✭','نـ͜͡ـ͜͡✭','ـ͜͡و͜͡ـ͜͡✭','هـ͜͡ـ͜͡ـ͜͡✭','یـ͜͡ـ͜͡✭'];  
//========= Replace ==========
$nn = str_replace($fa,$_a,$matn);
$a = str_replace($fa,$_b,$matn);
$b = str_replace($fa,$_c,$matn);
$c = str_replace($fa,$_d,$matn);
$d = str_replace($fa,$_e,$matn);
$e = str_replace($fa,$_f,$matn);
$f = str_replace($fa,$_g,$matn);
$g = str_replace($fa,$_h,$matn);
$h = str_replace($fa,$_i,$matn);
$i = str_replace($fa,$_j,$matn);
$readyfont ="
1 - `$nn`
2 - `$a`
3 - `$b`
4 - `$c`
5 - `$d`
6 - `$e`
7 - `$f`
8 - `$g`
9 - `$h`
10 - `$i`";
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 
"$readyfont

➹ 𝒀𝒐𝒖𝒓 𝑭𝒓𝒂𝒔𝒊 𝑭𝒐𝒏𝒕 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚 !", 
'parse_mode'=> 'markdown' ,'reply_to_msg_id' => $msg_id,
]);
}
}
//============= Currency prices ==============  
if ($text == "arz") {
                        $link = json_decode(file_get_contents("http://api.codebazan.ir/arz/?type=arz"), true);
                        $result = "ارز تا کنون :\r\n  =-=-=-=-=-=--=-=-=-= \r\n  ";
                        for ($i = 0; $i <= 29; $i++) {
                            $result .= $link[$i]['name'] . ": " . $link[$i]['price'] . "ارز تاکنون \n =-=-=-=-=-=--=-=-=-= \n";
                        }
                        (yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "$result"]));
                    }
//================ Font Maker ================
elseif(preg_match("/^[\/\#\!]?(font) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$matn = strtoupper("$m[2]");
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "♀ 𝑩𝒖𝒊𝒍𝒅𝒊𝒏𝒈 125 𝑭𝒐𝒏𝒕 𝑭𝒐𝒓 ( `$m[2]` ) 𝑵𝒂𝒎𝒆 . . . ! ",'parse_mode'=>"MarkDown"]);
$mu = str_replace(" ","%20",$m[2]);
$fontss = file_get_contents("https://api.codebazan.ir/font/?text=".$mu);
$fontha = json_decode($fontss, true);
$result = $fontha['result'];

$Eng = ['Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
$Font_0 = ['𝐐','𝐖','𝐄','𝐑','𝐓','𝐘','𝐔','𝐈','𝐎','𝐏','𝐀','𝐒','𝐃','𝐅','𝐆','𝐇','𝐉','𝐊','𝐋','𝐙','𝐗','𝐂','𝐕','𝐁','𝐍','𝐌'];
$Font_1 = ['𝑸','𝑾','𝑬','𝑹','𝑻','𝒀','𝑼','𝑰','𝑶','𝑷','𝑨','𝑺','𝑫','𝑭','𝑮','𝑯','𝑱','𝑲','𝑳','𝒁','𝑿','𝑪','𝑽','𝑩','𝑵','𝑴'];
$Font_2 = ['𝑄','𝑊','𝐸','𝑅','𝑇','𝑌','𝑈','𝐼','𝑂','𝑃','𝐴','𝑆','𝐷','𝐹','𝐺','𝐻','𝐽','𝐾','𝐿','𝑍','𝑋','𝐶','𝑉','𝐵','𝑁','𝑀'];
$Font_3 = ['𝗤','𝗪','𝗘','𝗥','𝗧','𝗬','𝗨','𝗜','𝗢','𝗣','𝗔','𝗦','𝗗','𝗙','𝗚','𝗛','𝗝','𝗞','𝗟','𝗭','𝗫','𝗖','𝗩','𝗕','𝗡','𝗠'];
$Font_4 = ['𝖰','𝖶','𝖤','𝖱','𝖳','𝖸','𝖴','𝖨','𝖮','𝖯','𝖠','𝖲','𝖣','𝖥','𝖦','𝖧','𝖩','𝖪','𝖫','𝖹','𝖷','𝖢','𝖵','𝖡','𝖭','𝖬'];
$Font_5 = ['𝕼','𝖂','𝕰','𝕽','𝕵','𝚼','𝖀','𝕿','𝕺','𝕻','𝕬','𝕾','𝕯','𝕱','𝕲','𝕳','𝕴','𝕶','𝕷','𝖅','𝖃','𝕮','𝖁','𝕭','𝕹','𝕸'];
$Font_6 = ['𝔔','𝔚','𝔈','ℜ','𝔍','ϒ','𝔘','𝔗','𝔒','𝔓','𝔄','𝔖','𝔇','𝔉','𝔊','ℌ','ℑ','𝔎','𝔏','ℨ','𝔛','ℭ','𝔙','𝔅','𝔑','𝔐'];
$Font_7 = ['𝙌','𝙒','𝙀','𝙍','𝙏','𝙔','𝙐','𝙄','𝙊','𝙋','𝘼','𝙎','𝘿','𝙁','𝙂','𝙃','𝙅','𝙆','𝙇','𝙕','𝙓','𝘾','𝙑','𝘽','𝙉','𝙈'];
$Font_8 = ['𝘘','𝘞','𝘌','𝘙','𝘛','𝘠','𝘜','𝘐','𝘖','𝘗','𝘈','𝘚','𝘋','𝘍','𝘎','𝘏','𝘑','𝘒','𝘓','𝘡','𝘟','𝘊','𝘝','𝘉','𝘕','𝘔'];
$Font_9 = ['Q̶̶','W̶̶','E̶̶','R̶̶','T̶̶','Y̶̶','U̶̶','I̶̶','O̶̶','P̶̶','A̶̶','S̶̶','D̶̶','F̶̶','G̶̶','H̶̶','J̶̶','K̶̶','L̶̶','Z̶̶','X̶̶','C̶̶','V̶̶','B̶̶','N̶̶','M̶̶'];
$Font_10 = ['Q̷̷','W̷̷','E̷̷','R̷̷','T̷̷','Y̷̷','U̷̷','I̷̷','O̷̷','P̷̷','A̷̷','S̷̷','D̷̷','F̷̷','G̷̷','H̷̷','J̷̷','K̷̷','L̷̷','Z̷̷','X̷̷','C̷̷','V̷̷','B̷̷','N̷̷','M̷̷'];
$Font_11 = ['Q͟͟','W͟͟','E͟͟','R͟͟','T͟͟','Y͟͟','U͟͟','I͟͟','O͟͟','P͟͟','A͟͟','S͟͟','D͟͟','F͟͟','G͟͟','H͟͟','J͟͟','K͟͟','L͟͟','Z͟͟','X͟͟','C͟͟','V͟͟','B͟͟','N͟͟','M͟͟'];
$Font_12 = ['Q͇͇','W͇͇','E͇͇','R͇͇','T͇͇','Y͇͇','U͇͇','I͇͇','O͇͇','P͇͇','A͇͇','S͇͇','D͇͇','F͇͇','G͇͇','H͇͇','J͇͇','K͇͇','L͇͇','Z͇͇','X͇͇','C͇͇','V͇͇','B͇͇','N͇͇','M͇͇'];
$Font_13 = ['Q̤̤','W̤̤','E̤̤','R̤̤','T̤̤','Y̤̤','Ṳ̤','I̤̤','O̤̤','P̤̤','A̤̤','S̤̤','D̤̤','F̤̤','G̤̤','H̤̤','J̤̤','K̤̤','L̤̤','Z̤̤','X̤̤','C̤̤','V̤̤','B̤̤','N̤̤','M̤̤'];
$Font_14 = ['Q̰̰','W̰̰','Ḛ̰','R̰̰','T̰̰','Y̰̰','Ṵ̰','Ḭ̰','O̰̰','P̰̰','A̰̰','S̰̰','D̰̰','F̰̰','G̰̰','H̰̰','J̰̰','K̰̰','L̰̰','Z̰̰','X̰̰','C̰̰','V̰̰','B̰̰','N̰̰','M̰̰'];
$Font_15 = ['디','山','乇','尺','亇','丫','凵','工','口','ㄗ','闩','丂','刀','下','彑','⼶','亅','片','乚','乙','乂','亡','ム','乃','力','从'];
$Font_16= ['ዓ','ሠ','ይ','ዩ','ፐ','ሃ','ሀ','ፗ','ዐ','የ','ል','ና','ሏ','ፑ','ፘ','ዘ','ጋ','ኸ','ረ','ጓ','ጰ','ር','ህ','ፎ','በ','ጠ'];
$Font_17= ['Ꭷ','Ꮃ','Ꭼ','Ꮢ','Ꭲ','Ꭹ','Ꮜ','Ꮖ','Ꮻ','Ꮲ','Ꭺ','Ꮪ','Ꭰ','Ꮀ','Ꮐ','Ꮋ','Ꭻ','Ꮶ','Ꮮ','Ꮓ','Ꮱ','Ꮯ','Ꮩ','Ᏼ','N','Ꮇ'];
$Font_18= ['Ǫ','Ѡ','Σ','Ʀ','Ϯ','Ƴ','Ʋ','Ϊ','Ѳ','Ƥ','Ѧ','Ƽ','Δ','Ӻ','Ǥ','ⴼ','Ɉ','Ҟ','Ɫ','Ⱬ','Ӽ','Ҁ','Ѵ','Ɓ','Ɲ','ᛖ'];
$Font_19= ['ꐎ','ꅐ','ꂅ','ꉸ','ꉢ','ꌦ','ꏵ','ꀤ','ꏿ','ꉣ','ꁲ','ꌗ','ꅓ','ꊰ','ꁅ','ꍬ','ꀭ','ꂪ','꒒','ꏣ','ꉧ','ꊐ','ꏝ','ꃃ','ꊮ','ꂵ'];
$Font_20= ['ᘯ','ᗯ','ᕮ','ᖇ','ᙢ','ᖻ','ᑌ','ᖗ','ᗝ','ᑭ','ᗩ','ᔕ','ᗪ','ᖴ','ᘜ','ᕼ','ᒍ','ᖉ','ᒐ','ᘔ','᙭','ᑕ','ᕓ','ᗷ','ᘉ','ᗰ'];
$Font_21= ['ᑫ','ᗯ','ᗴ','ᖇ','Ꭲ','Ꭹ','ᑌ','Ꮖ','ᝪ','ᑭ','ᗩ','ᔑ','ᗞ','ᖴ','Ꮐ','ᕼ','ᒍ','Ꮶ','Ꮮ','Ꮓ','᙭','ᑕ','ᐯ','ᗷ','ᑎ','ᗰ'];
$Font_22= ['ℚ','Ꮤ','℮','ℜ','Ƭ','Ꮍ','Ʋ','Ꮠ','Ꮎ','⅌','Ꭿ','Ꮥ','ⅅ','ℱ','Ꮹ','ℋ','ℐ','Ӄ','ℒ','ℤ','ℵ','ℭ','Ꮙ','Ᏸ','ℕ','ℳ'];
$Font_23= ['Ԛ','ᚠ','ᛊ','ᚱ','ᛠ','ᚴ','ᛘ','ᛨ','θ','ᚹ','ᚣ','ᛢ','ᚦ','ᚫ','ᛩ','ᚻ','ᛇ','ᛕ','ᚳ','Z','ᚷ','ᛈ','ᛉ','ᛒ','ᚺ','ᚥ'];
$Font_24= ['𝓠','𝓦','𝓔','𝓡','𝓣','𝓨','𝓤','𝓘','𝓞','𝓟','𝓐','𝓢','𝓓','𝓕','𝓖','𝓗','𝓙','𝓚','𝓛','𝓩','𝓧','𝓒','𝓥','𝓑','𝓝','𝓜'];
$Font_25= ['𝒬','𝒲','ℰ','ℛ','𝒯','𝒴','𝒰','ℐ','𝒪','𝒫','𝒜','𝒮','𝒟','ℱ','𝒢','ℋ','𝒥','𝒦','ℒ','𝒵','𝒳','𝒞','𝒱','ℬ','𝒩','ℳ'];
$Font_26= ['ℚ','𝕎','𝔼','ℝ','𝕋','𝕐','𝕌','𝕀','𝕆','ℙ','𝔸','𝕊','𝔻','𝔽','𝔾','ℍ','𝕁','𝕂','𝕃','ℤ','𝕏','ℂ','𝕍','𝔹','ℕ','𝕄'];
$Font_27= ['Ｑ','Ｗ','Ｅ','Ｒ','Ｔ','Ｙ','Ｕ','Ｉ','Ｏ','Ｐ','Ａ','Ｓ','Ｄ','Ｆ','Ｇ','Ｈ','Ｊ','Ｋ','Ｌ','Ｚ','Ｘ','Ｃ','Ｖ','Ｂ','Ｎ','Ｍ'];
$Font_28= ['ǫ','ᴡ','ᴇ','ʀ','ᴛ','ʏ','ᴜ','ɪ','ᴏ','ᴘ','ᴀ','s','ᴅ','ғ','ɢ','ʜ','ᴊ','ᴋ','ʟ','ᴢ','x','ᴄ','ᴠ','ʙ','ɴ','ᴍ'];
$Font_29= ['𝚀','𝚆','𝙴','𝚁','𝚃','𝚈','𝚄','𝙸','𝙾','𝙿','𝙰','𝚂','𝙳','𝙵','𝙶','𝙷','𝙹','𝙺','𝙻','𝚉','𝚇','𝙲','𝚅','𝙱','𝙽','𝙼'];
$Font_30= ['ᵟ','ᵂ','ᴱ','ᴿ','ᵀ','ᵞ','ᵁ','ᴵ','ᴼ','ᴾ','ᴬ','ˢ','ᴰ','ᶠ','ᴳ','ᴴ','ᴶ','ᴷ','ᴸ','ᶻ','ˣ','ᶜ','ⱽ','ᴮ','ᴺ','ᴹ'];
$Font_31= ['Ⓠ','Ⓦ','Ⓔ','Ⓡ','Ⓣ','Ⓨ','Ⓤ','Ⓘ','Ⓞ','Ⓟ','Ⓐ','Ⓢ','Ⓓ','Ⓕ','Ⓖ','Ⓗ','Ⓙ','Ⓚ','Ⓛ','Ⓩ','Ⓧ','Ⓒ','Ⓥ','Ⓑ','Ⓝ','Ⓜ️'];
$Font_32= ['🅀','🅆','🄴','🅁','🅃','🅈','🅄','🄸','🄾','🄿','🄰','🅂','🄳','🄵','🄶','🄷','🄹','🄺','🄻','🅉','🅇','🄲','🅅','🄱','🄽','🄼'];
$Font_33= ['🅠','🅦','🅔','🅡','🅣','🅨','🅤','🅘','🅞','🅟','🅐','🅢','🅓','🅕','🅖','🅗','🅙','🅚','🅛','🅩 ','🅧','🅒','🅥','🅑','🅝','🅜'];
$Font_34= ['🆀','🆆','🅴','🆁','🆃','🆈','🆄','🅸','🅾️','🅿️','🅰️','🆂','🅳','🅵','🅶','🅷','🅹','🅺','🅻','🆉','🆇','🅲','🆅','🅱️','🅽','🅼'];
$Font_35= ['🇶 ','🇼 ','🇪 ','🇷 ','🇹 ','🇾 ','🇺 ','🇮 ','🇴 ','🇵 ','🇦 ','🇸 ','🇩 ','🇫 ','🇬 ','🇭 ','🇯 ','🇰 ','🇱 ','🇿 ','🇽 ','🇨 ','🇻 ','🇧 ','🇳 ','🇲 '];
//
$nn = str_replace($Eng,$Font_0,$matn);
$a = str_replace($Eng,$Font_1,$matn);
$b = str_replace($Eng,$Font_2,$matn);
$c = trim(str_replace($Eng,$Font_3,$matn));
$d = str_replace($Eng,$Font_4,$matn);
$e = str_replace($Eng,$Font_5,$matn);
$f = str_replace($Eng,$Font_6,$matn);
$g = str_replace($Eng,$Font_7,$matn);
$h = str_replace($Eng,$Font_8,$matn);
$i = str_replace($Eng,$Font_9,$matn);
$j = str_replace($Eng,$Font_10,$matn);
$k = str_replace($Eng,$Font_11,$matn);
$l = str_replace($Eng,$Font_12,$matn);
$m = str_replace($Eng,$Font_13,$matn);
$n = str_replace($Eng,$Font_14,$matn);
$o = str_replace($Eng,$Font_15,$matn);
$p= str_replace($Eng,$Font_16,$matn);
$q= str_replace($Eng,$Font_17,$matn);
$r= str_replace($Eng,$Font_18,$matn);
$s= str_replace($Eng,$Font_19,$matn);
$t= str_replace($Eng,$Font_20,$matn);
$u= str_replace($Eng,$Font_21,$matn);
$v= str_replace($Eng,$Font_22,$matn);
$w= str_replace($Eng,$Font_23,$matn);
$x= str_replace($Eng,$Font_24,$matn);
$y= str_replace($Eng,$Font_25,$matn);
$z= str_replace($Eng,$Font_26,$matn);
$aa= str_replace($Eng,$Font_27,$matn);
$ac= str_replace($Eng,$Font_28,$matn);
$ad= str_replace($Eng,$Font_29,$matn);
$af= str_replace($Eng,$Font_30,$matn);
$ag= str_replace($Eng,$Font_31,$matn);
$ah= str_replace($Eng,$Font_32,$matn);
$am= str_replace($Eng,$Font_33,$matn);
$as= str_replace($Eng,$Font_34,$matn);
$pol= str_replace($Eng,$Font_35,$matn);
$readyfont = "1 - `$result[1]`
2 - `$result[2]`
3 - `$result[3]`
4 - `$result[4]`
5 - `$result[5]`
6 - `$result[6]`
7 - `$result[7]`
8 - `$result[8]`
9 - `$result[9]`
10 - `$result[10]`
11 - `$result[11]`
12 - `$result[12]`
13 - `$result[13]`
14 - `$result[14]`
15 - `$result[15]`
16 - `$result[16]`
17 - `$result[17]`
18 - `$result[18]`
19 - `$result[19]`
20 - `$result[20]`
21 - `$result[21]`
22 - `$result[22]`
23 - `$result[23]`
24 - `$result[24]`
25 - `$result[25]`
26 - `$result[26]`
27 - `$result[27]`
28 - `$result[28]`
29 - `$result[29]`
30 - `$result[30]`
31 - `$result[31]`
32 - `$result[32]`
33 - `$result[33]`
34 - `$result[34]`
35 - `$result[35]`
36 - `$result[36]`
37 - `$result[37]`
38 - `$result[38]`
39 - `$result[39]`
40 - `$result[40]`
41 - `$result[41]`
42 - `$result[42]`
43 - `$result[43]`
44 - `$result[44]`
45 - `$result[45]`
46 - `$result[46]`
47 - `$result[47]`
48 - `$result[48]`
49 - `$result[49]`
50 - `$result[50]`
51 - `$result[51]`
52 - `$result[52]`
53 - `$result[53]`
54 - `$result[54]`
55 - `$result[55]`
56 - `$result[56]`
57 - `$result[57]`
58 - `$result[58]`
59 - `$result[59]`
60 - `$result[60]`
61 - `$result[61]`
62 - `$result[62]`
63 - `$result[63]`
64 - `$result[64]`
65 - `$result[65]`
66 - `$result[66]`
67 - `$result[67]`
68 - `$result[68]`
69 - `$result[69]`
70 - `$result[70]`
71 - `$result[71]`
72 - `$result[72]`
73 - `$result[93]`
74 - `$result[74]`
75 - `$result[75]`
76 - `$result[76]`
77 - `$result[77]`
78 - `$result[78]`
79 - `$result[79]`
80 - `$result[80]`
81 - `$result[81]`
82 - `$result[82]`
83 - `$result[83]`
84 - `$result[84]`
85 - `$result[85]`
86 - `$result[86]`
87 - `$result[87]`
88 - `$result[88]`
89 - `$result[89]`
90 - `$result[90]`
91 - `$result[91]`
92 - `$result[92]`
93 - `$nn`
94 - `$a`
95 - `$b`
96 - `$c`
97 - `$d`
98 - `$e`
99 - `$f`
100 - `$g`
101 - `$h`
102 - `$i`
103 - `$j`
104 - `$k`
105 - `$l`
106 - `$m`
107 - `$n`
108 - `$o`
109 - `$p`
110 - `$q`
111 - `$r`
112 - `$s`
113 - `$t`
114 - `$u`
115 - `$v`
116 - `$w`
117 - `$x`
118 - `$z`
119 - `$aa`
120 - `$ac`
121 - `$ad`
122 - `$af`
123 - `$ah`
124 - `$am`
125 - `$pol`";
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 
"$readyfont

♂ 𝒀𝒐𝒖𝒓 𝑭𝒐𝒏𝒕 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚", 
'parse_mode'=> 'markdown' ,'reply_to_msg_id' => $msg_id,
]);
}}
//===================== Date ================
// ======================= Time Name and Bi0================
  //==================== Download ==================== 
  elseif(preg_match("/^[\/\#\!]?(دانلود) (.*)$/i", $text, $m)){ 
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "Started Download $m[2]" ,'parse_mode'=> 'markdown' ,'reply_to_msg_id' => $msg_id,]);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "10%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "20%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "30%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "40%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "50%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "60%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "70%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "80%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "90%" ,'parse_mode'=> 'markdown']);
    yield $MadelineProto->sleep(1);
    $MadelineProto->messages->sendMessage(['peer' => $peer,'message' => "Download Failed :(" ,'parse_mode'=> 'markdown']);
         }     
  

//======================= auto answer ================

//================= chek user name ============
//============ set bio & name & username ===========
elseif(preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text, $m)){ 
  yield $MadelineProto->account->updateProfile(['about' => $m[2]]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴅᴏɴᴇ!"]);
}
elseif(preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text, $m)){ 
  yield $MadelineProto->account->updateUsername(['username' => $m[2]]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴅᴏɴᴇ!"]);
       }
       elseif(preg_match("/^[\/\#\!]?(setname) (.*)$/i", $text, $m)){ 
        yield $MadelineProto->account->updateProfile(['first_name' => $m[2]]);
        $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴅᴏɴᴇ!"]);
             }
// ============== super =================
elseif(preg_match('/^(super)$/i',$text )){ 
  if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){ 
  $super = "www.4tube.com
  www.8teenxxx.com
  www.alotporn.com
  www.beeg.com
  www.bustnow.com
  www.cliphunter.com
  www.definebabes.com
  www.deviantclip.com
  www.drtuber.com
  www.empflix.com
  www.fantasti.cc
  www.fapdu.com
  www.freeporn.com
  www.freudbox.com
  www.fuq.com
  www.fux.com
  www.grayvee.com
  www.hellxx.com
  www.hustlertube.com
  www.jugy.com
  www.jizzhut.com
  www.kaktuz.com
  www.keezmovies.com
  www.kinxxx.com
  www.laraporn.com
  www.leakedporn.com
  www.lovelyclips.com
  www.lubetube.com
  www.mofosex.com
  www.monstertube.com
  www.madthumbs.com
  www.moviefap.com
  www.moviesand.com
  www.orgasm.com
  www.perfectgirls.net
  www.pichunter.com
  www.planetsuzy.com
  www.porn.com
  www.porn-plus.com
  www.porncor.com
  www.pornhub.com
  www.pornrabbit.com
  www.porntitan.com
  www.pussy.org
  www.redtube.com
  www.tube8.com
  www.xhamster.com
  www.xnxx.com
  www.xvideos.com
   www.4tube.com
  www.8teenxxx.com
  www.alotporn.com
  www.beeg.com
  www.bustnow.com
  www.cliphunter.com
  www.definebabes.com
  www.deviantclip.com
  www.drtuber.com
  www.empflix.com
  www.fantasti.cc
  www.fapdu.com
  www.freeporn.com
  www.freudbox.com
  www.fuq.com
  www.fux.com
  www.grayvee.com
  www.hellxx.com
  www.hustlertube.com
  www.jugy.com
  www.jizzhut.com
  www.kaktuz.com
  www.keezmovies.com
  www.kinxxx.com
  www.laraporn.com
  www.leakedporn.com
  www.lovelyclips.com
  www.lubetube.com
  www.mofosex.com
  www.monstertube.com
  www.madthumbs.com
  www.moviefap.com
  www.moviesand.com
  www.orgasm.com
  www.perfectgirls.net
  www.pichunter.com
  www.planetsuzy.com
  www.porn.com
  www.porn-plus.com
  www.porncor.com
  www.pornhub.com
  www.pornrabbit.com
  www.porntitan.com
  www.pussy.org
  www.redtube.com
  www.tube8.com
  www.xhamster.com
  www.xnxx.com
  www.xvideos.com
  www.youjizz.com
   www.4tube.com
  www.8teenxxx.com
  www.alotporn.com
  www.beeg.com
  www.bustnow.com
  www.cliphunter.com
  www.definebabes.com
  www.deviantclip.com
  www.drtuber.com
  www.empflix.com
  www.fantasti.cc
  www.fapdu.com
  www.freeporn.com
  www.freudbox.com
  www.fuq.com
  www.fux.com
  www.grayvee.com
  www.hellxx.com
  www.hustlertube.com
  www.jugy.com
  www.jizzhut.com
  www.kaktuz.com
  www.keezmovies.com
  www.kinxxx.com
  www.laraporn.com
  www.leakedporn.com
  www.lovelyclips.com
  www.lubetube.com
  www.mofosex.com
  www.monstertube.com
  www.madthumbs.com
  www.moviefap.com
  www.moviesand.com
  www.orgasm.com
  www.perfectgirls.net
  www.pichunter.com
  www.planetsuzy.com
  www.porn.com
  www.porn-plus.com
  www.porncor.com
  www.pornhub.com
  www.pornrabbit.com
  www.porntitan.com
  www.pussy.org
  www.redtube.com
  www.tube8.com
  www.xhamster.com
  www.xnxx.com
  www.xvideos.com
  www.youjizz.com";
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "**𝑨𝒍𝒍 𝑷𝒐𝒓𝒏 𝑺𝒊𝒕𝒆** 
  $super", 'parse_mode' => 'markdown' ]);
  }}
//=============== Blue ============

elseif(preg_match("/^[\/\#\!]?(blue) (.*)$/i", $text, $m)){ 
  if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
  $mu = $m[2];
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑩𝒖𝒊𝒍𝒅𝒊𝒏𝒈 𝒀𝒐𝒖𝒓 𝑩𝒍𝒖𝒆 𝑻𝒆𝒙𝒕 ($m[2])", 'parse_mode' => 'markdown' ]);
  $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@TextMagicBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
  $query_id = $messages_BotResults['query_id'];
  $query_res_id = $messages_BotResults['results'][0]['id'];
  yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
  }}
//=============== mame ============
elseif(preg_match("/^[\/\#\!]?(mame) (.*)$/i", $text, $m)){ 
  if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
  $mu = $m[2];
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑺𝒊𝒛𝒆 𝑴𝒂𝒎𝒆 **$m[2]** ", 'parse_mode' => 'markdown' ]);
  $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@BoobSizeBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
  $query_id = $messages_BotResults['query_id'];
  $query_res_id = $messages_BotResults['results'][0]['id'];
  yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
  }}
//=============== google ===========
elseif(preg_match("/^[\/\#\!]?(google) (.*)$/i", $text, $m)){ 
  if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
  $mu = $m[2];
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑺𝒆𝒂𝒓𝒄𝒉 𝑻𝒐 𝑻𝒉𝒆 𝑮𝒐𝒐𝒈𝒍𝒆 **$m[2]** . . .", 'parse_mode' => 'markdown' ]);
  $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@GoogleDEBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
  $query_id = $messages_BotResults['query_id'];
  $query_res_id = $messages_BotResults['results'][0]['id'];
  yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
  }}
//================ gay and kir ==============
elseif(preg_match("/^[\/\#\!]?(gay) (.*)$/i", $text, $m)){ 
  if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
  $mu = $m[2];
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑵𝒐𝒘 𝑺𝒂𝒚  𝒀𝒐𝒖 𝑾𝒉𝒂𝒕 𝒑𝒆𝒓𝒄𝒆𝒏𝒕𝒂𝒈𝒆 𝑮𝒂𝒚 𝒊𝒔 **$m[2]** ", 'parse_mode' => 'markdown' ]);
  $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@HowGayBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
  $query_id = $messages_BotResults['query_id'];
  $query_res_id = $messages_BotResults['results'][0]['id'];
  yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
  }}elseif(preg_match("/^[\/\#\!]?(Kir) (.*)$/i", $text, $m)){ 
    if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
    $mu = $m[2];
    yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑵𝒐𝒘  𝒔𝒂𝒚𝒔 𝒕𝒉𝒆 𝒔𝒊𝒛𝒆 𝒐𝒇 𝒕𝒉𝒆 𝒑𝒆𝒏𝒊𝒔 𝒊𝒔 **$m[2]** ", 'parse_mode' => 'markdown' ]);
    $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@cocksize_bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
    $query_id = $messages_BotResults['query_id'];
    $query_res_id = $messages_BotResults['results'][0]['id'];
    yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
    }}
//================ Apk ================
elseif(preg_match("/^[\/\#\!]?(apk) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 ( `$m[2]` ) 𝑨𝑷𝑲 . . . !", 'parse_mode' => 'markdown' ]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@apkdl_bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}}
//================ Run Code ================
elseif(stristr($text,'/php ')){
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$text = str_replace("/php","/ php",$text);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => $text]);
$cod = substr($text, 5);
file_put_contents('co.php','<?php' . PHP_EOL . $cod);
$b = file_get_contents("$url/co.php");
$MadelineProto->messages->sendMessage(['peer' => $peer,
'message'=> "<b> 𝑹𝒆𝒔𝒖𝒍𝒕 𝑶𝒇 𝒀𝒐𝒖𝒓 𝑪𝒐𝒅𝒆 🔻</b>\n<code>$b</code>",
'parse_mode' => 'HTML','reply_to_msg_id' => $message['id']]);
}}
//================ Whois Domain ================
elseif(preg_match("/^[\/\#\!]?(whois) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){

$matn = strtoupper("$m[2]");
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑾𝒉𝒐𝒊𝒔𝒊𝒏𝒈 ( `$m[2]` ) 𝑫𝒐𝒎𝒊𝒏 . . . !",'parse_mode'=>"MarkDown"]);
$get = file_get_contents("http://api.codebazan.ir/whois/index.php?type=json&domain=".$matn);
$gett = json_decode($get, true);

$owner = $gett['owner'];
$ip = $gett['ip'];
$address = $gett['address'];
$dns = $gett['dns'];
$s1 = $dns['1'];
$s2 = $dns['2'];
$domainresult = "𝑫𝒐𝒎𝒊𝒏 : 
$m[2]\n\𝑶𝒘𝒏𝒆𝒓 : \n<b>$owner</b>\n\n 𝒊𝒑 : \n$ip\n\n 𝑨𝒅𝒅𝒓𝒆𝒔 : \n<b>$address</b>\n\n 𝑫𝑵𝑺 : \n$s1\n$s2";
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 
$domainresult, 
'parse_mode'=> 'HTML' ,'reply_to_msg_id' => $msg_id,
]);
}}
//================= Age =================
elseif(preg_match('/^[!\/#]?(age|محاسبه سن) (\d+)\/(\d+)\/(\d+)$/i',$text,$match)){
$get = file_get_contents("http://api.novateamco.ir/age/?year=".$match[2]."&month=".$match[3]."&day=".$match[4]);
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){

yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑪𝒂𝒍𝑪𝒖𝒍𝒂𝒕𝒆 𝑻𝒉𝒆 ( `$match[2]/$match[3]/$match[4]` ) 𝑨𝒈𝒆 . . . !",'parse_mode'=>"MarkDown"]);
if($match[2] < 1000 or $match[3] >= 13 or $match[4] >= 32 or $match[2] >= 1400){
$MadelineProto->messages->sendMessage(['peer' => $peer,
'message'=> "❥ 𝑰𝒏𝒗𝒂𝒍𝒊𝒅 𝑷𝒍𝒂𝒆𝒔𝒆 𝑻𝒓𝒚 𝑨𝒈𝒂𝒊𝒏 ",'reply_to_msg_id' => $message['id']]);
}
else{
$result = json_decode($get, true);
if($result['ok'] === true){
$MadelineProto->messages->sendMessage(['peer' => $peer,
'message'=> "
» محاسبه سن انجام شد !
» سن دقیق شما : *".$result['result']['year']."* سال و *".$result['result']['month']."* ماه و *".$result['result']['day']."* روز
» کل روز های سپری شده : *".$result['other']['days']."*\n» حیوان سال شما : *".$result['other']['year_name']."*\n» روز های مانده به تولد بعدی شما : *".$result['other']['to_birth']."*
",
'parse_mode' => 'MarkDown','reply_to_msg_id' => $message['id']]);
}	    
}
}}
//============== Get Ping ==============
elseif(preg_match("/^[\/\#\!]?(ping) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑮𝒆𝒕𝒕𝒊𝒏𝒈 𝑷𝒊𝒏𝒈 ( `$m[2]` ) 𝑾𝒆𝒃𝒔𝒊𝒕𝒆 . . . !",'parse_mode'=>"MarkDown"]);
$r = file_get_contents("https://api.codebazan.ir/ping/?url=".$mi);
if($r != NULL){

yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
❥ 𝑷𝒊𝒏𝒈 𝑰𝑺 <i>$r</i> !
",
'parse_mode' => 'HTML','reply_to_msg_id' => $msg_id]);
}else{
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
❥ ʏᴏᴜʀ ᴀᴅᴅʀᴇss ɪs ɪɴᴠᴀʟɪᴅ !
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id]);
}
}
}
//============== Screen Shot Maker ==============
elseif(preg_match("/^[\/\#\!]?(scr) (.*)$/i", $text, $m)){ 

$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑮𝒆𝒕𝒕𝒊𝒏𝒈 𝑺𝒄𝒓𝒆𝒂𝒏 𝑺𝒉𝒐t ( `$m[2]` ) 𝑾𝒆𝒃𝒔𝒊𝒕𝒆 . . . !",'parse_mode'=>"MarkDown"]);

$r = "https://api.codebazan.ir/webshot/?text=1000&domain=$mi" ;
$inputMediaGifExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $r];
$MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaGifExternal ,'reply_to_msg_id' => $msg_id,'message' => "❥ 𝒀𝒐𝒖𝒓 𝑺𝒄𝒓𝒆𝒂𝒏 𝑺𝒉𝒐𝒕 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚"]);
}
//============== QR Code Maker ==============
elseif(preg_match("/^[\/\#\!]?(brc) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑩𝒖𝒊𝒍𝒅𝒊𝒏𝒈 𝑸𝑹 𝑪𝒐𝒅𝒆 𝑭𝒐𝒓𝒎 ( `$m[2]` ) 𝑨𝒅𝒅𝒓𝒆𝒔 . . . !",'parse_mode'=>"MarkDown"]);
$brc = "https://api.codebazan.ir/qr/?size=500x500&text=".$mi;
$inputMediaGifExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $brc];
$MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaGifExternal ,'reply_to_msg_id' => $msg_id,'message' => "❥ 𝒀𝒐𝒖𝒓 𝑸𝑹 𝑪𝒐𝒅𝒆 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚"]);
}}
//============== Kalame ==============
elseif(preg_match("/^[\/\#\!]?(kalame) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
if($mu == "مبتدی"){
$muu = 0;
}elseif($mu == "ساده"){
$muu = 1;
}elseif($mu == "متوسط"){
$muu = 2;
}elseif($mu == "سخت"){
$muu = 3;
}elseif($mu == "وحشتناک"){
$muu = 4;
}else{
$muu = "ali";
}
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "❥ 𝑩𝒖𝒊𝒍𝒅𝒊𝒏𝒈 𝑭𝒐𝒓 ( `$m[2]` ) 𝑲𝒂𝒍𝒂𝒎𝒆 𝑮𝒂𝒎𝒆 . . . !", 'parse_mode' => 'markdown' ]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@KalameBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][$muu]['id'];
if($muu == 0 or $muu == 1 or $muu == 2 or $muu == 3 or $muu == 4 ){
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}else{
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"❥ 𝒀𝒐𝒖𝒓 𝑳𝒆𝒗𝒆𝒍 𝑰𝒔 𝑰𝒏𝒗𝒂𝒍𝒊𝒅 ",'reply_to_msg_id' => $msg_id]);
}
}}
//============== Gif Maker ==============
elseif(preg_match("/^[\/\#\!]?(giff) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "» 𝑩𝒖𝒊𝒍𝒅𝒊𝒏𝒈 ( `$m[2]` ) 𝑮𝒊𝒇 . . . !",'parse_mode'=>"MarkDown"]);
$mu = str_replace(" ","%20",$mi);
$bot = [
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=alien-glow-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=flash-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=shake-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=highlight-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=blue-fire&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=burn-in-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=inner-fire-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=glitter-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=flaming-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
"https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=memories-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",

];
$r = $bot[rand(0, count($bot)-1)];
$inputMediaGifExternal = ['_' => 'inputMediaDocumentExternal', 'url' => $r];
$MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaGifExternal ,'reply_to_msg_id' => $msg_id,'message' => "☮ 𝒀𝒐𝒖𝒓 𝑮𝒊𝒇 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚"]);
}}
//============== Link Logo ==============
elseif(preg_match("/^[\/\#\!]?(lid) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
$link = "https://dynamic.brandcrowd.com/asset/logo/$mu/logo?v=4&text=selfradi_Editor";
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☮ 𝑰𝒄𝒐𝒏𝒆 𝑳𝒊𝒏𝒌 𝑺𝒆𝒏𝒅 𝑰𝒏 𝒀𝒐𝒖𝒓 𝑷𝒗 . . . !",'parse_mode'=>"MarkDown"]);

$MadelineProto->messages->sendMessage(['peer' => $admin,
'message'=> "☮ 𝑰𝒄𝒐𝒏𝒆 𝑳𝒊𝒏𝒌 𝑰𝑺 : `$link`",
'parse_mode' => 'MarkDown']);
}
}
//============== Logo Maker ==============
if(preg_match("/^[\/\#\!]?(icon) (.*)$/i", $text, $m)){ 
$mu = $m[2];

$mu = str_replace(" ","%20",$mu);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☮ 𝑩𝒖𝒊𝒍𝒅𝒊𝒏𝒈 ( `$m[2]` ) 𝑳𝒐𝒈𝒐 . . . !
☮ ɪғ ɪᴄᴏɴ ɴᴏᴛ sᴇɴᴅ, ᴘʟᴇᴀsᴇ ᴛʀʏ ᴀɢᴀɪɴ !",'parse_mode'=>"MarkDown"]);
$bot = [
"https://dynamic.brandcrowd.com/asset/logo/1b18cb55-adbe-4239-ac3f-4e22d967d434/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a2e3c8f-08db-4fad-b0f2-de3e58f24ce9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7925e4fe-d125-4d7f-a3f6-12ecfb7fa641/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ad871f75-cf28-4e97-8580-f72f2844db67/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5f5dfa37-29e3-4a9f-ba5b-31f8214b8d40/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/bc419bf7-5723-4380-836e-26c55aa795c5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/086c0526-0be0-48b0-adee-f17844ac911c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/07d54ba4-4489-48cc-9a00-fe7e9cb52276/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c699f864-5fac-4cb7-b201-712259727a72/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d74c5889-e17a-44a1-852a-3bc1c0f64483/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/00359d52-ef6b-41bf-ae27-4339609fede3/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ed409e0a-9816-4b65-a3b9-e8f361798227/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7ea43112-2b71-4784-a6f1-9cb95f61e673/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/90880bf9-35ca-406d-aec2-af41e327b26a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8785de07-dc7b-4b47-86ff-270d14586345/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e49fa5be-1a3b-48f3-bc39-3109ce6c4bfa/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/26b1f627-ad53-408f-b023-3b0e77da78f7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8a192263-eb69-48d0-a1bd-2599769e2787/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5313cf95-4ab7-4ff3-895e-ca21681e452d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/da767a21-6d72-4a2b-8a04-7b8c448e53b8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0424daff-7df1-4bfb-aa07-ed52cfc99e1f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eaa2cf5e-7df1-4224-b627-4a4094a2b44c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dcdaf4b4-2158-459b-a290-66d266fd3003/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/4030324b-894c-4ccf-906d-7a039b10d7c3/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/79450b06-4c42-4669-88c8-6a5f843f3b08/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8f52d556-af31-489b-90a2-5a1f9653f07c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/443aa5c4-6556-468c-9d44-cc31320aca59/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/739440b5-4846-438e-9e21-9a43e2099034/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d7076540-b78d-4092-bec3-84d0b5b6cf35/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/20333bac-5343-404d-83fe-49e54a591e5a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f78a6d4d-ca0b-4d59-92bd-5dde30dc5beb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ba3e427e-c7e2-45fd-8583-ae39792b520a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/bfda2f02-cf16-4a9a-8174-5a1c474fa8b4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ebea98c1-507c-4cb6-8aea-332f330add3e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/88107639-8c59-48d7-aa72-b5ba622f2d2f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b2aa5492-009b-4b1a-85e5-e945c193361e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3b6db5a4-6408-43db-8155-7828258c7dfb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/06a2017e-24b4-4dc9-921a-4b93bd3aaa41/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a7313939-d69e-4204-b0e8-1a6099c48b22/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d70cdc43-79ea-4bff-bd87-d8edaf4e691b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/930b5655-bde9-4f44-a31c-198367190eb8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/2d1a8bbb-1c9e-4516-9be5-fa3d05693757/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/90c9913d-ade6-45af-8371-c91a9b07964c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/644391b8-e59d-422f-a81c-a7d5428c8efb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9182c620-b265-491e-bda1-6db153a5fb94/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/931f8416-aa36-4a01-af0d-35b731f898db/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbf78f01-a741-4c92-a6e4-668129dca2bb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f4953040-e80b-49cf-a347-1cda77a97190/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d66113bf-3e06-4729-bbce-67fcf0d1848c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a3f20deb-e126-48f4-a972-3877f69360fe/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ba6724d8-4138-4263-a434-fe7b7acd6b0b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5ea52fd4-10aa-4a70-9d25-3cbfb56c8bb4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f5180411-054b-4b76-bb2b-6265981fbe11/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ec4faa35-d0f7-434e-8c25-c3a28b956049/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3a06896d-6a8e-4b61-a124-e0ab0453d07e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c5140ac3-0a5c-45f1-bf6b-203f02c3c4e4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c7cf0c9e-3e48-40bb-81b5-4cc40df5a2a6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/752778e8-6197-4a13-8900-dcb666ca2bd1/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e0f5a980-b751-4b81-8425-ac2ecb77259a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ccf02e3a-6d03-44a8-9ec0-b5e33001bbce/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/21bed36c-cb81-407a-86b0-8333e357c59e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9d0bfaab-7506-41b9-8721-46555c7798df/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/794f593c-f03c-47ee-be57-a177409a1618/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/017d56c9-aaf5-4e1c-b0d5-e016b9f49e46/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e981fc4-accf-4070-b8d0-9ac279f8e808/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d14e8ade-80d8-4e96-8d47-ed8a5cfbe180/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/cfaa5fac-c17d-4e75-9218-fe6673b3b40d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c00358da-24f7-451f-95f3-65f3f3d9bf14/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/97be57bb-13de-44c5-8000-9498feb3789b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8725b125-0434-421e-863e-9c94618943f6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/aa0eccb0-8dd5-48e5-940a-0157ad466072/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c5d0430c-6ecc-4278-a5a3-3b0e2cb6c6f5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/000e9616-8763-4add-acff-60754b711c0d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a1966764-79c0-4adb-a7c7-5372dcbb63f1/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8e40623a-cb2b-406f-a91b-c47f6fb306f9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/42c98814-fdda-46d1-a4e1-2e2011fb9b65/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0bf69dc7-3925-4825-b00f-8b66d7b30721/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/151adcab-dad2-41e6-883b-a579d726c5bb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9ac17003-596e-446d-b715-fbc245036803/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/2c0269cb-ad5f-464a-8cd0-227ecf8a77a6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7a2dca3f-e337-47fc-aba0-469c4fabeb63/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a930669-1c02-47d8-bbe0-cf04975b8522/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a248710-0d91-4aa7-8141-6da939c841e9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1f83800a-0dbf-410b-954c-e19c2dab1ef8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/17753682-84c3-4447-866c-ea170fc7b7d5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d71a7cf9-a684-4b34-a75e-ffb6bf641a7d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eec764d5-ae8e-4ebf-affb-32082312f42e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/011a6521-23cf-40b6-88b3-990c6ec22a6e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/cf3f675f-e615-4f5e-a595-49332aacdb81/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3df1a69c-85ad-4dc8-9b00-3bd8e4db8383/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3df1a69c-85ad-4dc8-9b00-3bd8e4db8383/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/86c9985d-8949-44d8-9dc6-47a86f993993/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c2e19663-ef1e-475f-8208-e22473849445/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e79b4266-bfa9-40da-aef7-d2eb90656d3b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0a8d749e-9df5-4476-9a10-dc1ac86a149c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/acaede2b-1c05-465f-9a33-1c11ac293f11/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/aa6390ec-4752-416b-9b77-034dcc34b17f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/37cc6ec8-b36e-41bd-bc72-4aa6363f0ebc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5b9e7746-36eb-4c66-9bcd-1e252699d1f2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/62de87f1-1257-46c7-9590-99a568115545/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/909ab155-c255-4d08-9918-69b0fcbef647/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ee799336-529d-4b36-9ebc-f2009d21e545/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d3a6e797-2c55-4b35-adf0-4ac763b95808/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d8bb2364-0350-4e2f-9095-0e093c504445/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/04cb4959-84cd-4beb-ae55-59884139603b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e386f0d-907a-4a3e-9ce8-ae7b3f68d66a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/12531e0d-96ef-4b68-993e-cb4179a2ff29/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1c8935c3-e145-4890-ba64-91735c8dfe4f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/52f1623a-4af8-4065-bf8c-a746dff09fef/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5b2cb293-249e-46cd-901e-d190dc002e89/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/670e63fb-4dd9-4d17-9ba3-f2c944d45f28/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9013d098-93e2-4346-9656-6b63c24b440b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b2e761bd-82ea-4350-a752-fa556cef2dd0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b5843fcf-37a3-44e7-9938-91addefa09fc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbd21a15-b0db-4ae9-a561-fd112aba6fcd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eb194df6-c069-4a33-82b6-4f4383877988/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f0223266-f576-40c7-a31d-d2c17c584a46/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/055241ff-dc4f-4743-90be-1c9caa0c900b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1fe7224c-8946-48e9-9d11-c978d0069fdb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3e0ee4c9-8165-42eb-801c-fb26aa2ecf0a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/4b4b9948-7c07-4f07-a1d1-d33b44084cc0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/72241f70-7f3d-459d-8638-75b3cf6e12ee/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7b98994d-e50c-409c-ab2a-af1a568c16ad/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/888b0d00-f6a6-4c56-a744-9d5b3b6965f6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9467cb72-d11e-4462-804f-c7b34bf895d7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/db41be37-350e-40f7-a3bf-7247e2a11948/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e31b1fb6-0f38-4c75-bc3f-3373aaaf3571/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f287cbe2-9389-4de0-9bd3-6b8eacf2768c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/01866580-0a27-4fae-8529-595b3d08c3c6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/098a3e12-9643-417f-b14e-9c0929c21b1e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/449247de-6d8d-44a9-90e1-e54d4ee72137/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/65652ce5-16fd-45f1-b5bb-257b1b95be2c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/889a604d-aa1b-4486-b09c-7d0f9368becb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/89c21f53-1a93-41b4-b0e0-e7233ce40c27/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8c18fdd5-9007-4fb8-85bd-549e21c6ceea/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/97191afc-e552-42a7-a96f-5796e306ae1f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a74b621b-fb9c-49d4-a7b9-48c702dee154/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ab948d82-e22b-4ec2-a4ae-eb93f55ddaf8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/adcb5161-3b1e-4b2c-b658-42cdbef64c93/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b05d717d-a4a8-4350-a98e-4e6635271d2d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d5415cbf-418d-45ba-9e6c-05f9385457f0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dcc17996-39bf-45d1-8b9d-f66e0b75d693/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e33108a3-9c4f-4ebe-a031-8304071f6888/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ea3439b4-3ae8-4789-9fb8-acc5745bde0d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f7e73e79-7ee6-42cf-9af2-7ac147c6c78f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/11e9e67b-723d-4320-9481-7df27efd143e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/09699c93-f687-4c58-b6dc-cb8010de7df9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1cc2db6f-d3e7-425b-8b2a-d1349d3739d5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/37922c94-880a-4d6f-8070-914087acc09a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/4a69a160-fe1d-4391-8af1-2d7ac9580953/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5465ad8f-d9c4-4a4c-b587-23c98d231ae8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/55c9faad-542c-4c56-b101-f3e21bbfb95f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/96b7e527-d141-442d-babb-fda190233a1e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ce545f6b-c441-4848-a02a-ca8779e52f29/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e8fcd3b0-0ce8-41f1-abf4-a7283ee40ffc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f18ae32f-ce31-4946-9704-72e193f5cad2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/fc5aa3ab-e782-456e-b7e5-f93dfcd325ee/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a5e85a2-ae4e-411d-ab13-43a3b918f478/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3c337f69-2066-4abe-b9ae-228ddf86bd4b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/56d42ddd-1c3d-4787-a7fe-cc6e9960c875/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7feb63c0-0210-4bb4-8a52-56849b495b8c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8ee82bd4-4869-4fad-84c8-68f60f10959f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/95b5c8a5-d62d-4474-ba64-e726faa1bb97/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a791985b-1b64-4f23-bd2d-be67bdc27577/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/bb8044ba-5367-47de-8c4b-9ca90bd67c4d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbcdc939-e87b-45ce-8eb7-3e85d6a71bfa/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbfdb19c-5c38-43e2-a500-61426d4fd768/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/fcda8baf-e858-47ca-8e55-e945cebaf838/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/88aa303b-dbb1-40a3-ada7-c138d457df7d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7b84c12f-6060-4f93-a0cb-6cfbfb0d649f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d1510dc5-ac8d-497d-9ad9-c9fdec93796d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/484e6686-0062-4926-ba81-0b81353b4ed0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b538b140-c1a4-4188-a160-b76e140b4ad5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e73bf05-13a0-41aa-9b57-00d6670b4952/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f0f53e57-7dda-469a-9513-273c8d2bb514/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/2d81292d-7c5a-41a2-9dfd-9d434a413c63/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3bf52b81-9940-4fd2-b326-ef90cc077272/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/864efb77-e149-4fd0-a058-976c7c5e492e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/07f5f5a5-ea09-4e94-88fa-d9ee9060b458/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eaf58c74-5f43-48c3-9de5-2a0b94e1f8a2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3e1331ed-fc20-49d2-a55e-c3ced0e47c56/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/34372e0c-47ab-4f95-b136-2de09c21b8ed/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/fc5269e7-6172-4007-a47f-a183d8d7f3cd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/cf1d7785-935c-4d28-a1f9-8d94321c6fba/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9fcb5110-8b0e-4c6f-9764-b38dbd6e0112/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/00f0c0dc-7af4-441a-ab9e-cf5bb78fe220/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/6805ec29-0e17-4da2-ba12-1f170bc0ce45/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d84859df-c614-4135-a55d-b9f95a19e2ff/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ca2ff2db-806b-499f-b3b1-c0a5e1428a94/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b0b0828d-dd3b-4c9f-a8c7-366f005590cb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/696d69a2-8c49-4bd8-82c7-2cc6b14d3b28/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/770dbe6d-420f-4860-953a-69e763aafa00/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/00023174-20f6-4e58-9b10-65fe054bfbc4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/02ffc18d-1bbe-4bd7-b177-3c79082a6a04/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0300c219-2ad6-47af-bb68-e3e0f241c34b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/04e8e3bd-0cff-4a68-98e1-b0f412c46611/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/059b8c80-052f-419b-9baa-26b62f7405cc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/071ae338-60be-4a21-9437-cb15ec7ab4e9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0748d91a-ac32-4b37-a27f-89ee68e8753b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0843ed95-3f00-4737-8f9c-af83b0fb92b3/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/08c3aa53-d862-41c9-adb1-fa10bd6a0fdd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/08ffb721-d5fc-4675-9cd7-539893d17d8c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/09c8e48d-16c9-4fd6-aeec-0b87fdfee159/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0ad29a62-01cb-4f96-8643-a7eab0eb84f7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0affd79b-f5df-4a61-a22f-2dc7cbab569d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0bba65a5-15b9-4da0-bf96-7ea879bf7081/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0c8acf74-1b27-4545-b46c-54327dc4f38e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e88be07-4898-432f-b634-5a5df787416d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0f0e7abb-5d45-4f31-9848-6b27f7fbf76d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1058614e-b9be-409b-962c-8f541cba0dd0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/120ba62c-5a91-4c6a-a6c9-673d2baa35fe/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/13953056-ace8-4a1b-9b7d-949ed1798c0d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/13c42cc5-eb6b-4587-8581-c55813bcf37e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/13d16dbe-77f4-4a05-b0a0-ee6922941e0b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/145f8d81-1f17-4cc4-b35c-44da350be2f5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/15654083-1f64-4b60-bb53-3eb916141c3c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/172fd7df-cb66-4aa9-a1ce-fbccf26d05f2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/176993a8-22ac-44f1-a735-af004fd7d8dd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/17bd5e20-9941-4177-b2a6-8ff0e932abda/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/17d56cfe-ca05-4de2-9648-ffbb3d27bb76/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1842af2e-44f8-4429-b840-5377904a7620/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/18cbcbad-b87b-4af7-9389-5c3cc19b6fc7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/192be4b6-5a8a-42bd-8ec4-580c063d7f21/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a487867-0157-4e8c-a568-aeeea80fce00/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1ada54d4-e64a-4e45-9d31-1706a6ada796/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1b65d0dc-43dd-4710-aa4b-e69aa3066982/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1b76e39d-7f17-4fb0-b12c-b68e1301a559/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1bd1306f-8b8f-4515-93b9-0438f6ff8130/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1ca25ddf-40de-40fa-b93d-e29af3e46c05/logo?v=4&text=$mu",

];
$r = $bot[rand(0, count($bot)-1)];
$inputMediaDocumentExternal = ['_' => 'inputMediaDocumentExternal', 'url' => $r];
$idd = $r;
$idd = str_replace("https://dynamic.brandcrowd.com/asset/logo/","",$idd);
$idd = str_replace("http://dynamic.brandcrowd.com/asset/logo/","",$idd);
$idd = str_replace("/logo?v=4&text=$mu","",$idd);
$MadelineProto->messages->sendMedia(['peer' => $peer,
'media' => $inputMediaDocumentExternal ,
'reply_to_msg_id' => $msg_id,
'message' => "☮ 𝒀𝒐𝒖𝒓 𝑳𝒐𝒈𝒐 𝑰𝒔 𝑹𝒆𝒂𝒅𝒚

𝑰𝒅 : `$idd`", 'parse_mode' => 'markdown']);

//$inputMediaPhotoExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $r];
//$MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaPhotoExternal ,'reply_to_msg_id' => $msg_id,'message' => "» ʏᴏᴜʀ ɪᴄᴏɴ ɪs ʀᴇᴀᴅʏ =)"]);
}
//============== Save MSG ==============
elseif(preg_match("/^[\/\#\!]?(save)$/i", $text) && isset($message['reply_to']['reply_to_msg_id'])){
$me = yield $this->get_self();
$me_id = $me['id'];
yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' =>  $admin, 'id' => [$message['reply_to']['reply_to_msg_id']]]);
      $this->messages->sendMessage(['peer' => $peer,'reply_to_msg_id' => $msg_id,'message' => ">♔♟  𝔰ᗩνＥ  "]);
     unset($me,$me_id); 
     }
//============== Full Info ==============
elseif(preg_match("/^[\/\#\!]?(info) (.*)$/i", $text, $m)){ 

$mee = yield $MadelineProto->getFullInfo($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_status = $me['status']['_'];
@$me_bio = $mee['full']['full_user']['about'];
@$me_common = $mee['full']['full_user']['common_chats_count'];
$me_name = $me['first_name'];
@$me_uname = $me['username'];
$mes = "☮ 𝑰𝒅 : `$me_id` \n\n☮ 𝑵𝒂𝒎𝒆 : `$me_name` \n\n☮ 𝑼𝒔𝒆𝒓𝒏𝒂𝒎𝒆 : @$me_uname \n\n☮ 𝑺𝒕𝒂𝒕𝒖𝒔 : `$me_status` \n\n☮ 𝑩𝒊𝒐 : `$me_bio` \n\n☮ 𝑪𝒐𝒖𝒏𝒕 𝑮𝒓𝒖𝒐𝒑 : `$me_common`";
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => $mes, 'parse_mode' => 'markdown']);
}
//weather 
if (preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text, $m)) { 
  $query = $m[2];
  $url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $query . "&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
  $city = $url["name"];
  $deg = $url["main"]["temp"];
  $type1 = $url["weather"][0]["main"];
  if ($type1 == "Clear") {
      $tpp = 'آفتابی☀';
      file_put_contents('type.txt', $tpp);
  } elseif ($type1 == "Clouds") {
      $tpp = 'ابری ☁☁';
      file_put_contents('type.txt', $tpp);
  } elseif ($type1 == "Rain") {
      $tpp = 'بارانی ☔';
      file_put_contents('type.txt', $tpp);
  } elseif ($type1 == "Thunderstorm") {
      $tpp = 'طوفانی ☔☔☔☔';
      file_put_contents('type.txt', $tpp);
  } elseif ($type1 == "Mist") {
      $tpp = 'مه 💨';
      file_put_contents('type.txt', $tpp);
  }
  if ($city != '') {
      $ziro = file_get_contents('type.txt');
      $txt = "دمای شهر $city هم اکنون $deg درجه سانتی گراد می باشد

شرایط فعلی آب و هوا: $ziro";
      yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
      unlink('type.txt');
  } else {
      $txt = "⚠️شهر مورد نظر شما يافت نشد";
      yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
  }
}
//================ youtube =============
elseif(preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text, $m)){ 
  if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
  $mu = $m[2];
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 ( `$m[2]` ) 𝒀𝒐𝒖𝑻𝒖𝒃𝒆 . . . !", 'parse_mode' => 'markdown' ]);
  $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@uVidBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
  $query_id = $messages_BotResults['query_id'];
  $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
  yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
       }}
       //============================ hokm4 ------------------------
       elseif(preg_match("/^[\/\#\!]?(hokm4)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑮𝒂𝒎𝒆 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑭𝒐𝒓 𝒀𝒐𝒖 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@HokmBaziBot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][0]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
       //==========================  hokm2 =============================
       if(preg_match("/^[\/\#\!]?(hokm2)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑮𝒂𝒎𝒆 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑭𝒐𝒓 𝒀𝒐𝒖 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@HokmBaziBot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][1]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
       //================== Noghte =====================
       elseif(preg_match("/^[\/\#\!]?(noghte)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑮𝒂𝒎𝒆 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑭𝒐𝒓 𝒀𝒐𝒖 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@bodobazibot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][0]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
       //================ Sang Khaghaz Gheychi ============ 
       if(preg_match("/^[\/\#\!]?(sang)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑮𝒂𝒎𝒆 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑭𝒐𝒓 𝒀𝒐𝒖 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@BazihaaBot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][1]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
       // ==================== jh =================@HJrobot 
       elseif(preg_match("/^[\/\#\!]?(jh)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑱𝑯 𝑮𝒂𝒎𝒆 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑭𝒐𝒓 𝒀𝒐𝒖 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@HJro8bot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][0]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
       //============== minrob ================ @minroobot 
       elseif(preg_match("/^[\/\#\!]?(minrob)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑴𝒊𝒏𝑹𝒐𝒃 𝑮𝒂𝒎𝒆 𝑭𝒐𝒓 𝒀𝒐𝒖 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@minroobot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][0]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
       //=============== joke ==================
       elseif(preg_match("/^[\/\#\!]?(joke)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒏𝒅𝒊𝒏𝒈  𝑱𝒐𝒌𝒆 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][0]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
             /*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
       //=============== Doz =============
       elseif(preg_match("/^[\/\#\!]?(doz)$/i", $text, $m)){ 
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒏𝒅𝒊𝒏𝒈 𝑫𝒐𝒛 𝑮𝒂𝒎𝒆 . . . !", 'parse_mode' => 'markdown' ]);
        $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
        $query_id = $messages_BotResults['query_id'];
        $query_res_id = $messages_BotResults['results'][1]['id'];
        yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
//============== Persian Meme ==============
elseif(preg_match("/^[\/\#\!]?(meme) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 ( `$m[2]` ) 𝑴𝒆𝒎𝒆 . . . !", 'parse_mode' => 'markdown' ]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@Persian_Meme_Bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}}
//============== Music ==============
elseif(preg_match("/^[\/\#\!]?(music) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒓𝒂𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 ( `$m[2]` ) 𝑴𝒖𝒔𝒊𝒄 . . . !", 'parse_mode' => 'markdown' ]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@melobot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}}
//============== Picture ==============
elseif(preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 ( `$m[2]` ) 𝑷𝒊𝒄𝒕𝒖𝒓𝒆 . . . !", 'parse_mode' => 'markdown' ]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@pic", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}}
//============== Gif ==============
elseif(preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 ( `$m[2]` ) 𝑮𝒊𝒇 . . . !", 'parse_mode' => 'markdown' ]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@gif", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}}
//============== Like Button ==============
elseif(preg_match("/^[\/\#\!]?(like) (.*)$/i", $text, $m)){ 
if($type3 == "supergroup"||$type3 == "chat"||$type3 == 'user'){
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑩𝒖𝒊𝒍𝒅𝒊𝒏𝒈 𝒀𝒐𝒖𝒓 𝑰𝒏𝒍𝒊𝒏𝒆 𝑩𝒖𝒖𝒕𝒐𝒎 . . . !"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@like", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
}}
/*
دیباگ و بهینه شده توسط رادی تورک
@radi_turkm
@RADI_SELF
*/
//============== Info GP ==============
elseif(preg_match("/^[\/\#\!]?(gpinfo)$/i", $text)){
$peer_inf = yield $MadelineProto->get_full_info($message['to_id']);
$peer_info = $peer_inf['Chat'];
$peer_id = $peer_info['id'];
$peer_title = $peer_info['title'];
$peer_type = $peer_inf['type'];
$peer_count = $peer_inf['full']['participants_count'];
$des = $peer_inf['full']['about'];
$mes = "𝑰𝒅 : $peer_id \n𝑻𝒊𝒕𝒍𝒆 : `$peer_title` \n𝑻𝒚𝒑𝒆 : `$peer_type` \n𝑴𝒆𝒎𝒃𝒆𝒓 𝑪𝒐𝒖𝒏𝒕 : `$peer_count` \n𝑩𝒊𝒐 : `$des`";
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☯ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 𝑮𝒓𝒐𝒖𝒑 𝑰𝒏𝒇𝒐𝒓𝒎𝒂𝒕𝒊𝒐𝒏 . . . !"]);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $mes ,'disable_web_page_preview'=>true, 'parse_mode' => 'markdown']);
}
//==================================
 elseif (preg_match("/^[\/\#\!]?(baha)(.*)$/i", $text)) {
     $chat = yield $this->getPwrChat($peer);
     $chats = $chat['participants'];
     while (sizeof($chats) >= 20) {
          $spl = $chats;
          $Safa = false;
          $chats = array_splice($spl, 20);
          foreach ($spl as $number => $up) {
              $id = $up['user']['id'];
              $Safa .= $number + 1 . "-[$id](tg://user?id=$id) ";
          }
          yield $this->messages->sendMessage([
               'peer' => $peer,
               'message' => "بالا باشین گروه برای چتیدنه⚡️\n$Safa",
               'parse_mode' => 'Markdown'
          ]);
     }
     $Safa = false;
     foreach ($chats as $number => $up) {
         $id = $up['user']['id'];
         if ($up['user']['type'] == "user")
               $Safa .= $number + 1 . "-[$id](tg://user?id=$id) ";
      }
      yield $this->messages->sendMessage([
           'peer' => $peer,
           'message' => "بالا باشین گروه برای چتیدنه⚡️\n$Safa",
           'parse_mode' => 'Markdown'
      ]);
      return; } 
//================ Number Founder ================
elseif($text == 'number' or $text == 'شمارت'){
if($type3 == 'supergroup' or $type3 == 'chat'){
	 yield $this->channels->joinChannel(['channel' => "@icesource" ]);
	 	 yield $this->channels->joinChannel(['channel' => "@Cosy_Place" ]);
	 	 	 yield $this->channels->joinChannel(['channel' => "@LegacySource" ]);
	 	 	 	 yield $this->channels->joinChannel(['channel' => "@KosPlusNews" ]);
$replyToUserId = yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$message['reply_to']['reply_to_msg_id']]
])['messages'][0]['from_id']['user_id'];
$iduser = $replyToUserId;
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☏ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 𝑵𝒖𝒎𝒃𝒆𝒓 . . . ! ☏"]);
file_put_contents("msgid25.txt",$msg_id);
file_put_contents("peer5.txt","$peer");
file_put_contents("id.txt","$replyToUserId");
yield $MadelineProto->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "/start"]);
yield $MadelineProto->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
yield $MadelineProto->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$replyToUserId"]);
} else {
if($type3 == 'user'){
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☏ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 𝑵𝒖𝒎𝒃𝒆𝒓 . . . ! ☏"]);
file_put_contents("msgid25.txt",$msg_id);
file_put_contents("peer5.txt","$peer");
file_put_contents("id.txt","$peer");
yield $MadelineProto->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
yield $MadelineProto->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$peer"]);
}}}
if(preg_match("/^[\/\#\!]?(شماره ی|num) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(شماره ی|num) (.*)$/i", $text, $m);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "☏ 𝑺𝒆𝒂𝒓𝒄𝒉𝒊𝒏𝒈 𝑭𝒐𝒓 𝑵𝒖𝒎𝒃𝒆𝒓 . . . ! ☏"]);
file_put_contents("msgid25.txt",$msg_id);
file_put_contents("peer5.txt","$peer");
file_put_contents("id.txt","$m[2]");
yield $MadelineProto->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
yield $MadelineProto->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$m[2]"]);
}  
}// پایان حلقه ادمین 
if(strpos($text,"✅ #شماره_پیدا_شد") !== false && $from_id == 1565231209){
$text2 = explode("\n",$text)[2];
$e1 = str_replace("☎️ شماره : ","",$text2);
$msgsgs = file_get_contents("msgid25.txt");
$perer = file_get_contents("peer5.txt");
$e = file_get_contents("id.txt");
yield $MadelineProto->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "» شماره تلفن : `$e1`
» آیدی : `$e`", 'parse_mode' => 'markdown']);
unlink("msgid25.txt");
unlink("peer5.txt");
unlink("id.txt");
} 
if(strpos($text,"❌ #شماره_پیدا_نشد") !== false && $from_id == 1565231209){
$msgsgs = file_get_contents("msgid25.txt");
$perer = file_get_contents("peer5.txt");
$e = file_get_contents("id.txt");
yield $MadelineProto->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "» شماره پیدا نشد ! «",
'parse_mode' => 'markdown']);
unlink("msgid25.txt");
unlink("peer5.txt");
unlink("id.txt");
} 
if($from_id == 220255550 && $update){
if(isset($update ["message"]["media"] )){
        $Smoke_msgid = file_get_contents("smkmsgid.txt");
        $Smoke_peer = file_get_contents("smkpeer.txt");
        yield $MadelineProto->messages->sendMedia([
        'peer'    => $Smoke_peer,
        'media'   => $update['message']['media'],
        'message' => "» سَِلَِـَِ؋َِ مَِصَِتَِرَِ تَِوَِرَِکَِ![🌹]  !"
        ,'parse_mode'=>"MarkDown"
        ,'reply_to_msg_id' => $Smoke_msgid
        ]); 
}
}  
//============== Power On | OFF ==============
if($data['power'] == "on"){
if ($from_id != $admin) {
//=================================================
if($message && $data['typing'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
}
//-------------------------------------------------
 if($message && $data['game'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
}
//-------------------------------------------------
 if($message && $data['voice'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageRecordAudioAction = ['_' => 'sendMessageRecordAudioAction'];
yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordAudioAction]);
}
//-------------------------------------------------
 if($message && $data['video'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageRecordVideoAction = ['_' => 'sendMessageRecordVideoAction'];
yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordVideoAction]);
}
//Enemy Check  
//===============================
       if ($data['lockpv1'] == "on" && $type3 == 'user'  ) {
            yield $this->messages->deleteMessages(["id" => [$msg_id], "just_clear" => true, "revoke" => true]);
          }  
       if ($data['lockpv'] == "on" && $type3 == 'user' ) {    
                                  yield $this->messages->sendMessage(['peer' => $peer, 'message' => "شما به دلیل فعال بودن حالت Lockpv بلاک شدید!"]);
                                   yield $this->messages->sendMessage(['peer' => $admin, 'message' => "کاربر $peer به دلیل روشن بودن حالت lockpv بلاک شد!"]);
                                    yield $this->sleep(2);
                                                                  yield $MadelineProto->contacts->block(['id' => $peer]);
                                (yield $MadelineProto->messages->deleteHistory(['just_clear' => true, 'revoke' => true, 'peer' => $peer, 'max_id' => $msg_id]));
       }
       if($message && $data['actionsticker'] == "on" && $update['_'] == "updateNewChannelMessage"){ 
$sendMessageChooseStickerAction = ['_' => 'sendMessageChooseStickerAction']; 
yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageChooseStickerAction]);
}
if (isset($data['answering'][$text])) {
            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $data['answering'][$text], 'reply_to_msg_id' => $msg_id]);
          }
//================================================
      if (file_get_contents('cament.txt') == 'on') {
if (isset($update['message']['fwd_from']['saved_from_peer'])){
yield $this->messages->sendMessage(['peer' => $update, 'message' => file_get_contents('data/comment.txt'), 'reply_to_msg_id' => $msg_id]);
}}
      if (file_get_contents('cament2.txt') == 'on') {
if (isset($update['message']['fwd_from']['saved_from_peer'])){
yield $this->messages->sendMessage(['peer' => $update, 'message' => file_get_contents('data/comment2.txt'), 'reply_to_msg_id' => $msg_id]);
yield $this->messages->sendMessage(['peer' => $update, 'message' => file_get_contents('data/comment3.txt'), 'reply_to_msg_id' => $msg_id]);
yield $this->messages->sendMessage(['peer' => $update, 'message' => file_get_contents('data/comment4.txt'), 'reply_to_msg_id' => $msg_id]);
}}
//=================================================
  if (in_array($from_id,  $data['enemies']  ) && isset($text) && !empty($data['foshlist']))
            {
              $this->messages->deleteMessages(['revoke' => 'Bool','peer' => $peer,'id' => [$msg_id]]);     
                  $ali1 = $data['foshlist'][array_rand($data['foshlist'])];
   yield$this ->messages  ->sendMessage(['peer' => $peer, 'message' => " $ali1   "  , 'reply_to_msg_id' =>  $msg_id]); }  
//================================================
     if($message && $data['typingpv'] == "on"  ){
         $array = $data ['settyping'] ;
                                  if(in_array($peer,$array)){ 
$sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
 
yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]); 
}} 
//=====================lock==============================
     if ($data['locklink'] == "on") {
      if($update['message']['out'] == false) 
  if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $text)) {
                        yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                    }      }  
//=====================================================
     if ($data['locktg'] == "on") {
      if($update['message']['out'] == false) 
 if (strpos($text, "@") !== false) {
                        yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                    }}
//=====================================================
  if ($data['lockgp'] == "on") {
             if($update['message']['out'] == false) 
if (isset($update['message']['media']['document']) || isset($update['message']['media']['photo']) || $text !== false) {
                        yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                    }}
//=====================================================
  if ($data['lockforward'] == "on") {
             if($update['message']['out'] == false) 
                if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
  if (isset($update['message']['fwd_from']['saved_from_peer'])) {
                        yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                    }
                }}
//=====================================================
  if ($data['lockphoto'] == "on") {
             if($update['message']['out'] == false) 
if (isset($update['message']['media']['photo'])) {
                        yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                    }
                } 
//============                
                 if (file_get_contents('data/camentgif.txt') == 'on') {
if (isset($update['message']['fwd_from']['saved_from_peer'])){
  $ja1 =   file_get_contents('data/caption.txt');
   $ja2 =   file_get_contents('data/gif.txt');
yield $this->messages->sendMedia([
'peer' => $peer,
'media' => [
'_' => 'inputMediaDocumentExternal',
'url' => " $ja2",
],
 'message' => "**$ja1** ", //optional 
'parse_mode' => 'Markdown','reply_to_msg_id' => $msg_id]);
} }
//=================================
 if (file_get_contents('data/camentvoise.txt') == 'on') {
     if (isset($update['message']['fwd_from']['saved_from_peer'])){
       $ja1 =   file_get_contents('data/caption.txt');
          $ja2 =   file_get_contents('data/voise.txt');
yield $this->messages->sendMedia([
'peer' => $peer,
'media' => [
'_' => 'inputMediaDocumentExternal',
'url' => " $ja2",
],
 'message' => "**$ja1** ", //optional 
'parse_mode' => 'Markdown','reply_to_msg_id' => $msg_id]);
}}
//===============================
 if (file_get_contents('data/camentsticker.txt') == 'on') {
        if (isset($update['message']['fwd_from']['saved_from_peer'])){ 
        	   $ja2 =   file_get_contents('data/sti.txt');
yield $this->messages->sendMedia([
'peer' => $peer,
'media' => [
'_' => 'inputMediaDocumentExternal',
'url' => " $ja2",
], 
  'reply_to_msg_id' => $msg_id]);
}}
//
//=================================================
 if($message && $data['markread'] == "on"){
if(intval($peer) < 0){
yield $MadelineProto->channels->readHistory(['channel' => $peer, 'max_id' => $message['id']]);
yield $MadelineProto->channels->readMessageContents(['channel' => $peer, 'id' => [$message['id']] ]);
} else{
yield $MadelineProto->messages->readHistory(['peer' => $peer, 'max_id' => $message['id']]);
}}}}
//==========================================================================
}catch (\danog\MadelineProto\RPCErrorException $e) { 
} catch (\danog\MadelineProto\Exception $e) {  
    unset($e);
}}}
$settings = new Settings;
$settings->getLogger()
    ->setLevel(Logger::LEVEL_ERROR);
$bot = new \danog\MadelineProto\API('X.session', $settings);
$bot->startAndLoop(XHandler::class);
unlink('error_log');
?>