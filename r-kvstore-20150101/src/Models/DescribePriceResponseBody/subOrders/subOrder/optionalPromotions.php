<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion;

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
        if (\is_array($this->optionalPromotion)) {
            Model::validateArray($this->optionalPromotion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optionalPromotion) {
            if (\is_array($this->optionalPromotion)) {
                $res['OptionalPromotion'] = [];
                $n1 = 0;
                foreach ($this->optionalPromotion as $item1) {
                    $res['OptionalPromotion'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['OptionalPromotion'])) {
            if (!empty($map['OptionalPromotion'])) {
                $model->optionalPromotion = [];
                $n1 = 0;
                foreach ($map['OptionalPromotion'] as $item1) {
                    $model->optionalPromotion[$n1++] = optionalPromotion::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
