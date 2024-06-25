<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListIpOrHostsRequest extends Model
{
    /**
     * @description The timestamp of the end time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * @example 1583723776974
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the application. If you do not set this parameter, the IP addresses of all applications in the specified region are returned.
     *
     * @example service1
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The timestamp of the start time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * @example 1583683200000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'     => 'EndTime',
        'regionId'    => 'RegionId',
        'serviceName' => 'ServiceName',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpOrHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
