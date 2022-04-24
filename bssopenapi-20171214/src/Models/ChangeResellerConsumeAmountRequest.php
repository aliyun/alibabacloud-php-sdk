<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ChangeResellerConsumeAmountRequest extends Model
{
    /**
     * @var string
     */
    public $adjustType;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $extendMap;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'adjustType'   => 'AdjustType',
        'amount'       => 'Amount',
        'businessType' => 'BusinessType',
        'currency'     => 'Currency',
        'extendMap'    => 'ExtendMap',
        'outBizId'     => 'OutBizId',
        'ownerId'      => 'OwnerId',
        'source'       => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustType) {
            $res['AdjustType'] = $this->adjustType;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->extendMap) {
            $res['ExtendMap'] = $this->extendMap;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResellerConsumeAmountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjustType'])) {
            $model->adjustType = $map['AdjustType'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ExtendMap'])) {
            $model->extendMap = $map['ExtendMap'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
