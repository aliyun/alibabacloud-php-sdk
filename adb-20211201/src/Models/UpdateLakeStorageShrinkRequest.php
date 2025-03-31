<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UpdateLakeStorageShrinkRequest extends Model
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
     * @var string
     */
    public $permissionsShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'description' => 'Description',
        'lakeStorageId' => 'LakeStorageId',
        'permissionsShrink' => 'Permissions',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
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

        if (null !== $this->permissionsShrink) {
            $res['Permissions'] = $this->permissionsShrink;
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
            $model->permissionsShrink = $map['Permissions'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
