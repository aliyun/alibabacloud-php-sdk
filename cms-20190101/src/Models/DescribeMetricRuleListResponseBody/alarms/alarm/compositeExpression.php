<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\compositeExpression\expressionList;

class compositeExpression extends Model
{
    /**
     * @var expressionList
     */
    public $expressionList;

    /**
     * @var string
     */
    public $expressionListJoin;

    /**
     * @var string
     */
    public $expressionRaw;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'expressionList' => 'ExpressionList',
        'expressionListJoin' => 'ExpressionListJoin',
        'expressionRaw' => 'ExpressionRaw',
        'level' => 'Level',
        'times' => 'Times',
    ];

    public function validate()
    {
        if (null !== $this->expressionList) {
            $this->expressionList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressionList) {
            $res['ExpressionList'] = null !== $this->expressionList ? $this->expressionList->toArray($noStream) : $this->expressionList;
        }

        if (null !== $this->expressionListJoin) {
            $res['ExpressionListJoin'] = $this->expressionListJoin;
        }

        if (null !== $this->expressionRaw) {
            $res['ExpressionRaw'] = $this->expressionRaw;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
            $model->expressionList = expressionList::fromMap($map['ExpressionList']);
        }

        if (isset($map['ExpressionListJoin'])) {
            $model->expressionListJoin = $map['ExpressionListJoin'];
        }

        if (isset($map['ExpressionRaw'])) {
            $model->expressionRaw = $map['ExpressionRaw'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
