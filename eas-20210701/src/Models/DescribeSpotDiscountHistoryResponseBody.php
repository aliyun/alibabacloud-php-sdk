<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeSpotDiscountHistoryResponseBody\spotDiscounts;

class DescribeSpotDiscountHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spotDiscounts[]
     */
    public $spotDiscounts;
    protected $_name = [
        'requestId' => 'RequestId',
        'spotDiscounts' => 'SpotDiscounts',
    ];

    public function validate()
    {
        if (\is_array($this->spotDiscounts)) {
            Model::validateArray($this->spotDiscounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->spotDiscounts) {
            if (\is_array($this->spotDiscounts)) {
                $res['SpotDiscounts'] = [];
                $n1 = 0;
                foreach ($this->spotDiscounts as $item1) {
                    $res['SpotDiscounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpotDiscounts'])) {
            if (!empty($map['SpotDiscounts'])) {
                $model->spotDiscounts = [];
                $n1 = 0;
                foreach ($map['SpotDiscounts'] as $item1) {
                    $model->spotDiscounts[$n1++] = spotDiscounts::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
