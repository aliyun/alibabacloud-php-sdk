<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListSQLReviewOriginSQLShrinkRequest extends Model
{
    /**
     * @description The parameters that are used to filter SQL statements involved in the ticket.
     *
     * @var string
     */
    public $orderActionDetailShrink;

    /**
     * @description The ID of the ticket for the SQL review. You can call the [CreateSQLReviewOrder](https://help.aliyun.com/document_detail/257777.html) operation to query the ID of the ticket.
     *
     * This parameter is required.
     * @example 123321
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/465818.html) operation to query the ID of the tenant.
     *
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderActionDetailShrink' => 'OrderActionDetail',
        'orderId'                 => 'OrderId',
        'tid'                     => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderActionDetailShrink) {
            $res['OrderActionDetail'] = $this->orderActionDetailShrink;
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
     * @return ListSQLReviewOriginSQLShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderActionDetail'])) {
            $model->orderActionDetailShrink = $map['OrderActionDetail'];
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
