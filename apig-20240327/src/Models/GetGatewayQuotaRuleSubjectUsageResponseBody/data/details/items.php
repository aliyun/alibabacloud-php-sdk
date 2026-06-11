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
     * @var int
     */
    public $inputAmount;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $outputAmount;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $usedAmount;
    protected $_name = [
        'cachedAmount' => 'cachedAmount',
        'inputAmount' => 'inputAmount',
        'model' => 'model',
        'outputAmount' => 'outputAmount',
        'startTime' => 'startTime',
        'usedAmount' => 'usedAmount',
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

        if (null !== $this->inputAmount) {
            $res['inputAmount'] = $this->inputAmount;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->outputAmount) {
            $res['outputAmount'] = $this->outputAmount;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->usedAmount) {
            $res['usedAmount'] = $this->usedAmount;
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

        if (isset($map['inputAmount'])) {
            $model->inputAmount = $map['inputAmount'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['outputAmount'])) {
            $model->outputAmount = $map['outputAmount'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['usedAmount'])) {
            $model->usedAmount = $map['usedAmount'];
        }

        return $model;
    }
}
