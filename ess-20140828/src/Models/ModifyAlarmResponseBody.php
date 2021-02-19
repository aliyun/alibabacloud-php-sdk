<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class ModifyAlarmResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $alarmTaskId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'alarmTaskId' => 'AlarmTaskId',
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
        if (null !== $this->alarmTaskId) {
            $res['AlarmTaskId'] = $this->alarmTaskId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }

        return $model;
    }
}
