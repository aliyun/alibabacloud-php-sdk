<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent;
use AlibabaCloud\Tea\Model;

class applyOrder extends Model
{
    /**
     * @description The unique ID of the Alibaba Cloud account that was used to submit the permission request order.
     *
     * @example 267842600408993176
     *
     * @var string
     */
    public $applyBaseId;

    /**
     * @description The time when the permission request order was submitted. The parameter value is a UNIX timestamp.
     *
     * @example 1615284086000
     *
     * @var int
     */
    public $applyTimestamp;

    /**
     * @description The content of the permission request order.
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
     *   1: pending approval
     *   2: approved and authorized
     *   3: approved but authorization failed
     *   4: rejected
     *
     * @example 2
     *
     * @var int
     */
    public $flowStatus;
    protected $_name = [
        'applyBaseId'    => 'ApplyBaseId',
        'applyTimestamp' => 'ApplyTimestamp',
        'approveContent' => 'ApproveContent',
        'flowId'         => 'FlowId',
        'flowStatus'     => 'FlowStatus',
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
        if (null !== $this->approveContent) {
            $res['ApproveContent'] = null !== $this->approveContent ? $this->approveContent->toMap() : null;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyOrder
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
        if (isset($map['ApproveContent'])) {
            $model->approveContent = approveContent::fromMap($map['ApproveContent']);
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
