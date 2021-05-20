<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $flowId;

    /**
     * @var int
     */
    public $flowStatus;

    /**
     * @var approveContent
     */
    public $approveContent;
    protected $_name = [
        'applyBaseId'    => 'ApplyBaseId',
        'applyTimestamp' => 'ApplyTimestamp',
        'flowId'         => 'FlowId',
        'flowStatus'     => 'FlowStatus',
        'approveContent' => 'ApproveContent',
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
        if (null !== $this->approveContent) {
            $res['ApproveContent'] = null !== $this->approveContent ? $this->approveContent->toMap() : null;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['ApproveContent'])) {
            $model->approveContent = approveContent::fromMap($map['ApproveContent']);
        }

        return $model;
    }
}
