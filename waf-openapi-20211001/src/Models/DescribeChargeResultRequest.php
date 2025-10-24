<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeResultRequest\chargeModules;

class DescribeChargeResultRequest extends Model
{
    /**
     * @var string
     */
    public $chargeCycle;

    /**
     * @var chargeModules[]
     */
    public $chargeModules;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'chargeCycle' => 'ChargeCycle',
        'chargeModules' => 'ChargeModules',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->chargeModules)) {
            Model::validateArray($this->chargeModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeCycle) {
            $res['ChargeCycle'] = $this->chargeCycle;
        }

        if (null !== $this->chargeModules) {
            if (\is_array($this->chargeModules)) {
                $res['ChargeModules'] = [];
                $n1 = 0;
                foreach ($this->chargeModules as $item1) {
                    $res['ChargeModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
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
        if (isset($map['ChargeCycle'])) {
            $model->chargeCycle = $map['ChargeCycle'];
        }

        if (isset($map['ChargeModules'])) {
            if (!empty($map['ChargeModules'])) {
                $model->chargeModules = [];
                $n1 = 0;
                foreach ($map['ChargeModules'] as $item1) {
                    $model->chargeModules[$n1] = chargeModules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
