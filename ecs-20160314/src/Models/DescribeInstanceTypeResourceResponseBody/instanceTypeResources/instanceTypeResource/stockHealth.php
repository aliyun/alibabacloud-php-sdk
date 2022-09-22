<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceTypeResourceResponseBody\instanceTypeResources\instanceTypeResource;

use AlibabaCloud\Tea\Model;

class stockHealth extends Model
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return stockHealth
     */
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
