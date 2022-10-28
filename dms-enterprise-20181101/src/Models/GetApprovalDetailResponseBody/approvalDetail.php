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
     * @var int
     */
    public $auditId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var currentHandlers
     */
    public $currentHandlers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var reasonList
     */
    public $reasonList;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workflowInsCode;

    /**
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
