<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ChangeAlarmSeverityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 155
     *
     * @var int
     */
    public $alarmId;

    /**
     * @example 2046076
     *
     * @var int
     */
    public $handlerId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example P1
     *
     * @var string
     */
    public $severity;
    protected $_name = [
        'alarmId'   => 'AlarmId',
        'handlerId' => 'HandlerId',
        'regionId'  => 'RegionId',
        'severity'  => 'Severity',
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
        if (null !== $this->handlerId) {
            $res['HandlerId'] = $this->handlerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeAlarmSeverityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['HandlerId'])) {
            $model->handlerId = $map['HandlerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
