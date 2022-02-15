<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody\data\eventRouteChildRules\conditions;
use AlibabaCloud\Tea\Model;

class eventRouteChildRules extends Model
{
    /**
     * @description 子条件计算关系，0-与，1-或
     *
     * @var int
     */
    public $childConditionRelation;

    /**
     * @description 子规则ID
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
     * @description 是否有效得规则true有效 false无效
     *
     * @var bool
     */
    public $isValidChildRule;

    /**
     * @description 集成配置ID
     *
     * @var int
     */
    public $monitorIntegrationConfigId;

    /**
     * @description 监控源ID
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @description 监控源名称
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @description 规则ID
     *
     * @var int
     */
    public $parentRuleId;
    protected $_name = [
        'childConditionRelation'     => 'childConditionRelation',
        'childRouteRuleId'           => 'childRouteRuleId',
        'conditions'                 => 'conditions',
        'isValidChildRule'           => 'isValidChildRule',
        'monitorIntegrationConfigId' => 'monitorIntegrationConfigId',
        'monitorSourceId'            => 'monitorSourceId',
        'monitorSourceName'          => 'monitorSourceName',
        'parentRuleId'               => 'parentRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childConditionRelation) {
            $res['childConditionRelation'] = $this->childConditionRelation;
        }
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
        if (null !== $this->monitorIntegrationConfigId) {
            $res['monitorIntegrationConfigId'] = $this->monitorIntegrationConfigId;
        }
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->parentRuleId) {
            $res['parentRuleId'] = $this->parentRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventRouteChildRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['childConditionRelation'])) {
            $model->childConditionRelation = $map['childConditionRelation'];
        }
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
        if (isset($map['monitorIntegrationConfigId'])) {
            $model->monitorIntegrationConfigId = $map['monitorIntegrationConfigId'];
        }
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['parentRuleId'])) {
            $model->parentRuleId = $map['parentRuleId'];
        }

        return $model;
    }
}
