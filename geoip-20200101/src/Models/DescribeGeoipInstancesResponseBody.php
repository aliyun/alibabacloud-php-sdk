<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models;

use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstancesResponseBody\geoipInstances;
use AlibabaCloud\Tea\Model;

class DescribeGeoipInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var geoipInstances
     */
    public $geoipInstances;
    protected $_name = [
        'requestId'      => 'RequestId',
        'geoipInstances' => 'GeoipInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->geoipInstances) {
            $res['GeoipInstances'] = null !== $this->geoipInstances ? $this->geoipInstances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGeoipInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GeoipInstances'])) {
            $model->geoipInstances = geoipInstances::fromMap($map['GeoipInstances']);
        }

        return $model;
    }
}
