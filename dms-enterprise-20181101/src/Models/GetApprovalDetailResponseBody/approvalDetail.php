<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\currentHandlers;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\reasonList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes;

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
    public $thirdpartyWorkflowComment;
    /**
     * @var string
     */
    public $thirdpartyWorkflowUrl;
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
        'auditId'                   => 'AuditId',
        'createTime'                => 'CreateTime',
        'currentHandlers'           => 'CurrentHandlers',
        'description'               => 'Description',
        'orderId'                   => 'OrderId',
        'orderType'                 => 'OrderType',
        'reasonList'                => 'ReasonList',
        'templateId'                => 'TemplateId',
        'thirdpartyWorkflowComment' => 'ThirdpartyWorkflowComment',
        'thirdpartyWorkflowUrl'     => 'ThirdpartyWorkflowUrl',
        'title'                     => 'Title',
        'workflowInsCode'           => 'WorkflowInsCode',
        'workflowNodes'             => 'WorkflowNodes',
    ];

    public function validate()
    {
        if (null !== $this->currentHandlers) {
            $this->currentHandlers->validate();
        }
        if (null !== $this->reasonList) {
            $this->reasonList->validate();
        }
        if (null !== $this->workflowNodes) {
            $this->workflowNodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditId) {
            $res['AuditId'] = $this->auditId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->currentHandlers) {
            $res['CurrentHandlers'] = null !== $this->currentHandlers ? $this->currentHandlers->toArray($noStream) : $this->currentHandlers;
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
            $res['ReasonList'] = null !== $this->reasonList ? $this->reasonList->toArray($noStream) : $this->reasonList;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->thirdpartyWorkflowComment) {
            $res['ThirdpartyWorkflowComment'] = $this->thirdpartyWorkflowComment;
        }

        if (null !== $this->thirdpartyWorkflowUrl) {
            $res['ThirdpartyWorkflowUrl'] = $this->thirdpartyWorkflowUrl;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->workflowInsCode) {
            $res['WorkflowInsCode'] = $this->workflowInsCode;
        }

        if (null !== $this->workflowNodes) {
            $res['WorkflowNodes'] = null !== $this->workflowNodes ? $this->workflowNodes->toArray($noStream) : $this->workflowNodes;
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

        if (isset($map['ThirdpartyWorkflowComment'])) {
            $model->thirdpartyWorkflowComment = $map['ThirdpartyWorkflowComment'];
        }

        if (isset($map['ThirdpartyWorkflowUrl'])) {
            $model->thirdpartyWorkflowUrl = $map['ThirdpartyWorkflowUrl'];
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
