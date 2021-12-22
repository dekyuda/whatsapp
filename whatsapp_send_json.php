 // $json = json_decode(
//     [
//         'headers' => [
//             'Accept' => 'application/json',
//             'Content-Type' => 'application/json',
//             'Authorization' => 'Bearer '.$this->token
//         ],
//         'json' => [
//             'to_number' => $phone,
//             'to_name' => $phone,
//             'message_template_id' => '56ad64e2-f592-4264-b072-856a4828b1c6',
//             'channel_integration_id' => '0b1b3a7c-b8fc-423a-b395-e12d0d9c6126',
//             'language' => $language,
//             'parameters' => [
//                 'body' => array(
//                     (object) [
//                         'key' => '1',
//                         'value' => 'otp',
//                         'value_text' => $otp
//                     ]   
//                 )
//             ]
//         ]
//     ]
// );


//Generate Image with mark
// add text from database 
// $img->text('Hi ' . $name, 40, 250, function($font) {  
//     $font->file(public_path('fonts/Montserrat-SemiBold.ttf'));  
//     $font->size(24);  
//     $font->color('#000');
//     $font->align('left');  
//     // $font->valign('bottom');   
// });


// $fileName = 'love-bali-' . $rand . '.jpg';
// $img->save(public_path('whatsapp-image/' . $fileName));
    
