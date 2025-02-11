<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\UpdateLakeStorageRequest\permissions;

class UpdateLakeStorageRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $lakeStorageId;
    /**
     * @var permissions[]
     */
    public $permissions;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'   => 'DBClusterId',
        'description'   => 'Description',
        'lakeStorageId' => 'LakeStorageId',
        'permissions'   => 'Permissions',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lakeStorageId) {
            $res['LakeStorageId'] = $this->lakeStorageId;
        }

        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['Permissions'] = [];
                $n1                 = 0;
                foreach ($this->permissions as $item1) {
                    $res['Permissions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LakeStorageId'])) {
            $model->lakeStorageId = $map['LakeStorageId'];
        }

        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n1                 = 0;
                foreach ($map['Permissions'] as $item1) {
                    $model->permissions[$n1++] = permissions::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
