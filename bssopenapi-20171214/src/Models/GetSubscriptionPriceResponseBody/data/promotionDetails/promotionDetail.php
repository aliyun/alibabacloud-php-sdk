<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data\promotionDetails;

use AlibabaCloud\Tea\Model;

class promotionDetail extends Model
{
    /**
     * @var string
     */
    public $promotionName;

    /**
     * @var string
     */
    public $promotionDesc;

    /**
     * @var int
     */
    public $promotionId;
    protected $_name = [
        'promotionName' => 'PromotionName',
        'promotionDesc' => 'PromotionDesc',
        'promotionId'   => 'PromotionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }
        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        return $model;
    }
}
