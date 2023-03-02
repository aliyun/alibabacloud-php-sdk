<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta;
use AlibabaCloud\Tea\Model;

class approveContent extends Model
{
    /**
     * @description The reason for your request. The administrator decides whether to approve the request based on the request reason.
     *
     * @example I need to use this table
     *
     * @var string
     */
    public $applyReason;

    /**
     * @description The expiration time of the permissions that you requested. The parameter value is a UNIX timestamp.
     *
     * If LabelSecurity is disabled in the MaxCompute project, or the security level of fields in the MaxCompute table on which you request permissions is 0 or is less than or equal to the security level of the Alibaba Cloud account for which you request permissions, you can request only permanent permissions.
     * @example 1617115071885
     *
     * @var int
     */
    public $deadline;

    /**
     * @description The type of the permission request order. The parameter value is 1 and cannot be changed. 1 indicates that ACL-based authorization is requested.
     *
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @description The information about the project and workspace that are associated with the object on which you requested permissions.
     *
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
