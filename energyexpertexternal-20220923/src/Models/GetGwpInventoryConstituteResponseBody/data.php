<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventoryConstituteResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GwpInventoryConstitute;

class data extends Model
{
    /**
     * @var GwpInventoryConstitute[]
     */
    public $byResourceType;

    /**
     * @var float
     */
    public $carbonEmission;

    /**
     * @var GwpInventoryConstitute[]
     */
    public $items;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'byResourceType' => 'byResourceType',
        'carbonEmission' => 'carbonEmission',
        'items' => 'items',
        'name' => 'name',
        'unit' => 'unit',
    ];

    public function validate()
    {
        if (\is_array($this->byResourceType)) {
            Model::validateArray($this->byResourceType);
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byResourceType) {
            if (\is_array($this->byResourceType)) {
                $res['byResourceType'] = [];
                $n1 = 0;
                foreach ($this->byResourceType as $item1) {
                    $res['byResourceType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['byResourceType'])) {
            if (!empty($map['byResourceType'])) {
                $model->byResourceType = [];
                $n1 = 0;
                foreach ($map['byResourceType'] as $item1) {
                    $model->byResourceType[$n1++] = GwpInventoryConstitute::fromMap($item1);
                }
            }
        }

        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1++] = GwpInventoryConstitute::fromMap($item1);
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
