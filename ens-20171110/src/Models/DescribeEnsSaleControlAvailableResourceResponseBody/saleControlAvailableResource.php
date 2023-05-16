<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableDiskType;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableRegion;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableSpec;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableStorageType;
use AlibabaCloud\Tea\Model;

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
        'availableDiskType'    => 'AvailableDiskType',
        'availableRegion'      => 'AvailableRegion',
        'availableSpec'        => 'AvailableSpec',
        'availableStorageType' => 'AvailableStorageType',
        'commodityCode'        => 'CommodityCode',
        'orderType'            => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDiskType) {
            $res['AvailableDiskType'] = [];
            if (null !== $this->availableDiskType && \is_array($this->availableDiskType)) {
                $n = 0;
                foreach ($this->availableDiskType as $item) {
                    $res['AvailableDiskType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->availableRegion) {
            $res['AvailableRegion'] = [];
            if (null !== $this->availableRegion && \is_array($this->availableRegion)) {
                $n = 0;
                foreach ($this->availableRegion as $item) {
                    $res['AvailableRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->availableSpec) {
            $res['AvailableSpec'] = [];
            if (null !== $this->availableSpec && \is_array($this->availableSpec)) {
                $n = 0;
                foreach ($this->availableSpec as $item) {
                    $res['AvailableSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->availableStorageType) {
            $res['AvailableStorageType'] = null !== $this->availableStorageType ? $this->availableStorageType->toMap() : null;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleControlAvailableResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDiskType'])) {
            if (!empty($map['AvailableDiskType'])) {
                $model->availableDiskType = [];
                $n                        = 0;
                foreach ($map['AvailableDiskType'] as $item) {
                    $model->availableDiskType[$n++] = null !== $item ? availableDiskType::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AvailableRegion'])) {
            if (!empty($map['AvailableRegion'])) {
                $model->availableRegion = [];
                $n                      = 0;
                foreach ($map['AvailableRegion'] as $item) {
                    $model->availableRegion[$n++] = null !== $item ? availableRegion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AvailableSpec'])) {
            if (!empty($map['AvailableSpec'])) {
                $model->availableSpec = [];
                $n                    = 0;
                foreach ($map['AvailableSpec'] as $item) {
                    $model->availableSpec[$n++] = null !== $item ? availableSpec::fromMap($item) : $item;
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
