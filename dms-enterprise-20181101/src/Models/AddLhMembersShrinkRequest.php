<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class AddLhMembersShrinkRequest extends Model
{
    /**
     * @description The information about the users to be added.
     *
     * This parameter is required.
     * @var string
     */
    public $membersShrink;

    /**
     * @description The ID of the object.
     *
     *   If the object is a workspace, you can call the [GetLhSpaceByName](https://help.aliyun.com/document_detail/424379.html) operation to obtain the workspace ID.
     *   If the object is a task flow, you can call the [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to obtain the task flow ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $objectId;

    /**
     * @description The type of the object. Valid values:
     *
     *   **0**: workspace
     *   **1**: task flow
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $objectType;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to obtain the tenant ID.
     *
     * @example 3000
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'membersShrink' => 'Members',
        'objectId'      => 'ObjectId',
        'objectType'    => 'ObjectType',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLhMembersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Members'])) {
            $model->membersShrink = $map['Members'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
