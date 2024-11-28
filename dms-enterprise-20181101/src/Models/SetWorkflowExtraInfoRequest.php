<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SetWorkflowExtraInfoRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $renderAddApprovalNode;

    /**
     * @example true
     *
     * @var bool
     */
    public $renderAgree;

    /**
     * @example true
     *
     * @var bool
     */
    public $renderCancel;

    /**
     * @example false
     *
     * @var bool
     */
    public $renderReject;

    /**
     * @example true
     *
     * @var bool
     */
    public $renderTransfer;

    /**
     * @example test
     *
     * @var string
     */
    public $thirdpartyWorkflowComment;

    /**
     * @example https://xxx
     *
     * @var string
     */
    public $thirdpartyWorkflowUrl;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @example 184****
     *
     * @var int
     */
    public $workflowInstanceId;
    protected $_name = [
        'renderAddApprovalNode'     => 'RenderAddApprovalNode',
        'renderAgree'               => 'RenderAgree',
        'renderCancel'              => 'RenderCancel',
        'renderReject'              => 'RenderReject',
        'renderTransfer'            => 'RenderTransfer',
        'thirdpartyWorkflowComment' => 'ThirdpartyWorkflowComment',
        'thirdpartyWorkflowUrl'     => 'ThirdpartyWorkflowUrl',
        'tid'                       => 'Tid',
        'workflowInstanceId'        => 'WorkflowInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderAddApprovalNode) {
            $res['RenderAddApprovalNode'] = $this->renderAddApprovalNode;
        }
        if (null !== $this->renderAgree) {
            $res['RenderAgree'] = $this->renderAgree;
        }
        if (null !== $this->renderCancel) {
            $res['RenderCancel'] = $this->renderCancel;
        }
        if (null !== $this->renderReject) {
            $res['RenderReject'] = $this->renderReject;
        }
        if (null !== $this->renderTransfer) {
            $res['RenderTransfer'] = $this->renderTransfer;
        }
        if (null !== $this->thirdpartyWorkflowComment) {
            $res['ThirdpartyWorkflowComment'] = $this->thirdpartyWorkflowComment;
        }
        if (null !== $this->thirdpartyWorkflowUrl) {
            $res['ThirdpartyWorkflowUrl'] = $this->thirdpartyWorkflowUrl;
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
     * @return SetWorkflowExtraInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderAddApprovalNode'])) {
            $model->renderAddApprovalNode = $map['RenderAddApprovalNode'];
        }
        if (isset($map['RenderAgree'])) {
            $model->renderAgree = $map['RenderAgree'];
        }
        if (isset($map['RenderCancel'])) {
            $model->renderCancel = $map['RenderCancel'];
        }
        if (isset($map['RenderReject'])) {
            $model->renderReject = $map['RenderReject'];
        }
        if (isset($map['RenderTransfer'])) {
            $model->renderTransfer = $map['RenderTransfer'];
        }
        if (isset($map['ThirdpartyWorkflowComment'])) {
            $model->thirdpartyWorkflowComment = $map['ThirdpartyWorkflowComment'];
        }
        if (isset($map['ThirdpartyWorkflowUrl'])) {
            $model->thirdpartyWorkflowUrl = $map['ThirdpartyWorkflowUrl'];
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
