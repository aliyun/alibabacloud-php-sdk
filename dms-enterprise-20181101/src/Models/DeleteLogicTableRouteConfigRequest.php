<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogicTableRouteConfigRequest extends Model
{
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
