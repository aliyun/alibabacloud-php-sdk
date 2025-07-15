<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataResponseBody\timeShiftData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainTimeShiftDataResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 8AE1CB3A-6510-442E-A6B9-EF03D05B3E09
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time shifting usage data that was collected for each time interval.
     *
     * @var timeShiftData
     */
    public $timeShiftData;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeShiftData' => 'TimeShiftData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeShiftData) {
            $res['TimeShiftData'] = null !== $this->timeShiftData ? $this->timeShiftData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainTimeShiftDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeShiftData'])) {
            $model->timeShiftData = timeShiftData::fromMap($map['TimeShiftData']);
        }

        return $model;
    }
}
