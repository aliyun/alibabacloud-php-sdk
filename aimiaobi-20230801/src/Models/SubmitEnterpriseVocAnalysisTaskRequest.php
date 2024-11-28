<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest\contents;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest\contentTags;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest\filterTags;
use AlibabaCloud\Tea\Model;

class SubmitEnterpriseVocAnalysisTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var contentTags[]
     */
    public $contentTags;

    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @example oss://default/bucket-name/materialDocument/tenant_agent/fileName
     *
     * @var string
     */
    public $fileKey;

    /**
     * @var filterTags[]
     */
    public $filterTags;

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
        'contentTags'           => 'ContentTags',
        'contents'              => 'Contents',
        'fileKey'               => 'FileKey',
        'filterTags'            => 'FilterTags',
        'materialType'          => 'MaterialType',
        'modelId'               => 'ModelId',
        'positiveSample'        => 'PositiveSample',
        'positiveSampleFileKey' => 'PositiveSampleFileKey',
        'taskType'              => 'TaskType',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentTags) {
            $res['ContentTags'] = [];
            if (null !== $this->contentTags && \is_array($this->contentTags)) {
                $n = 0;
                foreach ($this->contentTags as $item) {
                    $res['ContentTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->filterTags) {
            $res['FilterTags'] = [];
            if (null !== $this->filterTags && \is_array($this->filterTags)) {
                $n = 0;
                foreach ($this->filterTags as $item) {
                    $res['FilterTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return SubmitEnterpriseVocAnalysisTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentTags'])) {
            if (!empty($map['ContentTags'])) {
                $model->contentTags = [];
                $n                  = 0;
                foreach ($map['ContentTags'] as $item) {
                    $model->contentTags[$n++] = null !== $item ? contentTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FilterTags'])) {
            if (!empty($map['FilterTags'])) {
                $model->filterTags = [];
                $n                 = 0;
                foreach ($map['FilterTags'] as $item) {
                    $model->filterTags[$n++] = null !== $item ? filterTags::fromMap($item) : $item;
                }
            }
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
