<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventoryConstituteResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GwpInventoryConstitute;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Aggregated by resource type of an inventory.
     *
     * @var GwpInventoryConstitute[]
     */
    public $byResourceType;

    /**
     * @description Emission quantity: may be positive, negative, or 0. To ensure the calculation accuracy, 24 decimal places are reserved for the calculation process. We recommend that you intercept data based on your business requirements.
     *
     * @example 1009.976265540000000000000000000000
     *
     * @var float
     */
    public $carbonEmission;

    /**
     * @description Organized by hierarchy from high to low, according to the flow-> process-> inventory hierarchy.
     *
     * @var GwpInventoryConstitute[]
     */
    public $items;

    /**
     * @description The name.
     *
     * @example This is not used for displaying
     *
     * @var string
     */
    public $name;

    /**
     * @description Emission Unit.
     *
     * @example kgCO₂e/t
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'byResourceType' => 'byResourceType',
        'carbonEmission' => 'carbonEmission',
        'items'          => 'items',
        'name'           => 'name',
        'unit'           => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->byResourceType) {
            $res['byResourceType'] = [];
            if (null !== $this->byResourceType && \is_array($this->byResourceType)) {
                $n = 0;
                foreach ($this->byResourceType as $item) {
                    $res['byResourceType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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
        if (isset($map['byResourceType'])) {
            if (!empty($map['byResourceType'])) {
                $model->byResourceType = [];
                $n                     = 0;
                foreach ($map['byResourceType'] as $item) {
                    $model->byResourceType[$n++] = null !== $item ? GwpInventoryConstitute::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? GwpInventoryConstitute::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
