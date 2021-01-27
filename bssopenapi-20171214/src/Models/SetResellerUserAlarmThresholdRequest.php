<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserAlarmThresholdRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var string
     */
    public $alarmThresholds;
    protected $_name = [
        'ownerId'         => 'OwnerId',
        'alarmType'       => 'AlarmType',
        'alarmThresholds' => 'AlarmThresholds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->alarmThresholds) {
            $res['AlarmThresholds'] = $this->alarmThresholds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResellerUserAlarmThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['AlarmThresholds'])) {
            $model->alarmThresholds = $map['AlarmThresholds'];
        }

        return $model;
    }
}
