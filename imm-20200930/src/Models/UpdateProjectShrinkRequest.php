<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class UpdateProjectShrinkRequest extends Model
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
    public $projectMaxDatasetCount;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $serviceRole;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'datasetMaxBindCount' => 'DatasetMaxBindCount',
        'datasetMaxEntityCount' => 'DatasetMaxEntityCount',
        'datasetMaxFileCount' => 'DatasetMaxFileCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
        'description' => 'Description',
        'projectMaxDatasetCount' => 'ProjectMaxDatasetCount',
        'projectName' => 'ProjectName',
        'serviceRole' => 'ServiceRole',
        'tagShrink' => 'Tag',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
