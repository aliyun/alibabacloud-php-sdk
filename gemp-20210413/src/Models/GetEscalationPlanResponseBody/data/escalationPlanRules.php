<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules\escalationPlanConditions;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules\escalationPlanStrategies;
use AlibabaCloud\Tea\Model;

class escalationPlanRules extends Model
{
    /**
     * @description 升级计划条件
     *
     * @var escalationPlanConditions[]
     */
    public $escalationPlanConditions;

    /**
     * @description 升级计划id
     *
     * @var int
     */
    public $escalationPlanRuleId;

    /**
     * @description 升级计划策略
     *
     * @var escalationPlanStrategies[]
     */
    public $escalationPlanStrategies;
    protected $_name = [
        'escalationPlanConditions' => 'escalationPlanConditions',
        'escalationPlanRuleId'     => 'escalationPlanRuleId',
        'escalationPlanStrategies' => 'escalationPlanStrategies',
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
        if (null !== $this->escalationPlanRuleId) {
            $res['escalationPlanRuleId'] = $this->escalationPlanRuleId;
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
        if (isset($map['escalationPlanRuleId'])) {
            $model->escalationPlanRuleId = $map['escalationPlanRuleId'];
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

        return $model;
    }
}
