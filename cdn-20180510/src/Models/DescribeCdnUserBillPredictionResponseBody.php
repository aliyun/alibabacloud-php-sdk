<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionResponseBody\billPredictionData;
use AlibabaCloud\Tea\Model;

class DescribeCdnUserBillPredictionResponseBody extends Model
{
    /**
     * @var billPredictionData
     */
    public $billPredictionData;

    /**
     * @example month_95_overseas
     *
     * @var string
     */
    public $billType;

    /**
     * @example 2018-10-25T10:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example C370DAF1-C838-4288-A1A0-9A87633D248E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2018-09-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'billPredictionData' => 'BillPredictionData',
        'billType'           => 'BillType',
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billPredictionData) {
            $res['BillPredictionData'] = null !== $this->billPredictionData ? $this->billPredictionData->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeCdnUserBillPredictionResponseBody
     */
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
