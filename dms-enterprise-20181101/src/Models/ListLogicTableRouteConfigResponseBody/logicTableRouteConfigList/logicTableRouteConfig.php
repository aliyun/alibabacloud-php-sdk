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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody\logicTableRouteConfigList;

use AlibabaCloud\Tea\Model;

class logicTableRouteConfig extends Model
{
    /**
     * @description The routing algorithm expression.
     *
     * @example #id#%16\\t
     *
     * @var string
     */
    public $routeExpr;

    /**
     * @description The unique key of the routing algorithm.
     *
     * @example 1
     *
     * @var string
     */
    public $routeKey;

    /**
     * @description The ID of the logical table.
     *
     * @example 4****
     *
     * @var int
     */
    public $tableId;
    protected $_name = [
        'routeExpr' => 'RouteExpr',
        'routeKey' => 'RouteKey',
        'tableId' => 'TableId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicTableRouteConfig
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

        return $model;
    }
}
