<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetDataImportSQLRequest extends Model
{
    /**
     * @description The ticket ID. You can call the [ListOrders](https://help.aliyun.com/document_detail/144643.html) operation to query the ticket ID.
     *
     * This parameter is required.
     * @example 14****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The SQL ID. You can call the ListDataImportSQLPreCheckDetail operation to query the SQL ID.
     *
     * This parameter is required.
     * @example 15****
     *
     * @var int
     */
    public $sqlId;

    /**
     * @description The tenant ID. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderId' => 'OrderId',
        'sqlId'   => 'SqlId',
        'tid'     => 'Tid',
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
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataImportSQLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
