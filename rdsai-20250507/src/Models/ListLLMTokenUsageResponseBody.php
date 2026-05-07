<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListLLMTokenUsageResponseBody\tokenUsages;

class ListLLMTokenUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var int
     */
    public $explicitCachedTokens;

    /**
     * @var int
     */
    public $implicitCachedTokens;

    /**
     * @var int
     */
    public $promptTokens;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tokenUsages[]
     */
    public $tokenUsages;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'completionTokens' => 'CompletionTokens',
        'explicitCachedTokens' => 'ExplicitCachedTokens',
        'implicitCachedTokens' => 'ImplicitCachedTokens',
        'promptTokens' => 'PromptTokens',
        'requestId' => 'RequestId',
        'tokenUsages' => 'TokenUsages',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        if (\is_array($this->tokenUsages)) {
            Model::validateArray($this->tokenUsages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completionTokens) {
            $res['CompletionTokens'] = $this->completionTokens;
        }

        if (null !== $this->explicitCachedTokens) {
            $res['ExplicitCachedTokens'] = $this->explicitCachedTokens;
        }

        if (null !== $this->implicitCachedTokens) {
            $res['ImplicitCachedTokens'] = $this->implicitCachedTokens;
        }

        if (null !== $this->promptTokens) {
            $res['PromptTokens'] = $this->promptTokens;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tokenUsages) {
            if (\is_array($this->tokenUsages)) {
                $res['TokenUsages'] = [];
                $n1 = 0;
                foreach ($this->tokenUsages as $item1) {
                    $res['TokenUsages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CompletionTokens'])) {
            $model->completionTokens = $map['CompletionTokens'];
        }

        if (isset($map['ExplicitCachedTokens'])) {
            $model->explicitCachedTokens = $map['ExplicitCachedTokens'];
        }

        if (isset($map['ImplicitCachedTokens'])) {
            $model->implicitCachedTokens = $map['ImplicitCachedTokens'];
        }

        if (isset($map['PromptTokens'])) {
            $model->promptTokens = $map['PromptTokens'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TokenUsages'])) {
            if (!empty($map['TokenUsages'])) {
                $model->tokenUsages = [];
                $n1 = 0;
                foreach ($map['TokenUsages'] as $item1) {
                    $model->tokenUsages[$n1] = tokenUsages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
