<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisRequest\filterTags;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisRequest\tags;

class RunEnterpriseVocAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $akProxy;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $extraInfo;

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
    protected $_name = [
        'akProxy' => 'akProxy',
        'apiKey' => 'apiKey',
        'content' => 'content',
        'extraInfo' => 'extraInfo',
        'filterTags' => 'filterTags',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'sourceTrace' => 'sourceTrace',
        'tags' => 'tags',
        'taskDescription' => 'taskDescription',
    ];

    public function validate()
    {
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
        if (null !== $this->akProxy) {
            $res['akProxy'] = $this->akProxy;
        }

        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
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

        if (null !== $this->sourceTrace) {
            $res['sourceTrace'] = $this->sourceTrace;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['akProxy'])) {
            $model->akProxy = $map['akProxy'];
        }

        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
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

        if (isset($map['sourceTrace'])) {
            $model->sourceTrace = $map['sourceTrace'];
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

        return $model;
    }
}
