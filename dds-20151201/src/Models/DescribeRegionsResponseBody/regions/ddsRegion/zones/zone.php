<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions\ddsRegion\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description Indicates whether a virtual private cloud (VPC) is supported. Valid values:
     *
     *   **true**: VPC is supported.
     *   **false**: VPC is not supported.
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

    /**
     * @description The name of the zone.
     *
     * The return value of the LocalName parameter is in the language that is specified by the **AcceptLanguage** parameter.
     * @example Hangzhou Zone H
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'vpcEnabled' => 'VpcEnabled',
        'zoneId'     => 'ZoneId',
        'zoneName'   => 'ZoneName',
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
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
