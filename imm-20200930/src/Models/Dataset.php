<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Dataset extends Model
{
    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 媒体集名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 媒体集最大绑定数
     *
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @description 媒体集最多文件数量
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @description 媒体集最多实体数量
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @description 媒体集最多关系数量
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @description 媒体集最大文件总大小
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @description 媒体集当前绑定数
     *
     * @var int
     */
    public $bindCount;

    /**
     * @description 媒体集当前文件数
     *
     * @var int
     */
    public $fileCount;

    /**
     * @description 媒体集当前文件总大小
     *
     * @var int
     */
    public $totalFileSize;
    protected $_name = [
        'projectName'             => 'ProjectName',
        'datasetName'             => 'DatasetName',
        'createTime'              => 'CreateTime',
        'updateTime'              => 'UpdateTime',
        'description'             => 'Description',
        'datasetMaxBindCount'     => 'DatasetMaxBindCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'bindCount'               => 'BindCount',
        'fileCount'               => 'FileCount',
        'totalFileSize'           => 'TotalFileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->datasetMaxBindCount) {
            $res['DatasetMaxBindCount'] = $this->datasetMaxBindCount;
        }
        if (null !== $this->datasetMaxFileCount) {
            $res['DatasetMaxFileCount'] = $this->datasetMaxFileCount;
        }
        if (null !== $this->datasetMaxEntityCount) {
            $res['DatasetMaxEntityCount'] = $this->datasetMaxEntityCount;
        }
        if (null !== $this->datasetMaxRelationCount) {
            $res['DatasetMaxRelationCount'] = $this->datasetMaxRelationCount;
        }
        if (null !== $this->datasetMaxTotalFileSize) {
            $res['DatasetMaxTotalFileSize'] = $this->datasetMaxTotalFileSize;
        }
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }
        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }
        if (null !== $this->totalFileSize) {
            $res['TotalFileSize'] = $this->totalFileSize;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DatasetMaxBindCount'])) {
            $model->datasetMaxBindCount = $map['DatasetMaxBindCount'];
        }
        if (isset($map['DatasetMaxFileCount'])) {
            $model->datasetMaxFileCount = $map['DatasetMaxFileCount'];
        }
        if (isset($map['DatasetMaxEntityCount'])) {
            $model->datasetMaxEntityCount = $map['DatasetMaxEntityCount'];
        }
        if (isset($map['DatasetMaxRelationCount'])) {
            $model->datasetMaxRelationCount = $map['DatasetMaxRelationCount'];
        }
        if (isset($map['DatasetMaxTotalFileSize'])) {
            $model->datasetMaxTotalFileSize = $map['DatasetMaxTotalFileSize'];
        }
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }
        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }
        if (isset($map['TotalFileSize'])) {
            $model->totalFileSize = $map['TotalFileSize'];
        }

        return $model;
    }
}
