<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListLakeStoragesResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\ListLakeStoragesResponseBody\items\permissions;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description 湖存储被创建的时间
     *
     * @example 2021-04-01T09:50:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 创建湖存储的用户账号的唯一标识符
     *
     * @example 123456
     *
     * @var string
     */
    public $creatorUid;

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
     * @example Create a role to run ROS StackGroups.
     *
     * @var string
     */
    public $description;

    /**
     * @example 651
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description 用于识别特定湖存储的唯一标识符
     *
     * @example -
     *
     * @var string
     */
    public $lakeStorageId;

    /**
     * @description 最后操作湖存储的用户账号的唯一标识符
     *
     * @example 123456
     *
     * @var string
     */
    public $operatorUid;

    /**
     * @description 拥有湖存储资源的用户账号的唯一标识符
     *
     * @example 123456
     *
     * @var string
     */
    public $ownerUid;

    /**
     * @description 设置湖存储的读/写权限和账户级别权限的数组
     *
     * @example -
     *
     * @var permissions[]
     */
    public $permissions;

    /**
     * @description 指定要操作的湖存储所在区域的ID
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 湖存储中库表的总数量
     *
     * @example 30
     *
     * @var int
     */
    public $tableCount;

    /**
     * @description 湖存储中所有库表的总数据行数
     *
     * @example 30
     *
     * @var int
     */
    public $totalRows;

    /**
     * @description 湖存储中数据的总存储量
     *
     * @example 111333
     *
     * @var string
     */
    public $totalStorage;

    /**
     * @description 湖存储最后一次更新的时间
     *
     * @example 2024-03-15T02:24:32
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'creatorUid'    => 'CreatorUid',
        'DBClusterId'   => 'DBClusterId',
        'description'   => 'Description',
        'fileSize'      => 'FileSize',
        'lakeStorageId' => 'LakeStorageId',
        'operatorUid'   => 'OperatorUid',
        'ownerUid'      => 'OwnerUid',
        'permissions'   => 'Permissions',
        'regionId'      => 'RegionId',
        'tableCount'    => 'TableCount',
        'totalRows'     => 'TotalRows',
        'totalStorage'  => 'TotalStorage',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creatorUid) {
            $res['CreatorUid'] = $this->creatorUid;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->lakeStorageId) {
            $res['LakeStorageId'] = $this->lakeStorageId;
        }
        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['Permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->totalRows) {
            $res['TotalRows'] = $this->totalRows;
        }
        if (null !== $this->totalStorage) {
            $res['TotalStorage'] = $this->totalStorage;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatorUid'])) {
            $model->creatorUid = $map['CreatorUid'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['LakeStorageId'])) {
            $model->lakeStorageId = $map['LakeStorageId'];
        }
        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['Permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? permissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['TotalRows'])) {
            $model->totalRows = $map['TotalRows'];
        }
        if (isset($map['TotalStorage'])) {
            $model->totalStorage = $map['TotalStorage'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
