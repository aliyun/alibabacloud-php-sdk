<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

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
     * @var GwpInventoryConstitute[]
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
                $n1                    = 0;
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
                $n1           = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                    = 0;
                foreach ($map['byResourceType'] as $item1) {
                    $model->byResourceType[$n1++] = GwpResourceConstitute::fromMap($item1);
                }
            }
        }

        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1           = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1++] = self::fromMap($item1);
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
