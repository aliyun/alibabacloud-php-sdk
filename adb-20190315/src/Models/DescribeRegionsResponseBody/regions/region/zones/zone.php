<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsResponseBody\regions\region\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description The name of the region.
     *
     * @example Hangzhou Zone H
     *
     * @var string
     */
    public $localName;

    /**
     * @description Indicates whether Virtual Private Cloud (VPC) is available in the zone that you want to select. Valid values:
     *
     *   **true**: VPC is available.
     *   **false**: VPC is unavailable.
     *
     * @example true
     *
     * @var bool
     */
    public $vpcEnabled;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'localName'  => 'LocalName',
        'vpcEnabled' => 'VpcEnabled',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->vpcEnabled) {
            $res['VpcEnabled'] = $this->vpcEnabled;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['VpcEnabled'])) {
            $model->vpcEnabled = $map['VpcEnabled'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
