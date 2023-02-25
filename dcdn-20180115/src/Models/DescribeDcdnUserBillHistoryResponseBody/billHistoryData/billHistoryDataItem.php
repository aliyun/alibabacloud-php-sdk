<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem\billingData;
use AlibabaCloud\Tea\Model;

class billHistoryDataItem extends Model
{
    /**
     * @description The start time of the billing cycle.
     *
     * @example 2018-09-30T17:00:00Z
     *
     * @var string
     */
    public $billTime;

    /**
     * @description The billing method.
     *
     * @example month_4th_day_bandwidth
     *
     * @var string
     */
    public $billType;

    /**
     * @description The billing data.
     *
     * @var billingData
     */
    public $billingData;

    /**
     * @description The dimension.
     *
     * @example vas
     *
     * @var string
     */
    public $dimension;
    protected $_name = [
        'billTime'    => 'BillTime',
        'billType'    => 'BillType',
        'billingData' => 'BillingData',
        'dimension'   => 'Dimension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billTime) {
            $res['BillTime'] = $this->billTime;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->billingData) {
            $res['BillingData'] = null !== $this->billingData ? $this->billingData->toMap() : null;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billHistoryDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillTime'])) {
            $model->billTime = $map['BillTime'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['BillingData'])) {
            $model->billingData = billingData::fromMap($map['BillingData']);
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        return $model;
    }
}
