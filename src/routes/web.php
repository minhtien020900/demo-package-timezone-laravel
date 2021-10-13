<?php


Route::get('timezones/{timezone}', [\DemoPackage\MinhTien\Timezone\Controllers\TimezoneController::class,'index']);
Route::get('/test',function (){
    dd(1);
});
