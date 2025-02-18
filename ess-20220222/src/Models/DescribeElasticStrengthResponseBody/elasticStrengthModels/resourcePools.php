<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels\resourcePools\inventoryHealth;

class resourcePools extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var inventoryHealth
     */
    public $inventoryHealth;
    /**
     * @var string
     */
    public $msg;
    /**
     * @var string
     */
    public $status;
    /**
     * @var float
     */
    public $strength;
    /**
     * @var string[]
     */
    public $vSwitchIds;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'code'            => 'Code',
        'instanceType'    => 'InstanceType',
        'inventoryHealth' => 'InventoryHealth',
        'msg'             => 'Msg',
        'status'          => 'Status',
        'strength'        => 'Strength',
        'vSwitchIds'      => 'VSwitchIds',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->inventoryHealth) {
            $this->inventoryHealth->validate();
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->inventoryHealth) {
            $res['InventoryHealth'] = null !== $this->inventoryHealth ? $this->inventoryHealth->toArray($noStream) : $this->inventoryHealth;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1                = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InventoryHealth'])) {
            $model->inventoryHealth = inventoryHealth::fromMap($map['InventoryHealth']);
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1                = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
