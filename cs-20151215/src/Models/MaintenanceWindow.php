<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class MaintenanceWindow extends Model
{
    /**
     * @description 维护时长。取值范围1～24，单位为小时。 默认值：3h。
     *
     * @var string
     */
    public $duration;

    /**
     * @description 是否开启维护窗口。默认值false。
     *
     * @var bool
     */
    public $enable;

    /**
     * @description 维护起始时间。Golang标准时间格式"15:04:05Z"。
     *
     * @var string
     */
    public $maintenanceTime;

    /**
     * @description 维护周期。取值范围为:Monday~Sunday，多个值用逗号分隔。 默认值：Thursday。
     *
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
