<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageResponseBody\data\details;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $cachedAmount;

    /**
     * @var float
     */
    public $cachedAmountDecimal;

    /**
     * @var string
     */
    public $consumer;

    /**
     * @var int
     */
    public $inputAmount;

    /**
     * @var float
     */
    public $inputAmountDecimal;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $outputAmount;

    /**
     * @var float
     */
    public $outputAmountDecimal;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $usedAmount;

    /**
     * @var float
     */
    public $usedAmountDecimal;
    protected $_name = [
        'cachedAmount' => 'cachedAmount',
        'cachedAmountDecimal' => 'cachedAmountDecimal',
        'consumer' => 'consumer',
        'inputAmount' => 'inputAmount',
        'inputAmountDecimal' => 'inputAmountDecimal',
        'model' => 'model',
        'outputAmount' => 'outputAmount',
        'outputAmountDecimal' => 'outputAmountDecimal',
        'requestId' => 'requestId',
        'startTime' => 'startTime',
        'usedAmount' => 'usedAmount',
        'usedAmountDecimal' => 'usedAmountDecimal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cachedAmount) {
            $res['cachedAmount'] = $this->cachedAmount;
        }

        if (null !== $this->cachedAmountDecimal) {
            $res['cachedAmountDecimal'] = $this->cachedAmountDecimal;
        }

        if (null !== $this->consumer) {
            $res['consumer'] = $this->consumer;
        }

        if (null !== $this->inputAmount) {
            $res['inputAmount'] = $this->inputAmount;
        }

        if (null !== $this->inputAmountDecimal) {
            $res['inputAmountDecimal'] = $this->inputAmountDecimal;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->outputAmount) {
            $res['outputAmount'] = $this->outputAmount;
        }

        if (null !== $this->outputAmountDecimal) {
            $res['outputAmountDecimal'] = $this->outputAmountDecimal;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->usedAmount) {
            $res['usedAmount'] = $this->usedAmount;
        }

        if (null !== $this->usedAmountDecimal) {
            $res['usedAmountDecimal'] = $this->usedAmountDecimal;
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
        if (isset($map['cachedAmount'])) {
            $model->cachedAmount = $map['cachedAmount'];
        }

        if (isset($map['cachedAmountDecimal'])) {
            $model->cachedAmountDecimal = $map['cachedAmountDecimal'];
        }

        if (isset($map['consumer'])) {
            $model->consumer = $map['consumer'];
        }

        if (isset($map['inputAmount'])) {
            $model->inputAmount = $map['inputAmount'];
        }

        if (isset($map['inputAmountDecimal'])) {
            $model->inputAmountDecimal = $map['inputAmountDecimal'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['outputAmount'])) {
            $model->outputAmount = $map['outputAmount'];
        }

        if (isset($map['outputAmountDecimal'])) {
            $model->outputAmountDecimal = $map['outputAmountDecimal'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['usedAmount'])) {
            $model->usedAmount = $map['usedAmount'];
        }

        if (isset($map['usedAmountDecimal'])) {
            $model->usedAmountDecimal = $map['usedAmountDecimal'];
        }

        return $model;
    }
}
