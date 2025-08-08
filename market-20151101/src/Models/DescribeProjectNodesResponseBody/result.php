<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectNodesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $allowRollbackNode;

    /**
     * @var bool
     */
    public $autoFinishNode;

    /**
     * @var int
     */
    public $finalStepNo;

    /**
     * @var int
     */
    public $gmtExpired;

    /**
     * @var int
     */
    public $gmtFinished;

    /**
     * @var int
     */
    public $gmtStart;

    /**
     * @var bool
     */
    public $needAttachment;

    /**
     * @var int
     */
    public $nextNodeId;

    /**
     * @var int
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
     * @var int
     */
    public $parentNodeId;

    /**
     * @var int
     */
    public $previousNodeId;

    /**
     * @var int
     */
    public $stepNo;

    /**
     * @var string
     */
    public $templateForm;
    protected $_name = [
        'allowRollbackNode' => 'AllowRollbackNode',
        'autoFinishNode' => 'AutoFinishNode',
        'finalStepNo' => 'FinalStepNo',
        'gmtExpired' => 'GmtExpired',
        'gmtFinished' => 'GmtFinished',
        'gmtStart' => 'GmtStart',
        'needAttachment' => 'NeedAttachment',
        'nextNodeId' => 'NextNodeId',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeStatus' => 'NodeStatus',
        'operatorRole' => 'OperatorRole',
        'parentNodeId' => 'ParentNodeId',
        'previousNodeId' => 'PreviousNodeId',
        'stepNo' => 'StepNo',
        'templateForm' => 'TemplateForm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowRollbackNode) {
            $res['AllowRollbackNode'] = $this->allowRollbackNode;
        }

        if (null !== $this->autoFinishNode) {
            $res['AutoFinishNode'] = $this->autoFinishNode;
        }

        if (null !== $this->finalStepNo) {
            $res['FinalStepNo'] = $this->finalStepNo;
        }

        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }

        if (null !== $this->gmtFinished) {
            $res['GmtFinished'] = $this->gmtFinished;
        }

        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }

        if (null !== $this->needAttachment) {
            $res['NeedAttachment'] = $this->needAttachment;
        }

        if (null !== $this->nextNodeId) {
            $res['NextNodeId'] = $this->nextNodeId;
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

        if (null !== $this->previousNodeId) {
            $res['PreviousNodeId'] = $this->previousNodeId;
        }

        if (null !== $this->stepNo) {
            $res['StepNo'] = $this->stepNo;
        }

        if (null !== $this->templateForm) {
            $res['TemplateForm'] = $this->templateForm;
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
        if (isset($map['AllowRollbackNode'])) {
            $model->allowRollbackNode = $map['AllowRollbackNode'];
        }

        if (isset($map['AutoFinishNode'])) {
            $model->autoFinishNode = $map['AutoFinishNode'];
        }

        if (isset($map['FinalStepNo'])) {
            $model->finalStepNo = $map['FinalStepNo'];
        }

        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }

        if (isset($map['GmtFinished'])) {
            $model->gmtFinished = $map['GmtFinished'];
        }

        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }

        if (isset($map['NeedAttachment'])) {
            $model->needAttachment = $map['NeedAttachment'];
        }

        if (isset($map['NextNodeId'])) {
            $model->nextNodeId = $map['NextNodeId'];
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

        if (isset($map['PreviousNodeId'])) {
            $model->previousNodeId = $map['PreviousNodeId'];
        }

        if (isset($map['StepNo'])) {
            $model->stepNo = $map['StepNo'];
        }

        if (isset($map['TemplateForm'])) {
            $model->templateForm = $map['TemplateForm'];
        }

        return $model;
    }
}
