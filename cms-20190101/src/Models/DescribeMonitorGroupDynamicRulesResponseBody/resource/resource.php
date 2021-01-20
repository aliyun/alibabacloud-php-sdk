<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource\resource\filters;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $filterRelation;

    /**
     * @var filters
     */
    public $filters;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'filterRelation' => 'FilterRelation',
        'filters'        => 'Filters',
        'category'       => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterRelation) {
            $res['FilterRelation'] = $this->filterRelation;
        }
        if (null !== $this->filters) {
            $res['Filters'] = null !== $this->filters ? $this->filters->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (isset($map['FilterRelation'])) {
            $model->filterRelation = $map['FilterRelation'];
        }
        if (isset($map['Filters'])) {
            $model->filters = filters::fromMap($map['Filters']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
