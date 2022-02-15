<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleRequest\routeChildRules\conditions;
use AlibabaCloud\Tea\Model;

class routeChildRules extends Model
{
    /**
     * @description 0-与，1-或
     *
     * @var int
     */
    public $childConditionRelation;

    /**
     * @description 条件
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description 监控源ID
     *
     * @var int
     */
    public $monitorSourceId;
    protected $_name = [
        'childConditionRelation' => 'childConditionRelation',
        'conditions'             => 'conditions',
        'monitorSourceId'        => 'monitorSourceId',
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
        if (null !== $this->conditions) {
            $res['conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['childConditionRelation'])) {
            $model->childConditionRelation = $map['childConditionRelation'];
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
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }

        return $model;
    }
}
