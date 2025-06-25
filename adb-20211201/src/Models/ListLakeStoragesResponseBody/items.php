<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListLakeStoragesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListLakeStoragesResponseBody\items\permissions;

class items extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorUid;

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
    public $fileSize;

    /**
     * @var string
     */
    public $lakeStorageId;

    /**
     * @var string
     */
    public $operatorUid;

    /**
     * @var string
     */
    public $ownerUid;

    /**
     * @var permissions[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var int
     */
    public $totalRows;

    /**
     * @var string
     */
    public $totalStorage;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creatorUid' => 'CreatorUid',
        'DBClusterId' => 'DBClusterId',
        'description' => 'Description',
        'fileSize' => 'FileSize',
        'lakeStorageId' => 'LakeStorageId',
        'operatorUid' => 'OperatorUid',
        'ownerUid' => 'OwnerUid',
        'permissions' => 'Permissions',
        'regionId' => 'RegionId',
        'tableCount' => 'TableCount',
        'totalRows' => 'TotalRows',
        'totalStorage' => 'TotalStorage',
        'updateTime' => 'UpdateTime',
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
            if (\is_array($this->permissions)) {
                $res['Permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['Permissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Permissions'] as $item1) {
                    $model->permissions[$n1] = permissions::fromMap($item1);
                    ++$n1;
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
