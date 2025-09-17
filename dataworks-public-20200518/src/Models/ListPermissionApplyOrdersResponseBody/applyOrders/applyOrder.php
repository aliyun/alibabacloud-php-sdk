<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent;

class applyOrder extends Model
{
    /**
     * @var string
     */
    public $applyBaseId;

    /**
     * @var int
     */
    public $applyTimestamp;

    /**
     * @var approveContent
     */
    public $approveContent;

    /**
     * @var string
     */
    public $finishApprovalComment;

    /**
     * @var int
     */
    public $finishApprovalTimestamp;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var int
     */
    public $flowStatus;
    protected $_name = [
        'applyBaseId' => 'ApplyBaseId',
        'applyTimestamp' => 'ApplyTimestamp',
        'approveContent' => 'ApproveContent',
        'finishApprovalComment' => 'FinishApprovalComment',
        'finishApprovalTimestamp' => 'FinishApprovalTimestamp',
        'flowId' => 'FlowId',
        'flowStatus' => 'FlowStatus',
    ];

    public function validate()
    {
        if (null !== $this->approveContent) {
            $this->approveContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyBaseId) {
            $res['ApplyBaseId'] = $this->applyBaseId;
        }

        if (null !== $this->applyTimestamp) {
            $res['ApplyTimestamp'] = $this->applyTimestamp;
        }

        if (null !== $this->approveContent) {
            $res['ApproveContent'] = null !== $this->approveContent ? $this->approveContent->toArray($noStream) : $this->approveContent;
        }

        if (null !== $this->finishApprovalComment) {
            $res['FinishApprovalComment'] = $this->finishApprovalComment;
        }

        if (null !== $this->finishApprovalTimestamp) {
            $res['FinishApprovalTimestamp'] = $this->finishApprovalTimestamp;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
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
        if (isset($map['ApplyBaseId'])) {
            $model->applyBaseId = $map['ApplyBaseId'];
        }

        if (isset($map['ApplyTimestamp'])) {
            $model->applyTimestamp = $map['ApplyTimestamp'];
        }

        if (isset($map['ApproveContent'])) {
            $model->approveContent = approveContent::fromMap($map['ApproveContent']);
        }

        if (isset($map['FinishApprovalComment'])) {
            $model->finishApprovalComment = $map['FinishApprovalComment'];
        }

        if (isset($map['FinishApprovalTimestamp'])) {
            $model->finishApprovalTimestamp = $map['FinishApprovalTimestamp'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }

        return $model;
    }
}
