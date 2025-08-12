<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation\resource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation\resource\expressionList\expressionList;

class expressionList extends Model
{
    /**
     * @var expressionList[]
     */
    public $expressionList;
    protected $_name = [
        'expressionList' => 'ExpressionList',
    ];

    public function validate()
    {
        if (\is_array($this->expressionList)) {
            Model::validateArray($this->expressionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressionList) {
            if (\is_array($this->expressionList)) {
                $res['ExpressionList'] = [];
                $n1 = 0;
                foreach ($this->expressionList as $item1) {
                    $res['ExpressionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExpressionList'])) {
            if (!empty($map['ExpressionList'])) {
                $model->expressionList = [];
                $n1 = 0;
                foreach ($map['ExpressionList'] as $item1) {
                    $model->expressionList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
