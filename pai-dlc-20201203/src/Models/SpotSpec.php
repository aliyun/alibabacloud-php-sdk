<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class SpotSpec extends Model
{
    /**
     * @var float
     */
    public $spotDiscountLimit;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'spotDiscountLimit' => 'SpotDiscountLimit',
        'spotPriceLimit'    => 'SpotPriceLimit',
        'spotStrategy'      => 'SpotStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spotDiscountLimit) {
            $res['SpotDiscountLimit'] = $this->spotDiscountLimit;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SpotSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpotDiscountLimit'])) {
            $model->spotDiscountLimit = $map['SpotDiscountLimit'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
