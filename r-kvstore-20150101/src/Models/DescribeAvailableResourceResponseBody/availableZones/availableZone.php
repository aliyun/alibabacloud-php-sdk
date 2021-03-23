<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;
use AlibabaCloud\Tea\Model;

class availableZone extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;

    /**
     * @var supportedEngines
     */
    public $supportedEngines;
    protected $_name = [
        'regionId'         => 'RegionId',
        'zoneId'           => 'ZoneId',
        'zoneName'         => 'ZoneName',
        'supportedEngines' => 'SupportedEngines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = null !== $this->supportedEngines ? $this->supportedEngines->toMap() : null;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }
        if (isset($map['SupportedEngines'])) {
            $model->supportedEngines = supportedEngines::fromMap($map['SupportedEngines']);
        }

        return $model;
    }
}
