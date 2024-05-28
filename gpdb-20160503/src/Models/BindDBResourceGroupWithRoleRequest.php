<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class BindDBResourceGroupWithRoleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $roleList;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'ownerId'           => 'OwnerId',
        'resourceGroupName' => 'ResourceGroupName',
        'roleList'          => 'RoleList',
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
        if (null !== $this->roleList) {
            $res['RoleList'] = $this->roleList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindDBResourceGroupWithRoleRequest
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
            if (!empty($map['RoleList'])) {
                $model->roleList = $map['RoleList'];
            }
        }

        return $model;
    }
}
