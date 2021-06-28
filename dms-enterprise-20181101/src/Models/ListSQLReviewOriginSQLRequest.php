<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail;
use AlibabaCloud\Tea\Model;

class ListSQLReviewOriginSQLRequest extends Model
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var orderActionDetail
     */
    public $orderActionDetail;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderId'           => 'OrderId',
        'orderActionDetail' => 'OrderActionDetail',
        'tid'               => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderActionDetail) {
            $res['OrderActionDetail'] = null !== $this->orderActionDetail ? $this->orderActionDetail->toMap() : null;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSQLReviewOriginSQLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderActionDetail'])) {
            $model->orderActionDetail = orderActionDetail::fromMap($map['OrderActionDetail']);
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
