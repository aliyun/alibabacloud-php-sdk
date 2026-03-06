<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module\appServiceList;

use AlibabaCloud\Dara\Model;

class nodeList extends Model
{
    /**
     * @var mixed[]
     */
    public $children;

    /**
     * @var int
     */
    public $finalStepNo;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var bool
     */
    public $isContainerNode;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $operatorRole;

    /**
     * @var string
     */
    public $parentNodeId;

    /**
     * @var int
     */
    public $stepNo;
    protected $_name = [
        'children' => 'Children',
        'finalStepNo' => 'FinalStepNo',
        'finishTime' => 'FinishTime',
        'isContainerNode' => 'IsContainerNode',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeStatus' => 'NodeStatus',
        'operatorRole' => 'OperatorRole',
        'parentNodeId' => 'ParentNodeId',
        'stepNo' => 'StepNo',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->finalStepNo) {
            $res['FinalStepNo'] = $this->finalStepNo;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->isContainerNode) {
            $res['IsContainerNode'] = $this->isContainerNode;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }

        if (null !== $this->operatorRole) {
            $res['OperatorRole'] = $this->operatorRole;
        }

        if (null !== $this->parentNodeId) {
            $res['ParentNodeId'] = $this->parentNodeId;
        }

        if (null !== $this->stepNo) {
            $res['StepNo'] = $this->stepNo;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FinalStepNo'])) {
            $model->finalStepNo = $map['FinalStepNo'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['IsContainerNode'])) {
            $model->isContainerNode = $map['IsContainerNode'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        if (isset($map['OperatorRole'])) {
            $model->operatorRole = $map['OperatorRole'];
        }

        if (isset($map['ParentNodeId'])) {
            $model->parentNodeId = $map['ParentNodeId'];
        }

        if (isset($map['StepNo'])) {
            $model->stepNo = $map['StepNo'];
        }

        return $model;
    }
}
