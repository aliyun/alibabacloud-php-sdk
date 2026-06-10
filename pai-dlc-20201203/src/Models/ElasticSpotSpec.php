<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ElasticSpotSpec extends Model
{
    /**
     * @var string
     */
    public $instanceType;

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
        'instanceType' => 'InstanceType',
        'spotDiscountLimit' => 'SpotDiscountLimit',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

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
