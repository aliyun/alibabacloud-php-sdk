<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveAccountList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\granteeObjectList;
use AlibabaCloud\Tea\Model;

class applyOrderDetail extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that was used to submit the permission request order.
     *
     * @example 267842600408993176
     *
     * @var string
     */
    public $applyBaseId;

    /**
     * @description The time when the permission request order was submitted. The value is a UNIX timestamp.
     *
     * @example 1615284086000
     *
     * @var int
     */
    public $applyTimestamp;

    /**
     * @description The list of Alibaba Cloud accounts that are used to process the permission request order.
     *
     * @var approveAccountList[]
     */
    public $approveAccountList;

    /**
     * @description The content of the permission request.
     *
     * @var approveContent
     */
    public $approveContent;

    /**
     * @description The ID of the permission request order.
     *
     * @example ad8da78d-8135-455e-9486-27cf213fc140
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The status of the permission request order. Valid values:
     *
     *   1: to be processed
     *   2: approved and authorized
     *   3: approved but authorization failed
     *   4: rejected
     *
     * @example 2
     *
     * @var int
     */
    public $flowStatus;

    /**
     * @description The information about the account that is used to request permissions.
     *
     * @var granteeObjectList[]
     */
    public $granteeObjectList;
    protected $_name = [
        'applyBaseId'        => 'ApplyBaseId',
        'applyTimestamp'     => 'ApplyTimestamp',
        'approveAccountList' => 'ApproveAccountList',
        'approveContent'     => 'ApproveContent',
        'flowId'             => 'FlowId',
        'flowStatus'         => 'FlowStatus',
        'granteeObjectList'  => 'GranteeObjectList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyBaseId) {
            $res['ApplyBaseId'] = $this->applyBaseId;
        }
        if (null !== $this->applyTimestamp) {
            $res['ApplyTimestamp'] = $this->applyTimestamp;
        }
        if (null !== $this->approveAccountList) {
            $res['ApproveAccountList'] = [];
            if (null !== $this->approveAccountList && \is_array($this->approveAccountList)) {
                $n = 0;
                foreach ($this->approveAccountList as $item) {
                    $res['ApproveAccountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->approveContent) {
            $res['ApproveContent'] = null !== $this->approveContent ? $this->approveContent->toMap() : null;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->granteeObjectList) {
            $res['GranteeObjectList'] = [];
            if (null !== $this->granteeObjectList && \is_array($this->granteeObjectList)) {
                $n = 0;
                foreach ($this->granteeObjectList as $item) {
                    $res['GranteeObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyOrderDetail
     */
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
                $n                         = 0;
                foreach ($map['ApproveAccountList'] as $item) {
                    $model->approveAccountList[$n++] = null !== $item ? approveAccountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApproveContent'])) {
            $model->approveContent = approveContent::fromMap($map['ApproveContent']);
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
                $n                        = 0;
                foreach ($map['GranteeObjectList'] as $item) {
                    $model->granteeObjectList[$n++] = null !== $item ? granteeObjectList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
