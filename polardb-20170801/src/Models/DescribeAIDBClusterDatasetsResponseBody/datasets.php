<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterDatasetsResponseBody;

use AlibabaCloud\Dara\Model;

class datasets extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $trainMode;
    protected $_name = [
        'bucketName' => 'BucketName',
        'capacity' => 'Capacity',
        'creationTime' => 'CreationTime',
        'datasetId' => 'DatasetId',
        'datasetType' => 'DatasetType',
        'fileName' => 'FileName',
        'lastModified' => 'LastModified',
        'path' => 'Path',
        'storageType' => 'StorageType',
        'trainMode' => 'TrainMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->trainMode) {
            $res['TrainMode'] = $this->trainMode;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['TrainMode'])) {
            $model->trainMode = $map['TrainMode'];
        }

        return $model;
    }
}
