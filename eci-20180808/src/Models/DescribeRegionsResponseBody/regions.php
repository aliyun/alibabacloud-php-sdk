<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description The recommended zones. Recommended zones are zones that have relatively sufficient resources in the current region.
     *
     * @var string[]
     */
    public $recommendZones;

    /**
     * @description The endpoint for the region.
     *
     * @example eci.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The queried zones.
     *
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'recommendZones' => 'RecommendZones',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
        'zones'          => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendZones) {
            $res['RecommendZones'] = $this->recommendZones;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendZones'])) {
            if (!empty($map['RecommendZones'])) {
                $model->recommendZones = $map['RecommendZones'];
            }
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}
