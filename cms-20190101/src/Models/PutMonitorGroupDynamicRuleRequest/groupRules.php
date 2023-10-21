<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest\groupRules\filters;
use AlibabaCloud\Tea\Model;

class groupRules extends Model
{
    /**
     * @description The cloud service to which the alert rule is applied. Valid values of N: 1 to 3. Valid values:
     *
     *   ecs: Elastic Compute Service (ECS)
     *   rds: ApsaraDB RDS
     *   slb: Server Load Balancer (SLB)
     *
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The logical operator used between conditional expressions in the alert rule. Valid values of N: 1 to 3. Valid values:
     *
     *   and: The instances that meet all the conditional expressions are automatically added to the application group.
     *   or: The instances that meet one of the conditional expressions are automatically added to the application group.
     *
     * @example and
     *
     * @var string
     */
    public $filterRelation;

    /**
     * @description None.
     *
     * @var filters[]
     */
    public $filters;
    protected $_name = [
        'category'       => 'Category',
        'filterRelation' => 'FilterRelation',
        'filters'        => 'Filters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->filterRelation) {
            $res['FilterRelation'] = $this->filterRelation;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['FilterRelation'])) {
            $model->filterRelation = $map['FilterRelation'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
