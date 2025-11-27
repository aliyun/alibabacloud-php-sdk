<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeRCInstanceTypesRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string[]
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'engine' => 'Engine',
        'instanceType' => 'InstanceType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceType)) {
            Model::validateArray($this->instanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->instanceType) {
            if (\is_array($this->instanceType)) {
                $res['InstanceType'] = [];
                $n1 = 0;
                foreach ($this->instanceType as $item1) {
                    $res['InstanceType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = [];
                $n1 = 0;
                foreach ($map['InstanceType'] as $item1) {
                    $model->instanceType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
