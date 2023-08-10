<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail;
use AlibabaCloud\Tea\Model;

class ListSQLReviewOriginSQLRequest extends Model
{
    /**
     * @description The parameters that are used to filter SQL statements involved in the ticket.
     *
     * @var orderActionDetail
     */
    public $orderActionDetail;

    /**
     * @description The ID of the ticket for the SQL review. You can call the [CreateSQLReviewOrder](~~257777~~) operation to query the ID of the ticket.
     *
     * @example 123321
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~465818~~) operation to query the ID of the tenant.
     *
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderActionDetail' => 'OrderActionDetail',
        'orderId'           => 'OrderId',
        'tid'               => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderActionDetail) {
            $res['OrderActionDetail'] = null !== $this->orderActionDetail ? $this->orderActionDetail->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
