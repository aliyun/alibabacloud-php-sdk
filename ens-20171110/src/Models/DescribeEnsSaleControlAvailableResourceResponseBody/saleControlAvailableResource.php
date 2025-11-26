<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableDiskType;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableRegion;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableSpec;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableStorageType;

class saleControlAvailableResource extends Model
{
    /**
     * @var availableDiskType[]
     */
    public $availableDiskType;

    /**
     * @var availableRegion[]
     */
    public $availableRegion;

    /**
     * @var availableSpec[]
     */
    public $availableSpec;

    /**
     * @var availableStorageType
     */
    public $availableStorageType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'availableDiskType' => 'AvailableDiskType',
        'availableRegion' => 'AvailableRegion',
        'availableSpec' => 'AvailableSpec',
        'availableStorageType' => 'AvailableStorageType',
        'commodityCode' => 'CommodityCode',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        if (\is_array($this->availableDiskType)) {
            Model::validateArray($this->availableDiskType);
        }
        if (\is_array($this->availableRegion)) {
            Model::validateArray($this->availableRegion);
        }
        if (\is_array($this->availableSpec)) {
            Model::validateArray($this->availableSpec);
        }
        if (null !== $this->availableStorageType) {
            $this->availableStorageType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableDiskType) {
            if (\is_array($this->availableDiskType)) {
                $res['AvailableDiskType'] = [];
                $n1 = 0;
                foreach ($this->availableDiskType as $item1) {
                    $res['AvailableDiskType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->availableRegion) {
            if (\is_array($this->availableRegion)) {
                $res['AvailableRegion'] = [];
                $n1 = 0;
                foreach ($this->availableRegion as $item1) {
                    $res['AvailableRegion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->availableSpec) {
            if (\is_array($this->availableSpec)) {
                $res['AvailableSpec'] = [];
                $n1 = 0;
                foreach ($this->availableSpec as $item1) {
                    $res['AvailableSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->availableStorageType) {
            $res['AvailableStorageType'] = null !== $this->availableStorageType ? $this->availableStorageType->toArray($noStream) : $this->availableStorageType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (isset($map['AvailableDiskType'])) {
            if (!empty($map['AvailableDiskType'])) {
                $model->availableDiskType = [];
                $n1 = 0;
                foreach ($map['AvailableDiskType'] as $item1) {
                    $model->availableDiskType[$n1] = availableDiskType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AvailableRegion'])) {
            if (!empty($map['AvailableRegion'])) {
                $model->availableRegion = [];
                $n1 = 0;
                foreach ($map['AvailableRegion'] as $item1) {
                    $model->availableRegion[$n1] = availableRegion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AvailableSpec'])) {
            if (!empty($map['AvailableSpec'])) {
                $model->availableSpec = [];
                $n1 = 0;
                foreach ($map['AvailableSpec'] as $item1) {
                    $model->availableSpec[$n1] = availableSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AvailableStorageType'])) {
            $model->availableStorageType = availableStorageType::fromMap($map['AvailableStorageType']);
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
