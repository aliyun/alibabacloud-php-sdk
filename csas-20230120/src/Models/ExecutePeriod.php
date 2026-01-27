<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ExecutePeriod\effectDay;
use AlibabaCloud\SDK\Csas\V20230120\Models\ExecutePeriod\effectTime;
use AlibabaCloud\SDK\Csas\V20230120\Models\ExecutePeriod\scheduleEffect;

class ExecutePeriod extends Model
{
    /**
     * @var effectDay
     */
    public $effectDay;

    /**
     * @var effectTime
     */
    public $effectTime;

    /**
     * @var scheduleEffect
     */
    public $scheduleEffect;

    /**
     * @var string
     */
    public $validType;
    protected $_name = [
        'effectDay' => 'EffectDay',
        'effectTime' => 'EffectTime',
        'scheduleEffect' => 'ScheduleEffect',
        'validType' => 'ValidType',
    ];

    public function validate()
    {
        if (null !== $this->effectDay) {
            $this->effectDay->validate();
        }
        if (null !== $this->effectTime) {
            $this->effectTime->validate();
        }
        if (null !== $this->scheduleEffect) {
            $this->scheduleEffect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectDay) {
            $res['EffectDay'] = null !== $this->effectDay ? $this->effectDay->toArray($noStream) : $this->effectDay;
        }

        if (null !== $this->effectTime) {
            $res['EffectTime'] = null !== $this->effectTime ? $this->effectTime->toArray($noStream) : $this->effectTime;
        }

        if (null !== $this->scheduleEffect) {
            $res['ScheduleEffect'] = null !== $this->scheduleEffect ? $this->scheduleEffect->toArray($noStream) : $this->scheduleEffect;
        }

        if (null !== $this->validType) {
            $res['ValidType'] = $this->validType;
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
        if (isset($map['EffectDay'])) {
            $model->effectDay = effectDay::fromMap($map['EffectDay']);
        }

        if (isset($map['EffectTime'])) {
            $model->effectTime = effectTime::fromMap($map['EffectTime']);
        }

        if (isset($map['ScheduleEffect'])) {
            $model->scheduleEffect = scheduleEffect::fromMap($map['ScheduleEffect']);
        }

        if (isset($map['ValidType'])) {
            $model->validType = $map['ValidType'];
        }

        return $model;
    }
}
