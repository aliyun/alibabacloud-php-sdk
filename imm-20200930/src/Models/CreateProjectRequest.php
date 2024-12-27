<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @description The maximum number of bindings for each dataset. Valid values: 1 to 10. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @description The maximum number of metadata entities in each dataset. Default value: 10000000000.
     *
     * >  This is a precautionary setting that does not impose practical limitations.
     * @example 10000000000
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @description The maximum number of files in each dataset. Valid values: 1 to 100000000. Default value: 10000000000.
     *
     * @example 100000000
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @description The maximum number of metadata relationships in each dataset. Default value: 100000000000.
     *
     * >  This is a precautionary setting that does not impose practical limitations.
     * @example 100000000000
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @description The maximum size of files in each dataset. If the maximum size is exceeded, no indexes can be added. Unit: bytes. Default value: 90000000000000000.
     *
     * @example 90000000000000000
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;

    /**
     * @description The description of the project. The description must be 1 to 256 characters in length. You can leave this parameter empty.
     *
     * @example immtest
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum number of datasets in the project. Valid values: 1 to 1000000000. Default value: 1000000000.
     *
     * @example 1000000000
     *
     * @var int
     */
    public $projectMaxDatasetCount;

    /**
     * @description The name of the project. The name must meet the following requirements:
     *
     *   The name must be 1 to 128 characters in length
     *   and can contain only letters, digits, hyphens (-), and underscores (_).
     *   The name must start with a letter or an underscores (_).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the Resource Access Management (RAM) role. You must attach the RAM role to IMM to allow IMM to access other cloud resources, such as Object Storage Service (OSS). Default value: `AliyunIMMDefaultRole`.
     *
     * You can also create a custom role in the RAM console and grant the required permissions to the role based on your business requirements. For more information, see [Grant permissions to a RAM user](https://help.aliyun.com/document_detail/477257.html).
     * @example AliyunIMMDefaultRole
     *
     * @var string
     */
    public $serviceRole;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the workflow template. You can leave this parameter empty. For more information, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
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
        'description'             => 'Description',
        'projectMaxDatasetCount'  => 'ProjectMaxDatasetCount',
        'projectName'             => 'ProjectName',
        'serviceRole'             => 'ServiceRole',
        'tag'                     => 'Tag',
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
