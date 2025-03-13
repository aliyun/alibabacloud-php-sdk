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

use AlibabaCloud\Tea\Model;

class AddLogicTableRouteConfigRequest extends Model
{
    /**
     * @description The routing algorithm expression. For more information about how to configure a routing algorithm expression, see [Configure a routing algorithm](https://www.alibabacloud.com/help/en/data-management-service/latest/configure-a-routing-algorithm).
     *
     * This parameter is required.
     *
     * @example #id#%16
     *
     * @var string
     */
    public $routeExpr;

    /**
     * @description The unique key of the routing algorithm.
     *
     * > - You can create a custom unique key for the routing algorithm. No requirements are imposed on custom unique keys.
     * > - The unique key of the routing algorithm in the same logical table must be unique.
     *
     * This parameter is required.
     *
     * @example id-hash-mod16
     *
     * @var string
     */
    public $routeKey;

    /**
     * @description The ID of the logical table. You can call the [ListLogicTables](https://www.alibabacloud.com/help/en/data-management-service/latest/listlogictables) operation to query the ID of the logical table.
     *
     * This parameter is required.
     *
     * @example 4****
     *
     * @var int
     */
    public $tableId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://www.alibabacloud.com/help/en/data-management-service/latest/getuseractivetenant) operation to query the tenant ID.
     *
     * @example 4***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'routeExpr' => 'RouteExpr',
        'routeKey' => 'RouteKey',
        'tableId' => 'TableId',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeExpr) {
            $res['RouteExpr'] = $this->routeExpr;
        }
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
     * @return AddLogicTableRouteConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteExpr'])) {
            $model->routeExpr = $map['RouteExpr'];
        }
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
