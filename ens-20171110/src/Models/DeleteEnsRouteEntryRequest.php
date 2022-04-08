<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnsRouteEntryRequest extends Model
{
    /**
     * @description 要删除的路由条目ID。
     *
     * @var string
     */
    public $routeEntryId;
    protected $_name = [
        'routeEntryId' => 'RouteEntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnsRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }

        return $model;
    }
}
