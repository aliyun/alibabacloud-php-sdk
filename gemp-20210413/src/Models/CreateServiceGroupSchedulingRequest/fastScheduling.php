<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fastScheduling\schedulingUsers;
use AlibabaCloud\Tea\Model;

class fastScheduling extends Model
{
    /**
     * @example FAST_CHOICE
     *
     * @var string
     */
    public $dutyPlan;

    /**
     * @var schedulingUsers[]
     */
    public $schedulingUsers;

    /**
     * @example 12
     *
     * @var int
     */
    public $singleDuration;

    /**
     * @example DAY
     *
     * @var string
     */
    public $singleDurationUnit;
    protected $_name = [
        'dutyPlan'           => 'dutyPlan',
        'schedulingUsers'    => 'schedulingUsers',
        'singleDuration'     => 'singleDuration',
        'singleDurationUnit' => 'singleDurationUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dutyPlan) {
            $res['dutyPlan'] = $this->dutyPlan;
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
        if (null !== $this->singleDuration) {
            $res['singleDuration'] = $this->singleDuration;
        }
        if (null !== $this->singleDurationUnit) {
            $res['singleDurationUnit'] = $this->singleDurationUnit;
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
        if (isset($map['dutyPlan'])) {
            $model->dutyPlan = $map['dutyPlan'];
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
        if (isset($map['singleDuration'])) {
            $model->singleDuration = $map['singleDuration'];
        }
        if (isset($map['singleDurationUnit'])) {
            $model->singleDurationUnit = $map['singleDurationUnit'];
        }

        return $model;
    }
}
