<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class destinationInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $destinationInstanceId;
    protected $_name = [
        'destinationInstanceId' => 'DestinationInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationInstanceId) {
            $res['DestinationInstanceId'] = $this->destinationInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationInstanceId'])) {
            if (!empty($map['DestinationInstanceId'])) {
                $model->destinationInstanceId = $map['DestinationInstanceId'];
            }
        }

        return $model;
    }
}
