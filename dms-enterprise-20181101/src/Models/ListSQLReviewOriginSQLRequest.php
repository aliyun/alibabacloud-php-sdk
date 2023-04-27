<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail;
use AlibabaCloud\Tea\Model;

class ListSQLReviewOriginSQLRequest extends Model
{
    /**
     * @description The ID of the file.
     *
     * @var orderActionDetail
     */
    public $orderActionDetail;

    /**
     * @description The information about the parsed SQL statements.
     *
     * @example 123321
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The optimization suggestion for the SQL statement. Valid values:
     *
     *   **MUST_IMPROVE**: The SQL statement must be improved.
     *   **POTENTIAL_ISSUE**: The SQL statement contains potential issues.
     *   **SUGGEST_IMPROVE**: We recommend that you improve the SQL statement.
     *   **USE_DMS_TOOLKIT**: We recommend that you change schemas without locking tables.
     *   **USE_DMS_DML_UNLOCK**: We recommend that you change data without locking tables.
     *   **TABLE_INDEX_SUGGEST**: We recommend that you use SQL statements that use indexes.
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
