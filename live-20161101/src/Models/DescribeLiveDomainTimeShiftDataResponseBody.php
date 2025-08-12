<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataResponseBody\timeShiftData;

class DescribeLiveDomainTimeShiftDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeShiftData
     */
    public $timeShiftData;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeShiftData' => 'TimeShiftData',
    ];

    public function validate()
    {
        if (null !== $this->timeShiftData) {
            $this->timeShiftData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timeShiftData) {
            $res['TimeShiftData'] = null !== $this->timeShiftData ? $this->timeShiftData->toArray($noStream) : $this->timeShiftData;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TimeShiftData'])) {
            $model->timeShiftData = timeShiftData::fromMap($map['TimeShiftData']);
        }

        return $model;
    }
}
