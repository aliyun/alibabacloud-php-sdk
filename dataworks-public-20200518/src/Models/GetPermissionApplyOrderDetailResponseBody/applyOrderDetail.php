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
     * @var string
     */
    public $applyBaseId;

    /**
     * @var int
     */
    public $applyTimestamp;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var int
     */
    public $flowStatus;

    /**
     * @var approveAccountList[]
     */
    public $approveAccountList;

    /**
     * @var granteeObjectList[]
     */
    public $granteeObjectList;

    /**
     * @var approveContent
     */
    public $approveContent;
    protected $_name = [
        'applyBaseId'        => 'ApplyBaseId',
        'applyTimestamp'     => 'ApplyTimestamp',
        'flowId'             => 'FlowId',
        'flowStatus'         => 'FlowStatus',
        'approveAccountList' => 'ApproveAccountList',
        'granteeObjectList'  => 'GranteeObjectList',
        'approveContent'     => 'ApproveContent',
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
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
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
        if (null !== $this->granteeObjectList) {
            $res['GranteeObjectList'] = [];
            if (null !== $this->granteeObjectList && \is_array($this->granteeObjectList)) {
                $n = 0;
                foreach ($this->granteeObjectList as $item) {
                    $res['GranteeObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->approveContent) {
            $res['ApproveContent'] = null !== $this->approveContent ? $this->approveContent->toMap() : null;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
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
        if (isset($map['GranteeObjectList'])) {
            if (!empty($map['GranteeObjectList'])) {
                $model->granteeObjectList = [];
                $n                        = 0;
                foreach ($map['GranteeObjectList'] as $item) {
                    $model->granteeObjectList[$n++] = null !== $item ? granteeObjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApproveContent'])) {
            $model->approveContent = approveContent::fromMap($map['ApproveContent']);
        }

        return $model;
    }
}
