<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @description The maximum number of bindings for the dataset. Valid values: 1 to 10. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @description The maximum number of metadata entities in the dataset. Default value: 10000000000.
     *
     * @example 10000000000
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @description The maximum number of files in the dataset. Valid values: 1 to 100000000. Default value: 100000000.
     *
     * @example 100000000
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @description The maximum number of metadata relationships in the dataset. Default value: 100000000000.
     *
     * @example 100000000000
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @description The maximum total file size for the dataset. If the total file size of the dataset exceeds this limit, indexes can no longer be added. Default value: 90000000000000000. Unit: bytes.
     *
     * @example 90000000000000000
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @description The name of the dataset. The dataset name must be unique in the same project. The name must meet the following requirements:
     *
     *   The name must be 1 to 128 characters in length.
     *   The name can contain only letters, digits, hyphens (-), and underscores (_).
     *   The name must start with a letter or underscore (_).
     *
     * This parameter is required.
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The description of the dataset. The description must be 1 to 256 characters in length. You can leave this parameter empty.
     *
     * @example immtest
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the workflow template. For more information, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     *
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
