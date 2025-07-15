<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordUsageDataResponseBody\recordUsageData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRecordUsageDataResponseBody extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2021-05-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The recording data that was collected for each interval.
     *
     * @var recordUsageData
     */
    public $recordUsageData;

    /**
     * @description The request ID.
     *
     * @example 4B460F8B-993C-4F48-B98A-910811DEBFEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2021-05-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'recordUsageData' => 'RecordUsageData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->recordUsageData) {
            $res['RecordUsageData'] = null !== $this->recordUsageData ? $this->recordUsageData->toMap() : null;
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
     * @return DescribeLiveDomainRecordUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RecordUsageData'])) {
            $model->recordUsageData = recordUsageData::fromMap($map['RecordUsageData']);
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
