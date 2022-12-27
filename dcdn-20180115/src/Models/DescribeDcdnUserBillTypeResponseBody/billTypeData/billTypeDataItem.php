<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponseBody\billTypeData;

use AlibabaCloud\Tea\Model;

class billTypeDataItem extends Model
{
    /**
     * @example month_avg_day_bandwidth_overseas
     *
     * @var string
     */
    public $billType;

    /**
     * @example month
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @example flow
     *
     * @var string
     */
    public $dimension;

    /**
     * @example 2018-10-31T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example dcdn
     *
     * @var string
     */
    public $product;

    /**
     * @example 2018-10-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'billType'     => 'BillType',
        'billingCycle' => 'BillingCycle',
        'dimension'    => 'Dimension',
        'endTime'      => 'EndTime',
        'product'      => 'Product',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return billTypeDataItem
     */
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
