<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class TaskGraphFlow extends Model
{
    /**
     * @var int
     */
    public $flowRuleScoreType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var GraphFlowNode[]
     */
    public $nodes;
    /**
     * @var int
     */
    public $rid;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var string
     */
    public $showProperties;
    /**
     * @var bool
     */
    public $skipWhenFirstSessionNodeMiss;
    protected $_name = [
        'flowRuleScoreType'            => 'FlowRuleScoreType',
        'id'                           => 'Id',
        'nodes'                        => 'Nodes',
        'rid'                          => 'Rid',
        'ruleName'                     => 'RuleName',
        'showProperties'               => 'ShowProperties',
        'skipWhenFirstSessionNodeMiss' => 'SkipWhenFirstSessionNodeMiss',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowRuleScoreType) {
            $res['FlowRuleScoreType'] = $this->flowRuleScoreType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1           = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->showProperties) {
            $res['ShowProperties'] = $this->showProperties;
        }

        if (null !== $this->skipWhenFirstSessionNodeMiss) {
            $res['SkipWhenFirstSessionNodeMiss'] = $this->skipWhenFirstSessionNodeMiss;
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
        if (isset($map['FlowRuleScoreType'])) {
            $model->flowRuleScoreType = $map['FlowRuleScoreType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1           = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = GraphFlowNode::fromMap($item1);
                }
            }
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['ShowProperties'])) {
            $model->showProperties = $map['ShowProperties'];
        }

        if (isset($map['SkipWhenFirstSessionNodeMiss'])) {
            $model->skipWhenFirstSessionNodeMiss = $map['SkipWhenFirstSessionNodeMiss'];
        }

        return $model;
    }
}
