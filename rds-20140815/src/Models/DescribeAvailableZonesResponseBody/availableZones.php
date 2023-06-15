<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines;
use AlibabaCloud\Tea\Model;

class availableZones extends Model
{
    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description An array that consists of the database engines available in the zone.
     *
     * @var supportedEngines[]
     */
    public $supportedEngines;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'regionId'         => 'RegionId',
        'supportedEngines' => 'SupportedEngines',
        'zoneId'           => 'ZoneId',
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
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = [];
            if (null !== $this->supportedEngines && \is_array($this->supportedEngines)) {
                $n = 0;
                foreach ($this->supportedEngines as $item) {
                    $res['SupportedEngines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SupportedEngines'])) {
            if (!empty($map['SupportedEngines'])) {
                $model->supportedEngines = [];
                $n                       = 0;
                foreach ($map['SupportedEngines'] as $item) {
                    $model->supportedEngines[$n++] = null !== $item ? supportedEngines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
