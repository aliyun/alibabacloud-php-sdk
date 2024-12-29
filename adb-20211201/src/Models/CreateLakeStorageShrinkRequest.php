<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateLakeStorageShrinkRequest extends Model
{
    /**
     * @description -
     *
     * @example ******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 用于指定和挂载到特定ADB主实例的湖存储
     *
     * @example amv-******
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
     * @description 设置湖存储的读/写权限和账户级别权限的数组
     *
     * @example -
     *
     * @var string
     */
    public $permissionsShrink;

    /**
     * @description RegionId
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'DBClusterId'       => 'DBClusterId',
        'description'       => 'Description',
        'permissionsShrink' => 'Permissions',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return CreateLakeStorageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
