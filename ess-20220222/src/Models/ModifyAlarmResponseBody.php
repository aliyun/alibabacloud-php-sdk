<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ModifyAlarmResponseBody extends Model
{
    /**
     * @description The ID of the event-triggered task.
     *
     * @example asg-bp1hvbnmkl10vll5****_83948190-acdd-483f-98f7-b77f4778****
     *
     * @var string
     */
    public $alarmTaskId;

    /**
     * @description The ID of the request.
     *
     * @example BACACF83-7070-4953-A8FD-D81F89F1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alarmTaskId' => 'AlarmTaskId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmTaskId) {
            $res['AlarmTaskId'] = $this->alarmTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAlarmResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
