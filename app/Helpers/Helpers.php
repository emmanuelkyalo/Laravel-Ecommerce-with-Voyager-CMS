<?php



use Illuminate\Support\Facades\Session;


function generateSessionID()
{
    //GENERATE RANDOM SESSION ID
    $session_id = substr(str_shuffle(md5(microtime())), 0, 10);
    Session::put('session_id', $session_id);

    return $session_id;
}
