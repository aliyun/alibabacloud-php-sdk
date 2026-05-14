<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HiMarketModelFeature extends Model
{
    /**
     * @var bool
     */
    public $enableMultiModal;

    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $streaming;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var bool
     */
    public $webSearch;
    protected $_name = [
        'enableMultiModal' => 'enableMultiModal',
        'enableThinking' => 'enableThinking',
        'maxTokens' => 'maxTokens',
        'model' => 'model',
        'streaming' => 'streaming',
        'temperature' => 'temperature',
        'webSearch' => 'webSearch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableMultiModal) {
            $res['enableMultiModal'] = $this->enableMultiModal;
        }

        if (null !== $this->enableThinking) {
            $res['enableThinking'] = $this->enableThinking;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->streaming) {
            $res['streaming'] = $this->streaming;
        }

        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }

        if (null !== $this->webSearch) {
            $res['webSearch'] = $this->webSearch;
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
        if (isset($map['enableMultiModal'])) {
            $model->enableMultiModal = $map['enableMultiModal'];
        }

        if (isset($map['enableThinking'])) {
            $model->enableThinking = $map['enableThinking'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['streaming'])) {
            $model->streaming = $map['streaming'];
        }

        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }

        if (isset($map['webSearch'])) {
            $model->webSearch = $map['webSearch'];
        }

        return $model;
    }
}
