<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class BankMetaVerifyIntlRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bankCard;

    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @example 01
     *
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @description This parameter is required.
     *
     * @example normal
     *
     * @var string
     */
    public $paramType;

    /**
     * @description This parameter is required.
     *
     * @example BANK_CARD_N_META
     *
     * @var string
     */
    public $productCode;

    /**
     * @description This parameter is required.
     *
     * @example BANK_CARD_4_META
     *
     * @var string
     */
    public $productType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userName;

    /**
     * @description This parameter is required.
     *
     * @example VERIFY_BANK_CARD
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return BankMetaVerifyIntlRequest
     */
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
