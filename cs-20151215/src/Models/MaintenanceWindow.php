<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\MaintenanceWindow\exclusions;

class MaintenanceWindow extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var exclusions[]
     */
    public $exclusions;

    /**
     * @var string
     */
    public $maintenanceTime;

    /**
     * @var string
     */
    public $recurrence;

    /**
     * @var string
     */
    public $weeklyPeriod;
    protected $_name = [
        'duration' => 'duration',
        'enable' => 'enable',
        'exclusions' => 'exclusions',
        'maintenanceTime' => 'maintenance_time',
        'recurrence' => 'recurrence',
        'weeklyPeriod' => 'weekly_period',
    ];

    public function validate()
    {
        if (\is_array($this->exclusions)) {
            Model::validateArray($this->exclusions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->exclusions) {
            if (\is_array($this->exclusions)) {
                $res['exclusions'] = [];
                $n1 = 0;
                foreach ($this->exclusions as $item1) {
                    $res['exclusions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maintenanceTime) {
            $res['maintenance_time'] = $this->maintenanceTime;
        }

        if (null !== $this->recurrence) {
            $res['recurrence'] = $this->recurrence;
        }

        if (null !== $this->weeklyPeriod) {
            $res['weekly_period'] = $this->weeklyPeriod;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['exclusions'])) {
            if (!empty($map['exclusions'])) {
                $model->exclusions = [];
                $n1 = 0;
                foreach ($map['exclusions'] as $item1) {
                    $model->exclusions[$n1] = exclusions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['maintenance_time'])) {
            $model->maintenanceTime = $map['maintenance_time'];
        }

        if (isset($map['recurrence'])) {
            $model->recurrence = $map['recurrence'];
        }

        if (isset($map['weekly_period'])) {
            $model->weeklyPeriod = $map['weekly_period'];
        }

        return $model;
    }
}
