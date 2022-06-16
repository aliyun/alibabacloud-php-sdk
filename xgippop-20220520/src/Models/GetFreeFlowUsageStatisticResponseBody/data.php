<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @description 该实例对应的包类型
     *
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $totalMoney;

    /**
     * @description 该实例的订单总数
     *
     * @var int
     */
    public $totalOrderNumber;

    /**
     * @description 该实例的订单总计量单元数
     *
     * @var int
     */
    public $totalUnitNumber;

    /**
     * @description 产品规格
     *
     * @var string
     */
    public $yunOutProduct;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'specType'         => 'SpecType',
        'totalMoney'       => 'TotalMoney',
        'totalOrderNumber' => 'TotalOrderNumber',
        'totalUnitNumber'  => 'TotalUnitNumber',
        'yunOutProduct'    => 'YunOutProduct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->totalMoney) {
            $res['TotalMoney'] = $this->totalMoney;
        }
        if (null !== $this->totalOrderNumber) {
            $res['TotalOrderNumber'] = $this->totalOrderNumber;
        }
        if (null !== $this->totalUnitNumber) {
            $res['TotalUnitNumber'] = $this->totalUnitNumber;
        }
        if (null !== $this->yunOutProduct) {
            $res['YunOutProduct'] = $this->yunOutProduct;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['TotalMoney'])) {
            $model->totalMoney = $map['TotalMoney'];
        }
        if (isset($map['TotalOrderNumber'])) {
            $model->totalOrderNumber = $map['TotalOrderNumber'];
        }
        if (isset($map['TotalUnitNumber'])) {
            $model->totalUnitNumber = $map['TotalUnitNumber'];
        }
        if (isset($map['YunOutProduct'])) {
            $model->yunOutProduct = $map['YunOutProduct'];
        }

        return $model;
    }
}
