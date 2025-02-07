<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

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
        'duration'        => 'duration',
        'enable'          => 'enable',
        'maintenanceTime' => 'maintenance_time',
        'recurrence'      => 'recurrence',
        'weeklyPeriod'    => 'weekly_period',
    ];

    public function validate()
    {
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
