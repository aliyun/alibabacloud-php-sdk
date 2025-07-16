<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class PartitionSummary extends Model
{
    /**
     * @description Partition creation timestamp in milliseconds
     *
     * @var int
     */
    public $createdAt;

    /**
     * @description Database name
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Total files in partition
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * @description Partition identifier
     *
     * @var string
     */
    public $partitionName;

    /**
     * @description Table name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description 24h access count
     *
     * @var int
     */
    public $totalFileCount;

    /**
     * @description Last data access timestamp in milliseconds
     *
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
        'tableName' => 'tableName',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
        'updatedAt' => 'updatedAt',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return PartitionSummary
     */
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
