<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayAvailableZonesResponseBody;

use AlibabaCloud\Tea\Model;

class availableZoneIdList extends Model
{
    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'zoneId'   => 'ZoneId',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return availableZoneIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
