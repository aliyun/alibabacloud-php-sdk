<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponse\applyOrders\applyOrder;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponse\applyOrders\applyOrder\approveContent\projectMeta;
use AlibabaCloud\Tea\Model;

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
        'orderType'   => 'OrderType',
        'projectMeta' => 'ProjectMeta',
    ];

    public function validate()
    {
        Model::validateRequired('applyReason', $this->applyReason, true);
        Model::validateRequired('orderType', $this->orderType, true);
        Model::validateRequired('projectMeta', $this->projectMeta, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
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
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ProjectMeta'])) {
            $model->projectMeta = projectMeta::fromMap($map['ProjectMeta']);
        }

        return $model;
    }
}
