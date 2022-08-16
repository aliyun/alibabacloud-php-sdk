<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Dataset extends Model
{
    /**
     * @var int
     */
    public $bindCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $totalFileSize;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'bindCount'               => 'BindCount',
        'createTime'              => 'CreateTime',
        'datasetMaxBindCount'     => 'DatasetMaxBindCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'datasetName'             => 'DatasetName',
        'description'             => 'Description',
        'fileCount'               => 'FileCount',
        'projectName'             => 'ProjectName',
        'totalFileSize'           => 'TotalFileSize',
        'updateTime'              => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->datasetMaxBindCount) {
            $res['DatasetMaxBindCount'] = $this->datasetMaxBindCount;
        }
        if (null !== $this->datasetMaxEntityCount) {
            $res['DatasetMaxEntityCount'] = $this->datasetMaxEntityCount;
        }
        if (null !== $this->datasetMaxFileCount) {
            $res['DatasetMaxFileCount'] = $this->datasetMaxFileCount;
        }
        if (null !== $this->datasetMaxRelationCount) {
            $res['DatasetMaxRelationCount'] = $this->datasetMaxRelationCount;
        }
        if (null !== $this->datasetMaxTotalFileSize) {
            $res['DatasetMaxTotalFileSize'] = $this->datasetMaxTotalFileSize;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->totalFileSize) {
            $res['TotalFileSize'] = $this->totalFileSize;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Dataset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatasetMaxBindCount'])) {
            $model->datasetMaxBindCount = $map['DatasetMaxBindCount'];
        }
        if (isset($map['DatasetMaxEntityCount'])) {
            $model->datasetMaxEntityCount = $map['DatasetMaxEntityCount'];
        }
        if (isset($map['DatasetMaxFileCount'])) {
            $model->datasetMaxFileCount = $map['DatasetMaxFileCount'];
        }
        if (isset($map['DatasetMaxRelationCount'])) {
            $model->datasetMaxRelationCount = $map['DatasetMaxRelationCount'];
        }
        if (isset($map['DatasetMaxTotalFileSize'])) {
            $model->datasetMaxTotalFileSize = $map['DatasetMaxTotalFileSize'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TotalFileSize'])) {
            $model->totalFileSize = $map['TotalFileSize'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
