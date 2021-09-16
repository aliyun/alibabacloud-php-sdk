<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fastScheduling\schedulingUsers;
use AlibabaCloud\Tea\Model;

class fastScheduling extends Model
{
    /**
     * @description 每人排班时长
     *
     * @var int
     */
    public $singleDuration;

    /**
     * @description 值班方案 dutyPlan FAST_CHOICE 快速选择   CUSTOM  自定义
     *
     * @var string
     */
    public $dutyPlan;

    /**
     * @description 每人排班时常单位 HOUR 小时 DAY  天
     *
     * @var string
     */
    public $singleDurationUnit;

    /**
     * @description 快速轮班用户
     *
     * @var schedulingUsers[]
     */
    public $schedulingUsers;
    protected $_name = [
        'singleDuration'     => 'singleDuration',
        'dutyPlan'           => 'dutyPlan',
        'singleDurationUnit' => 'singleDurationUnit',
        'schedulingUsers'    => 'schedulingUsers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->singleDuration) {
            $res['singleDuration'] = $this->singleDuration;
        }
        if (null !== $this->dutyPlan) {
            $res['dutyPlan'] = $this->dutyPlan;
        }
        if (null !== $this->singleDurationUnit) {
            $res['singleDurationUnit'] = $this->singleDurationUnit;
        }
        if (null !== $this->schedulingUsers) {
            $res['schedulingUsers'] = [];
            if (null !== $this->schedulingUsers && \is_array($this->schedulingUsers)) {
                $n = 0;
                foreach ($this->schedulingUsers as $item) {
                    $res['schedulingUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fastScheduling
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['singleDuration'])) {
            $model->singleDuration = $map['singleDuration'];
        }
        if (isset($map['dutyPlan'])) {
            $model->dutyPlan = $map['dutyPlan'];
        }
        if (isset($map['singleDurationUnit'])) {
            $model->singleDurationUnit = $map['singleDurationUnit'];
        }
        if (isset($map['schedulingUsers'])) {
            if (!empty($map['schedulingUsers'])) {
                $model->schedulingUsers = [];
                $n                      = 0;
                foreach ($map['schedulingUsers'] as $item) {
                    $model->schedulingUsers[$n++] = null !== $item ? schedulingUsers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
