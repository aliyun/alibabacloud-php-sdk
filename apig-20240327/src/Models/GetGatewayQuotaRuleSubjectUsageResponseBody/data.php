<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageResponseBody\data\details;

class data extends Model
{
    /**
     * @var int
     */
    public $cachedAmount;

    /**
     * @var details
     */
    public $details;

    /**
     * @var int
     */
    public $inputAmount;

    /**
     * @var int
     */
    public $outputAmount;

    /**
     * @var bool
     */
    public $overLimit;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var int
     */
    public $usedAmount;
    protected $_name = [
        'cachedAmount' => 'cachedAmount',
        'details' => 'details',
        'inputAmount' => 'inputAmount',
        'outputAmount' => 'outputAmount',
        'overLimit' => 'overLimit',
        'totalQuota' => 'totalQuota',
        'usedAmount' => 'usedAmount',
    ];

    public function validate()
    {
        if (null !== $this->details) {
            $this->details->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cachedAmount) {
            $res['cachedAmount'] = $this->cachedAmount;
        }

        if (null !== $this->details) {
            $res['details'] = null !== $this->details ? $this->details->toArray($noStream) : $this->details;
        }

        if (null !== $this->inputAmount) {
            $res['inputAmount'] = $this->inputAmount;
        }

        if (null !== $this->outputAmount) {
            $res['outputAmount'] = $this->outputAmount;
        }

        if (null !== $this->overLimit) {
            $res['overLimit'] = $this->overLimit;
        }

        if (null !== $this->totalQuota) {
            $res['totalQuota'] = $this->totalQuota;
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

        if (isset($map['details'])) {
            $model->details = details::fromMap($map['details']);
        }

        if (isset($map['inputAmount'])) {
            $model->inputAmount = $map['inputAmount'];
        }

        if (isset($map['outputAmount'])) {
            $model->outputAmount = $map['outputAmount'];
        }

        if (isset($map['overLimit'])) {
            $model->overLimit = $map['overLimit'];
        }

        if (isset($map['totalQuota'])) {
            $model->totalQuota = $map['totalQuota'];
        }

        if (isset($map['usedAmount'])) {
            $model->usedAmount = $map['usedAmount'];
        }

        return $model;
    }
}
