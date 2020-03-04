<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\ClientSenMessageEvent;
use App\sniff;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
        $PublicIP = $ipaddress;
        $json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
        $json     = json_decode($json, true);
        if ($json['ip'] != 'localhost' && $json['ip'] != '127.0.0.1' && !isset($json['bogon'])) {
            $country = $json['country'];
            $region = $json['region'];
            $city = $json['city'];
            sniff::create([
                'ip' => $PublicIP,
                'city' => $city,
                'region' => $region,
                'country' => $country,
                'loc' => $json['loc'],
                'timezone' => $json['timezone'],
                'detect' => $_SERVER['HTTP_USER_AGENT']
            ]);
        }
        else {
            sniff::create([
                'detect' => $_SERVER['HTTP_USER_AGENT']
            ]);
        }
        return view('index');
    }

    public function contact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:11',
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        Contact::create($validatedData);
        event(new ClientSenMessageEvent($validatedData));
        return redirect(route('index'))->with([
            'status' => 'success',
            'message' => 'پیغام با موفقیت ارسال شد'
        ]);
    }
}
