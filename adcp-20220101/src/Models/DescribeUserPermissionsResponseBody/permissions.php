<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeUserPermissionsResponseBody;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @example 21175****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example 1653****
     *
     * @var string
     */
    public $parentId;

    /**
     * @example cffef3c9c7ba145b083292942a2c3****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example view
     *
     * @var string
     */
    public $roleName;

    /**
     * @example dev
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'ownerId'      => 'OwnerId',
        'parentId'     => 'ParentId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'roleName'     => 'RoleName',
        'roleType'     => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
