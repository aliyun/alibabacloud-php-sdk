<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponseBody\data\drdsDbPrice;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponseBody\data\drdsInstance;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponseBody\data\rdsInstanceSpecsAndPrices;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var drdsDbPrice
     */
    public $drdsDbPrice;

    /**
     * @var drdsInstance
     */
    public $drdsInstance;

    /**
     * @var rdsInstanceSpecsAndPrices[]
     */
    public $rdsInstanceSpecsAndPrices;
    protected $_name = [
        'drdsDbPrice'               => 'DrdsDbPrice',
        'drdsInstance'              => 'DrdsInstance',
        'rdsInstanceSpecsAndPrices' => 'RdsInstanceSpecsAndPrices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsDbPrice) {
            $res['DrdsDbPrice'] = null !== $this->drdsDbPrice ? $this->drdsDbPrice->toMap() : null;
        }
        if (null !== $this->drdsInstance) {
            $res['DrdsInstance'] = null !== $this->drdsInstance ? $this->drdsInstance->toMap() : null;
        }
        if (null !== $this->rdsInstanceSpecsAndPrices) {
            $res['RdsInstanceSpecsAndPrices'] = [];
            if (null !== $this->rdsInstanceSpecsAndPrices && \is_array($this->rdsInstanceSpecsAndPrices)) {
                $n = 0;
                foreach ($this->rdsInstanceSpecsAndPrices as $item) {
                    $res['RdsInstanceSpecsAndPrices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DrdsDbPrice'])) {
            $model->drdsDbPrice = drdsDbPrice::fromMap($map['DrdsDbPrice']);
        }
        if (isset($map['DrdsInstance'])) {
            $model->drdsInstance = drdsInstance::fromMap($map['DrdsInstance']);
        }
        if (isset($map['RdsInstanceSpecsAndPrices'])) {
            if (!empty($map['RdsInstanceSpecsAndPrices'])) {
                $model->rdsInstanceSpecsAndPrices = [];
                $n                                = 0;
                foreach ($map['RdsInstanceSpecsAndPrices'] as $item) {
                    $model->rdsInstanceSpecsAndPrices[$n++] = null !== $item ? rdsInstanceSpecsAndPrices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
