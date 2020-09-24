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
    public $currency;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var string
     */
    public $extendMap;
    protected $_name = [
        'adjustType'   => 'AdjustType',
        'amount'       => 'Amount',
        'currency'     => 'Currency',
        'businessType' => 'BusinessType',
        'source'       => 'Source',
        'outBizId'     => 'OutBizId',
        'extendMap'    => 'ExtendMap',
    ];

    public function validate()
    {
        Model::validateRequired('adjustType', $this->adjustType, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('outBizId', $this->outBizId, true);
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
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->extendMap) {
            $res['ExtendMap'] = $this->extendMap;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['ExtendMap'])) {
            $model->extendMap = $map['ExtendMap'];
        }

        return $model;
    }
}
