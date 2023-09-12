<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class OrderListResult extends Model
{
    /**
     * @var OrderResult[]
     */
    public $orderList;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 24
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'orderList' => 'orderList',
        'requestId' => 'requestId',
        'total'     => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderList) {
            $res['orderList'] = [];
            if (null !== $this->orderList && \is_array($this->orderList)) {
                $n = 0;
                foreach ($this->orderList as $item) {
                    $res['orderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderListResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orderList'])) {
            if (!empty($map['orderList'])) {
                $model->orderList = [];
                $n                = 0;
                foreach ($map['orderList'] as $item) {
                    $model->orderList[$n++] = null !== $item ? OrderResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
