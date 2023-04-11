<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes\workflowNode\auditUserIdList;
use AlibabaCloud\Tea\Model;

class workflowNode extends Model
{
    /**
     * @description The IDs of the approvers.
     *
     * @var auditUserIdList
     */
    public $auditUserIdList;

    /**
     * @description The name of the approval node.
     *
     * @example DBA
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The remarks of the approval.
     *
     * @example Reason: Approved
     *
     * @var string
     */
    public $operateComment;

    /**
     * @description The time when the ticket was submitted.
     *
     * @example 2019-10-15 13:47:54
     *
     * @var string
     */
    public $operateTime;

    /**
     * @description The ID of the user who submitted the ticket.
     *
     * @example 1****
     *
     * @var int
     */
    public $operatorId;

    /**
     * @description The approval status of the ticket. Valid values:
     *
     *   **START**: The ticket was submitted.
     *   **ERROR**: An error occurred.
     *   **AUDITING**: The ticket is being reviewed.
     *   **REJECT**: The ticket was rejected.
     *   **CANCEL**: The ticket was revoked.
     *   **APPROVED**: The ticket was approved.
     *
     * @example APPROVED
     *
     * @var string
     */
    public $workflowInsCode;
    protected $_name = [
        'auditUserIdList' => 'AuditUserIdList',
        'nodeName'        => 'NodeName',
        'operateComment'  => 'OperateComment',
        'operateTime'     => 'OperateTime',
        'operatorId'      => 'OperatorId',
        'workflowInsCode' => 'WorkflowInsCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditUserIdList) {
            $res['AuditUserIdList'] = null !== $this->auditUserIdList ? $this->auditUserIdList->toMap() : null;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->operateComment) {
            $res['OperateComment'] = $this->operateComment;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->workflowInsCode) {
            $res['WorkflowInsCode'] = $this->workflowInsCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditUserIdList'])) {
            $model->auditUserIdList = auditUserIdList::fromMap($map['AuditUserIdList']);
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OperateComment'])) {
            $model->operateComment = $map['OperateComment'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['WorkflowInsCode'])) {
            $model->workflowInsCode = $map['WorkflowInsCode'];
        }

        return $model;
    }
}
