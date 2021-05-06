<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class routeTypes extends Model
{
    /**
     * @var string[]
     */
    public $routeType;
    protected $_name = [
        'routeType' => 'RouteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteType'])) {
            if (!empty($map['RouteType'])) {
                $model->routeType = $map['RouteType'];
            }
        }

        return $model;
    }
}
