<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
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
    public $description;

    /**
     * @var int
     */
    public $engineConcurrency;

    /**
     * @var int
     */
    public $projectMaxDatasetCount;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $projectQueriesPerSecond;

    /**
     * @var string
     */
    public $serviceRole;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'datasetMaxBindCount'     => 'DatasetMaxBindCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'description'             => 'Description',
        'engineConcurrency'       => 'EngineConcurrency',
        'projectMaxDatasetCount'  => 'ProjectMaxDatasetCount',
        'projectName'             => 'ProjectName',
        'projectQueriesPerSecond' => 'ProjectQueriesPerSecond',
        'serviceRole'             => 'ServiceRole',
        'templateId'              => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->engineConcurrency) {
            $res['EngineConcurrency'] = $this->engineConcurrency;
        }
        if (null !== $this->projectMaxDatasetCount) {
            $res['ProjectMaxDatasetCount'] = $this->projectMaxDatasetCount;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectQueriesPerSecond) {
            $res['ProjectQueriesPerSecond'] = $this->projectQueriesPerSecond;
        }
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EngineConcurrency'])) {
            $model->engineConcurrency = $map['EngineConcurrency'];
        }
        if (isset($map['ProjectMaxDatasetCount'])) {
            $model->projectMaxDatasetCount = $map['ProjectMaxDatasetCount'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectQueriesPerSecond'])) {
            $model->projectQueriesPerSecond = $map['ProjectQueriesPerSecond'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
