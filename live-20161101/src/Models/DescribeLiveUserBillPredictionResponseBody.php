<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionResponseBody\billPredictionData;

class DescribeLiveUserBillPredictionResponseBody extends Model
{
    /**
     * @var billPredictionData
     */
    public $billPredictionData;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'billPredictionData' => 'BillPredictionData',
        'billType' => 'BillType',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->billPredictionData) {
            $this->billPredictionData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billPredictionData) {
            $res['BillPredictionData'] = null !== $this->billPredictionData ? $this->billPredictionData->toArray($noStream) : $this->billPredictionData;
        }

        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BillPredictionData'])) {
            $model->billPredictionData = billPredictionData::fromMap($map['BillPredictionData']);
        }

        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
