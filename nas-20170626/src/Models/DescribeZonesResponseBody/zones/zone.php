<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\capacity;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\instanceTypes;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\performance;

class zone extends Model
{
    /**
     * @var capacity
     */
    public $capacity;

    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var performance
     */
    public $performance;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacity' => 'Capacity',
        'instanceTypes' => 'InstanceTypes',
        'performance' => 'Performance',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->capacity) {
            $this->capacity->validate();
        }
        if (null !== $this->instanceTypes) {
            $this->instanceTypes->validate();
        }
        if (null !== $this->performance) {
            $this->performance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = null !== $this->capacity ? $this->capacity->toArray($noStream) : $this->capacity;
        }

        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toArray($noStream) : $this->instanceTypes;
        }

        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toArray($noStream) : $this->performance;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
