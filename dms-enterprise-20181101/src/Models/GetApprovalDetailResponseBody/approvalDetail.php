<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\currentHandlers;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\reasonList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes;
use AlibabaCloud\Tea\Model;

class approvalDetail extends Model
{
    /**
     * @description The ID of the approval process.
     *
     * @example 184****
     *
     * @var int
     */
    public $auditId;

    /**
     * @description The time when the approval process was created.
     *
     * @example 2021-10-29 14:17:25
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The information about the approver.
     *
     * @var currentHandlers
     */
    public $currentHandlers;

    /**
     * @description The description of the approval process.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ticket.
     *
     * @example 384****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The type of the ticket. Valid values:
     *
     * - **NDDL**: The ticket is used to change the schema design.
     * - **DATA_TRACK**: The ticket is used to track data.
     * - **TABLE_SYNC**: The ticket is used to synchronize databases and tables.
     * - **PERM_APPLY**: The ticket is used to apply for permissions.
     * - **DATA_EXPORT**: The ticket is used to export data.
     * - **DATA_CORRECT**: The ticket is used to change data.
     * - **OWNER_APPLY**: The ticket is used to apply for the owner role of a resource.
     * - **SENSITIVITY**: The ticket is used to change column sensitivity levels.
     * @example PERM_APPLY
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The reason for the approval.
     *
     * @var reasonList
     */
    public $reasonList;

    /**
     * @description The ID of the approval template.
     *
     * @example 1234
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The title of the approval process.
     *
     * @var string
     */
    public $title;

    /**
     * @description The approval status of the ticket. Valid values:
     *
     * - **AUDITING**: The ticket is being processed.
     * - **REJECT**: The ticket was rejected.
     * - **CANCEL**: The ticket was revoked.
     * - **APPROVED**: The ticket was approved.
     *
     * >  If an approval process contains multiple approval nodes, this parameter is returned for each approval node.
     * @example APPROVED
     *
     * @var string
     */
    public $workflowInsCode;

    /**
     * @description The details of approval nodes.
     *
     * @var workflowNodes
     */
    public $workflowNodes;
    protected $_name = [
        'auditId'         => 'AuditId',
        'createTime'      => 'CreateTime',
        'currentHandlers' => 'CurrentHandlers',
        'description'     => 'Description',
        'orderId'         => 'OrderId',
        'orderType'       => 'OrderType',
        'reasonList'      => 'ReasonList',
        'templateId'      => 'TemplateId',
        'title'           => 'Title',
        'workflowInsCode' => 'WorkflowInsCode',
        'workflowNodes'   => 'WorkflowNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditId) {
            $res['AuditId'] = $this->auditId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentHandlers) {
            $res['CurrentHandlers'] = null !== $this->currentHandlers ? $this->currentHandlers->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->reasonList) {
            $res['ReasonList'] = null !== $this->reasonList ? $this->reasonList->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->workflowInsCode) {
            $res['WorkflowInsCode'] = $this->workflowInsCode;
        }
        if (null !== $this->workflowNodes) {
            $res['WorkflowNodes'] = null !== $this->workflowNodes ? $this->workflowNodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approvalDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditId'])) {
            $model->auditId = $map['AuditId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentHandlers'])) {
            $model->currentHandlers = currentHandlers::fromMap($map['CurrentHandlers']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ReasonList'])) {
            $model->reasonList = reasonList::fromMap($map['ReasonList']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['WorkflowInsCode'])) {
            $model->workflowInsCode = $map['WorkflowInsCode'];
        }
        if (isset($map['WorkflowNodes'])) {
            $model->workflowNodes = workflowNodes::fromMap($map['WorkflowNodes']);
        }

        return $model;
    }
}
