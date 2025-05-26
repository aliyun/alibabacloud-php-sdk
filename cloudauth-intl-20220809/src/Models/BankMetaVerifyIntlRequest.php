<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class BankMetaVerifyIntlRequest extends Model
{
    /**
     * @var string
     */
    public $bankCard;

    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $verifyMode;
    protected $_name = [
        'bankCard' => 'BankCard',
        'identifyNum' => 'IdentifyNum',
        'identityType' => 'IdentityType',
        'mobile' => 'Mobile',
        'paramType' => 'ParamType',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'userName' => 'UserName',
        'verifyMode' => 'VerifyMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bankCard) {
            $res['BankCard'] = $this->bankCard;
        }

        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }

        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->verifyMode) {
            $res['VerifyMode'] = $this->verifyMode;
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
        if (isset($map['BankCard'])) {
            $model->bankCard = $map['BankCard'];
        }

        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }

        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['VerifyMode'])) {
            $model->verifyMode = $map['VerifyMode'];
        }

        return $model;
    }
}
