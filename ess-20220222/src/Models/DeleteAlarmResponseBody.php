<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlarmResponseBody extends Model
{
    /**
     * @description The ID of the event-triggered task.
     *
     * @example asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****
     *
     * @var string
     */
    public $alarmTaskId;

    /**
     * @description The ID of the request.
     *
     * @example 6EF9BFEE-FE07-4627-B8FB-14326FB9****
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
     * @return DeleteAlarmResponseBody
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
