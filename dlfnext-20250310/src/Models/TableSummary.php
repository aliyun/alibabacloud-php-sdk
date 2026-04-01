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
     * @var string
     */
    public $lastRequester;

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
     * @var string
     */
    public $topRequester;

    /**
     * @var int
     */
    public $totalFileAccessNum;

    /**
     * @var int
     */
    public $totalFileAccessNum30d;

    /**
     * @var int
     */
    public $totalFileAccessNum7d;

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
    public $totalMetaFileCount;

    /**
     * @var int
     */
    public $totalMetaSizeInBytes;

    /**
     * @var int
     */
    public $unaccessedStdIaPartitionCount180d;

    /**
     * @var int
     */
    public $unaccessedStdPartitionCount30d;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'databaseName' => 'databaseName',
        'generatedDate' => 'generatedDate',
        'lastAccessTime' => 'lastAccessTime',
        'lastRequester' => 'lastRequester',
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
        'topRequester' => 'topRequester',
        'totalFileAccessNum' => 'totalFileAccessNum',
        'totalFileAccessNum30d' => 'totalFileAccessNum30d',
        'totalFileAccessNum7d' => 'totalFileAccessNum7d',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
        'totalMetaFileCount' => 'totalMetaFileCount',
        'totalMetaSizeInBytes' => 'totalMetaSizeInBytes',
        'unaccessedStdIaPartitionCount180d' => 'unaccessedStdIaPartitionCount180d',
        'unaccessedStdPartitionCount30d' => 'unaccessedStdPartitionCount30d',
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

        if (null !== $this->lastRequester) {
            $res['lastRequester'] = $this->lastRequester;
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

        if (null !== $this->topRequester) {
            $res['topRequester'] = $this->topRequester;
        }

        if (null !== $this->totalFileAccessNum) {
            $res['totalFileAccessNum'] = $this->totalFileAccessNum;
        }

        if (null !== $this->totalFileAccessNum30d) {
            $res['totalFileAccessNum30d'] = $this->totalFileAccessNum30d;
        }

        if (null !== $this->totalFileAccessNum7d) {
            $res['totalFileAccessNum7d'] = $this->totalFileAccessNum7d;
        }

        if (null !== $this->totalFileCount) {
            $res['totalFileCount'] = $this->totalFileCount;
        }

        if (null !== $this->totalFileSizeInBytes) {
            $res['totalFileSizeInBytes'] = $this->totalFileSizeInBytes;
        }

        if (null !== $this->totalMetaFileCount) {
            $res['totalMetaFileCount'] = $this->totalMetaFileCount;
        }

        if (null !== $this->totalMetaSizeInBytes) {
            $res['totalMetaSizeInBytes'] = $this->totalMetaSizeInBytes;
        }

        if (null !== $this->unaccessedStdIaPartitionCount180d) {
            $res['unaccessedStdIaPartitionCount180d'] = $this->unaccessedStdIaPartitionCount180d;
        }

        if (null !== $this->unaccessedStdPartitionCount30d) {
            $res['unaccessedStdPartitionCount30d'] = $this->unaccessedStdPartitionCount30d;
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

        if (isset($map['lastRequester'])) {
            $model->lastRequester = $map['lastRequester'];
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

        if (isset($map['topRequester'])) {
            $model->topRequester = $map['topRequester'];
        }

        if (isset($map['totalFileAccessNum'])) {
            $model->totalFileAccessNum = $map['totalFileAccessNum'];
        }

        if (isset($map['totalFileAccessNum30d'])) {
            $model->totalFileAccessNum30d = $map['totalFileAccessNum30d'];
        }

        if (isset($map['totalFileAccessNum7d'])) {
            $model->totalFileAccessNum7d = $map['totalFileAccessNum7d'];
        }

        if (isset($map['totalFileCount'])) {
            $model->totalFileCount = $map['totalFileCount'];
        }

        if (isset($map['totalFileSizeInBytes'])) {
            $model->totalFileSizeInBytes = $map['totalFileSizeInBytes'];
        }

        if (isset($map['totalMetaFileCount'])) {
            $model->totalMetaFileCount = $map['totalMetaFileCount'];
        }

        if (isset($map['totalMetaSizeInBytes'])) {
            $model->totalMetaSizeInBytes = $map['totalMetaSizeInBytes'];
        }

        if (isset($map['unaccessedStdIaPartitionCount180d'])) {
            $model->unaccessedStdIaPartitionCount180d = $map['unaccessedStdIaPartitionCount180d'];
        }

        if (isset($map['unaccessedStdPartitionCount30d'])) {
            $model->unaccessedStdPartitionCount30d = $map['unaccessedStdPartitionCount30d'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
