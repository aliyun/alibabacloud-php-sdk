<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class SubmitTagMiningAnalysisTaskShrinkRequest extends Model
{
    /**
     * @example clueMining
     *
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $contentsShrink;

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
     * @var string
     */
    public $tagsShrink;

    /**
     * @example 给你一条待分析文本数据，请你按照标签体系来对数据进行打标。
     *
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
        'businessType' => 'businessType',
        'contentsShrink' => 'contents',
        'extraInfo' => 'extraInfo',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'tagsShrink' => 'tags',
        'taskDescription' => 'taskDescription',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }
        if (null !== $this->contentsShrink) {
            $res['contents'] = $this->contentsShrink;
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
        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
     * @return SubmitTagMiningAnalysisTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }
        if (isset($map['contents'])) {
            $model->contentsShrink = $map['contents'];
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
            $model->tagsShrink = $map['tags'];
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
