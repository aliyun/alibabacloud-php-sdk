<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest\businessInfo\promotionOptions;

use AlibabaCloud\Dara\Model;

class promotionFilter extends Model
{
    /**
     * @var bool
     */
    public $useCoupon;
    protected $_name = [
        'useCoupon' => 'UseCoupon',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->useCoupon) {
            $res['UseCoupon'] = $this->useCoupon;
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
        if (isset($map['UseCoupon'])) {
            $model->useCoupon = $map['UseCoupon'];
        }

        return $model;
    }
}
