<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunEnterpriseVocAnalysisShrinkRequest extends Model
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
     * @var bool
     */
    public $sourceTrace;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $taskDescription;
    protected $_name = [
        'akProxy' => 'akProxy',
        'apiKey' => 'apiKey',
        'content' => 'content',
        'extraInfo' => 'extraInfo',
        'filterTagsShrink' => 'filterTags',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'sourceTrace' => 'sourceTrace',
        'tagsShrink' => 'tags',
        'taskDescription' => 'taskDescription',
    ];

    public function validate()
    {
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

        if (null !== $this->filterTagsShrink) {
            $res['filterTags'] = $this->filterTagsShrink;
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

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
            $model->filterTagsShrink = $map['filterTags'];
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
            $model->tagsShrink = $map['tags'];
        }

        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        return $model;
    }
}
