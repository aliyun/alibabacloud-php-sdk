<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointResponseBody\data\elasticityPolicy\dynamicPolicy\policies;

use AlibabaCloud\Dara\Model;

class timePoints extends Model
{
    /**
     * @var int
     */
    public $maxInstances;

    /**
     * @var int
     */
    public $minInstances;

    /**
     * @var int[]
     */
    public $monthDays;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int[]
     */
    public $weekdays;
    protected $_name = [
        'maxInstances' => 'maxInstances',
        'minInstances' => 'minInstances',
        'monthDays' => 'monthDays',
        'time' => 'time',
        'weekdays' => 'weekdays',
    ];

    public function validate()
    {
        if (\is_array($this->monthDays)) {
            Model::validateArray($this->monthDays);
        }
        if (\is_array($this->weekdays)) {
            Model::validateArray($this->weekdays);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxInstances) {
            $res['maxInstances'] = $this->maxInstances;
        }

        if (null !== $this->minInstances) {
            $res['minInstances'] = $this->minInstances;
        }

        if (null !== $this->monthDays) {
            if (\is_array($this->monthDays)) {
                $res['monthDays'] = [];
                $n1 = 0;
                foreach ($this->monthDays as $item1) {
                    $res['monthDays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->weekdays) {
            if (\is_array($this->weekdays)) {
                $res['weekdays'] = [];
                $n1 = 0;
                foreach ($this->weekdays as $item1) {
                    $res['weekdays'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['maxInstances'])) {
            $model->maxInstances = $map['maxInstances'];
        }

        if (isset($map['minInstances'])) {
            $model->minInstances = $map['minInstances'];
        }

        if (isset($map['monthDays'])) {
            if (!empty($map['monthDays'])) {
                $model->monthDays = [];
                $n1 = 0;
                foreach ($map['monthDays'] as $item1) {
                    $model->monthDays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['weekdays'])) {
            if (!empty($map['weekdays'])) {
                $model->weekdays = [];
                $n1 = 0;
                foreach ($map['weekdays'] as $item1) {
                    $model->weekdays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
