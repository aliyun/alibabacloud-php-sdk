<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddAuthorityTemplateItemsRequest;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $permissionTypes;

    /**
     * @var string
     */
    public $resourceType;

    /**
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

    public function validate()
    {
        if (\is_array($this->permissionTypes)) {
            Model::validateArray($this->permissionTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->permissionTypes) {
            if (\is_array($this->permissionTypes)) {
                $res['PermissionTypes'] = [];
                $n1 = 0;
                foreach ($this->permissionTypes as $item1) {
                    $res['PermissionTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PermissionTypes'])) {
            if (!empty($map['PermissionTypes'])) {
                $model->permissionTypes = [];
                $n1 = 0;
                foreach ($map['PermissionTypes'] as $item1) {
                    $model->permissionTypes[$n1] = $item1;
                    ++$n1;
                }
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
