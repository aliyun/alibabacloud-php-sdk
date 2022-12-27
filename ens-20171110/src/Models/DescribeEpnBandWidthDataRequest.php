<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEpnBandWidthDataRequest extends Model
{
    /**
     * @example epn-20200825134537VyK81T
     *
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @example 2021-12-16T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example i-5sg1owx0g4ojy66ab2tez77r2
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @example SpeedUp
     *
     * @var string
     */
    public $networkingModel;

    /**
     * @example 300
     *
     * @var string
     */
    public $period;

    /**
     * @example 2021-12-15T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2017-11-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'EPNInstanceId'   => 'EPNInstanceId',
        'endTime'         => 'EndTime',
        'ensRegionId'     => 'EnsRegionId',
        'instanceId'      => 'InstanceId',
        'isp'             => 'Isp',
        'networkingModel' => 'NetworkingModel',
        'period'          => 'Period',
        'startTime'       => 'StartTime',
        'version'         => 'Version',
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
