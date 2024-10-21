<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class destinationRegionIds extends Model
{
    /**
     * @var string[]
     */
    public $destinationRegionId;
    protected $_name = [
        'destinationRegionId' => 'DestinationRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationRegionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRegionId'])) {
            if (!empty($map['DestinationRegionId'])) {
                $model->destinationRegionId = $map['DestinationRegionId'];
            }
        }

        return $model;
    }
}
