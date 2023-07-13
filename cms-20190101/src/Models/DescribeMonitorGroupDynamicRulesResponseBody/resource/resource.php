<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource\resource\filters;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The type of the cloud service to which the dynamic rule belongs. Valid values:
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
     * @description The filtering condition. Valid values:
     *
     *   and: queries the instances that meet all alert rules
     *   or: queries the instances that meet any alert rule
     *
     * @example and
     *
     * @var string
     */
    public $filterRelation;

    /**
     * @description The dynamic rules of the application group.
     *
     * @var filters
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
            $res['Filters'] = null !== $this->filters ? $this->filters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
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
            $model->filters = filters::fromMap($map['Filters']);
        }

        return $model;
    }
}
