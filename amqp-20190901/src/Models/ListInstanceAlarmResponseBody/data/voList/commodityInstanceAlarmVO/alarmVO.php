<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList\commodityInstanceAlarmVO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList\commodityInstanceAlarmVO\alarmVO\alarmDetails;

class alarmVO extends Model
{
    /**
     * @var int
     */
    public $alarmCount;

    /**
     * @var alarmDetails
     */
    public $alarmDetails;

    /**
     * @var bool
     */
    public $hasConfigAlarm;
    protected $_name = [
        'alarmCount' => 'AlarmCount',
        'alarmDetails' => 'AlarmDetails',
        'hasConfigAlarm' => 'HasConfigAlarm',
    ];

    public function validate()
    {
        if (null !== $this->alarmDetails) {
            $this->alarmDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }

        if (null !== $this->alarmDetails) {
            $res['AlarmDetails'] = null !== $this->alarmDetails ? $this->alarmDetails->toArray($noStream) : $this->alarmDetails;
        }

        if (null !== $this->hasConfigAlarm) {
            $res['HasConfigAlarm'] = $this->hasConfigAlarm;
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
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }

        if (isset($map['AlarmDetails'])) {
            $model->alarmDetails = alarmDetails::fromMap($map['AlarmDetails']);
        }

        if (isset($map['HasConfigAlarm'])) {
            $model->hasConfigAlarm = $map['HasConfigAlarm'];
        }

        return $model;
    }
}
