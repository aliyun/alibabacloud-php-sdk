<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request;

use AlibabaCloud\Tea\Model;

class promotionInfo extends Model
{
    /**
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @var string
     */
    public $promotionOptionCode;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'promotionOptionNo'   => 'PromotionOptionNo',
        'promotionOptionCode' => 'PromotionOptionCode',
        'productCode'         => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }
        if (null !== $this->promotionOptionCode) {
            $res['PromotionOptionCode'] = $this->promotionOptionCode;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }
        if (isset($map['PromotionOptionCode'])) {
            $model->promotionOptionCode = $map['PromotionOptionCode'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
