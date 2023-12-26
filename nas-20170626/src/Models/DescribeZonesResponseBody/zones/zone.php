<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\capacity;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\instanceTypes;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\performance;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description This parameter is reserved. You can ignore this parameter.
     *
     * @var capacity
     */
    public $capacity;

    /**
     * @description The details about file system types.
     *
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @description This parameter is reserved. You can ignore this parameter.
     *
     * @var performance
     */
    public $performance;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacity'      => 'Capacity',
        'instanceTypes' => 'InstanceTypes',
        'performance'   => 'Performance',
        'zoneId'        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = null !== $this->capacity ? $this->capacity->toMap() : null;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = capacity::fromMap($map['Capacity']);
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['Performance'])) {
            $model->performance = performance::fromMap($map['Performance']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
