<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ApproveOrderRequest extends Model
{
    /**
     * @description If ApprovalType is set to ADD_APPROVAL_NODE, you need to specify this parameter. The ID of the user that is added as the new approval node. This node must be a user-defined approval node. You can call the ListUserDefineWorkFlowNodes operation to obtain the value of this parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $approvalNodeId;

    /**
     * @description If ApprovalType is set to ADD_APPROVAL_NODE, you need to specify this parameter. The position of the new approval node. Valid values:
     *
     *   **PRE_ADD_APPROVAL_NODE**: before the current approval node.
     *   **POST_ADD_APPROVAL_NODE**: after the current approval node.
     *
     * @example POST_ADD_APPROVAL_NODE
     *
     * @var string
     */
    public $approvalNodePos;

    /**
     * @description The action that you want to perform on the ticket. Valid values:
     *
     *   **AGREE**
     *   **CANCEL**
     *   **REJECT**
     *   **TRANSFER**
     *   **ADD_APPROVAL_NODE**
     *
     * This parameter is required.
     * @example agree
     *
     * @var string
     */
    public $approvalType;

    /**
     * @description The description of the ticket.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the user to which the ticket is transferred. If ApprovalType is set to TRANSFER, you need to specify this parameter.
     *
     * @example 12***
     *
     * @var int
     */
    public $newApprover;

    /**
     * @var string
     */
    public $newApproverList;

    /**
     * @description The ID of the user that transfers the ticket to another user. The default value is the ID of the current user. If the current user is an administrator or a database administrator (DBA), the user can change the value of this parameter to the ID of another user.
     *
     * @example 23***
     *
     * @var int
     */
    public $oldApprover;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to obtain the tenant ID.
     *
     * @example -1
     *
     * @var int
     */
    public $tid;

    /**
     * @description The ID of the approval process. You can call the [GetOrderBaseInfo](https://help.aliyun.com/document_detail/144642.html) operation to obtain the ID of the approval process.
     *
     * This parameter is required.
     * @example 1234
     *
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
        'tid'                => 'Tid',
        'workflowInstanceId' => 'WorkflowInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveOrderRequest
     */
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }

        return $model;
    }
}
