<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\resourcePools;

use AlibabaCloud\Tea\Model;

class inventoryHealth extends Model
{
    /**
     * @description The adequacy score.
     *
     * Valid values: 0 to 3.
     *
     * @example 3
     *
     * @var int
     */
    public $adequacyScore;

    /**
     * @description The inventory health score.
     *
     *   A score between 5 and 6 indicates a sufficient inventory.
     *   A score between 1 and 4 indicates that there is no guarantee of a sufficient inventory. Select a reservation as necessary.
     *   A score between -3 and 0 indicates that the inventory is sufficient, and an alert is triggered. Select another instance type.
     *
     * Calculation formula: `HealthScore` = `AdequacyScore` + `SupplyScore` - `HotScore`.
     *
     * @example 3
     *
     * @var int
     */
    public $healthScore;

    /**
     * @description The popularity score.
     *
     * Valid values: 0 to 3.
     *
     * @example 3
     *
     * @var int
     */
    public $hotScore;

    /**
     * @description The replenishment capability score.
     *
     * Valid values: 0 to 3.
     *
     * @example 3
     *
     * @var int
     */
    public $supplyScore;
    protected $_name = [
        'adequacyScore' => 'AdequacyScore',
        'healthScore' => 'HealthScore',
        'hotScore' => 'HotScore',
        'supplyScore' => 'SupplyScore',
    ];

    public function validate() {}

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
     * @return inventoryHealth
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
