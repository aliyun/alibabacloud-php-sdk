<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @example 10000000000
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @example 100000000
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @example 100000000000
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @example 90000000000000000
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example Official:AllFunction
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'datasetMaxBindCount'     => 'DatasetMaxBindCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'datasetName'             => 'DatasetName',
        'description'             => 'Description',
        'projectName'             => 'ProjectName',
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
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatasetRequest
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
