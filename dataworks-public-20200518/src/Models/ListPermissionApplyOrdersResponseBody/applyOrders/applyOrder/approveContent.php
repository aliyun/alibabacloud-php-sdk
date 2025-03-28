<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent\projectMeta;

class approveContent extends Model
{
    /**
     * @var string
     */
    public $applyReason;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var projectMeta
     */
    public $projectMeta;
    protected $_name = [
        'applyReason' => 'ApplyReason',
        'orderType' => 'OrderType',
        'projectMeta' => 'ProjectMeta',
    ];

    public function validate()
    {
        if (null !== $this->projectMeta) {
            $this->projectMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->projectMeta) {
            $res['ProjectMeta'] = null !== $this->projectMeta ? $this->projectMeta->toArray($noStream) : $this->projectMeta;
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
        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
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
