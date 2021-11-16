<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleRequest\routeChildRules\conditions;
use AlibabaCloud\Tea\Model;

class routeChildRules extends Model
{
    /**
     * @description 子规则ID 不填表示新增
     *
     * @var int
     */
    public $childRouteRuleId;

    /**
     * @description 条件
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description true  删除子规则  false编辑子规则
     *
     * @var bool
     */
    public $isValidChildRule;

    /**
     * @description 监控源ID
     *
     * @var int
     */
    public $monitorSourceId;
    protected $_name = [
        'childRouteRuleId' => 'childRouteRuleId',
        'conditions'       => 'conditions',
        'isValidChildRule' => 'isValidChildRule',
        'monitorSourceId'  => 'monitorSourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childRouteRuleId) {
            $res['childRouteRuleId'] = $this->childRouteRuleId;
        }
        if (null !== $this->conditions) {
            $res['conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isValidChildRule) {
            $res['isValidChildRule'] = $this->isValidChildRule;
        }
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeChildRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['childRouteRuleId'])) {
            $model->childRouteRuleId = $map['childRouteRuleId'];
        }
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['isValidChildRule'])) {
            $model->isValidChildRule = $map['isValidChildRule'];
        }
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }

        return $model;
    }
}
