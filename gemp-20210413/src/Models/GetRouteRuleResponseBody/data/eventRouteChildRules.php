<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponseBody\data\eventRouteChildRules\conditions;
use AlibabaCloud\Tea\Model;

class eventRouteChildRules extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $childConditionRelation;

    /**
     * @example 1000
     *
     * @var int
     */
    public $childRouteRuleId;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @example false
     *
     * @var bool
     */
    public $isValidChildRule;

    /**
     * @example 1
     *
     * @var int
     */
    public $monitorIntegrationConfigId;

    /**
     * @example 1
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @example zabbix
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @example 1800
     *
     * @var int
     */
    public $parentRuleId;

    /**
     * @var string
     */
    public $problemLevel;
    protected $_name = [
        'childConditionRelation'     => 'childConditionRelation',
        'childRouteRuleId'           => 'childRouteRuleId',
        'conditions'                 => 'conditions',
        'isValidChildRule'           => 'isValidChildRule',
        'monitorIntegrationConfigId' => 'monitorIntegrationConfigId',
        'monitorSourceId'            => 'monitorSourceId',
        'monitorSourceName'          => 'monitorSourceName',
        'parentRuleId'               => 'parentRuleId',
        'problemLevel'               => 'problemLevel',
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
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
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
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }

        return $model;
    }
}
