<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SubmitEnterpriseVocAnalysisTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $contentTagsShrink;

    /**
     * @var string
     */
    public $contentsShrink;

    /**
     * @example oss://default/bucket-name/materialDocument/tenant_agent/fileName
     *
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $filterTagsShrink;

    /**
     * @example shortContent
     *
     * @var string
     */
    public $materialType;

    /**
     * @description This parameter is required.
     *
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $positiveSample;

    /**
     * @example oss://default/bucket-name/path/xxx.xlsx
     *
     * @var string
     */
    public $positiveSampleFileKey;

    /**
     * @example lightAppSass
     *
     * @var string
     */
    public $taskType;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'contentTagsShrink' => 'ContentTags',
        'contentsShrink' => 'Contents',
        'fileKey' => 'FileKey',
        'filterTagsShrink' => 'FilterTags',
        'materialType' => 'MaterialType',
        'modelId' => 'ModelId',
        'positiveSample' => 'PositiveSample',
        'positiveSampleFileKey' => 'PositiveSampleFileKey',
        'taskType' => 'TaskType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }
        if (null !== $this->contentTagsShrink) {
            $res['ContentTags'] = $this->contentTagsShrink;
        }
        if (null !== $this->contentsShrink) {
            $res['Contents'] = $this->contentsShrink;
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->filterTagsShrink) {
            $res['FilterTags'] = $this->filterTagsShrink;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->positiveSample) {
            $res['PositiveSample'] = $this->positiveSample;
        }
        if (null !== $this->positiveSampleFileKey) {
            $res['PositiveSampleFileKey'] = $this->positiveSampleFileKey;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitEnterpriseVocAnalysisTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }
        if (isset($map['ContentTags'])) {
            $model->contentTagsShrink = $map['ContentTags'];
        }
        if (isset($map['Contents'])) {
            $model->contentsShrink = $map['Contents'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FilterTags'])) {
            $model->filterTagsShrink = $map['FilterTags'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['PositiveSample'])) {
            $model->positiveSample = $map['PositiveSample'];
        }
        if (isset($map['PositiveSampleFileKey'])) {
            $model->positiveSampleFileKey = $map['PositiveSampleFileKey'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
