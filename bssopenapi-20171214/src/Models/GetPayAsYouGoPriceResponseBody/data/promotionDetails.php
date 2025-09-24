<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponseBody\data\promotionDetails\promotionDetail;

class promotionDetails extends Model
{
    /**
     * @var promotionDetail[]
     */
    public $promotionDetail;
    protected $_name = [
        'promotionDetail' => 'PromotionDetail',
    ];

    public function validate()
    {
        if (\is_array($this->promotionDetail)) {
            Model::validateArray($this->promotionDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promotionDetail) {
            if (\is_array($this->promotionDetail)) {
                $res['PromotionDetail'] = [];
                $n1 = 0;
                foreach ($this->promotionDetail as $item1) {
                    $res['PromotionDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PromotionDetail'])) {
            if (!empty($map['PromotionDetail'])) {
                $model->promotionDetail = [];
                $n1 = 0;
                foreach ($map['PromotionDetail'] as $item1) {
                    $model->promotionDetail[$n1] = promotionDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
