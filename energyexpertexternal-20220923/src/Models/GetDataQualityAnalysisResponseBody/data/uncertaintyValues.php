<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\Tea\Model;

class uncertaintyValues extends Model
{
    /**
     * @description The name of the inventory. Format: process name / inventory name.
     *
     * @example process-1/inventory-1
     *
     * @var string
     */
    public $inventory;

    /**
     * @description Inventory uncertainty absolute contribution size. The impact of the quality of each inventory data on the carbon footprint results in the modeling process, when the uncertain contribution of a list is large, please improve its data quality as much as possible to improve the accuracy of carbon footprint analysis. The meaning of "1.4964" is not determined to contribute 1.4964 kgCO₂ e/unit, where unit is the unit of the product.
     *
     * @example 1.4964
     *
     * @var string
     */
    public $uncertaintyContribution;
    protected $_name = [
        'inventory'               => 'inventory',
        'uncertaintyContribution' => 'uncertaintyContribution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventory) {
            $res['inventory'] = $this->inventory;
        }
        if (null !== $this->uncertaintyContribution) {
            $res['uncertaintyContribution'] = $this->uncertaintyContribution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uncertaintyValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['inventory'])) {
            $model->inventory = $map['inventory'];
        }
        if (isset($map['uncertaintyContribution'])) {
            $model->uncertaintyContribution = $map['uncertaintyContribution'];
        }

        return $model;
    }
}
