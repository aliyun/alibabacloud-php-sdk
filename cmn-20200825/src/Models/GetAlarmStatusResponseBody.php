<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus;
use AlibabaCloud\Tea\Model;

class GetAlarmStatusResponseBody extends Model
{
    /**
     * @var alarmStatus
     */
    public $alarmStatus;

    /**
     * @example AC8F05E6-AFBB-4AAE-B75E-A6539A9BAAA8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alarmStatus' => 'AlarmStatus',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = null !== $this->alarmStatus ? $this->alarmStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlarmStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = alarmStatus::fromMap($map['AlarmStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
