<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail;

class ListSQLReviewOriginSQLRequest extends Model
{
    /**
     * @var orderActionDetail
     */
    public $orderActionDetail;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderActionDetail' => 'OrderActionDetail',
        'orderId' => 'OrderId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (null !== $this->orderActionDetail) {
            $this->orderActionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderActionDetail) {
            $res['OrderActionDetail'] = null !== $this->orderActionDetail ? $this->orderActionDetail->toArray($noStream) : $this->orderActionDetail;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['OrderActionDetail'])) {
            $model->orderActionDetail = orderActionDetail::fromMap($map['OrderActionDetail']);
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
