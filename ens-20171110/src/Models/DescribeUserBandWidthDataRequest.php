<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBandWidthDataRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     *   Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *   If the value of the seconds place is not 00, the start time is automatically set to the next minute.
     *
     * @example 2019-05-21T12:22:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the node. You can specify only one node ID. By default, all nodes are queried.
     *
     * @example cn-taiyuan-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance for which you want to query the data. You can specify only one instance ID. By default, all instances are queried.
     *
     * @example i-5inkeimcipxk26yqtzm4q****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The Internet service provider (ISP). Valid values:
     *
     *   cmcc: China Mobile
     *   telecom: China Telecom
     *   unicom: China Unicom
     *   multiCarrier: multi-line ISP
     *
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @description The precision of the monitoring data that you want to obtain. Valid values: 300, 1200, 3600, and 14400. Default value: 300. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $period;

    /**
     * @description The beginning of the time range to query.
     *
     *   Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *   If the value of the seconds place is not 00, the start time is automatically set to the next minute.
     *
     * @example 2019-05-21T10:22:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'     => 'EndTime',
        'ensRegionId' => 'EnsRegionId',
        'instanceId'  => 'InstanceId',
        'isp'         => 'Isp',
        'period'      => 'Period',
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
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBandWidthDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
