<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody;

use AlibabaCloud\Dara\Model;

class modelUsage extends Model
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
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $provider;

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
        'model' => 'Model',
        'outputTokens' => 'OutputTokens',
        'provider' => 'Provider',
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

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
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

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
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
