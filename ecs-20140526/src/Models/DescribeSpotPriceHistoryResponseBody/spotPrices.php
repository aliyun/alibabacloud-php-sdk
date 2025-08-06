<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponseBody\spotPrices\spotPriceType;

class spotPrices extends Model
{
    /**
     * @var spotPriceType[]
     */
    public $spotPriceType;
    protected $_name = [
        'spotPriceType' => 'SpotPriceType',
    ];

    public function validate()
    {
        if (\is_array($this->spotPriceType)) {
            Model::validateArray($this->spotPriceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->spotPriceType) {
            if (\is_array($this->spotPriceType)) {
                $res['SpotPriceType'] = [];
                $n1 = 0;
                foreach ($this->spotPriceType as $item1) {
                    $res['SpotPriceType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SpotPriceType'])) {
            if (!empty($map['SpotPriceType'])) {
                $model->spotPriceType = [];
                $n1 = 0;
                foreach ($map['SpotPriceType'] as $item1) {
                    $model->spotPriceType[$n1] = spotPriceType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
