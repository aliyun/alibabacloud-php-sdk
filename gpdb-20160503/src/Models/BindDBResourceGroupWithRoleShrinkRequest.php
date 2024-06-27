<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class BindDBResourceGroupWithRoleShrinkRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the resource group.
     *
     * This parameter is required.
     * @example testgroup
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The roles.
     *
     * This parameter is required.
     * @var string
     */
    public $roleListShrink;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'ownerId'           => 'OwnerId',
        'resourceGroupName' => 'ResourceGroupName',
        'roleListShrink'    => 'RoleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->roleListShrink) {
            $res['RoleList'] = $this->roleListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindDBResourceGroupWithRoleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['RoleList'])) {
            $model->roleListShrink = $map['RoleList'];
        }

        return $model;
    }
}
