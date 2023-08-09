<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailabilityZonesResponseBody;

use AlibabaCloud\Tea\Model;

class availableZones extends Model
{
    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~61933~~) operation to query the latest available regions.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-beijing-f
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The name of the zone.
     *
     * The return value of the ZoneName parameter is in the language that is specified by the **AcceptLanguage** parameter. For example, if the value of the ZoneId parameter in the response is **cn-hangzhou-h**, the following values are returned for the ZoneName parameter:
     *
     *   If the value of the **AcceptLanguage** parameter is **zh**, ** H** is returned for the ZoneName parameter.
     *   If the value of the **AcceptLanguage** parameter is **en**, **Hangzhou Zone H** is returned for the ZoneName parameter.
     *
     * @example Hangzhou Zone H
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'regionId' => 'RegionId',
        'zoneId'   => 'ZoneId',
        'zoneName' => 'ZoneName',
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
