<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class AddressVerifyIntlRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example “0”
     *
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $defaultCity;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $defaultCountry;

    /**
     * @var string
     */
    public $defaultDistrict;

    /**
     * @var string
     */
    public $defaultProvince;

    /**
     * @example “31.2304”
     *
     * @var string
     */
    public $latitude;

    /**
     * @example “121.4737”
     *
     * @var string
     */
    public $longitude;

    /**
     * @description This parameter is required.
     *
     * @example 1872334****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description This parameter is required.
     *
     * @example ADD_VERIFY_PRO
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $text;

    /**
     * @description This parameter is required.
     *
     * @example HOME
     *
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'addressType' => 'AddressType',
        'defaultCity' => 'DefaultCity',
        'defaultCountry' => 'DefaultCountry',
        'defaultDistrict' => 'DefaultDistrict',
        'defaultProvince' => 'DefaultProvince',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'mobile' => 'Mobile',
        'productCode' => 'ProductCode',
        'text' => 'Text',
        'verifyType' => 'VerifyType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->defaultCity) {
            $res['DefaultCity'] = $this->defaultCity;
        }
        if (null !== $this->defaultCountry) {
            $res['DefaultCountry'] = $this->defaultCountry;
        }
        if (null !== $this->defaultDistrict) {
            $res['DefaultDistrict'] = $this->defaultDistrict;
        }
        if (null !== $this->defaultProvince) {
            $res['DefaultProvince'] = $this->defaultProvince;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddressVerifyIntlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['DefaultCity'])) {
            $model->defaultCity = $map['DefaultCity'];
        }
        if (isset($map['DefaultCountry'])) {
            $model->defaultCountry = $map['DefaultCountry'];
        }
        if (isset($map['DefaultDistrict'])) {
            $model->defaultDistrict = $map['DefaultDistrict'];
        }
        if (isset($map['DefaultProvince'])) {
            $model->defaultProvince = $map['DefaultProvince'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
