<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class AddressVerifyV2IntlRequest extends Model
{
    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $regCountry;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'deviceToken' => 'DeviceToken',
        'mobile' => 'Mobile',
        'productCode' => 'ProductCode',
        'regCountry' => 'RegCountry',
        'text' => 'Text',
        'verifyType' => 'VerifyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->regCountry) {
            $res['RegCountry'] = $this->regCountry;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RegCountry'])) {
            $model->regCountry = $map['RegCountry'];
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
