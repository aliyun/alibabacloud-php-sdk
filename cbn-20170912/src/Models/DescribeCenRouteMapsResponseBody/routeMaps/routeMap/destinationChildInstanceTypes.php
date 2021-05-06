<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class destinationChildInstanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $destinationChildInstanceType;
    protected $_name = [
        'destinationChildInstanceType' => 'DestinationChildInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationChildInstanceType) {
            $res['DestinationChildInstanceType'] = $this->destinationChildInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationChildInstanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationChildInstanceType'])) {
            if (!empty($map['DestinationChildInstanceType'])) {
                $model->destinationChildInstanceType = $map['DestinationChildInstanceType'];
            }
        }

        return $model;
    }
}
