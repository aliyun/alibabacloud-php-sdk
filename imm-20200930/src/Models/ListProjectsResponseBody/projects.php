<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class projects extends Model
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
     * @description 工作流
     *
     * @var string
     */
    public $workflow;

    /**
     * @description 项目描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 项目创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 项目上次修改时间
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 项目QPS
     *
     * @var int
     */
    public $projectQPS;

    /**
     * @description 项目TPS
     *
     * @var int
     */
    public $projectTPS;

    /**
     * @description 最大媒体集数
     *
     * @var int
     */
    public $projectMaxDatasetCount;

    /**
     * @description 项目下每个媒体集最多绑定数
     *
     * @var int
     */
    public $datasetMaxOSSBindCount;

    /**
     * @description 项目下每个媒体集最大文件数量
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @description 项目下每个媒体集最大实体数
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @description 项目下每个媒体集最大关系数
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @description 项目下每个媒体集最大文件总大小
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @description 媒体集数量
     *
     * @var int
     */
    public $datasetCount;
    protected $_name = [
        'projectName'             => 'ProjectName',
        'serviceRole'             => 'ServiceRole',
        'workflow'                => 'Workflow',
        'description'             => 'Description',
        'createTime'              => 'CreateTime',
        'updateTime'              => 'UpdateTime',
        'projectQPS'              => 'ProjectQPS',
        'projectTPS'              => 'ProjectTPS',
        'projectMaxDatasetCount'  => 'ProjectMaxDatasetCount',
        'datasetMaxOSSBindCount'  => 'DatasetMaxOSSBindCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'datasetCount'            => 'DatasetCount',
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
        if (null !== $this->workflow) {
            $res['Workflow'] = $this->workflow;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->projectQPS) {
            $res['ProjectQPS'] = $this->projectQPS;
        }
        if (null !== $this->projectTPS) {
            $res['ProjectTPS'] = $this->projectTPS;
        }
        if (null !== $this->projectMaxDatasetCount) {
            $res['ProjectMaxDatasetCount'] = $this->projectMaxDatasetCount;
        }
        if (null !== $this->datasetMaxOSSBindCount) {
            $res['DatasetMaxOSSBindCount'] = $this->datasetMaxOSSBindCount;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projects
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
        if (isset($map['Workflow'])) {
            $model->workflow = $map['Workflow'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ProjectQPS'])) {
            $model->projectQPS = $map['ProjectQPS'];
        }
        if (isset($map['ProjectTPS'])) {
            $model->projectTPS = $map['ProjectTPS'];
        }
        if (isset($map['ProjectMaxDatasetCount'])) {
            $model->projectMaxDatasetCount = $map['ProjectMaxDatasetCount'];
        }
        if (isset($map['DatasetMaxOSSBindCount'])) {
            $model->datasetMaxOSSBindCount = $map['DatasetMaxOSSBindCount'];
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

        return $model;
    }
}
