<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkGetInventoryInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $inventory;

    /**
     * @var int
     */
    public $residualInventory;

    /**
     * @var int
     */
    public $usedStock;
    protected $_name = [
        'inventory'         => 'Inventory',
        'residualInventory' => 'ResidualInventory',
        'usedStock'         => 'UsedStock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventory) {
            $res['Inventory'] = $this->inventory;
        }
        if (null !== $this->residualInventory) {
            $res['ResidualInventory'] = $this->residualInventory;
        }
        if (null !== $this->usedStock) {
            $res['UsedStock'] = $this->usedStock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Inventory'])) {
            $model->inventory = $map['Inventory'];
        }
        if (isset($map['ResidualInventory'])) {
            $model->residualInventory = $map['ResidualInventory'];
        }
        if (isset($map['UsedStock'])) {
            $model->usedStock = $map['UsedStock'];
        }

        return $model;
    }
}
