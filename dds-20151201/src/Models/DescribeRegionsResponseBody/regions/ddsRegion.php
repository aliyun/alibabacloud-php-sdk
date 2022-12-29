<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions\ddsRegion\zones;
use AlibabaCloud\Tea\Model;

class ddsRegion extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region.
     *
     * The return value of the LocalName parameter is in the language that is specified by the **AcceptLanguage** parameter.
     * @var string
     */
    public $regionName;

    /**
     * @description Details about the zones.
     *
     * @var zones
     */
    public $zones;
    protected $_name = [
        'regionId'   => 'RegionId',
        'regionName' => 'RegionName',
        'zones'      => 'Zones',
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddsRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
