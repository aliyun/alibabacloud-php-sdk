<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request;

use AlibabaCloud\Tea\Model;

class promotionInfo extends Model
{
    /**
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @example youhui_quan
     *
     * @var string
     */
    public $promotionOptionCode;

    /**
     * @example 11080***0000
     *
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'productCode'         => 'ProductCode',
        'promotionOptionCode' => 'PromotionOptionCode',
        'promotionOptionNo'   => 'PromotionOptionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->promotionOptionCode) {
            $res['PromotionOptionCode'] = $this->promotionOptionCode;
        }
        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['PromotionOptionCode'])) {
            $model->promotionOptionCode = $map['PromotionOptionCode'];
        }
        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        return $model;
    }
}
