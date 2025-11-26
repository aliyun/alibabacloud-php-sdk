<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyUserAlarmConfigRequest;

use AlibabaCloud\Dara\Model;

class alarmConfig extends Model
{
    /**
     * @var string
     */
    public $alarmHour;

    /**
     * @var string
     */
    public $alarmNotify;

    /**
     * @var string
     */
    public $alarmPeriod;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var string
     */
    public $alarmValue;

    /**
     * @var string
     */
    public $alarmWeekDay;
    protected $_name = [
        'alarmHour' => 'AlarmHour',
        'alarmNotify' => 'AlarmNotify',
        'alarmPeriod' => 'AlarmPeriod',
        'alarmType' => 'AlarmType',
        'alarmValue' => 'AlarmValue',
        'alarmWeekDay' => 'AlarmWeekDay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmHour) {
            $res['AlarmHour'] = $this->alarmHour;
        }

        if (null !== $this->alarmNotify) {
            $res['AlarmNotify'] = $this->alarmNotify;
        }

        if (null !== $this->alarmPeriod) {
            $res['AlarmPeriod'] = $this->alarmPeriod;
        }

        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }

        if (null !== $this->alarmValue) {
            $res['AlarmValue'] = $this->alarmValue;
        }

        if (null !== $this->alarmWeekDay) {
            $res['AlarmWeekDay'] = $this->alarmWeekDay;
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
        if (isset($map['AlarmHour'])) {
            $model->alarmHour = $map['AlarmHour'];
        }

        if (isset($map['AlarmNotify'])) {
            $model->alarmNotify = $map['AlarmNotify'];
        }

        if (isset($map['AlarmPeriod'])) {
            $model->alarmPeriod = $map['AlarmPeriod'];
        }

        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }

        if (isset($map['AlarmValue'])) {
            $model->alarmValue = $map['AlarmValue'];
        }

        if (isset($map['AlarmWeekDay'])) {
            $model->alarmWeekDay = $map['AlarmWeekDay'];
        }

        return $model;
    }
}
