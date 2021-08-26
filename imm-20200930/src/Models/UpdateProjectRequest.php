<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectRequest extends Model
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
     * @description 项目描述
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $projectQPS;

    /**
     * @var int
     */
    public $projectTPS;

    /**
     * @var int
     */
    public $projectMaxDatasetCount;

    /**
     * @var int
     */
    public $datasetMaxOSSBindCount;

    /**
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @var string[]
     */
    public $resetItems;
    protected $_name = [
        'projectName'             => 'ProjectName',
        'serviceRole'             => 'ServiceRole',
        'description'             => 'Description',
        'templateId'              => 'TemplateId',
        'projectQPS'              => 'ProjectQPS',
        'projectTPS'              => 'ProjectTPS',
        'projectMaxDatasetCount'  => 'ProjectMaxDatasetCount',
        'datasetMaxOSSBindCount'  => 'DatasetMaxOSSBindCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'resetItems'              => 'ResetItems',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (null !== $this->resetItems) {
            $res['ResetItems'] = $this->resetItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
        if (isset($map['ResetItems'])) {
            if (!empty($map['ResetItems'])) {
                $model->resetItems = $map['ResetItems'];
            }
        }

        return $model;
    }
}
