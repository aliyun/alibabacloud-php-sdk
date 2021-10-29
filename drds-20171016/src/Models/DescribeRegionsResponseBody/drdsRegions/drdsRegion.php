<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion\instanceSeriesList;
use AlibabaCloud\Tea\Model;

class drdsRegion extends Model
{
    /**
     * @var instanceSeriesList
     */
    public $instanceSeriesList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'instanceSeriesList' => 'InstanceSeriesList',
        'regionId'           => 'RegionId',
        'regionName'         => 'RegionName',
        'zoneId'             => 'ZoneId',
        'zoneName'           => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSeriesList) {
            $res['InstanceSeriesList'] = null !== $this->instanceSeriesList ? $this->instanceSeriesList->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drdsRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSeriesList'])) {
            $model->instanceSeriesList = instanceSeriesList::fromMap($map['InstanceSeriesList']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
