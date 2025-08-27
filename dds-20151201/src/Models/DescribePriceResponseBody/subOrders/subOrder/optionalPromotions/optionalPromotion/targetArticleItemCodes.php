<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->targetArticleItemCode)) {
            Model::validateArray($this->targetArticleItemCode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetArticleItemCode) {
            if (\is_array($this->targetArticleItemCode)) {
                $res['targetArticleItemCode'] = [];
                $n1 = 0;
                foreach ($this->targetArticleItemCode as $item1) {
                    $res['targetArticleItemCode'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['targetArticleItemCode'])) {
            if (!empty($map['targetArticleItemCode'])) {
                $model->targetArticleItemCode = [];
                $n1 = 0;
                foreach ($map['targetArticleItemCode'] as $item1) {
                    $model->targetArticleItemCode[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
