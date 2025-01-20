<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ApproveOrderRequest extends Model
{
    /**
     * @var int
     */
    public $approvalNodeId;
    /**
     * @var string
     */
    public $approvalNodePos;
    /**
     * @var string
     */
    public $approvalType;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var int
     */
    public $newApprover;
    /**
     * @var string
     */
    public $newApproverList;
    /**
     * @var int
     */
    public $oldApprover;
    /**
     * @var string
     */
    public $realLoginUserUid;
    /**
     * @var int
     */
    public $tid;
    /**
     * @var int
     */
    public $workflowInstanceId;
    protected $_name = [
        'approvalNodeId'     => 'ApprovalNodeId',
        'approvalNodePos'    => 'ApprovalNodePos',
        'approvalType'       => 'ApprovalType',
        'comment'            => 'Comment',
        'newApprover'        => 'NewApprover',
        'newApproverList'    => 'NewApproverList',
        'oldApprover'        => 'OldApprover',
        'realLoginUserUid'   => 'RealLoginUserUid',
        'tid'                => 'Tid',
        'workflowInstanceId' => 'WorkflowInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalNodeId) {
            $res['ApprovalNodeId'] = $this->approvalNodeId;
        }

        if (null !== $this->approvalNodePos) {
            $res['ApprovalNodePos'] = $this->approvalNodePos;
        }

        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->newApprover) {
            $res['NewApprover'] = $this->newApprover;
        }

        if (null !== $this->newApproverList) {
            $res['NewApproverList'] = $this->newApproverList;
        }

        if (null !== $this->oldApprover) {
            $res['OldApprover'] = $this->oldApprover;
        }

        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
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
        if (isset($map['ApprovalNodeId'])) {
            $model->approvalNodeId = $map['ApprovalNodeId'];
        }

        if (isset($map['ApprovalNodePos'])) {
            $model->approvalNodePos = $map['ApprovalNodePos'];
        }

        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['NewApprover'])) {
            $model->newApprover = $map['NewApprover'];
        }

        if (isset($map['NewApproverList'])) {
            $model->newApproverList = $map['NewApproverList'];
        }

        if (isset($map['OldApprover'])) {
            $model->oldApprover = $map['OldApprover'];
        }

        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }

        return $model;
    }
}
