<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\compositeExpression\expressionList;

class compositeExpression extends Model
{
    /**
     * @var expressionList[]
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
            if (!empty($map['ExpressionList'])) {
                $model->expressionList = [];
                $n1 = 0;
                foreach ($map['ExpressionList'] as $item1) {
                    $model->expressionList[$n1] = expressionList::fromMap($item1);
                    ++$n1;
                }
            }
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
