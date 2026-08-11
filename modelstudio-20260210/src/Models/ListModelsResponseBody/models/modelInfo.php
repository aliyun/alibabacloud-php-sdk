<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody\models;

use AlibabaCloud\Dara\Model;

class modelInfo extends Model
{
    /**
     * @var int
     */
    public $contextWindow;

    /**
     * @var int
     */
    public $maxInputTokens;

    /**
     * @var int
     */
    public $maxOutputTokens;

    /**
     * @var int
     */
    public $maxReasoningTokens;

    /**
     * @var int
     */
    public $reasoningMaxInputTokens;

    /**
     * @var int
     */
    public $reasoningMaxOutputTokens;
    protected $_name = [
        'contextWindow' => 'contextWindow',
        'maxInputTokens' => 'maxInputTokens',
        'maxOutputTokens' => 'maxOutputTokens',
        'maxReasoningTokens' => 'maxReasoningTokens',
        'reasoningMaxInputTokens' => 'reasoningMaxInputTokens',
        'reasoningMaxOutputTokens' => 'reasoningMaxOutputTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextWindow) {
            $res['contextWindow'] = $this->contextWindow;
        }

        if (null !== $this->maxInputTokens) {
            $res['maxInputTokens'] = $this->maxInputTokens;
        }

        if (null !== $this->maxOutputTokens) {
            $res['maxOutputTokens'] = $this->maxOutputTokens;
        }

        if (null !== $this->maxReasoningTokens) {
            $res['maxReasoningTokens'] = $this->maxReasoningTokens;
        }

        if (null !== $this->reasoningMaxInputTokens) {
            $res['reasoningMaxInputTokens'] = $this->reasoningMaxInputTokens;
        }

        if (null !== $this->reasoningMaxOutputTokens) {
            $res['reasoningMaxOutputTokens'] = $this->reasoningMaxOutputTokens;
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
        if (isset($map['contextWindow'])) {
            $model->contextWindow = $map['contextWindow'];
        }

        if (isset($map['maxInputTokens'])) {
            $model->maxInputTokens = $map['maxInputTokens'];
        }

        if (isset($map['maxOutputTokens'])) {
            $model->maxOutputTokens = $map['maxOutputTokens'];
        }

        if (isset($map['maxReasoningTokens'])) {
            $model->maxReasoningTokens = $map['maxReasoningTokens'];
        }

        if (isset($map['reasoningMaxInputTokens'])) {
            $model->reasoningMaxInputTokens = $map['reasoningMaxInputTokens'];
        }

        if (isset($map['reasoningMaxOutputTokens'])) {
            $model->reasoningMaxOutputTokens = $map['reasoningMaxOutputTokens'];
        }

        return $model;
    }
}
