<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponseBody\projectFlow\flowNodeArray;

class projectFlow extends Model
{
    /**
     * @var int
     */
    public $currentPosition;

    /**
     * @var flowNodeArray[]
     */
    public $flowNodeArray;

    /**
     * @var string
     */
    public $ruleComment;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'currentPosition' => 'CurrentPosition',
        'flowNodeArray' => 'FlowNodeArray',
        'ruleComment' => 'RuleComment',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->flowNodeArray)) {
            Model::validateArray($this->flowNodeArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPosition) {
            $res['CurrentPosition'] = $this->currentPosition;
        }

        if (null !== $this->flowNodeArray) {
            if (\is_array($this->flowNodeArray)) {
                $res['FlowNodeArray'] = [];
                $n1 = 0;
                foreach ($this->flowNodeArray as $item1) {
                    $res['FlowNodeArray'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleComment) {
            $res['RuleComment'] = $this->ruleComment;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['CurrentPosition'])) {
            $model->currentPosition = $map['CurrentPosition'];
        }

        if (isset($map['FlowNodeArray'])) {
            if (!empty($map['FlowNodeArray'])) {
                $model->flowNodeArray = [];
                $n1 = 0;
                foreach ($map['FlowNodeArray'] as $item1) {
                    $model->flowNodeArray[$n1] = flowNodeArray::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleComment'])) {
            $model->ruleComment = $map['RuleComment'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
