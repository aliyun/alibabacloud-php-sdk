<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class GetMeteringSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $billPeriod;

    /**
     * @var string
     */
    public $billingItem;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $subAccountId;
    protected $_name = [
        'billPeriod' => 'billPeriod',
        'billingItem' => 'billingItem',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
        'subAccountId' => 'subAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billPeriod) {
            $res['billPeriod'] = $this->billPeriod;
        }

        if (null !== $this->billingItem) {
            $res['billingItem'] = $this->billingItem;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
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
        if (isset($map['billPeriod'])) {
            $model->billPeriod = $map['billPeriod'];
        }

        if (isset($map['billingItem'])) {
            $model->billingItem = $map['billingItem'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        return $model;
    }
}
