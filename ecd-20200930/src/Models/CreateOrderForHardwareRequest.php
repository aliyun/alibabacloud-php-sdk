<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderForHardwareRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $detailAddress;

    /**
     * @var string
     */
    public $districtCode;

    /**
     * @var string
     */
    public $districtName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $hardwareType;

    /**
     * @var string
     */
    public $hardwareVersion;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $provCode;

    /**
     * @var string
     */
    public $provName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $streetCode;

    /**
     * @var string
     */
    public $streetName;

    /**
     * @var string
     */
    public $zipCode;
    protected $_name = [
        'amount'          => 'Amount',
        'autoPay'         => 'AutoPay',
        'cityCode'        => 'CityCode',
        'cityName'        => 'CityName',
        'contactName'     => 'ContactName',
        'countryCode'     => 'CountryCode',
        'countryName'     => 'CountryName',
        'detailAddress'   => 'DetailAddress',
        'districtCode'    => 'DistrictCode',
        'districtName'    => 'DistrictName',
        'email'           => 'Email',
        'hardwareType'    => 'HardwareType',
        'hardwareVersion' => 'HardwareVersion',
        'mobilePhone'     => 'MobilePhone',
        'phone'           => 'Phone',
        'promotionId'     => 'PromotionId',
        'provCode'        => 'ProvCode',
        'provName'        => 'ProvName',
        'regionId'        => 'RegionId',
        'streetCode'      => 'StreetCode',
        'streetName'      => 'StreetName',
        'zipCode'         => 'ZipCode',
    ];

    public function validate()
    {
        Model::validateRequired('hardwareType', $this->hardwareType, true);
        Model::validateRequired('hardwareVersion', $this->hardwareVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->detailAddress) {
            $res['DetailAddress'] = $this->detailAddress;
        }
        if (null !== $this->districtCode) {
            $res['DistrictCode'] = $this->districtCode;
        }
        if (null !== $this->districtName) {
            $res['DistrictName'] = $this->districtName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->hardwareType) {
            $res['HardwareType'] = $this->hardwareType;
        }
        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->provCode) {
            $res['ProvCode'] = $this->provCode;
        }
        if (null !== $this->provName) {
            $res['ProvName'] = $this->provName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streetCode) {
            $res['StreetCode'] = $this->streetCode;
        }
        if (null !== $this->streetName) {
            $res['StreetName'] = $this->streetName;
        }
        if (null !== $this->zipCode) {
            $res['ZipCode'] = $this->zipCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderForHardwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['DetailAddress'])) {
            $model->detailAddress = $map['DetailAddress'];
        }
        if (isset($map['DistrictCode'])) {
            $model->districtCode = $map['DistrictCode'];
        }
        if (isset($map['DistrictName'])) {
            $model->districtName = $map['DistrictName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['HardwareType'])) {
            $model->hardwareType = $map['HardwareType'];
        }
        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['ProvCode'])) {
            $model->provCode = $map['ProvCode'];
        }
        if (isset($map['ProvName'])) {
            $model->provName = $map['ProvName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreetCode'])) {
            $model->streetCode = $map['StreetCode'];
        }
        if (isset($map['StreetName'])) {
            $model->streetName = $map['StreetName'];
        }
        if (isset($map['ZipCode'])) {
            $model->zipCode = $map['ZipCode'];
        }

        return $model;
    }
}
