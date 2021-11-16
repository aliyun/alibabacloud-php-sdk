<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest\escalationPlanRules\escalationPlanConditions;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest\escalationPlanRules\escalationPlanStrategies;
use AlibabaCloud\Tea\Model;

class escalationPlanRules extends Model
{
    /**
     * @description 升级计划条件列表
     *
     * @var escalationPlanConditions[]
     */
    public $escalationPlanConditions;

    /**
     * @description 升级策略列表
     *
     * @var escalationPlanStrategies[]
     */
    public $escalationPlanStrategies;

    /**
     * @description UN_ACKNOWLEDGE 未响应 UN_FINISH 未完结
     *
     * @var string
     */
    public $escalationPlanType;

    /**
     * @description 主键
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'escalationPlanConditions' => 'escalationPlanConditions',
        'escalationPlanStrategies' => 'escalationPlanStrategies',
        'escalationPlanType'       => 'escalationPlanType',
        'id'                       => 'id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanConditions) {
            $res['escalationPlanConditions'] = [];
            if (null !== $this->escalationPlanConditions && \is_array($this->escalationPlanConditions)) {
                $n = 0;
                foreach ($this->escalationPlanConditions as $item) {
                    $res['escalationPlanConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->escalationPlanStrategies) {
            $res['escalationPlanStrategies'] = [];
            if (null !== $this->escalationPlanStrategies && \is_array($this->escalationPlanStrategies)) {
                $n = 0;
                foreach ($this->escalationPlanStrategies as $item) {
                    $res['escalationPlanStrategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->escalationPlanType) {
            $res['escalationPlanType'] = $this->escalationPlanType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationPlanRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationPlanConditions'])) {
            if (!empty($map['escalationPlanConditions'])) {
                $model->escalationPlanConditions = [];
                $n                               = 0;
                foreach ($map['escalationPlanConditions'] as $item) {
                    $model->escalationPlanConditions[$n++] = null !== $item ? escalationPlanConditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['escalationPlanStrategies'])) {
            if (!empty($map['escalationPlanStrategies'])) {
                $model->escalationPlanStrategies = [];
                $n                               = 0;
                foreach ($map['escalationPlanStrategies'] as $item) {
                    $model->escalationPlanStrategies[$n++] = null !== $item ? escalationPlanStrategies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['escalationPlanType'])) {
            $model->escalationPlanType = $map['escalationPlanType'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
