<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendResponseBody\recommendProducts\recommendProduct\recommendSpSpecs;

use AlibabaCloud\Tea\Model;

class recommendSpSpec extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $effectiveDate;

    /**
     * @var string
     */
    public $payMode;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $recommendReason;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'duration'        => 'Duration',
        'effectiveDate'   => 'EffectiveDate',
        'payMode'         => 'PayMode',
        'pricingCycle'    => 'PricingCycle',
        'recommendReason' => 'RecommendReason',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }
        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->recommendReason) {
            $res['RecommendReason'] = $this->recommendReason;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendSpSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RecommendReason'])) {
            $model->recommendReason = $map['RecommendReason'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
