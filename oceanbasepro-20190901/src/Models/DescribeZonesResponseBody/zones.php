<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeZonesResponseBody;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The deployment mode.
     *
     * @example 1-1-1
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The series of the OceanBase cluster. Valid values:
     * NORMAL: the high availability version. This is the default value.
     * @example NORMAL
     *
     * @var string
     */
    public $series;

    /**
     * @description The list of zone IDs.
     * For a cluster with multiple zones, separate the zone names with commas (,).
     * @example cn-hangzhou-i,cn-hangzhou-j,cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The name of the zone.
     *
     * @example H/I/J
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'deployType' => 'DeployType',
        'series'     => 'Series',
        'zoneId'     => 'ZoneId',
        'zoneName'   => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
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
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
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
