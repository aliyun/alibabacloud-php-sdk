<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentSessionTokenUsageResponseBody\jsonRpcResponse;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $cachedTokens;

    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var int
     */
    public $promptTokens;

    /**
     * @var int
     */
    public $thoughtsTokens;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'cachedTokens' => 'CachedTokens',
        'completionTokens' => 'CompletionTokens',
        'promptTokens' => 'PromptTokens',
        'thoughtsTokens' => 'ThoughtsTokens',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cachedTokens) {
            $res['CachedTokens'] = $this->cachedTokens;
        }

        if (null !== $this->completionTokens) {
            $res['CompletionTokens'] = $this->completionTokens;
        }

        if (null !== $this->promptTokens) {
            $res['PromptTokens'] = $this->promptTokens;
        }

        if (null !== $this->thoughtsTokens) {
            $res['ThoughtsTokens'] = $this->thoughtsTokens;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
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
        if (isset($map['CachedTokens'])) {
            $model->cachedTokens = $map['CachedTokens'];
        }

        if (isset($map['CompletionTokens'])) {
            $model->completionTokens = $map['CompletionTokens'];
        }

        if (isset($map['PromptTokens'])) {
            $model->promptTokens = $map['PromptTokens'];
        }

        if (isset($map['ThoughtsTokens'])) {
            $model->thoughtsTokens = $map['ThoughtsTokens'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
