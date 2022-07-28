<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody\model\skuModels;

use AlibabaCloud\Tea\Model;

class lmItemSkuStepPriceModels extends Model
{
    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var int
     */
    public $priceCent;
    protected $_name = [
        'max'       => 'Max',
        'min'       => 'Min',
        'priceCent' => 'PriceCent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemSkuStepPriceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }

        return $model;
    }
}
