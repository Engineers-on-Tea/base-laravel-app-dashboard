<?php

class Lang
{
    public static function getSelectedLang()
    {
        $lang = session()->get('lang');
        if (!$lang) {
            $lang = 'en';
        }
        return $lang;
    }
}