<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class UpdateLakeStorageShrinkRequest extends Model
{
    /**
     * @description 用于指定和挂载到特定ADB主实例的湖存储
     *
     * @example amv-*******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description 对湖存储的描述信息
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description 用于识别特定湖存储的唯一标识符
     *
     * @example -
     *
     * @var string
     */
    public $lakeStorageId;

    /**
     * @description 设置湖存储的读/写权限和账户级别权限的数组
     *
     * @example -
     *
     * @var string
     */
    public $permissionsShrink;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'description'       => 'Description',
        'lakeStorageId'     => 'LakeStorageId',
        'permissionsShrink' => 'Permissions',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateLakeStorageShrinkRequest
     */
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
