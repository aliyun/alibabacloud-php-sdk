<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class HalfLLMTTSChatRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $pitchRate;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $sampleRate;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'deviceName' => 'deviceName',
        'enableSearch' => 'enableSearch',
        'format' => 'format',
        'model' => 'model',
        'pitchRate' => 'pitchRate',
        'productKey' => 'productKey',
        'prompt' => 'prompt',
        'sampleRate' => 'sampleRate',
        'sessionId' => 'sessionId',
        'speechRate' => 'speechRate',
        'stream' => 'stream',
        'tenantId' => 'tenantId',
        'text' => 'text',
        'url' => 'url',
        'voice' => 'voice',
        'volume' => 'volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->enableSearch) {
            $res['enableSearch'] = $this->enableSearch;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->pitchRate) {
            $res['pitchRate'] = $this->pitchRate;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->sampleRate) {
            $res['sampleRate'] = $this->sampleRate;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->speechRate) {
            $res['speechRate'] = $this->speechRate;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->voice) {
            $res['voice'] = $this->voice;
        }

        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
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
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['enableSearch'])) {
            $model->enableSearch = $map['enableSearch'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['pitchRate'])) {
            $model->pitchRate = $map['pitchRate'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['sampleRate'])) {
            $model->sampleRate = $map['sampleRate'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['speechRate'])) {
            $model->speechRate = $map['speechRate'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['voice'])) {
            $model->voice = $map['voice'];
        }

        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        return $model;
    }
}
