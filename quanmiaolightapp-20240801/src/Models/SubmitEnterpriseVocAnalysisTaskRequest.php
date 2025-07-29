<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest\contents;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest\filterTags;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest\tags;
use AlibabaCloud\Tea\Model;

class SubmitEnterpriseVocAnalysisTaskRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @example oss://default/aimiaobi-service-prod/aimiaobi/temp/public/government_service_experience_feedback_summary.txt
     *
     * @var string
     */
    public $fileKey;

    /**
     * @var filterTags[]
     */
    public $filterTags;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var bool
     */
    public $sourceTrace;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @example http://www.example.com/xxxx.txt
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'apiKey' => 'apiKey',
        'contents' => 'contents',
        'extraInfo' => 'extraInfo',
        'fileKey' => 'fileKey',
        'filterTags' => 'filterTags',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'sourceTrace' => 'sourceTrace',
        'tags' => 'tags',
        'taskDescription' => 'taskDescription',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }
        if (null !== $this->contents) {
            $res['contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->fileKey) {
            $res['fileKey'] = $this->fileKey;
        }
        if (null !== $this->filterTags) {
            $res['filterTags'] = [];
            if (null !== $this->filterTags && \is_array($this->filterTags)) {
                $n = 0;
                foreach ($this->filterTags as $item) {
                    $res['filterTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->outputFormat) {
            $res['outputFormat'] = $this->outputFormat;
        }
        if (null !== $this->sourceTrace) {
            $res['sourceTrace'] = $this->sourceTrace;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }
        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n = 0;
                foreach ($map['contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['fileKey'])) {
            $model->fileKey = $map['fileKey'];
        }
        if (isset($map['filterTags'])) {
            if (!empty($map['filterTags'])) {
                $model->filterTags = [];
                $n = 0;
                foreach ($map['filterTags'] as $item) {
                    $model->filterTags[$n++] = null !== $item ? filterTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['outputFormat'])) {
            $model->outputFormat = $map['outputFormat'];
        }
        if (isset($map['sourceTrace'])) {
            $model->sourceTrace = $map['sourceTrace'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
