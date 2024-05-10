<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateMeetingRoomGroupShrinkRequest extends Model
{
    /**
     * @example 测试分组
     *
     * @var string
     */
    public $groupName;

    /**
     * @description This parameter is required.
     *
     * @example 172L
     *
     * @var int
     */
    public $parentGroupId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'groupName'           => 'GroupName',
        'parentGroupId'       => 'ParentGroupId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->parentGroupId) {
            $res['ParentGroupId'] = $this->parentGroupId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMeetingRoomGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ParentGroupId'])) {
            $model->parentGroupId = $map['ParentGroupId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
