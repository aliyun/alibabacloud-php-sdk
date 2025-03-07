<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsResponseBody\regions\region\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description Indicates whether Virtual Private Cloud (VPC) is available.
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
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vpcEnabled' => 'VpcEnabled',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['VpcEnabled'])) {
            $model->vpcEnabled = $map['VpcEnabled'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
