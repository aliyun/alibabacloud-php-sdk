<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
     * @description The ID of the SQL review ticket. You can call the [CreateSQLReviewOrder](https://help.aliyun.com/document_detail/257777.html) operation to query the ticket ID.
     *
     * This parameter is required.
     *
     * @example 123321
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The tenant ID. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the tenant ID.
     *
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderActionDetail' => 'OrderActionDetail',
        'orderId' => 'OrderId',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

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
