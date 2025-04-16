<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest\contents;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest\filterTags;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest\tags;

class SubmitEnterpriseVocAnalysisTaskRequest extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var string
     */
    public $extraInfo;

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
        'contents' => 'contents',
        'extraInfo' => 'extraInfo',
        'fileKey' => 'fileKey',
        'filterTags' => 'filterTags',
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
        if (\is_array($this->filterTags)) {
            Model::validateArray($this->filterTags);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['contents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->filterTags)) {
                $res['filterTags'] = [];
                $n1 = 0;
                foreach ($this->filterTags as $item1) {
                    $res['filterTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['contents'] as $item1) {
                    $model->contents[$n1++] = contents::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['filterTags'] as $item1) {
                    $model->filterTags[$n1++] = filterTags::fromMap($item1);
                }
            }
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
                    $model->tags[$n1++] = tags::fromMap($item1);
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
