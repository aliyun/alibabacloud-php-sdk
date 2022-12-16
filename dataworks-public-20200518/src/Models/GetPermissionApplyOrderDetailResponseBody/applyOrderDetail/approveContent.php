<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta;
use AlibabaCloud\Tea\Model;

class approveContent extends Model
{
    /**
     * @example I need to use this table
     *
     * @var string
     */
    public $applyReason;

    /**
     * @example 1617115071885
     *
     * @var int
     */
    public $deadline;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @var projectMeta
     */
    public $projectMeta;
    protected $_name = [
        'applyReason' => 'ApplyReason',
        'deadline'    => 'Deadline',
        'orderType'   => 'OrderType',
        'projectMeta' => 'ProjectMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->projectMeta) {
            $res['ProjectMeta'] = null !== $this->projectMeta ? $this->projectMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approveContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ProjectMeta'])) {
            $model->projectMeta = projectMeta::fromMap($map['ProjectMeta']);
        }

        return $model;
    }
}
