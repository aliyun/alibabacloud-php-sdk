<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\capacity;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\performance;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var performance
     */
    public $performance;

    /**
     * @var capacity
     */
    public $capacity;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'performance' => 'Performance',
        'capacity'    => 'Capacity',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toMap() : null;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = null !== $this->capacity ? $this->capacity->toMap() : null;
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
        if (isset($map['Performance'])) {
            $model->performance = performance::fromMap($map['Performance']);
        }
        if (isset($map['Capacity'])) {
            $model->capacity = capacity::fromMap($map['Capacity']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
