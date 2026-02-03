<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class DatabaseSummary extends Model
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
     * @var string
     */
    public $location;

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
     * @var int
     */
    public $tableCount;

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
    protected $_name = [
        'createdAt' => 'createdAt',
        'databaseName' => 'databaseName',
        'generatedDate' => 'generatedDate',
        'location' => 'location',
        'objTypeArchiveSize' => 'objTypeArchiveSize',
        'objTypeColdArchiveSize' => 'objTypeColdArchiveSize',
        'objTypeIaSize' => 'objTypeIaSize',
        'objTypeStandardSize' => 'objTypeStandardSize',
        'partitionCount' => 'partitionCount',
        'tableCount' => 'tableCount',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
        'totalMetaFileCount' => 'totalMetaFileCount',
        'totalMetaSizeInBytes' => 'totalMetaSizeInBytes',
    ];

    public function validate()
    {
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

        if (null !== $this->location) {
            $res['location'] = $this->location;
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

        if (null !== $this->tableCount) {
            $res['tableCount'] = $this->tableCount;
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

        if (isset($map['location'])) {
            $model->location = $map['location'];
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

        if (isset($map['tableCount'])) {
            $model->tableCount = $map['tableCount'];
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

        return $model;
    }
}
