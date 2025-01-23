<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\computeResource;

use AlibabaCloud\Dara\Model;

class spotSpec extends Model
{
    /**
     * @var float
     */
    public $spotDiscountLimit;
    /**
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'spotDiscountLimit' => 'SpotDiscountLimit',
        'spotStrategy'      => 'SpotStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
