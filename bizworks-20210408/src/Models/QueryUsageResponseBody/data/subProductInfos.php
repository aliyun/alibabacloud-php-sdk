<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data;

use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos\subProduct;
use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos\subProductCommoditySpecsForGuideToBuy;
use AlibabaCloud\Tea\Model;

class subProductInfos extends Model
{
    /**
     * @var subProduct
     */
    public $subProduct;

    /**
     * @var subProductCommoditySpecsForGuideToBuy[]
     */
    public $subProductCommoditySpecsForGuideToBuy;
    protected $_name = [
        'subProduct'                            => 'subProduct',
        'subProductCommoditySpecsForGuideToBuy' => 'subProductCommoditySpecsForGuideToBuy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subProduct) {
            $res['subProduct'] = null !== $this->subProduct ? $this->subProduct->toMap() : null;
        }
        if (null !== $this->subProductCommoditySpecsForGuideToBuy) {
            $res['subProductCommoditySpecsForGuideToBuy'] = [];
            if (null !== $this->subProductCommoditySpecsForGuideToBuy && \is_array($this->subProductCommoditySpecsForGuideToBuy)) {
                $n = 0;
                foreach ($this->subProductCommoditySpecsForGuideToBuy as $item) {
                    $res['subProductCommoditySpecsForGuideToBuy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subProductInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subProduct'])) {
            $model->subProduct = subProduct::fromMap($map['subProduct']);
        }
        if (isset($map['subProductCommoditySpecsForGuideToBuy'])) {
            if (!empty($map['subProductCommoditySpecsForGuideToBuy'])) {
                $model->subProductCommoditySpecsForGuideToBuy = [];
                $n                                            = 0;
                foreach ($map['subProductCommoditySpecsForGuideToBuy'] as $item) {
                    $model->subProductCommoditySpecsForGuideToBuy[$n++] = null !== $item ? subProductCommoditySpecsForGuideToBuy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
