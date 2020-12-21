<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $currentInventory;

    /**
     * @var string
     */
    public $inventoryId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $buyerId;

    /**
     * @var string
     */
    public $validStartTime;

    /**
     * @var string
     */
    public $validEndTime;
    protected $_name = [
        'commodityCode'    => 'CommodityCode',
        'currentInventory' => 'CurrentInventory',
        'inventoryId'      => 'InventoryId',
        'instanceId'       => 'InstanceId',
        'buyerId'          => 'BuyerId',
        'validStartTime'   => 'ValidStartTime',
        'validEndTime'     => 'ValidEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->currentInventory) {
            $res['CurrentInventory'] = $this->currentInventory;
        }
        if (null !== $this->inventoryId) {
            $res['InventoryId'] = $this->inventoryId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->validStartTime) {
            $res['ValidStartTime'] = $this->validStartTime;
        }
        if (null !== $this->validEndTime) {
            $res['ValidEndTime'] = $this->validEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CurrentInventory'])) {
            $model->currentInventory = $map['CurrentInventory'];
        }
        if (isset($map['InventoryId'])) {
            $model->inventoryId = $map['InventoryId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['ValidStartTime'])) {
            $model->validStartTime = $map['ValidStartTime'];
        }
        if (isset($map['ValidEndTime'])) {
            $model->validEndTime = $map['ValidEndTime'];
        }

        return $model;
    }
}
