<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\ChatRequest;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $deepthink;

    /**
     * @var string
     */
    public $directAgent;

    /**
     * @var bool
     */
    public $enableTextImageMixed;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var bool
     */
    public $outputAudio;

    /**
     * @var bool
     */
    public $responseStreaming;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'deepthink' => 'deepthink',
        'directAgent' => 'directAgent',
        'enableTextImageMixed' => 'enableTextImageMixed',
        'maxTokens' => 'maxTokens',
        'outputAudio' => 'outputAudio',
        'responseStreaming' => 'responseStreaming',
        'temperature' => 'temperature',
        'topP' => 'topP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deepthink) {
            $res['deepthink'] = $this->deepthink;
        }

        if (null !== $this->directAgent) {
            $res['directAgent'] = $this->directAgent;
        }

        if (null !== $this->enableTextImageMixed) {
            $res['enableTextImageMixed'] = $this->enableTextImageMixed;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->outputAudio) {
            $res['outputAudio'] = $this->outputAudio;
        }

        if (null !== $this->responseStreaming) {
            $res['responseStreaming'] = $this->responseStreaming;
        }

        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }

        if (null !== $this->topP) {
            $res['topP'] = $this->topP;
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
        if (isset($map['deepthink'])) {
            $model->deepthink = $map['deepthink'];
        }

        if (isset($map['directAgent'])) {
            $model->directAgent = $map['directAgent'];
        }

        if (isset($map['enableTextImageMixed'])) {
            $model->enableTextImageMixed = $map['enableTextImageMixed'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['outputAudio'])) {
            $model->outputAudio = $map['outputAudio'];
        }

        if (isset($map['responseStreaming'])) {
            $model->responseStreaming = $map['responseStreaming'];
        }

        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }

        if (isset($map['topP'])) {
            $model->topP = $map['topP'];
        }

        return $model;
    }
}
