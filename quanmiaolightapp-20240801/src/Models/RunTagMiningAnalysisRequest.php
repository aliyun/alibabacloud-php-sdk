<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunTagMiningAnalysisRequest\tags;
use AlibabaCloud\Tea\Model;

class RunTagMiningAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @example clueMining
     *
     * @var string
     */
    public $businessType;

    /**
     * @description This parameter is required.
     *
     * @example 待分析文本
     *
     * @var string
     */
    public $content;

    /**
     * @example 额外信息
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 请返回如下JSON格式，{"key1":"","key2":""}
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 给你一条待分析文本数据，请你按照标签体系来对数据进行打标。
     *
     * @var string
     */
    public $taskDescription;
    protected $_name = [
        'apiKey' => 'apiKey',
        'businessType' => 'businessType',
        'content' => 'content',
        'extraInfo' => 'extraInfo',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'tags' => 'tags',
        'taskDescription' => 'taskDescription',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }
        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->outputFormat) {
            $res['outputFormat'] = $this->outputFormat;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunTagMiningAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }
        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['outputFormat'])) {
            $model->outputFormat = $map['outputFormat'];
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

        return $model;
    }
}
