<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponseBody\elasticStrengthModels\resourcePools\inventoryHealth;
use AlibabaCloud\Tea\Model;

class resourcePools extends Model
{
    /**
     * @description The error code returned when the scaling strength is the weakest.
     *
     * @example InstanceTypesOrDiskTypesNotSupported
     *
     * @var string
     */
    public $code;

    /**
     * @description The instance type of the resource pool.
     *
     * @example ecs.r7.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The inventory health.
     *
     * @var inventoryHealth
     */
    public $inventoryHealth;

    /**
     * @description The error message returned when the scaling strength is the weakest.
     *
     * @example The instanceTypes or diskTypes are not supported.
     *
     * @var string
     */
    public $msg;

    /**
     * @description Indicates whether the resource pool is available. Valid values:
     *
     *   Available
     *   Unavailable (If a constraint is not provided, the instance type is not deployed, or the instance type is out of stock, the resource pool becomes unavailable.)
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The scaling strength of the resource pool.
     *
     **
     *
     **Warning** This parameter is deprecated.
     *
     * @example 0.6
     *
     * @var float
     */
    public $strength;

    /**
     * @description The IDs of the vSwitches in the zones of the resource pool.
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The zone ID of the resource pool.
     *
     * @example cn-hangzhou-g
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->inventoryHealth) {
            $res['InventoryHealth'] = null !== $this->inventoryHealth ? $this->inventoryHealth->toMap() : null;
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
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePools
     */
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
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
