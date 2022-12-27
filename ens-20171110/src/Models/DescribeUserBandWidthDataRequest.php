<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBandWidthDataRequest extends Model
{
    /**
     * @example 2019-05-21T12:22:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example cn-taiyuan-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example i-5inkeimcipxk26yqtzm4q****
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
     * @example 300
     *
     * @var string
     */
    public $period;

    /**
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
