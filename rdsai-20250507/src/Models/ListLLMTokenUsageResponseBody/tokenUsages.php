<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListLLMTokenUsageResponseBody;

use AlibabaCloud\Dara\Model;

class tokenUsages extends Model
{
    /**
     * @var int
     */
    public $completionReasoningTokens;

    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $explicitCachedTokens;

    /**
     * @var int
     */
    public $implicitCachedTokens;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $promptTokens;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'completionReasoningTokens' => 'CompletionReasoningTokens',
        'completionTokens' => 'CompletionTokens',
        'endTime' => 'EndTime',
        'explicitCachedTokens' => 'ExplicitCachedTokens',
        'implicitCachedTokens' => 'ImplicitCachedTokens',
        'model' => 'Model',
        'promptTokens' => 'PromptTokens',
        'startTime' => 'StartTime',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completionReasoningTokens) {
            $res['CompletionReasoningTokens'] = $this->completionReasoningTokens;
        }

        if (null !== $this->completionTokens) {
            $res['CompletionTokens'] = $this->completionTokens;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->explicitCachedTokens) {
            $res['ExplicitCachedTokens'] = $this->explicitCachedTokens;
        }

        if (null !== $this->implicitCachedTokens) {
            $res['ImplicitCachedTokens'] = $this->implicitCachedTokens;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->promptTokens) {
            $res['PromptTokens'] = $this->promptTokens;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CompletionReasoningTokens'])) {
            $model->completionReasoningTokens = $map['CompletionReasoningTokens'];
        }

        if (isset($map['CompletionTokens'])) {
            $model->completionTokens = $map['CompletionTokens'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExplicitCachedTokens'])) {
            $model->explicitCachedTokens = $map['ExplicitCachedTokens'];
        }

        if (isset($map['ImplicitCachedTokens'])) {
            $model->implicitCachedTokens = $map['ImplicitCachedTokens'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['PromptTokens'])) {
            $model->promptTokens = $map['PromptTokens'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
