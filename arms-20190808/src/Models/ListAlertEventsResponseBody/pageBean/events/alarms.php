<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody\pageBean\events;

use AlibabaCloud\Tea\Model;

class alarms extends Model
{
    /**
     * @description The ID of the alert.
     *
     * @example 77444
     *
     * @var int
     */
    public $alarmId;

    /**
     * @description The name of the alert.
     *
     * @example Test-triggered alert
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description The time when the alert was created.
     *
     * @example 2021-12-20 07:10:18
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The status of the alert. Valid values:
     *
     *   0: The alert is pending.
     *   1: The alert is being handled.
     *   2: The alert is cleared.
     *
     * @example 0
     *
     * @var int
     */
    public $state;
    protected $_name = [
        'alarmId'    => 'AlarmId',
        'alarmName'  => 'AlarmName',
        'createTime' => 'CreateTime',
        'state'      => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
