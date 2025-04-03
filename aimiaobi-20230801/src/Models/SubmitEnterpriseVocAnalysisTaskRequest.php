<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest\contents;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest\contentTags;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest\filterTags;

class SubmitEnterpriseVocAnalysisTaskRequest extends Model
{
    /**
     * @var contentTags[]
     */
    public $contentTags;

    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var filterTags[]
     */
    public $filterTags;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $positiveSample;

    /**
     * @var string
     */
    public $positiveSampleFileKey;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'contentTags' => 'ContentTags',
        'contents' => 'Contents',
        'fileKey' => 'FileKey',
        'filterTags' => 'FilterTags',
        'materialType' => 'MaterialType',
        'modelId' => 'ModelId',
        'positiveSample' => 'PositiveSample',
        'positiveSampleFileKey' => 'PositiveSampleFileKey',
        'taskType' => 'TaskType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->contentTags)) {
            Model::validateArray($this->contentTags);
        }
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (\is_array($this->filterTags)) {
            Model::validateArray($this->filterTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentTags) {
            if (\is_array($this->contentTags)) {
                $res['ContentTags'] = [];
                $n1 = 0;
                foreach ($this->contentTags as $item1) {
                    $res['ContentTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->filterTags) {
            if (\is_array($this->filterTags)) {
                $res['FilterTags'] = [];
                $n1 = 0;
                foreach ($this->filterTags as $item1) {
                    $res['FilterTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentTags'])) {
            if (!empty($map['ContentTags'])) {
                $model->contentTags = [];
                $n1 = 0;
                foreach ($map['ContentTags'] as $item1) {
                    $model->contentTags[$n1++] = contentTags::fromMap($item1);
                }
            }
        }

        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1++] = contents::fromMap($item1);
                }
            }
        }

        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['FilterTags'])) {
            if (!empty($map['FilterTags'])) {
                $model->filterTags = [];
                $n1 = 0;
                foreach ($map['FilterTags'] as $item1) {
                    $model->filterTags[$n1++] = filterTags::fromMap($item1);
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
