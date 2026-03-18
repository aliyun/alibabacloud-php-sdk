<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelMetricsDTO extends Model
{
    /**
     * @var float
     */
    public $avgResponseTime;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var float
     */
    public $successRate;

    /**
     * @var int
     */
    public $totalCalls;
    protected $_name = [
        'avgResponseTime' => 'avgResponseTime',
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'successRate' => 'successRate',
        'totalCalls' => 'totalCalls',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgResponseTime) {
            $res['avgResponseTime'] = $this->avgResponseTime;
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->successRate) {
            $res['successRate'] = $this->successRate;
        }

        if (null !== $this->totalCalls) {
            $res['totalCalls'] = $this->totalCalls;
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
        if (isset($map['avgResponseTime'])) {
            $model->avgResponseTime = $map['avgResponseTime'];
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['successRate'])) {
            $model->successRate = $map['successRate'];
        }

        if (isset($map['totalCalls'])) {
            $model->totalCalls = $map['totalCalls'];
        }

        return $model;
    }
}
