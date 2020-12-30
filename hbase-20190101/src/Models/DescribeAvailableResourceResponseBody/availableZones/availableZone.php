<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;
use AlibabaCloud\Tea\Model;

class availableZone extends Model
{
    /**
     * @var supportedEngines
     */
    public $supportedEngines;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var masterResources
     */
    public $masterResources;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'supportedEngines' => 'SupportedEngines',
        'zoneId'           => 'ZoneId',
        'masterResources'  => 'MasterResources',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = null !== $this->supportedEngines ? $this->supportedEngines->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->masterResources) {
            $res['MasterResources'] = null !== $this->masterResources ? $this->masterResources->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEngines'])) {
            $model->supportedEngines = supportedEngines::fromMap($map['SupportedEngines']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['MasterResources'])) {
            $model->masterResources = masterResources::fromMap($map['MasterResources']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
