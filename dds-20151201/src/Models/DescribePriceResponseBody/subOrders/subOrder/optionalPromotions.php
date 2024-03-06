<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion;
use AlibabaCloud\Tea\Model;

class optionalPromotions extends Model
{
    /**
     * @var optionalPromotion[]
     */
    public $optionalPromotion;
    protected $_name = [
        'optionalPromotion' => 'OptionalPromotion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionalPromotion) {
            $res['OptionalPromotion'] = [];
            if (null !== $this->optionalPromotion && \is_array($this->optionalPromotion)) {
                $n = 0;
                foreach ($this->optionalPromotion as $item) {
                    $res['OptionalPromotion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionalPromotions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OptionalPromotion'])) {
            if (!empty($map['OptionalPromotion'])) {
                $model->optionalPromotion = [];
                $n                        = 0;
                foreach ($map['OptionalPromotion'] as $item) {
                    $model->optionalPromotion[$n++] = null !== $item ? optionalPromotion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
