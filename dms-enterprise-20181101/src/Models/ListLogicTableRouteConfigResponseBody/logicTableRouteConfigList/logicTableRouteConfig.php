<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody\logicTableRouteConfigList;

use AlibabaCloud\Tea\Model;

class logicTableRouteConfig extends Model
{
    /**
     * @var string
     */
    public $routeExpr;

    /**
     * @var string
     */
    public $routeKey;

    /**
     * @var int
     */
    public $tableId;
    protected $_name = [
        'routeExpr' => 'RouteExpr',
        'routeKey'  => 'RouteKey',
        'tableId'   => 'TableId',
    ];

    public function validate()
    {
    }

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
