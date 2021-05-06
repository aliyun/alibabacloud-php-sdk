<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;
use AlibabaCloud\Tea\Model;

class routeMaps extends Model
{
    /**
     * @var routeMap[]
     */
    public $routeMap;
    protected $_name = [
        'routeMap' => 'RouteMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeMap) {
            $res['RouteMap'] = [];
            if (null !== $this->routeMap && \is_array($this->routeMap)) {
                $n = 0;
                foreach ($this->routeMap as $item) {
                    $res['RouteMap'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeMaps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteMap'])) {
            if (!empty($map['RouteMap'])) {
                $model->routeMap = [];
                $n               = 0;
                foreach ($map['RouteMap'] as $item) {
                    $model->routeMap[$n++] = null !== $item ? routeMap::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
