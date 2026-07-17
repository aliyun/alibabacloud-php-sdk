<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListQuotasMinEffectPlanResponseBody\quotas;

use AlibabaCloud\Dara\Model;

class quotaValueDetail extends Model
{
    /**
     * @var string
     */
    public $isEffect;

    /**
     * @var string
     */
    public $minEffectPlan;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'isEffect' => 'IsEffect',
        'minEffectPlan' => 'MinEffectPlan',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isEffect) {
            $res['IsEffect'] = $this->isEffect;
        }

        if (null !== $this->minEffectPlan) {
            $res['MinEffectPlan'] = $this->minEffectPlan;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['IsEffect'])) {
            $model->isEffect = $map['IsEffect'];
        }

        if (isset($map['MinEffectPlan'])) {
            $model->minEffectPlan = $map['MinEffectPlan'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
