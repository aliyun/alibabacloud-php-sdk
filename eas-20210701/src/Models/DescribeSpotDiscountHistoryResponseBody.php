<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeSpotDiscountHistoryResponseBody\spotDiscounts;
use AlibabaCloud\Tea\Model;

class DescribeSpotDiscountHistoryResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The discount for the preemptible instance.
     *
     * @var spotDiscounts[]
     */
    public $spotDiscounts;
    protected $_name = [
        'requestId'     => 'RequestId',
        'spotDiscounts' => 'SpotDiscounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spotDiscounts) {
            $res['SpotDiscounts'] = [];
            if (null !== $this->spotDiscounts && \is_array($this->spotDiscounts)) {
                $n = 0;
                foreach ($this->spotDiscounts as $item) {
                    $res['SpotDiscounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpotDiscountHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpotDiscounts'])) {
            if (!empty($map['SpotDiscounts'])) {
                $model->spotDiscounts = [];
                $n                    = 0;
                foreach ($map['SpotDiscounts'] as $item) {
                    $model->spotDiscounts[$n++] = null !== $item ? spotDiscounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
