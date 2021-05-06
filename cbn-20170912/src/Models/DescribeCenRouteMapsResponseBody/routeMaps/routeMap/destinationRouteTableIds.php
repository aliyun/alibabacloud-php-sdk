<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class destinationRouteTableIds extends Model
{
    /**
     * @var string[]
     */
    public $destinationRouteTableId;
    protected $_name = [
        'destinationRouteTableId' => 'DestinationRouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationRouteTableId) {
            $res['DestinationRouteTableId'] = $this->destinationRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationRouteTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRouteTableId'])) {
            if (!empty($map['DestinationRouteTableId'])) {
                $model->destinationRouteTableId = $map['DestinationRouteTableId'];
            }
        }

        return $model;
    }
}
