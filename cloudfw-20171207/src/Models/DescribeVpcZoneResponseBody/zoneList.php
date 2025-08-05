<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcZoneResponseBody;

use AlibabaCloud\Tea\Model;

class zoneList extends Model
{
    /**
     * @description The name of the zone.
     *
     * @example Hangzhou Zone B
     *
     * @var string
     */
    public $localName;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone type. Default value: AvailabilityZone. This value indicates Alibaba Cloud zones.
     *
     * @example AvailabilityZone
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'localName' => 'LocalName',
        'zoneId' => 'ZoneId',
        'zoneType' => 'ZoneType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
