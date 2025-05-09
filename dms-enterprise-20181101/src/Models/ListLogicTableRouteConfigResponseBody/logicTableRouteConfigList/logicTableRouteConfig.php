<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody\logicTableRouteConfigList;

use AlibabaCloud\Dara\Model;

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
        'routeKey' => 'RouteKey',
        'tableId' => 'TableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
