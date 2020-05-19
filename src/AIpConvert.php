<?php
namespace vlson\IpConvert;

abstract Class AIpConvert{
    public $convertInfo;
    
    abstract public static function IpConvert(String $ip): IIpConvert;

    abstract public function getRealityAddress(): Array;

    abstract public function getLatitudeAndLongitude(): Array;
}
