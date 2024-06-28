<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserAlarmThresholdRequest extends Model
{
    /**
     * @example [{\\"denominator\\":100,\\"numerator\\":30,\\"thresholdType\\":1}]
     *
     * @var string
     */
    public $alarmThresholds;

    /**
     * @description This parameter is required.
     *
     * @example quota_low_balance
     *
     * @var string
     */
    public $alarmType;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'alarmThresholds' => 'AlarmThresholds',
        'alarmType'       => 'AlarmType',
        'ownerId'         => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmThresholds) {
            $res['AlarmThresholds'] = $this->alarmThresholds;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['AlarmThresholds'])) {
            $model->alarmThresholds = $map['AlarmThresholds'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
