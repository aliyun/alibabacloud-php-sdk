<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class notificationSwitch extends Model
{
    /**
     * @example 2021-01-01 00:01:00
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @example Temporarily Closed
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'expiryTime' => 'ExpiryTime',
        'reason'     => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationSwitch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
