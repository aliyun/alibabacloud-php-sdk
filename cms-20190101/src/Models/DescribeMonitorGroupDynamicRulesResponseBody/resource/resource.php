<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource\resource\filters;

class resource extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $filterRelation;

    /**
     * @var filters
     */
    public $filters;
    protected $_name = [
        'category' => 'Category',
        'filterRelation' => 'FilterRelation',
        'filters' => 'Filters',
    ];

    public function validate()
    {
        if (null !== $this->filters) {
            $this->filters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->filterRelation) {
            $res['FilterRelation'] = $this->filterRelation;
        }

        if (null !== $this->filters) {
            $res['Filters'] = null !== $this->filters ? $this->filters->toArray($noStream) : $this->filters;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
