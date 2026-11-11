<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class RunInventorySynchronizationJobRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $inventorySourceId;

    /**
     * @var string[]
     */
    public $inventoryTypes;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'inventorySourceId' => 'InventorySourceId',
        'inventoryTypes' => 'InventoryTypes',
    ];

    public function validate()
    {
        if (\is_array($this->inventoryTypes)) {
            Model::validateArray($this->inventoryTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->inventorySourceId) {
            $res['InventorySourceId'] = $this->inventorySourceId;
        }

        if (null !== $this->inventoryTypes) {
            if (\is_array($this->inventoryTypes)) {
                $res['InventoryTypes'] = [];
                $n1 = 0;
                foreach ($this->inventoryTypes as $item1) {
                    $res['InventoryTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InventorySourceId'])) {
            $model->inventorySourceId = $map['InventorySourceId'];
        }

        if (isset($map['InventoryTypes'])) {
            if (!empty($map['InventoryTypes'])) {
                $model->inventoryTypes = [];
                $n1 = 0;
                foreach ($map['InventoryTypes'] as $item1) {
                    $model->inventoryTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
