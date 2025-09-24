<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class SetResellerUserAlarmThresholdRequest extends Model
{
    /**
     * @var string
     */
    public $alarmThresholds;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'alarmThresholds' => 'AlarmThresholds',
        'alarmType' => 'AlarmType',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
