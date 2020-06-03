<?php

function drawServiceBlock($serviceObj)
{
  if ( $serviceObj->title == '' && $serviceObj->description == '' ) {
  } else {

    $hitClass = $serviceObj->hit == true ? 'hit' : '';
    echo '<div class="product ' . $hitClass . '">';
    echo '<p class="title">' . $serviceObj->title . '</p>';
    echo '<p class="description">' . $serviceObj->description . '</p>';
    echo '<div class="benefits">';
  
    if (count($serviceObj->benefits) > 0) {
      echo '<ul>';
      foreach ($serviceObj->benefits as $item) {
        if ($item != '') { echo '<li>' . $item . '</li>'; }
      }
      echo '</ul>';
    }
    echo '</div>';
  
    echo '<div class="footer">';
    echo '<p class="price">' . $serviceObj->price . '</p>';
    echo '<div class="action">';
    if ( $serviceObj->order == true ) {
      echo '<button class="btn" value="' . $serviceObj->title . '">Заказать</button>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}

function getServiceObj($serviceArray)
{
  $serviceObj = new stdClass();
  $serviceObj->benefits = [];

  foreach ($serviceArray as $key => $serviceData) {
    $pos = strpos($key, '_');
    $keyName = substr($key, 0, $pos);

    if ($keyName == 'title') {
      $serviceObj->title = $serviceData;
      $serviceObj->hit = false;
    }

    if ($keyName == 'hit') {
      $serviceObj->title = $serviceData;
      $serviceObj->hit = true;
    }

    if ($keyName == 'description') {
      $serviceObj->description = $serviceData;
    }

    if ($keyName == 'li') {
      array_push($serviceObj->benefits, $serviceData);
    }

    if ($keyName == 'price') {
      $serviceObj->price = $serviceData;
    }

    if ($keyName == 'order') {
      $serviceObj->order = $serviceData;
    }
  }

  return $serviceObj;
}

// function define_handle($array, $keys)
// {
//   switch (count($array)) {
//     case 4:
//       if ($array[0] == '' && $array[1] == '') {
//         // empty main fields
//         return $template = [];
//         break;
//       } else {

//         if (substr($keys[0], 0, 3) == 'hit') {
//           if ($array[3] == 1) { //true btn order
//             return $template =
//               ['<div class="product hit"><p class="title">', $array[0], '</p>
//               <p class="description">', $array[1], '</p><div class="footer">
//               <p class="price">', $array[2], '</p>
//               <div class="action"><button class="btn black" 
//               value="', $array[0], '">Заказать</button></div></div></div>'];
//             break;
//           } else {
//             return $template =
//               ['<div class="product hit">,<p class="title">', $array[0], '</p>
//               <p class="description">', $array[1], '</p><div class="footer">
//               <p class="price">', $array[2], '</p></div></div></div>'];
//             break;
//           }
//         } else {
//           if ($array[3] == 1) { //true btn order
//             return $template =
//               ['<div class="product"><p class="title">', $array[0], '</p>
//               <p class="description">', $array[1], '</p><div class="footer">
//               <p class="price">', $array[2], '</p>
//               <div class="action"><button class="btn black" 
//               value="', $array[0], '">Заказать</button></div></div></div>'];
//             break;
//           } else {
//             return $template =
//               ['<div class="product">,<p class="title">', $array[0], '</p>
//               <p class="description">', $array[1], '</p><div class="footer">
//               <p class="price">', $array[2], '</p></div></div></div>'];
//             break;
//           }
//         }
//       }
//     case 5:
//       if ($array[0] == '' && $array[1] == '') {
//         // empty main fields
//         return $template = [];
//         break;
//       } else {
//         if ($array[2] == '' && $array[3] == '') {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               ['<div class="product hit"><p class="title">', $array[0], '</p>
//                   <p class="description">', $array[1], '</p>
//                   <div class="footer">
//                     <p class="price">', $array[4], '</p>
//                     <div class="action">
//                     <button class="btn" value="', $array[0], '">Заказать</button>
//                   </div></div></div>'];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//                 <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="footer">
//                   <p class="price">', $array[4], '</p>
//                   <div class="action">
//                   <button class="btn" value="', $array[0], '">Заказать</button>
//                 </div></div></div>'
//               ];
//             break;
//           }
//         } else if ($array[2] == '') {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[3], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[4], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[3], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[4], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           }
//         } else if ($array[3] == '') {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[2], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[4], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[2], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[4], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           }
//         } else {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//                 <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                   <ul><li>', $array[2], '</li>
//                   <li>', $array[3], '</li></ul>
//                   </div><div class="footer">
//                   <p class="price">', $array[4], '</p>
//                   <div class="action">
//                   <button class="btn" value="', $array[0], '">Заказать</button>
//                 </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//                 <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                   <ul><li>', $array[2], '</li>
//                   <li>', $array[3], '</li></ul>
//                   </div><div class="footer">
//                   <p class="price">', $array[4], '</p>
//                   <div class="action">
//                   <button class="btn" value="', $array[0], '">Заказать</button>
//                 </div></div></div>'
//               ];
//             break;
//           }
//         }
//       }
//     case 6:
//       if ($array[0] == '' && $array[1] == '') {
//         // empty main fields
//         return $template = [];
//         break;
//       } else {
//         if ($array[2] == '' && $array[3] == '' && $array[4] == '') {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//                 <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="footer">
//                   <p class="price">', $array[5], '</p>
//                   <div class="action">
//                   <button class="btn" value="', $array[0], '">Заказать</button>
//                 </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="footer">
//                 <p class="price">', $array[5], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           }
//         } else if ($array[2] == '') {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[3], '</li><li>', $array[4], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[5], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[3], '</li><li>', $array[4], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[5], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           }
//         } else if ($array[3] == '') {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[2], '</li><li>', $array[4], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[5], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[2], '</li><li>', $array[4], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[5], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           }
//         } else if ($array[4] == '') {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[2], '</li><li>', $array[3], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[5], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//               <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                 <ul><li>', $array[2], '</li><li>', $array[3], '</li></ul>
//                 </div><div class="footer">
//                 <p class="price">', $array[5], '</p>
//                 <div class="action">
//                 <button class="btn" value="', $array[0], '">Заказать</button>
//               </div></div></div>'
//               ];
//             break;
//           }
//         } else {
//           if (substr($keys[0], 0, 3) == 'hit') {
//             return $template =
//               [
//                 '<div class="product hit">
//                 <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                   <ul><li>', $array[2], '</li>
//                   <li>', $array[3], '</li>
//                   <li>', $array[4], '</li></ul>
//                   </div><div class="footer">
//                   <p class="price">', $array[5], '</p>
//                   <div class="action">
//                   <button class="btn" value="', $array[0], '">Заказать</button>
//                 </div></div></div>'
//               ];
//             break;
//           } else {
//             return $template =
//               [
//                 '<div class="product">
//                     <p class="title">', $array[0], '</p><p class="description">',
//                 $array[1], '</p><div class="benefits">
//                   <ul><li>', $array[2], '</li>
//                   <li>', $array[3], '</li>
//                   <li>', $array[4], '</li></ul>
//                   </div><div class="footer">
//                   <p class="price">', $array[5], '</p>
//                   <div class="action">
//                   <button class="btn" value="', $array[0], '">Заказать</button>
//                 </div></div></div>'
//               ];
//             break;
//           }
//         }
//       }
//   }
// }
