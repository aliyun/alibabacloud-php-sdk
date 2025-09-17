<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveAccountList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\granteeObjectList;

class applyOrderDetail extends Model
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
     * @var approveAccountList[]
     */
    public $approveAccountList;

    /**
     * @var approveContent
     */
    public $approveContent;

    /**
     * @var int
     */
    public $finishAapprovalTimestamp;

    /**
     * @var string
     */
    public $finishApprovalComment;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var int
     */
    public $flowStatus;

    /**
     * @var granteeObjectList[]
     */
    public $granteeObjectList;
    protected $_name = [
        'applyBaseId' => 'ApplyBaseId',
        'applyTimestamp' => 'ApplyTimestamp',
        'approveAccountList' => 'ApproveAccountList',
        'approveContent' => 'ApproveContent',
        'finishAapprovalTimestamp' => 'FinishAapprovalTimestamp',
        'finishApprovalComment' => 'FinishApprovalComment',
        'flowId' => 'FlowId',
        'flowStatus' => 'FlowStatus',
        'granteeObjectList' => 'GranteeObjectList',
    ];

    public function validate()
    {
        if (\is_array($this->approveAccountList)) {
            Model::validateArray($this->approveAccountList);
        }
        if (null !== $this->approveContent) {
            $this->approveContent->validate();
        }
        if (\is_array($this->granteeObjectList)) {
            Model::validateArray($this->granteeObjectList);
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

        if (null !== $this->approveAccountList) {
            if (\is_array($this->approveAccountList)) {
                $res['ApproveAccountList'] = [];
                $n1 = 0;
                foreach ($this->approveAccountList as $item1) {
                    $res['ApproveAccountList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->approveContent) {
            $res['ApproveContent'] = null !== $this->approveContent ? $this->approveContent->toArray($noStream) : $this->approveContent;
        }

        if (null !== $this->finishAapprovalTimestamp) {
            $res['FinishAapprovalTimestamp'] = $this->finishAapprovalTimestamp;
        }

        if (null !== $this->finishApprovalComment) {
            $res['FinishApprovalComment'] = $this->finishApprovalComment;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }

        if (null !== $this->granteeObjectList) {
            if (\is_array($this->granteeObjectList)) {
                $res['GranteeObjectList'] = [];
                $n1 = 0;
                foreach ($this->granteeObjectList as $item1) {
                    $res['GranteeObjectList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ApproveAccountList'])) {
            if (!empty($map['ApproveAccountList'])) {
                $model->approveAccountList = [];
                $n1 = 0;
                foreach ($map['ApproveAccountList'] as $item1) {
                    $model->approveAccountList[$n1] = approveAccountList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ApproveContent'])) {
            $model->approveContent = approveContent::fromMap($map['ApproveContent']);
        }

        if (isset($map['FinishAapprovalTimestamp'])) {
            $model->finishAapprovalTimestamp = $map['FinishAapprovalTimestamp'];
        }

        if (isset($map['FinishApprovalComment'])) {
            $model->finishApprovalComment = $map['FinishApprovalComment'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }

        if (isset($map['GranteeObjectList'])) {
            if (!empty($map['GranteeObjectList'])) {
                $model->granteeObjectList = [];
                $n1 = 0;
                foreach ($map['GranteeObjectList'] as $item1) {
                    $model->granteeObjectList[$n1] = granteeObjectList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
