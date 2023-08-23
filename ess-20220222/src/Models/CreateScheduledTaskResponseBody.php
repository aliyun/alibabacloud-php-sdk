<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledTaskResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example edRtShc57WGXdt8TlPbr****
     *
     * @var string
     */
    public $scheduledTaskId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'scheduledTaskId' => 'ScheduledTaskId',
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
        if (null !== $this->scheduledTaskId) {
            $res['ScheduledTaskId'] = $this->scheduledTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduledTaskId'])) {
            $model->scheduledTaskId = $map['ScheduledTaskId'];
        }

        return $model;
    }
}
