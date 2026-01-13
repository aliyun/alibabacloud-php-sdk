<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models\ListMeteringDailyDetailResult;

use AlibabaCloud\Dara\Model;

class meteringDailyDetailList extends Model
{
    /**
     * @var string
     */
    public $billDate;

    /**
     * @var string
     */
    public $billPeriod;

    /**
     * @var string
     */
    public $billingFunctionItem;

    /**
     * @var string
     */
    public $billingItem;

    /**
     * @var int
     */
    public $billingQps;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $ladderTypeCode;

    /**
     * @var string
     */
    public $subAccountId;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'billDate' => 'billDate',
        'billPeriod' => 'billPeriod',
        'billingFunctionItem' => 'billingFunctionItem',
        'billingItem' => 'billingItem',
        'billingQps' => 'billingQps',
        'failedCount' => 'failedCount',
        'ladderTypeCode' => 'ladderTypeCode',
        'subAccountId' => 'subAccountId',
        'successCount' => 'successCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billDate) {
            $res['billDate'] = $this->billDate;
        }

        if (null !== $this->billPeriod) {
            $res['billPeriod'] = $this->billPeriod;
        }

        if (null !== $this->billingFunctionItem) {
            $res['billingFunctionItem'] = $this->billingFunctionItem;
        }

        if (null !== $this->billingItem) {
            $res['billingItem'] = $this->billingItem;
        }

        if (null !== $this->billingQps) {
            $res['billingQps'] = $this->billingQps;
        }

        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->ladderTypeCode) {
            $res['ladderTypeCode'] = $this->ladderTypeCode;
        }

        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }

        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
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
        if (isset($map['billDate'])) {
            $model->billDate = $map['billDate'];
        }

        if (isset($map['billPeriod'])) {
            $model->billPeriod = $map['billPeriod'];
        }

        if (isset($map['billingFunctionItem'])) {
            $model->billingFunctionItem = $map['billingFunctionItem'];
        }

        if (isset($map['billingItem'])) {
            $model->billingItem = $map['billingItem'];
        }

        if (isset($map['billingQps'])) {
            $model->billingQps = $map['billingQps'];
        }

        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['ladderTypeCode'])) {
            $model->ladderTypeCode = $map['ladderTypeCode'];
        }

        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        return $model;
    }
}
