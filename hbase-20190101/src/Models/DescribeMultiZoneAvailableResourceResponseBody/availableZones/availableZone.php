<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\masterResources;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;
use AlibabaCloud\Tea\Model;

class availableZone extends Model
{
    /**
     * @var masterResources
     */
    public $masterResources;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var supportedEngines
     */
    public $supportedEngines;

    /**
     * @example cn-hangzhou-bef-aliyun
     *
     * @var string
     */
    public $zoneCombination;
    protected $_name = [
        'masterResources'  => 'MasterResources',
        'regionId'         => 'RegionId',
        'supportedEngines' => 'SupportedEngines',
        'zoneCombination'  => 'ZoneCombination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterResources) {
            $res['MasterResources'] = null !== $this->masterResources ? $this->masterResources->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = null !== $this->supportedEngines ? $this->supportedEngines->toMap() : null;
        }
        if (null !== $this->zoneCombination) {
            $res['ZoneCombination'] = $this->zoneCombination;
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
        if (isset($map['MasterResources'])) {
            $model->masterResources = masterResources::fromMap($map['MasterResources']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SupportedEngines'])) {
            $model->supportedEngines = supportedEngines::fromMap($map['SupportedEngines']);
        }
        if (isset($map['ZoneCombination'])) {
            $model->zoneCombination = $map['ZoneCombination'];
        }

        return $model;
    }
}
