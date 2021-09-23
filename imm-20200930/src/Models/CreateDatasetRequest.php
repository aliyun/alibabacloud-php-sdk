<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 数据集名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description 对数据集的描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 模板Id
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 媒体集最多帮定数
     *
     * @var int
     */
    public $datasetMaxBindCount;

    /**
     * @description 媒体集最多文件数
     *
     * @var int
     */
    public $datasetMaxFileCount;

    /**
     * @description 媒体集最多实体数
     *
     * @var int
     */
    public $datasetMaxEntityCount;

    /**
     * @description 媒体集最多关系数
     *
     * @var int
     */
    public $datasetMaxRelationCount;

    /**
     * @description 媒体集最大文件总大小
     *
     * @var int
     */
    public $datasetMaxTotalFileSize;
    protected $_name = [
        'projectName'             => 'ProjectName',
        'datasetName'             => 'DatasetName',
        'description'             => 'Description',
        'templateId'              => 'TemplateId',
        'datasetMaxBindCount'     => 'DatasetMaxBindCount',
        'datasetMaxFileCount'     => 'DatasetMaxFileCount',
        'datasetMaxEntityCount'   => 'DatasetMaxEntityCount',
        'datasetMaxRelationCount' => 'DatasetMaxRelationCount',
        'datasetMaxTotalFileSize' => 'DatasetMaxTotalFileSize',
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
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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

        return $model;
    }
}
