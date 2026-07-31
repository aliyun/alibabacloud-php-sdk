<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo;

use AlibabaCloud\Dara\Model;

class atmConfig extends Model
{
    /**
     * @var string
     */
    public $authNodeNum;

    /**
     * @var string
     */
    public $authNodeSpec;

    /**
     * @var string
     */
    public $insertNodeNum;

    /**
     * @var string
     */
    public $insertNodeSpec;

    /**
     * @var string
     */
    public $selectNodeCacheSize;

    /**
     * @var string
     */
    public $selectNodeNum;

    /**
     * @var string
     */
    public $selectNodeSpec;

    /**
     * @var string
     */
    public $storageNodeDiskSize;

    /**
     * @var string
     */
    public $storageNodeDiskType;

    /**
     * @var string
     */
    public $storageNodeNum;

    /**
     * @var string
     */
    public $storageNodeSpec;
    protected $_name = [
        'authNodeNum' => 'AuthNodeNum',
        'authNodeSpec' => 'AuthNodeSpec',
        'insertNodeNum' => 'InsertNodeNum',
        'insertNodeSpec' => 'InsertNodeSpec',
        'selectNodeCacheSize' => 'SelectNodeCacheSize',
        'selectNodeNum' => 'SelectNodeNum',
        'selectNodeSpec' => 'SelectNodeSpec',
        'storageNodeDiskSize' => 'StorageNodeDiskSize',
        'storageNodeDiskType' => 'StorageNodeDiskType',
        'storageNodeNum' => 'StorageNodeNum',
        'storageNodeSpec' => 'StorageNodeSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authNodeNum) {
            $res['AuthNodeNum'] = $this->authNodeNum;
        }

        if (null !== $this->authNodeSpec) {
            $res['AuthNodeSpec'] = $this->authNodeSpec;
        }

        if (null !== $this->insertNodeNum) {
            $res['InsertNodeNum'] = $this->insertNodeNum;
        }

        if (null !== $this->insertNodeSpec) {
            $res['InsertNodeSpec'] = $this->insertNodeSpec;
        }

        if (null !== $this->selectNodeCacheSize) {
            $res['SelectNodeCacheSize'] = $this->selectNodeCacheSize;
        }

        if (null !== $this->selectNodeNum) {
            $res['SelectNodeNum'] = $this->selectNodeNum;
        }

        if (null !== $this->selectNodeSpec) {
            $res['SelectNodeSpec'] = $this->selectNodeSpec;
        }

        if (null !== $this->storageNodeDiskSize) {
            $res['StorageNodeDiskSize'] = $this->storageNodeDiskSize;
        }

        if (null !== $this->storageNodeDiskType) {
            $res['StorageNodeDiskType'] = $this->storageNodeDiskType;
        }

        if (null !== $this->storageNodeNum) {
            $res['StorageNodeNum'] = $this->storageNodeNum;
        }

        if (null !== $this->storageNodeSpec) {
            $res['StorageNodeSpec'] = $this->storageNodeSpec;
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
        if (isset($map['AuthNodeNum'])) {
            $model->authNodeNum = $map['AuthNodeNum'];
        }

        if (isset($map['AuthNodeSpec'])) {
            $model->authNodeSpec = $map['AuthNodeSpec'];
        }

        if (isset($map['InsertNodeNum'])) {
            $model->insertNodeNum = $map['InsertNodeNum'];
        }

        if (isset($map['InsertNodeSpec'])) {
            $model->insertNodeSpec = $map['InsertNodeSpec'];
        }

        if (isset($map['SelectNodeCacheSize'])) {
            $model->selectNodeCacheSize = $map['SelectNodeCacheSize'];
        }

        if (isset($map['SelectNodeNum'])) {
            $model->selectNodeNum = $map['SelectNodeNum'];
        }

        if (isset($map['SelectNodeSpec'])) {
            $model->selectNodeSpec = $map['SelectNodeSpec'];
        }

        if (isset($map['StorageNodeDiskSize'])) {
            $model->storageNodeDiskSize = $map['StorageNodeDiskSize'];
        }

        if (isset($map['StorageNodeDiskType'])) {
            $model->storageNodeDiskType = $map['StorageNodeDiskType'];
        }

        if (isset($map['StorageNodeNum'])) {
            $model->storageNodeNum = $map['StorageNodeNum'];
        }

        if (isset($map['StorageNodeSpec'])) {
            $model->storageNodeSpec = $map['StorageNodeSpec'];
        }

        return $model;
    }
}
