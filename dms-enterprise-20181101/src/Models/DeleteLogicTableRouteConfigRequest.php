<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogicTableRouteConfigRequest extends Model
{
    /**
     * @description The unique key of the routing algorithm. You can call the [ListLogicTableRouteConfig](https://www.alibabacloud.com/help/en/data-management-service/latest/listlogictablerouteconfig) operation to query the unique key.
     *
     * This parameter is required.
     * @example id-hash-mod15
     *
     * @var string
     */
    public $routeKey;

    /**
     * @description The ID of the logical table. You can call the [ListLogicTables](https://www.alibabacloud.com/help/en/data-management-service/latest/listlogictables) operation to query the ID of the logical table.
     *
     * This parameter is required.
     * @example 1****
     *
     * @var int
     */
    public $tableId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://www.alibabacloud.com/help/en/data-management-service/latest/getuseractivetenant) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'routeKey' => 'RouteKey',
        'tableId'  => 'TableId',
        'tid'      => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeKey) {
            $res['RouteKey'] = $this->routeKey;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLogicTableRouteConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteKey'])) {
            $model->routeKey = $map['RouteKey'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
