<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels\resourcePools;

use AlibabaCloud\Dara\Model;

class inventoryHealth extends Model
{
    /**
     * @var int
     */
    public $adequacyScore;
    /**
     * @var int
     */
    public $healthScore;
    /**
     * @var int
     */
    public $hotScore;
    /**
     * @var int
     */
    public $supplyScore;
    protected $_name = [
        'adequacyScore' => 'AdequacyScore',
        'healthScore'   => 'HealthScore',
        'hotScore'      => 'HotScore',
        'supplyScore'   => 'SupplyScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adequacyScore) {
            $res['AdequacyScore'] = $this->adequacyScore;
        }

        if (null !== $this->healthScore) {
            $res['HealthScore'] = $this->healthScore;
        }

        if (null !== $this->hotScore) {
            $res['HotScore'] = $this->hotScore;
        }

        if (null !== $this->supplyScore) {
            $res['SupplyScore'] = $this->supplyScore;
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
        if (isset($map['AdequacyScore'])) {
            $model->adequacyScore = $map['AdequacyScore'];
        }

        if (isset($map['HealthScore'])) {
            $model->healthScore = $map['HealthScore'];
        }

        if (isset($map['HotScore'])) {
            $model->hotScore = $map['HotScore'];
        }

        if (isset($map['SupplyScore'])) {
            $model->supplyScore = $map['SupplyScore'];
        }

        return $model;
    }
}
