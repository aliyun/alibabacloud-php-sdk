<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation\resource;

use AlibabaCloud\Tea\Model;

class expressionList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation\resource\expressionList\expressionList[]
     */
    public $expressionList;
    protected $_name = [
        'expressionList' => 'ExpressionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressionList) {
            $res['ExpressionList'] = [];
            if (null !== $this->expressionList && \is_array($this->expressionList)) {
                $n = 0;
                foreach ($this->expressionList as $item) {
                    $res['ExpressionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expressionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressionList'])) {
            if (!empty($map['ExpressionList'])) {
                $model->expressionList = [];
                $n                     = 0;
                foreach ($map['ExpressionList'] as $item) {
                    $model->expressionList[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation\resource\expressionList\expressionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
