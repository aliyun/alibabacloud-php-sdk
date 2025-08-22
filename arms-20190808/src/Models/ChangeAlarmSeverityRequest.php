<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ChangeAlarmSeverityRequest extends Model
{
    /**
     * @var int
     */
    public $alarmId;

    /**
     * @var int
     */
    public $handlerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'alarmId' => 'AlarmId',
        'handlerId' => 'HandlerId',
        'regionId' => 'RegionId',
        'severity' => 'Severity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
