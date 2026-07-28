<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $APICalls;

    /**
     * @var int
     */
    public $cacheReadTokens;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var int
     */
    public $reasoningTokens;

    /**
     * @var int
     */
    public $sessions;
    protected $_name = [
        'APICalls' => 'APICalls',
        'cacheReadTokens' => 'CacheReadTokens',
        'inputTokens' => 'InputTokens',
        'outputTokens' => 'OutputTokens',
        'reasoningTokens' => 'ReasoningTokens',
        'sessions' => 'Sessions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APICalls) {
            $res['APICalls'] = $this->APICalls;
        }

        if (null !== $this->cacheReadTokens) {
            $res['CacheReadTokens'] = $this->cacheReadTokens;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->reasoningTokens) {
            $res['ReasoningTokens'] = $this->reasoningTokens;
        }

        if (null !== $this->sessions) {
            $res['Sessions'] = $this->sessions;
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
        if (isset($map['APICalls'])) {
            $model->APICalls = $map['APICalls'];
        }

        if (isset($map['CacheReadTokens'])) {
            $model->cacheReadTokens = $map['CacheReadTokens'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['ReasoningTokens'])) {
            $model->reasoningTokens = $map['ReasoningTokens'];
        }

        if (isset($map['Sessions'])) {
            $model->sessions = $map['Sessions'];
        }

        return $model;
    }
}
