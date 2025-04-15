<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class CheckResultRequest extends Model
{
    /**
     * @var string
     */
    public $extraImageControlList;

    /**
     * @var string
     */
    public $isReturnImage;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $returnFiveCategorySpoofResult;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'extraImageControlList' => 'ExtraImageControlList',
        'isReturnImage' => 'IsReturnImage',
        'merchantBizId' => 'MerchantBizId',
        'returnFiveCategorySpoofResult' => 'ReturnFiveCategorySpoofResult',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraImageControlList) {
            $res['ExtraImageControlList'] = $this->extraImageControlList;
        }

        if (null !== $this->isReturnImage) {
            $res['IsReturnImage'] = $this->isReturnImage;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->returnFiveCategorySpoofResult) {
            $res['ReturnFiveCategorySpoofResult'] = $this->returnFiveCategorySpoofResult;
        }

        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
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
        if (isset($map['ExtraImageControlList'])) {
            $model->extraImageControlList = $map['ExtraImageControlList'];
        }

        if (isset($map['IsReturnImage'])) {
            $model->isReturnImage = $map['IsReturnImage'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['ReturnFiveCategorySpoofResult'])) {
            $model->returnFiveCategorySpoofResult = $map['ReturnFiveCategorySpoofResult'];
        }

        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
