<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveProducerUsageDataResponseBody\billProducerData;
use AlibabaCloud\Tea\Model;

class DescribeLiveProducerUsageDataResponseBody extends Model
{
    /**
     * @description The production studio usage data.
     *
     * @var billProducerData
     */
    public $billProducerData;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2018-09-30T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the request.
     *
     * @example C370DAF1-C838-4288-A1A0-9A87633D248E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start of the time range for which the data was queried.
     *
     * @example 2018-10-31T15:59:59Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'billProducerData' => 'BillProducerData',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billProducerData) {
            $res['BillProducerData'] = null !== $this->billProducerData ? $this->billProducerData->toMap() : null;
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
     * @return DescribeLiveProducerUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillProducerData'])) {
            $model->billProducerData = billProducerData::fromMap($map['BillProducerData']);
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
