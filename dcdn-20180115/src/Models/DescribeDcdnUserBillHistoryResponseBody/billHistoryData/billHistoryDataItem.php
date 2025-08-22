<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData\billHistoryDataItem\billingData;

class billHistoryDataItem extends Model
{
    /**
     * @var string
     */
    public $billTime;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var billingData
     */
    public $billingData;

    /**
     * @var string
     */
    public $dimension;
    protected $_name = [
        'billTime' => 'BillTime',
        'billType' => 'BillType',
        'billingData' => 'BillingData',
        'dimension' => 'Dimension',
    ];

    public function validate()
    {
        if (null !== $this->billingData) {
            $this->billingData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billTime) {
            $res['BillTime'] = $this->billTime;
        }

        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }

        if (null !== $this->billingData) {
            $res['BillingData'] = null !== $this->billingData ? $this->billingData->toArray($noStream) : $this->billingData;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
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
