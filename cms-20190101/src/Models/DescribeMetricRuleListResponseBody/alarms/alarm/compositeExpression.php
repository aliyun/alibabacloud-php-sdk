<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\compositeExpression\expressionList;
use AlibabaCloud\Tea\Model;

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
        'expressionList'     => 'ExpressionList',
        'expressionListJoin' => 'ExpressionListJoin',
        'expressionRaw'      => 'ExpressionRaw',
        'level'              => 'Level',
        'times'              => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressionList) {
            $res['ExpressionList'] = null !== $this->expressionList ? $this->expressionList->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return compositeExpression
     */
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
