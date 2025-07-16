<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class DatabaseSummary extends Model
{
    /**
     * @description Creation timestamp in milliseconds
     *
     * @var int
     */
    public $createdAt;

    /**
     * @description 库名 - Database name
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Last profile update date in format yyyyMMdd
     *
     * @var string
     */
    public $generatedDate;

    /**
     * @description Storage location URI
     *
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $partitionCount;

    /**
     * @description Total storage in bytes
     *
     * @var int
     */
    public $tableCount;

    /**
     * @var int
     */
    public $totalFileCount;

    /**
     * @description Total file count
     *
     * @var int
     */
    public $totalFileSizeInBytes;
    protected $_name = [
        'createdAt' => 'createdAt',
        'databaseName' => 'databaseName',
        'generatedDate' => 'generatedDate',
        'location' => 'location',
        'partitionCount' => 'partitionCount',
        'tableCount' => 'tableCount',
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
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->partitionCount) {
            $res['partitionCount'] = $this->partitionCount;
        }
        if (null !== $this->tableCount) {
            $res['tableCount'] = $this->tableCount;
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
     * @return DatabaseSummary
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
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['partitionCount'])) {
            $model->partitionCount = $map['partitionCount'];
        }
        if (isset($map['tableCount'])) {
            $model->tableCount = $map['tableCount'];
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
