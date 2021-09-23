<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Project extends Model
{
    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 服务角色
     *
     * @var string
     */
    public $serviceRole;

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
     * @description 项目QPS
     *
     * @var int
     */
    public $projectQueriesPerSecond;

    /**
     * @description 项目最大并发数
     *
     * @var int
     */
    public $engineConcurrency;

    /**
     * @description 项目最多媒体集数量
     *
     * @var int
     */
    public $projectMaxDatasetCount;

    /**
     * @description 项目最多绑定数
     *
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @description 项目最多文件数
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @description 项目最多实体数
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @description 项目最多关系数
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @description 项目最大文件总大小
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @description 项目当前媒体集数
     *
     * @var int
     */
    public $datasetCount;

    /**
     * @description 项目当前文件数
     *
     * @var int
     */
    public $fileCount;

    /**
     * @description 项目当前文件总大小
     *
     * @var int
     */
    public $totalFileSize;
    protected $_name = [
        'projectName'             => 'ProjectName',
        'serviceRole'             => 'ServiceRole',
        'createTime'              => 'CreateTime',
        'updateTime'              => 'UpdateTime',
        'description'             => 'Description',
        'projectQueriesPerSecond' => 'ProjectQueriesPerSecond',
        'engineConcurrency'       => 'EngineConcurrency',
        'projectMaxDatasetCount'  => 'ProjectMaxDatasetCount',
        'datasetMaxBindCount'     => 'DatasetMaxBindCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'datasetCount'            => 'DatasetCount',
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
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
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
        if (null !== $this->projectQueriesPerSecond) {
            $res['ProjectQueriesPerSecond'] = $this->projectQueriesPerSecond;
        }
        if (null !== $this->engineConcurrency) {
            $res['EngineConcurrency'] = $this->engineConcurrency;
        }
        if (null !== $this->projectMaxDatasetCount) {
            $res['ProjectMaxDatasetCount'] = $this->projectMaxDatasetCount;
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
        if (null !== $this->datasetCount) {
            $res['DatasetCount'] = $this->datasetCount;
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
     * @return Project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
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
        if (isset($map['ProjectQueriesPerSecond'])) {
            $model->projectQueriesPerSecond = $map['ProjectQueriesPerSecond'];
        }
        if (isset($map['EngineConcurrency'])) {
            $model->engineConcurrency = $map['EngineConcurrency'];
        }
        if (isset($map['ProjectMaxDatasetCount'])) {
            $model->projectMaxDatasetCount = $map['ProjectMaxDatasetCount'];
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
        if (isset($map['DatasetCount'])) {
            $model->datasetCount = $map['DatasetCount'];
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
