<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models\MeteringSummaryResult;

use AlibabaCloud\Dara\Model;

class meteringSummaryList extends Model
{
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
    public $failCount;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'billingFunctionItem' => 'billingFunctionItem',
        'billingItem' => 'billingItem',
        'failCount' => 'failCount',
        'successCount' => 'successCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingFunctionItem) {
            $res['billingFunctionItem'] = $this->billingFunctionItem;
        }

        if (null !== $this->billingItem) {
            $res['billingItem'] = $this->billingItem;
        }

        if (null !== $this->failCount) {
            $res['failCount'] = $this->failCount;
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
        if (isset($map['billingFunctionItem'])) {
            $model->billingFunctionItem = $map['billingFunctionItem'];
        }

        if (isset($map['billingItem'])) {
            $model->billingItem = $map['billingItem'];
        }

        if (isset($map['failCount'])) {
            $model->failCount = $map['failCount'];
        }

        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        return $model;
    }
}
