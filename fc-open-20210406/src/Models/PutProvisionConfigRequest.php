<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutProvisionConfigRequest extends Model
{
    /**
     * @description 当实例进入空闲状态时，是否继续分配CPU。
     *
     * @var bool
     */
    public $alwaysAllocateCPU;

    /**
     * @description 定时策略配置
     *
     * @var ScheduledActions[]
     */
    public $scheduledActions;

    /**
     * @description 预留的目标资源个数
     *
     * @var int
     */
    public $target;

    /**
     * @description 指标追踪伸缩策略配置
     *
     * @var TargetTrackingPolicies[]
     */
    public $targetTrackingPolicies;

    /**
     * @description 别名名称
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'alwaysAllocateCPU'      => 'alwaysAllocateCPU',
        'scheduledActions'       => 'scheduledActions',
        'target'                 => 'target',
        'targetTrackingPolicies' => 'targetTrackingPolicies',
        'qualifier'              => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alwaysAllocateCPU) {
            $res['alwaysAllocateCPU'] = $this->alwaysAllocateCPU;
        }
        if (null !== $this->scheduledActions) {
            $res['scheduledActions'] = [];
            if (null !== $this->scheduledActions && \is_array($this->scheduledActions)) {
                $n = 0;
                foreach ($this->scheduledActions as $item) {
                    $res['scheduledActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->targetTrackingPolicies) {
            $res['targetTrackingPolicies'] = [];
            if (null !== $this->targetTrackingPolicies && \is_array($this->targetTrackingPolicies)) {
                $n = 0;
                foreach ($this->targetTrackingPolicies as $item) {
                    $res['targetTrackingPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutProvisionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alwaysAllocateCPU'])) {
            $model->alwaysAllocateCPU = $map['alwaysAllocateCPU'];
        }
        if (isset($map['scheduledActions'])) {
            if (!empty($map['scheduledActions'])) {
                $model->scheduledActions = [];
                $n                       = 0;
                foreach ($map['scheduledActions'] as $item) {
                    $model->scheduledActions[$n++] = null !== $item ? ScheduledActions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['targetTrackingPolicies'])) {
            if (!empty($map['targetTrackingPolicies'])) {
                $model->targetTrackingPolicies = [];
                $n                             = 0;
                foreach ($map['targetTrackingPolicies'] as $item) {
                    $model->targetTrackingPolicies[$n++] = null !== $item ? TargetTrackingPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
