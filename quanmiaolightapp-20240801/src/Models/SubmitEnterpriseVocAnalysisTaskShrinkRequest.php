<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class SubmitEnterpriseVocAnalysisTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentsShrink;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $filterTagsShrink;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'contentsShrink' => 'contents',
        'extraInfo' => 'extraInfo',
        'fileKey' => 'fileKey',
        'filterTagsShrink' => 'filterTags',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'tagsShrink' => 'tags',
        'taskDescription' => 'taskDescription',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentsShrink) {
            $res['contents'] = $this->contentsShrink;
        }

        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }

        if (null !== $this->fileKey) {
            $res['fileKey'] = $this->fileKey;
        }

        if (null !== $this->filterTagsShrink) {
            $res['filterTags'] = $this->filterTagsShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contents'])) {
            $model->contentsShrink = $map['contents'];
        }

        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }

        if (isset($map['fileKey'])) {
            $model->fileKey = $map['fileKey'];
        }

        if (isset($map['filterTags'])) {
            $model->filterTagsShrink = $map['filterTags'];
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
