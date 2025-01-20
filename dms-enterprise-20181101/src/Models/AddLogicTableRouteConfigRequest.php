<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class AddLogicTableRouteConfigRequest extends Model
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
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'routeExpr' => 'RouteExpr',
        'routeKey'  => 'RouteKey',
        'tableId'   => 'TableId',
        'tid'       => 'Tid',
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

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
