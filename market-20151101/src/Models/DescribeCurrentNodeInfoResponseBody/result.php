<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeCurrentNodeInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $allowRollbackNode;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoFinishNode;

    /**
     * @example 4
     *
     * @var int
     */
    public $finalStepNo;

    /**
     * @example 1588920725000
     *
     * @var int
     */
    public $gmtExpired;

    /**
     * @example 1588920725000
     *
     * @var int
     */
    public $gmtFinished;

    /**
     * @example 1588834325000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example false
     *
     * @var bool
     */
    public $needAttachment;

    /**
     * @example 8473
     *
     * @var int
     */
    public $nextNodeId;

    /**
     * @example 8472
     *
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example Starting
     *
     * @var string
     */
    public $nodeStatus;

    /**
     * @example Provider
     *
     * @var string
     */
    public $operatorRole;

    /**
     * @example 0
     *
     * @var int
     */
    public $parentNodeId;

    /**
     * @example 8471
     *
     * @var int
     */
    public $previousNodeId;

    /**
     * @example 3
     *
     * @var int
     */
    public $stepNo;

    /**
     * @var string
     */
    public $templateForm;
    protected $_name = [
        'allowRollbackNode' => 'AllowRollbackNode',
        'autoFinishNode'    => 'AutoFinishNode',
        'finalStepNo'       => 'FinalStepNo',
        'gmtExpired'        => 'GmtExpired',
        'gmtFinished'       => 'GmtFinished',
        'gmtStart'          => 'GmtStart',
        'needAttachment'    => 'NeedAttachment',
        'nextNodeId'        => 'NextNodeId',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'nodeStatus'        => 'NodeStatus',
        'operatorRole'      => 'OperatorRole',
        'parentNodeId'      => 'ParentNodeId',
        'previousNodeId'    => 'PreviousNodeId',
        'stepNo'            => 'StepNo',
        'templateForm'      => 'TemplateForm',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
