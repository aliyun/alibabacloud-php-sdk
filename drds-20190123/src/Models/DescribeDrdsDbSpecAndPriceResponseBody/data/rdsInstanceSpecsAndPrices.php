<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponseBody\data;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponseBody\data\rdsInstanceSpecsAndPrices\rdsPrice;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponseBody\data\rdsInstanceSpecsAndPrices\storageInstance;
use AlibabaCloud\Tea\Model;

class rdsInstanceSpecsAndPrices extends Model
{
    /**
     * @var rdsPrice
     */
    public $rdsPrice;

    /**
     * @var storageInstance
     */
    public $storageInstance;
    protected $_name = [
        'rdsPrice'        => 'RdsPrice',
        'storageInstance' => 'StorageInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsPrice) {
            $res['RdsPrice'] = null !== $this->rdsPrice ? $this->rdsPrice->toMap() : null;
        }
        if (null !== $this->storageInstance) {
            $res['StorageInstance'] = null !== $this->storageInstance ? $this->storageInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstanceSpecsAndPrices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsPrice'])) {
            $model->rdsPrice = rdsPrice::fromMap($map['RdsPrice']);
        }
        if (isset($map['StorageInstance'])) {
            $model->storageInstance = storageInstance::fromMap($map['StorageInstance']);
        }

        return $model;
    }
}
