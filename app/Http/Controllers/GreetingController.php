<?php

namespace App\Http\Controllers;

class GreetingController extends Controller
{
    public function greeting($greeting)
    {
        switch ($greeting) {
            case 'morning':
                $h1 = '朝のあいさつ';
                $h2 = 'おはようございます';
                break;
            case 'morning':
                $h1 = '昼のあいさつ';
                $h2 = 'こんにちは';
                break;
            case 'morning':
                $h1 = '夕方のあいさつ';
                $h2 = 'こんばんは';
                break;
            case 'morning':
                $h1 = '夜のあいさつ';
                $h2 = 'おやすみ';
                break;
        }
        return view('greeting.greeting', ['h1' => $h1, 'h2' => $h2]);
    }

    public function freeword($str)
    {
        $h1 = '自由なメッセージ';
        $h2 = $str;
        return view('greeting.freeword', ['h1' => $h1, 'h2' => $h2]);
    }
    
    public function random()
    {
        $msg_arr = [
            'おはよう',
            'こんにちは',
            'こんばんは',
            'おやすみ',
            'おはよウサギ',
            'こんにちワン',
            'こんばんワニ',
            'さよなライオン',
            'おはよウナギ',
            'いいただきマウス',
            'いってきまスカンク',
            'ただいマンボウ',
            'おやすみなサイ'
        ];
        $h1 = 'ランダムなメッセージ';
        $h2 = $msg_arr[rand(0,12)];
        return view('greeting.random', ['h1' => $h1, 'h2' => $h2]);
    }
}
