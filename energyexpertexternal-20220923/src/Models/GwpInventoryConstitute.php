<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GwpInventoryConstitute extends Model
{
    /**
     * @var GwpResourceConstitute[]
     */
    public $byResourceType;

    /**
     * @var float
     */
    public $carbonEmission;

    /**
     * @var \AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GwpInventoryConstitute[]
     */
    public $items;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $percent;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'byResourceType' => 'byResourceType',
        'carbonEmission' => 'carbonEmission',
        'items'          => 'items',
        'name'           => 'name',
        'percent'        => 'percent',
        'resourceType'   => 'resourceType',
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
        if (null !== $this->percent) {
            $res['percent'] = $this->percent;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GwpInventoryConstitute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['byResourceType'])) {
            if (!empty($map['byResourceType'])) {
                $model->byResourceType = [];
                $n                     = 0;
                foreach ($map['byResourceType'] as $item) {
                    $model->byResourceType[$n++] = null !== $item ? GwpResourceConstitute::fromMap($item) : $item;
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
                    $model->items[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['percent'])) {
            $model->percent = $map['percent'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
