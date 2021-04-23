<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataResponseBody\timeShiftData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainTimeShiftDataResponseBody extends Model
{
    /**
     * @var timeShiftData
     */
    public $timeShiftData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'timeShiftData' => 'TimeShiftData',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeShiftData) {
            $res['TimeShiftData'] = null !== $this->timeShiftData ? $this->timeShiftData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['TimeShiftData'])) {
            $model->timeShiftData = timeShiftData::fromMap($map['TimeShiftData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
