<?php
/**
 * Created by PhpStorm.
 * User: JonathanRawlins
 * Date: 04/03/2021
 * Time: 14:52
 */

namespace Maltonite\AmericanBritish;





class AmericanBritish
{

    private static $converter;

    public static function __constructStatic()
    {
        static::$converter = new AmericanBritishSpellings([]);
    }

        public static function SwapBritishSpellingsForAmericanSpellings($text){
            self::__constructStatic();
            return static::$converter->SwapBritishSpellingsForAmericanSpellings(['text' => $text]);
        }

        public static function SwapAmericanSpellingsForBritishSpellings($text){
            self::__constructStatic();
            return static::$converter->SwapAmericanSpellingsForBritishSpellings(['text' => $text]);
        }


}