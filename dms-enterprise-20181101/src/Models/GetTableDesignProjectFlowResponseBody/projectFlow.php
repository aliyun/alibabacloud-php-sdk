<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponseBody\projectFlow\flowNodeArray;
use AlibabaCloud\Tea\Model;

class projectFlow extends Model
{
    /**
     * @example 2
     *
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
     * @example mysql default
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'currentPosition' => 'CurrentPosition',
        'flowNodeArray'   => 'FlowNodeArray',
        'ruleComment'     => 'RuleComment',
        'ruleName'        => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPosition) {
            $res['CurrentPosition'] = $this->currentPosition;
        }
        if (null !== $this->flowNodeArray) {
            $res['FlowNodeArray'] = [];
            if (null !== $this->flowNodeArray && \is_array($this->flowNodeArray)) {
                $n = 0;
                foreach ($this->flowNodeArray as $item) {
                    $res['FlowNodeArray'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return projectFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPosition'])) {
            $model->currentPosition = $map['CurrentPosition'];
        }
        if (isset($map['FlowNodeArray'])) {
            if (!empty($map['FlowNodeArray'])) {
                $model->flowNodeArray = [];
                $n                    = 0;
                foreach ($map['FlowNodeArray'] as $item) {
                    $model->flowNodeArray[$n++] = null !== $item ? flowNodeArray::fromMap($item) : $item;
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
