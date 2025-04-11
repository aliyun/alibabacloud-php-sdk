<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->destinationRouteTableId)) {
            Model::validateArray($this->destinationRouteTableId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRouteTableId) {
            if (\is_array($this->destinationRouteTableId)) {
                $res['DestinationRouteTableId'] = [];
                $n1 = 0;
                foreach ($this->destinationRouteTableId as $item1) {
                    $res['DestinationRouteTableId'][$n1++] = $item1;
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
        if (isset($map['DestinationRouteTableId'])) {
            if (!empty($map['DestinationRouteTableId'])) {
                $model->destinationRouteTableId = [];
                $n1 = 0;
                foreach ($map['DestinationRouteTableId'] as $item1) {
                    $model->destinationRouteTableId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
