<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListMapRouteDetailsRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $routeList;
    protected $_name = [
        'routeList' => 'RouteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeList) {
            $res['RouteList'] = $this->routeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMapRouteDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteList'])) {
            $model->routeList = $map['RouteList'];
        }

        return $model;
    }
}
