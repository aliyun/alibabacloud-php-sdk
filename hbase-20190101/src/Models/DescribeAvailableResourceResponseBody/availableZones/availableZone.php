<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;

class availableZone extends Model
{
    /**
     * @var masterResources
     */
    public $masterResources;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var supportedEngines
     */
    public $supportedEngines;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'masterResources' => 'MasterResources',
        'regionId' => 'RegionId',
        'supportedEngines' => 'SupportedEngines',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->masterResources) {
            $this->masterResources->validate();
        }
        if (null !== $this->supportedEngines) {
            $this->supportedEngines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterResources) {
            $res['MasterResources'] = null !== $this->masterResources ? $this->masterResources->toArray($noStream) : $this->masterResources;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = null !== $this->supportedEngines ? $this->supportedEngines->toArray($noStream) : $this->supportedEngines;
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
        if (isset($map['MasterResources'])) {
            $model->masterResources = masterResources::fromMap($map['MasterResources']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SupportedEngines'])) {
            $model->supportedEngines = supportedEngines::fromMap($map['SupportedEngines']);
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
