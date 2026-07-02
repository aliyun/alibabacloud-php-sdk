<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $totalFileSize;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var WorkflowParameter[]
     */
    public $workflowParameters;
    protected $_name = [
        'bindCount' => 'BindCount',
        'createTime' => 'CreateTime',
        'datasetMaxBindCount' => 'DatasetMaxBindCount',
        'datasetMaxEntityCount' => 'DatasetMaxEntityCount',
        'datasetMaxFileCount' => 'DatasetMaxFileCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'datasetName' => 'DatasetName',
        'description' => 'Description',
        'fileCount' => 'FileCount',
        'projectName' => 'ProjectName',
        'templateId' => 'TemplateId',
        'totalFileSize' => 'TotalFileSize',
        'updateTime' => 'UpdateTime',
        'workflowParameters' => 'WorkflowParameters',
    ];

    public function validate()
    {
        if (\is_array($this->workflowParameters)) {
            Model::validateArray($this->workflowParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->totalFileSize) {
            $res['TotalFileSize'] = $this->totalFileSize;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->workflowParameters) {
            if (\is_array($this->workflowParameters)) {
                $res['WorkflowParameters'] = [];
                $n1 = 0;
                foreach ($this->workflowParameters as $item1) {
                    $res['WorkflowParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TotalFileSize'])) {
            $model->totalFileSize = $map['TotalFileSize'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['WorkflowParameters'])) {
            if (!empty($map['WorkflowParameters'])) {
                $model->workflowParameters = [];
                $n1 = 0;
                foreach ($map['WorkflowParameters'] as $item1) {
                    $model->workflowParameters[$n1] = WorkflowParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
