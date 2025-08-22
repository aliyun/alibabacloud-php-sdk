<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponseBody\billTypeData;

use AlibabaCloud\Dara\Model;

class billTypeDataItem extends Model
{
    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'billType' => 'BillType',
        'billingCycle' => 'BillingCycle',
        'dimension' => 'Dimension',
        'endTime' => 'EndTime',
        'product' => 'Product',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }

        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }

        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
