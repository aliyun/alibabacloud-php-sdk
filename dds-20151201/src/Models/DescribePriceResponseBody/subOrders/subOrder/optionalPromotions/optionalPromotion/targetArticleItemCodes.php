<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion;

use AlibabaCloud\Tea\Model;

class targetArticleItemCodes extends Model
{
    /**
     * @var string[]
     */
    public $targetArticleItemCode;
    protected $_name = [
        'targetArticleItemCode' => 'targetArticleItemCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetArticleItemCode) {
            $res['targetArticleItemCode'] = $this->targetArticleItemCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetArticleItemCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['targetArticleItemCode'])) {
            if (!empty($map['targetArticleItemCode'])) {
                $model->targetArticleItemCode = $map['targetArticleItemCode'];
            }
        }

        return $model;
    }
}
