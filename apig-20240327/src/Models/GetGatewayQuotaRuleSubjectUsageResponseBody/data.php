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
     * @var float
     */
    public $cachedAmountDecimal;

    /**
     * @var details
     */
    public $details;

    /**
     * @var int
     */
    public $inputAmount;

    /**
     * @var float
     */
    public $inputAmountDecimal;

    /**
     * @var int
     */
    public $outputAmount;

    /**
     * @var float
     */
    public $outputAmountDecimal;

    /**
     * @var bool
     */
    public $overLimit;

    /**
     * @var string
     */
    public $quotaDimension;

    /**
     * @var string
     */
    public $subjectType;

    /**
     * @var int
     */
    public $totalQuota;

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
        'details' => 'details',
        'inputAmount' => 'inputAmount',
        'inputAmountDecimal' => 'inputAmountDecimal',
        'outputAmount' => 'outputAmount',
        'outputAmountDecimal' => 'outputAmountDecimal',
        'overLimit' => 'overLimit',
        'quotaDimension' => 'quotaDimension',
        'subjectType' => 'subjectType',
        'totalQuota' => 'totalQuota',
        'usedAmount' => 'usedAmount',
        'usedAmountDecimal' => 'usedAmountDecimal',
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

        if (null !== $this->cachedAmountDecimal) {
            $res['cachedAmountDecimal'] = $this->cachedAmountDecimal;
        }

        if (null !== $this->details) {
            $res['details'] = null !== $this->details ? $this->details->toArray($noStream) : $this->details;
        }

        if (null !== $this->inputAmount) {
            $res['inputAmount'] = $this->inputAmount;
        }

        if (null !== $this->inputAmountDecimal) {
            $res['inputAmountDecimal'] = $this->inputAmountDecimal;
        }

        if (null !== $this->outputAmount) {
            $res['outputAmount'] = $this->outputAmount;
        }

        if (null !== $this->outputAmountDecimal) {
            $res['outputAmountDecimal'] = $this->outputAmountDecimal;
        }

        if (null !== $this->overLimit) {
            $res['overLimit'] = $this->overLimit;
        }

        if (null !== $this->quotaDimension) {
            $res['quotaDimension'] = $this->quotaDimension;
        }

        if (null !== $this->subjectType) {
            $res['subjectType'] = $this->subjectType;
        }

        if (null !== $this->totalQuota) {
            $res['totalQuota'] = $this->totalQuota;
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

        if (isset($map['details'])) {
            $model->details = details::fromMap($map['details']);
        }

        if (isset($map['inputAmount'])) {
            $model->inputAmount = $map['inputAmount'];
        }

        if (isset($map['inputAmountDecimal'])) {
            $model->inputAmountDecimal = $map['inputAmountDecimal'];
        }

        if (isset($map['outputAmount'])) {
            $model->outputAmount = $map['outputAmount'];
        }

        if (isset($map['outputAmountDecimal'])) {
            $model->outputAmountDecimal = $map['outputAmountDecimal'];
        }

        if (isset($map['overLimit'])) {
            $model->overLimit = $map['overLimit'];
        }

        if (isset($map['quotaDimension'])) {
            $model->quotaDimension = $map['quotaDimension'];
        }

        if (isset($map['subjectType'])) {
            $model->subjectType = $map['subjectType'];
        }

        if (isset($map['totalQuota'])) {
            $model->totalQuota = $map['totalQuota'];
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
