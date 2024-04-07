<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions\ddsRegion\zones;
use AlibabaCloud\Tea\Model;

class ddsRegion extends Model
{
    /**
     * @description The public endpoint of the region.
     *
     * For example, if the value of the RegionId parameter in the response is cn-hangzhou, the following value is returned for the EndPoint parameter:
     *
     *   mongodb.aliyuncs.com
     *
     * @example mongodb.aliyuncs.com
     *
     * @var string
     */
    public $endPoint;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region.
     *
     * The value of the LocalName parameter is in the language that is specified by the **AcceptLanguage** parameter. For example, if the value of the RegionId parameter in the response is **cn-hangzhou**, the following values are returned for the LocalName parameter:
     *
     *   If the value of the **AcceptLanguage** parameter is **zh**, the value **华东1（杭州）** is returned for the LocalName parameter.
     *   If the value of the **AcceptLanguage** parameter is **en**, the value **China (Hangzhou)** is returned for the LocalName parameter.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The zones.
     *
     * @var zones
     */
    public $zones;
    protected $_name = [
        'endPoint'   => 'EndPoint',
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
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
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
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
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
