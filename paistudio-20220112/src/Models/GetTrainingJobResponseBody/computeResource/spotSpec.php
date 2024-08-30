<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\computeResource;

use AlibabaCloud\Tea\Model;

class spotSpec extends Model
{
    /**
     * @example 0.9
     *
     * @var float
     */
    public $spotDiscountLimit;

    /**
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'spotDiscountLimit' => 'SpotDiscountLimit',
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
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpotDiscountLimit'])) {
            $model->spotDiscountLimit = $map['SpotDiscountLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
