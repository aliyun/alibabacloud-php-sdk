<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct;

use AlibabaCloud\Tea\Model;

class skuCodes extends Model
{
    /**
     * @var string[]
     */
    public $skuCode;
    protected $_name = [
        'skuCode' => 'SkuCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkuCode'])) {
            if (!empty($map['SkuCode'])) {
                $model->skuCode = $map['SkuCode'];
            }
        }

        return $model;
    }
}
