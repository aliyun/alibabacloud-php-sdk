<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->routeType)) {
            Model::validateArray($this->routeType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeType) {
            if (\is_array($this->routeType)) {
                $res['RouteType'] = [];
                $n1 = 0;
                foreach ($this->routeType as $item1) {
                    $res['RouteType'][$n1++] = $item1;
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
        if (isset($map['RouteType'])) {
            if (!empty($map['RouteType'])) {
                $model->routeType = [];
                $n1 = 0;
                foreach ($map['RouteType'] as $item1) {
                    $model->routeType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
