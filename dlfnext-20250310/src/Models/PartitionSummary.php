<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class PartitionSummary extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var string
     */
    public $partitionName;

    /**
     * @var string[]
     */
    public $storageActionParams;

    /**
     * @var int
     */
    public $storageActionTimestamp;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $totalFileCount;

    /**
     * @var int
     */
    public $totalFileSizeInBytes;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'databaseName' => 'databaseName',
        'lastAccessTime' => 'lastAccessTime',
        'partitionName' => 'partitionName',
        'storageActionParams' => 'storageActionParams',
        'storageActionTimestamp' => 'storageActionTimestamp',
        'storageClass' => 'storageClass',
        'tableName' => 'tableName',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->storageActionParams)) {
            Model::validateArray($this->storageActionParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
        }

        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }

        if (null !== $this->partitionName) {
            $res['partitionName'] = $this->partitionName;
        }

        if (null !== $this->storageActionParams) {
            if (\is_array($this->storageActionParams)) {
                $res['storageActionParams'] = [];
                foreach ($this->storageActionParams as $key1 => $value1) {
                    $res['storageActionParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->storageActionTimestamp) {
            $res['storageActionTimestamp'] = $this->storageActionTimestamp;
        }

        if (null !== $this->storageClass) {
            $res['storageClass'] = $this->storageClass;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->totalFileCount) {
            $res['totalFileCount'] = $this->totalFileCount;
        }

        if (null !== $this->totalFileSizeInBytes) {
            $res['totalFileSizeInBytes'] = $this->totalFileSizeInBytes;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }

        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }

        if (isset($map['partitionName'])) {
            $model->partitionName = $map['partitionName'];
        }

        if (isset($map['storageActionParams'])) {
            if (!empty($map['storageActionParams'])) {
                $model->storageActionParams = [];
                foreach ($map['storageActionParams'] as $key1 => $value1) {
                    $model->storageActionParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['storageActionTimestamp'])) {
            $model->storageActionTimestamp = $map['storageActionTimestamp'];
        }

        if (isset($map['storageClass'])) {
            $model->storageClass = $map['storageClass'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['totalFileCount'])) {
            $model->totalFileCount = $map['totalFileCount'];
        }

        if (isset($map['totalFileSizeInBytes'])) {
            $model->totalFileSizeInBytes = $map['totalFileSizeInBytes'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
