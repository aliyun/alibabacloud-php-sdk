<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class TableSummary extends Model
{
    /**
     * @description Latest snapshot storage size
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
     * @var string
     */
    public $generatedDate;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @description Creation timestamp in milliseconds
     *
     * @var int
     */
    public $partitionCount;

    /**
     * @var string
     */
    public $path;

    /**
     * @description Table name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description 30-day access count
     *
     * @var int
     */
    public $totalFileCount;

    /**
     * @var int
     */
    public $totalFileSizeInBytes;
    protected $_name = [
        'createdAt' => 'createdAt',
        'databaseName' => 'databaseName',
        'generatedDate' => 'generatedDate',
        'lastAccessTime' => 'lastAccessTime',
        'partitionCount' => 'partitionCount',
        'path' => 'path',
        'tableName' => 'tableName',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
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
        if (null !== $this->generatedDate) {
            $res['generatedDate'] = $this->generatedDate;
        }
        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->partitionCount) {
            $res['partitionCount'] = $this->partitionCount;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableSummary
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
        if (isset($map['generatedDate'])) {
            $model->generatedDate = $map['generatedDate'];
        }
        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }
        if (isset($map['partitionCount'])) {
            $model->partitionCount = $map['partitionCount'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
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

        return $model;
    }
}
