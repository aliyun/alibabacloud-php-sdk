<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class BankMetaVerifyRequest extends Model
{
    /**
     * @example 610*************1181
     *
     * @var string
     */
    public $bankCard;

    /**
     * @example 429001********8211
     *
     * @var string
     */
    public $identifyNum;

    /**
     * @example 138******11
     *
     * @var string
     */
    public $mobile;

    /**
     * @example normal
     *
     * @var string
     */
    public $paramType;

    /**
     * @example BANK_CARD_2_META
     *
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $userName;

    /**
     * @example VERIFY_BANK_CARD
     *
     * @var string
     */
    public $verifyMode;
    protected $_name = [
        'bankCard'    => 'BankCard',
        'identifyNum' => 'IdentifyNum',
        'mobile'      => 'Mobile',
        'paramType'   => 'ParamType',
        'productType' => 'ProductType',
        'userName'    => 'UserName',
        'verifyMode'  => 'VerifyMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bankCard) {
            $res['BankCard'] = $this->bankCard;
        }
        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
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
     * @return BankMetaVerifyRequest
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
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
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
