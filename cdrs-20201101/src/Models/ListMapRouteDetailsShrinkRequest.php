<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListMapRouteDetailsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $routeListShrink;
    protected $_name = [
        'routeListShrink' => 'RouteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeListShrink) {
            $res['RouteList'] = $this->routeListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMapRouteDetailsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteList'])) {
            $model->routeListShrink = $map['RouteList'];
        }

        return $model;
    }
}
