<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

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
    public $weeklyPeriod;
    protected $_name = [
        'duration'        => 'duration',
        'enable'          => 'enable',
        'maintenanceTime' => 'maintenance_time',
        'weeklyPeriod'    => 'weekly_period',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->weeklyPeriod) {
            $res['weekly_period'] = $this->weeklyPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaintenanceWindow
     */
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
        if (isset($map['weekly_period'])) {
            $model->weeklyPeriod = $map['weekly_period'];
        }

        return $model;
    }
}
