<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines;
use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var availableCombines
     */
    public $availableCombines;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'localName'         => 'LocalName',
        'regionEndpoint'    => 'RegionEndpoint',
        'availableCombines' => 'AvailableCombines',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->availableCombines) {
            $res['AvailableCombines'] = null !== $this->availableCombines ? $this->availableCombines->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['AvailableCombines'])) {
            $model->availableCombines = availableCombines::fromMap($map['AvailableCombines']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
