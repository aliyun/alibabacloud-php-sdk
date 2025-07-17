<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddAuthorityTemplateItemsRequest;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2478****
     *
     * @var int
     */
    public $dbId;

    /**
     * @example 237****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $permissionTypes;

    /**
     * @description This parameter is required.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dbId' => 'DbId',
        'instanceId' => 'InstanceId',
        'permissionTypes' => 'PermissionTypes',
        'resourceType' => 'ResourceType',
        'tableName' => 'TableName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->permissionTypes) {
            $res['PermissionTypes'] = $this->permissionTypes;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PermissionTypes'])) {
            if (!empty($map['PermissionTypes'])) {
                $model->permissionTypes = $map['PermissionTypes'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
