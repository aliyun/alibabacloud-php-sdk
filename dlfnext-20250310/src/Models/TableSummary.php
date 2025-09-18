<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class TableSummary extends Model
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
     * @var string
     */
    public $generatedDate;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $objTypeArchiveSize;

    /**
     * @var int
     */
    public $objTypeColdArchiveSize;

    /**
     * @var int
     */
    public $objTypeIaSize;

    /**
     * @var int
     */
    public $objTypeStandardSize;

    /**
     * @var int
     */
    public $partitionCount;

    /**
     * @var string
     */
    public $path;

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
    public $totalMetaSizeInBytes;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'databaseName' => 'databaseName',
        'generatedDate' => 'generatedDate',
        'lastAccessTime' => 'lastAccessTime',
        'objTypeArchiveSize' => 'objTypeArchiveSize',
        'objTypeColdArchiveSize' => 'objTypeColdArchiveSize',
        'objTypeIaSize' => 'objTypeIaSize',
        'objTypeStandardSize' => 'objTypeStandardSize',
        'partitionCount' => 'partitionCount',
        'path' => 'path',
        'storageActionParams' => 'storageActionParams',
        'storageActionTimestamp' => 'storageActionTimestamp',
        'storageClass' => 'storageClass',
        'tableName' => 'tableName',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
        'totalMetaSizeInBytes' => 'totalMetaSizeInBytes',
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

        if (null !== $this->generatedDate) {
            $res['generatedDate'] = $this->generatedDate;
        }

        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }

        if (null !== $this->objTypeArchiveSize) {
            $res['objTypeArchiveSize'] = $this->objTypeArchiveSize;
        }

        if (null !== $this->objTypeColdArchiveSize) {
            $res['objTypeColdArchiveSize'] = $this->objTypeColdArchiveSize;
        }

        if (null !== $this->objTypeIaSize) {
            $res['objTypeIaSize'] = $this->objTypeIaSize;
        }

        if (null !== $this->objTypeStandardSize) {
            $res['objTypeStandardSize'] = $this->objTypeStandardSize;
        }

        if (null !== $this->partitionCount) {
            $res['partitionCount'] = $this->partitionCount;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
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

        if (null !== $this->totalMetaSizeInBytes) {
            $res['totalMetaSizeInBytes'] = $this->totalMetaSizeInBytes;
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

        if (isset($map['generatedDate'])) {
            $model->generatedDate = $map['generatedDate'];
        }

        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }

        if (isset($map['objTypeArchiveSize'])) {
            $model->objTypeArchiveSize = $map['objTypeArchiveSize'];
        }

        if (isset($map['objTypeColdArchiveSize'])) {
            $model->objTypeColdArchiveSize = $map['objTypeColdArchiveSize'];
        }

        if (isset($map['objTypeIaSize'])) {
            $model->objTypeIaSize = $map['objTypeIaSize'];
        }

        if (isset($map['objTypeStandardSize'])) {
            $model->objTypeStandardSize = $map['objTypeStandardSize'];
        }

        if (isset($map['partitionCount'])) {
            $model->partitionCount = $map['partitionCount'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
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

        if (isset($map['totalMetaSizeInBytes'])) {
            $model->totalMetaSizeInBytes = $map['totalMetaSizeInBytes'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
