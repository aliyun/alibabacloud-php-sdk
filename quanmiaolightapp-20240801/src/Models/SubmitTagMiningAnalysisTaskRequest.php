<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitTagMiningAnalysisTaskRequest\tags;

class SubmitTagMiningAnalysisTaskRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string[]
     */
    public $contents;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'apiKey' => 'apiKey',
        'businessType' => 'businessType',
        'contents' => 'contents',
        'extraInfo' => 'extraInfo',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'tags' => 'tags',
        'taskDescription' => 'taskDescription',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }

        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['contents'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }

        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['contents'] as $item1) {
                    $model->contents[$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
