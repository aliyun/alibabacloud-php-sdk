<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectShrinkRequest extends Model
{
    /**
     * @description The maximum number of bindings for each dataset. Valid values: 1 to 10.
     *
     * @example 10
     *
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @description The maximum number of metadata entities in each dataset.
     *
     * >  This is a precautionary setting that does not impose practical limitations.
     * @example 10000000000
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @description The maximum number of files in each dataset. Valid values: 1 to 100000000.
     *
     * @example 100000000
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @description The maximum number of metadata relationships in a dataset.
     *
     * >  This is a precautionary setting that does not impose practical limitations.
     * @example 100000000000
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @description The maximum size of files in each dataset. If the maximum size is exceeded, indexes can no longer be added. Unit: bytes.
     *
     * @example 90000000000000000
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @description The description of the project. The description must be 1 to 256 characters in length.
     *
     * @example immtest
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum number of datasets in the project. Valid values: 1 to 1000000000.
     *
     * @example 1000000000
     *
     * @var int
     */
    public $projectMaxDatasetCount;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the Resource Access Management (RAM) role. You must grant the RAM role to Intelligent Media Management (IMM) before IMM can access other cloud resources such as Object Storage Service (OSS).
     *
     * You can also create a custom service role in the RAM console and grant the required permissions to the role based on your business requirements. For more information, see [Create a regular service role](https://help.aliyun.com/document_detail/116800.html) and [Grant permissions to a role](https://help.aliyun.com/document_detail/116147.html).
     * @example AliyunIMMDefaultRole
     *
     * @var string
     */
    public $serviceRole;

    /**
     * @description The tags.
     *
     * @var string
     */
    public $tagShrink;

    /**
     * @description The ID of the workflow template. For more information, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     *
     * @example AliyunIMMDefaultRole
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
        'description'             => 'Description',
        'projectMaxDatasetCount'  => 'ProjectMaxDatasetCount',
        'projectName'             => 'ProjectName',
        'serviceRole'             => 'ServiceRole',
        'tagShrink'               => 'Tag',
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
        if (null !== $this->projectMaxDatasetCount) {
            $res['ProjectMaxDatasetCount'] = $this->projectMaxDatasetCount;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }
        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectShrinkRequest
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
        if (isset($map['ProjectMaxDatasetCount'])) {
            $model->projectMaxDatasetCount = $map['ProjectMaxDatasetCount'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }
        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
