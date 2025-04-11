<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

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
        if (\is_array($this->routeMap)) {
            Model::validateArray($this->routeMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeMap) {
            if (\is_array($this->routeMap)) {
                $res['RouteMap'] = [];
                $n1 = 0;
                foreach ($this->routeMap as $item1) {
                    $res['RouteMap'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RouteMap'])) {
            if (!empty($map['RouteMap'])) {
                $model->routeMap = [];
                $n1 = 0;
                foreach ($map['RouteMap'] as $item1) {
                    $model->routeMap[$n1++] = routeMap::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
