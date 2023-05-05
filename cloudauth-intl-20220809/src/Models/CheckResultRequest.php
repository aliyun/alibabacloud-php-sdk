<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class CheckResultRequest extends Model
{
    /**
     * @example ***
     *
     * @var string
     */
    public $extraImageControlList;

    /**
     * @example N
     *
     * @var string
     */
    public $isReturnImage;

    /**
     * @example djs20d***9-dsskc
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example Y
     *
     * @var string
     */
    public $returnFiveCategorySpoofResult;

    /**
     * @example 4ab0b***cbde97
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'extraImageControlList'         => 'ExtraImageControlList',
        'isReturnImage'                 => 'IsReturnImage',
        'merchantBizId'                 => 'MerchantBizId',
        'returnFiveCategorySpoofResult' => 'ReturnFiveCategorySpoofResult',
        'transactionId'                 => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CheckResultRequest
     */
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
