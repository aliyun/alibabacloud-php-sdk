<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetScheduleWorkerResponseBody\scheduleWorker;
use AlibabaCloud\Tea\Model;

class GetScheduleWorkerResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scheduleWorker
     */
    public $scheduleWorker;
    protected $_name = [
        'requestId'      => 'RequestId',
        'scheduleWorker' => 'ScheduleWorker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleWorker) {
            $res['ScheduleWorker'] = null !== $this->scheduleWorker ? $this->scheduleWorker->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScheduleWorkerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleWorker'])) {
            $model->scheduleWorker = scheduleWorker::fromMap($map['ScheduleWorker']);
        }

        return $model;
    }
}
