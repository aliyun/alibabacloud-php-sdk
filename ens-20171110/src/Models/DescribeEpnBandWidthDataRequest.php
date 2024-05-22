<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEpnBandWidthDataRequest extends Model
{
    /**
     * @description The ID of the EPN instance.
     *
     * @example epn-20200825134537VyK81T
     *
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @description The end of the time range to query.
     *
     *   Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *   If the value of the seconds place is not 00, the start time is automatically set to the next minute.
     *
     * This parameter is required.
     * @example 2021-12-16T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5sg1owx0g4ojy66ab2tez77r2
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
     * @description The networking mode. Valid values:
     *
     *   **SpeedUp**: intelligent acceleration network (Internet)
     *   **Connection**: internal network
     *   **SpeedUpAndConnection**: intelligent acceleration network and internal network
     *
     * @example SpeedUp
     *
     * @var string
     */
    public $networkingModel;

    /**
     * @description The precision of the monitoring data that you want to obtain. Valid values: 300, 1200, 3600, and 14400. Default value: 300. Unit: seconds.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example 2021-12-15T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'EPNInstanceId'   => 'EPNInstanceId',
        'endTime'         => 'EndTime',
        'ensRegionId'     => 'EnsRegionId',
        'instanceId'      => 'InstanceId',
        'isp'             => 'Isp',
        'networkingModel' => 'NetworkingModel',
        'period'          => 'Period',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }
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
        if (null !== $this->networkingModel) {
            $res['NetworkingModel'] = $this->networkingModel;
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
     * @return DescribeEpnBandWidthDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }
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
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
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
